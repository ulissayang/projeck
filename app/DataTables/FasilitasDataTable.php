<?php

namespace App\DataTables;

use App\Models\Fasilitas;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class FasilitasDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable($query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('checkbox', function ($data) {
                return '<input type="checkbox" class="bulk-checkbox" value="' . $data->slug . '">';
            })
            ->addColumn('action', function ($data) {
                return sprintf(
                    '<a href="%s" class="btn btn-sm btn-success" title="Lihat">
                        <i class="bi bi-eye"></i>
                    </a>

                    <button class="btn btn-sm btn-warning" onclick="confirmEdit(this)" data-slug="%s" title="Edit">
                    <i class="bi bi-pencil-square"></i>
                    </button>

                    <button class="btn btn-sm btn-danger" onclick="confirmDelete(this)" data-slug="%s" title="Hapus">
                    <i class="bi bi-trash"></i>
                </button>
                    <form id="delete-form-%d" method="POST" action="%s" style="display: none;">
                        %s
                        %s
                    </form>',
                    route('fasilitas.show', $data->slug),
                    $data->slug, // slug attribute for edit button
                    $data->slug, // slug attribute for delete button
                    $data->id,
                    route('fasilitas.edit', $data->slug),
                    // route('fasilitas.destroy', $data->slug),
                    method_field('DELETE'),
                    csrf_field()
                );
            })
            ->rawColumns(['checkbox', 'action'])
            ->addIndexColumn()
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Fasilitas $model)
    {
        return $model->newQuery()->where('user_id', auth()->user()->id)->latest();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('data-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->selectStyleSingle()
            ->parameters([
                'responsive' => true,
                'lengthMenu' => [
                    [5, 10, 25, 50, 100],
                    [5, 10, 25, 50, 100],
                ],
                'dom' => "<'row pb-2 mb-0'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" .
                    "<'row pt-0 mt-0'<'col-md-8'Q>tr>>" .
                    "<'row '<'col-12'tr>>" .
                    "<'row '<'col-md-5 pt-2'i><'col-md-7 pt-3 d-flex justify-content-end'p>>",
                'buttons' => ['selectAll', 'selectNone'],
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('checkbox')
                ->title('<input type="checkbox" id="select-all">')
                ->orderable(false)
                ->searchable(false)
                ->width(10)
                ->addClass('text-center')
                ->render(function ($data) {
                    // Jika $data adalah objek fasilitas dan memiliki properti 'id'
                    if ($data instanceof Fasilitas && property_exists($data, 'id')) {
                        return '<input type="checkbox" class="bulk-checkbox" value="' . $data->id . '">';
                    }
                    // Jika $data adalah array dan memiliki kunci 'id'
                    elseif (is_array($data) && array_key_exists('id', $data)) {
                        return '<input type="checkbox" class="bulk-checkbox" value="' . $data['id'] . '">';
                    }
                    // Jika tidak ada 'id' dalam data, atau jika tipe datanya tidak dikenali
                    else {
                        return '';
                    }
                }),
            Column::make('nama')->title('Nama'),
            Column::make('deskripsi')->title('Deskripsi'),
            Column::make('keterangan')->title('Keterangan'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(120)

        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Fasilitas_' . date('YmdHis');
    }
}

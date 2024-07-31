<x-app-layout>
    @slot('title', 'Tahun Ajaran')
    <main id="main" class="main">

        <x-back.breadcrumb :title="$title" :breadcrumbs="$breadcrumbs" />

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="container mt-4">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <a href="{{ route('thnakademik.create') }}" class="btn btn-sm btn-primary mb-3">Tambah Data</a>

                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tahun Ajaran</th>
                                            <th>Semester</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($thnakademik as $data)
                                        <tr>
                                            <td>{{ $data->tahun }}</td>
                                            <td>{{ $data->semester }}</td>
                                            <td>{{ $data->status ? 'Aktif' : 'Tidak Aktif' }}</td>
                                            <td>
                                                <a href="{{ route('thnakademik.edit', $data->id) }}"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
</x-app-layout>
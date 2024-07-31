<x-app-layout>
    @slot('title', 'Tahun Ajaran')
    <main id="main" class="main">

        <x-back.breadcrumb :title="$title" :breadcrumbs="$breadcrumbs" />

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="container mt-4">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('thnakademik.update', $thnakademik->id) }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3">
                                        <label for="tahun" class="form-label">Tahun Ajaran</label>
                                        <input type="text" class="form-control" id="tahun" name="tahun"
                                            value="{{ $thnakademik->tahun }}" readonly>
                                    </div>

                                    <div class="mb-3">
                                        <label for="semester" class="form-label">Semester</label>
                                        <select class="form-control" id="semester" name="semester">
                                            <option value="Ganjil" {{ $thnakademik->semester == 'Ganjil' ? 'selected' :
                                                '' }}>Ganjil</option>
                                            <option value="Genap" {{ $thnakademik->semester == 'Genap' ? 'selected' :
                                                '' }}>Genap</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="status"
                                            name="status" {{ $thnakademik->status ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status">Tahun Ajaran Aktif</label>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


    </main>
</x-app-layout>
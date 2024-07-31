<x-app-layout>
    @slot('title', 'Tahun Ajaran')
    <main id="main" class="main">

        {{-- <x-back.breadcrumb :title="$title" :breadcrumbs="$breadcrumbs" /> --}}

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container mt-4">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('thnakedemik.store') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="tahun" class="form-label">Tahun Ajaran</label>
                                        <input type="text" class="form-control" id="tahun" name="tahun" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</x-app-layout>
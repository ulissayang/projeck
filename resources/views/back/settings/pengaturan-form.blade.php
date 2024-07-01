<section class="section contact">
  <div class="row gy-4">
    <div class="col-xl-12">
      <div class="card p-4">
        <div class="row">
          {{-- form data pengaturan --}}
          <form action="{{ route('pengaturan.update', $pengaturan->id) }}" method="POST"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">

              <div class="col-md-6">
                <div class="mb-3 row align-items-center">
                  <div class="col-4">
                    <label for="nama_web" class="form-label">Nama Website</label>
                  </div>
                  <div class="col-8">
                    <input type="text" class="form-control" id="nama_web" name="nama_web"
                      value="{{ $pengaturan->nama_web }}">
                  </div>
                </div>
                <div class="mb-3 row align-items-center">
                  <div class="col-4">
                    <label for="email" class="form-label">Email</label>
                  </div>
                  <div class="col-8">
                    <input type="email" class="form-control" id="email" name="email"
                      value="{{ $pengaturan->email }}">
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 row align-items-center">
                  <div class="col-4">
                    <label for="telp" class="form-label">No Telp / Hp</label>
                  </div>
                  <div class="col-8">
                    <input type="text" class="form-control" id="telp" name="telp" value="{{ $pengaturan->telp }}">
                  </div>
                </div>

                <div class="mb-3 row align-items-center">
                  <div class="col-4">
                    <label for="alamat" class="form-label">Alamat</label>
                  </div>
                  <div class="col-8">
                    <input type="text" class="form-control" id="alamat" name="alamat"
                      value="{{ $pengaturan->alamat }}">
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 row align-items-center">
                  <div class="col-4">
                    <label for="jam_kerja" class="form-label">Jam Kerja</label>
                  </div>
                  <div class="col-8">
                    <input type="text" class="form-control" id="jam_kerja" name="jam_kerja"
                      value="{{ $pengaturan->jam_kerja }}">
                  </div>
                </div>

                <div class="mb-3 row align-items-center">
                  <div class="col-4">
                    <label for="ig" class="form-label">Instagram</label>
                  </div>
                  <div class="col-8">
                    <input type="text" class="form-control" id="ig" name="ig" value="{{ $pengaturan->ig }}">
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 row align-items-center">
                  <div class="col-4">
                    <label for="youtube" class="form-label">YouTube</label>
                  </div>
                  <div class="col-8">
                    <input type="text" class="form-control" id="youtube" name="youtube"
                      value="{{ $pengaturan->youtube }}">
                  </div>
                </div>

                <div class="mb-3 row align-items-center">
                  <div class="col-4">
                    <label for="facebook" class="form-label">Facebook</label>
                  </div>
                  <div class="col-8">
                    <input type="text" class="form-control" id="facebook" name="facebook"
                      value="{{ $pengaturan->facebook }}">
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 row align-items-center">
                  <div class="col-4">
                    <label for="twitter" class="form-label">Twitter</label>
                  </div>
                  <div class="col-8">
                    <input type="text" class="form-control" id="twitter" name="twitter"
                      value="{{ $pengaturan->twitter }}">
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <img id="logo-preview" class="img-preview img-fluid col-sm-2 py-2 d-block"
                  src="{{ $pengaturan->logo ? asset('storage/' . $pengaturan->logo) : '' }}"
                  style="{{ $pengaturan->logo ? '' : 'display: none;' }}">
                <input type="file" class="form-control" name="logo" id="logo" accept="image/*"
                  onchange="previewImage('logo')">
              </div>

              <div class="mb-3">
                <label for="banner" class="form-label">Banner</label>
                <img id="banner-preview" class="img-preview img-fluid col-sm-2 py-2 d-block"
                  src="{{ $pengaturan->banner ? asset('storage/' . $pengaturan->banner) : '' }}"
                  style="{{ $pengaturan->banner ? '' : 'display: none;' }}">
                <input type="file" class="form-control" name="banner" id="banner" accept="image/*"
                  onchange="previewImage('banner')">
              </div>

              <div class="mb-3">
                <label for="background" class="form-label">Background</label>
                <img id="background-preview" class="img-preview img-fluid col-sm-2 py-2 d-block"
                  src="{{ $pengaturan->background ? asset('storage/' . $pengaturan->background) : '' }}"
                  style="{{ $pengaturan->background ? '' : 'display: none;' }}">
                <input type="file" class="form-control" name="background" id="background" accept="image/*"
                  onchange="previewImage('background')">
              </div>

              <div class="mb-3">
                <label for="favicon" class="form-label">Favicon</label>
                <img id="favicon-preview" class="img-preview img-fluid col-sm-2 py-2 d-block"
                  src="{{ $pengaturan->favicon ? asset('storage/' . $pengaturan->favicon) : '' }}"
                  style="{{ $pengaturan->favicon ? '' : 'display: none;' }}">
                <input type="file" class="form-control" name="favicon" id="favicon" accept="image/*"
                  onchange="previewImage('favicon')">
              </div>
            </div>

            <x-button class="btn-sm" type="submit" title="">
              <i class="bi bi-patch-plus"></i> Ubah
            </x-button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
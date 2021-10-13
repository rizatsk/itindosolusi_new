<div class="col-md-9">
    <form wire:submit.prevent="updateProfileInformation">
      
      <div class="row mt-4 g-3 align-items-center">
        <div class="col-md-3">
          <label for="" class="label-profile">Usename</label>
        </div>
        <div class="col-md-7">
          <span>Bambang</span>
        </div>
      </div>

      <div class="row mt-4 g-3 align-items-center">
        <div class="col-md-3">
          <label for="name" class="label-profile">Name</label>
        </div>
        <div class="col-md-7">
          <input type="text" id="name" name="name" class="form-control">
        </div>
      </div>

      <div class="row mt-4 g-3 align-items-center">
        <div class="col-md-3">
          <label for="" class="label-profile">Email</label>
        </div>
        <div class="col-md-7">
          <span>bambang@pamungkas.co</span>
        </div>
      </div>

      <div class="row mt-4 g-3 align-items-center">
        <div class="col-md-3">
          <label for="" class="label-profile">No.Handphone</label>
        </div>
        <div class="col-md-7">
          <span>087782987067</span>
        </div>
      </div>

      <div class="row mt-4 g-3 align-items-center">
        <div class="col-md-3">
          <label for="" class="label-profile">Jenis Kelamin</label>
        </div>
        <div class="col-md-7">
          <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="jenisKelamin" id="Laki-laki" value="Laki-laki">
            <label class="form-check-label" for="Laki-laki">
              Laki-laki
            </label>
          </div>
          <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="jenisKelamin" id="Perempuan" value="Perempuan"> 
            <label class="form-check-label" for="Perempuan">
              Perempuan
            </label>
          </div>
        </div>
      </div>

      <div class="row mt-4 g-3 align-items-center">
        <div class="col-md-3">
          <label for="tanggalLahir" class="label-profile">Tanggal Lahir</label>
        </div>
        <div class="col-md-7">
          <input type="date" name="tanggalLahir" id="tanggalLahir" class="form-control">
        </div>
      </div>

      <div class="row mt-4 g-3 align-items-center">
        <div class="col-md-3">
        </div>
        <div class="col-md-7">
          <button type="submit" class="btn btn-primary" on="saved">Simpan</button>
        </div>
      </div>
  </div>

  <div class="col-md-3">
    <div class="image-profile mt-5 d-flex justify-content-center">
      <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="mb-4">
    </div>
    <div class="d-flex justify-content-center">
      <button type="button" class="btn btn-light mb-4">Pilih gambar</button>
    </div>
    <div class="d-flex justify-content-center p-image-user">
      <p>Ukuran gambar: maks. 1 MB
        Format gambar: .JPEG, .PNG</p>
      </div>
    </div>
  </div>

  </form>
</div>
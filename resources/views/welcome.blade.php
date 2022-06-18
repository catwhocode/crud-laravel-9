@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Formulir') }}</div>

          <div class="card-body">
            @if (session('success'))
              <div class="alert alert-success" role="alert">
                {{ session('success') }}
              </div>
            @endif

            <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
              @csrf

              <div class="form-group mb-3">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap"
                  id="nama_lengkap" aria-describedby="nama_lengkap" value="{{ old("nama_lengkap") }}">
                @error('nama_lengkap')
                  <small id="nama_lengkap" class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="form-group mb-3">
                <label for="gender">Gender</label>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" id="gender" value="Laki-laki" @checked(old('gender') == 'Laki-laki') />
                    Laki-laki
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" id="gender" value="Perempuan" @checked(old('gender') == 'Perempuan') />
                    Perempuan
                  </label>
                </div>
                @error('gender')
                  <small id="gender" class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="form-group mb-3">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir"
                  id="tempat_lahir" aria-describedby="tempat_lahir" value="{{ old("tempat_lahir") }}">
                @error('tempat_lahir')
                  <small id="tempat_lahir" class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="form-group mb-3">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                  name="tanggal_lahir" id="tanggal_lahir" aria-describedby="tanggal_lahir" value="{{ old("tanggal_lahir") }}">
                @error('tanggal_lahir')
                  <small id="tanggal_lahir" class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="form-group mb-3">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar"
                  id="gambar" aria-describedby="gambar">
                @error('gambar')
                  <small id="gambar" class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="form-group mb-3">
                <label for="sertifikat">Sertifikat</label>
                <input type="file" class="form-control @error('sertifikat') is-invalid @enderror" name="sertifikat"
                  id="sertifikat" aria-describedby="sertifikat">
                @error('sertifikat')
                  <small id="sertifikat" class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="form-group mb-3">
                <label for="cv">CV</label>
                <input type="file" class="form-control @error('cv') is-invalid @enderror" name="cv" id="cv"
                  aria-describedby="cv">
                @error('cv')
                  <small id="cv" class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary">Save</button>
              <button type="reset" class="btn btn-secondary">Reset</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

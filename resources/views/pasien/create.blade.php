@extends('layout.main')

@section('title', 'Form Tambah Data Pasien') 

@section('container')

    <div class="container">
     <div class="row">
      <div class="col-8">
      <h1 class="mt-3">Form Tambah Data Pasien</h1>
        <form method="post" action="/pasien">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Pasien</label>
            <input type="text" class="form-control @error('nama') is-invalid 
            @enderror" id="nama" placeholder="Masukan Nama Pasien" name="nama" value="{{ old('nama') }}">
            @error('nama')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <div class="form-group">
            <label for="no_ktp">No. KTP</label>
            <input type="text" class="form-control @error('no_ktp') is-invalid 
            @enderror" id="no_ktp" placeholder="Masukan No KTP" name="no_ktp" value="{{ old('no_ktp') }}">
            @error('no_ktp')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <div class="form-group">
            <label for="harga">Jenis Kelamin</label>
            <input type="text" class="form-control @error('jenis_kelamin') is-invalid 
            @enderror" id="jenis_kelamin" placeholder="Masukan Jenis Kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
            @error('jenis_kelamin')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <div class="form-group">
            <label for="ttl">Tempat / Tgl Lahir</label>
            <input type="text" class="form-control @error('ttl') is-invalid 
            @enderror" id="ttl" placeholder="Masukan Tempat / Tgl Lahir" name="ttl" value="{{ old('ttl') }}">
            @error('ttl')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <div class="form-group">
            <label for="usia">Usia</label>
            <input type="text" class="form-control @error('usia') is-invalid 
            @enderror" id="usia" placeholder="Masukan Usia" name="usia" value="{{ old('usia') }}">
            @error('usia')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid 
            @enderror" id="alamat" placeholder="Masukan Alamat" name="alamat" value="{{ old('alamat') }}">
            @error('alamat')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>

      </div>
     </div>
    </div>

@endsection
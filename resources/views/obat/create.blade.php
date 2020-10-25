@extends('layout.main')

@section('title', 'Form Tambah Data Obat') 

@section('container')

    <div class="container">
     <div class="row">
      <div class="col-8">
      <h1 class="mt-3">Form Tambah Data Obat</h1>
        <form method="post" action="/obat">
        @csrf
        <div class="form-group">
            <label for="nama_obat">Nama Obat</label>
            <input type="text" class="form-control @error('nama_obat') is-invalid 
            @enderror" id="nama_obat" placeholder="Masukan Nama Obat" name="nama_obat" value="{{ old('nama_obat') }}">
            @error('nama_obat')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <div class="form-group">
            <label for="penyakit">Mengobati Penyakit</label>
            <input type="text" class="form-control @error('penyakit') is-invalid 
            @enderror" id="penyakit" placeholder="Masukan Untuk Mengobati Penyakit" name="penyakit" value="{{ old('penyakit') }}">
            @error('penyakit')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <div class="form-group">
            <label for="harga">Harga ( Contoh : 100000 )</label>
            <input type="text" class="form-control @error('hari_praktek') is-invalid 
            @enderror" id="harga" placeholder="Masukan Harga" name="harga" value="{{ old('harga') }}">
            @error('harga')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>

      </div>
     </div>
    </div>

@endsection
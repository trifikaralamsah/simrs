@extends('layout.main')

@section('title', 'Form Tambah Data Dokter') 

@section('container')

    <div class="container">
     <div class="row">
      <div class="col-8">
      <h1 class="mt-3">Form Tambah Data Dokter</h1>
        <form method="post" action="/dokter">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Dokter</label>
            <input type="text" class="form-control @error('nama') is-invalid 
            @enderror" id="nama" placeholder="Masukan Nama Dokter" name="nama" value="{{ old('nama') }}">
            @error('nama')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <div class="form-group">
            <label for="poli">Poli</label>
            <input type="text" class="form-control @error('poli') is-invalid 
            @enderror" id="poli" placeholder="Masukan Poli" name="poli" value="{{ old('poli') }}">
            @error('poli')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <div class="form-group">
            <label for="hari_praktek">Hari Praktek ( Contoh : Senin - Jumat )</label>
            <input type="text" class="form-control @error('hari_praktek') is-invalid 
            @enderror" id="hari_praktek" placeholder="Masukan Hari Praktek" name="hari_praktek" value="{{ old('hari_praktek') }}">
            @error('hari_praktek')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <div class="form-group">
            <label for="jam_praktek">Jam Praktek ( Contoh : 08.00 - 13.00 )</label>
            <input type="text" class="form-control @error('jam_praktek') is-invalid 
            @enderror" id="jam_praktek" placeholder="Masukan Jam Praktek" name="jam_praktek" value="{{ old('jam_praktek') }}">
            @error('jam_praktek')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>

      </div>
     </div>
    </div>

@endsection
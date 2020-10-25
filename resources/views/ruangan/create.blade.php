@extends('layout.main')

@section('title', 'Form Tambah Data Ruangan') 

@section('container')

    <div class="container">
     <div class="row">
      <div class="col-8">
      <h1 class="mt-3">Form Tambah Data Ruangan</h1>
        <form method="post" action="/ruangan">
        @csrf
        <div class="form-group">
            <label for="nama_ruangan">Nama Ruangan</label>
            <input type="text" class="form-control @error('nama_ruangan') is-invalid 
            @enderror" id="nama_ruangan" placeholder="Masukan Nama Ruangan" name="nama_ruangan" value="{{ old('nama_ruangan') }}">
            @error('nama_ruangan')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <div class="form-group">
            <label for="no_ruangan">No Ruangan ( contoh v.112 )</label>
            <input type="text" class="form-control @error('no_ruangan') is-invalid 
            @enderror" id="no_ruangan" placeholder="Masukan No Ruangan" name="no_ruangan" value="{{ old('no_ruangan') }}">
            @error('no_ruangan')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <div class="form-group">
            <label for="kelas">Kelas ( A / B / C )</label>
            <input type="text" class="form-control @error('kelas') is-invalid 
            @enderror" id="kelas" placeholder="Masukan Kelas" name="kelas" value="{{ old('kelas') }}">
            @error('kelas')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <div class="form-group">
            <label for="biaya">Biaya Per Hari ( Contoh : 100000 )</label>
            <input type="text" class="form-control @error('biaya') is-invalid 
            @enderror" id="biaya" placeholder="Masukan Biaya Kamar Inap" name="biaya" value="{{ old('biaya') }}">
            @error('biaya')<div  class="invalid-feedback">{{ $message }}
      </div> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>

      </div>
     </div>
    </div>

@endsection
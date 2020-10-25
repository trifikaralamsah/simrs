@extends('layout.main')

@section('title', 'Jadwal Dokter') 

@section('container')

    <div class="container">
     <div class="row">
      <div class="col-12">
      <h1 class="mt-3">Jadwal Dokter</h1>

      <div class="container">
        <div class="row">
          <a href="dokter/create" class="btn btn-primary my-3">Tambah Data Dokter</a>
          
          <nav class="navbar navbar-light bg-light">
            <form class="form-inline" action="#" method="get">
              <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="{{ old('cari') }}">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> <h6>&nbsp; &nbsp; Cari Berdasarkan Jurusan </h6>
            </form>
          </nav>

          <a href="#" class="btn btn-primary my-3 ml-5" target="_blank">CETAK TO PDF</a>
          
        </div>
      </div>

      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif

      <div class="table-responsive-sm">
        <table class="table table-bordered">
          <thead class=thead-dark>
          <tr class="text-center">
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Poli</th>
          <th scope="col">Hari Praktek</th>
          <th scope="col">Jam Praktek</th>
          <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach( $tbl_dokter as $d )
          <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $d->nama }}</td>
          <td>{{ $d->poli }}</td>
          <td>{{ $d->hari_praktek }}</td>
          <td>{{ $d->jam_praktek }}</td>
          <td>
              <a href="#" id="edit" class="btn btn-success">edit</a>
              <form action="#" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
        </form>
          </td>
          </tr>
          @endforeach
          </tbody>
        </table>
        </div>

        <div class="mx-auto" style="width: 200px;">
        {{ $tbl_dokter->links() }}
        </div>
      
        
      </div>
     </div>
    </div>

    

@endsection
@extends('layout/main')

@section('title', 'Sistem Informasi Rumah Sakit')

@section('container')

    <div class="container">
     <div class="row">
      <div class="col-10">
        <h3>Hello, Kelompok 3 Universitas Pamulang</h3>
        <h4>This is Page Profil Hospital</h4>
      </div>
     </div>
    </div>


    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{ ('img/home/rs1.png') }}" class="d-block w-100 " alt="Responsive image" style="height:500px">
        <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="{{ ('img/home/rsr4.png') }}" class="d-block w-100" alt="Responsive image" style="height:500px">
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="{{ ('img/home/rsr2.png') }}" class="d-block w-100" alt="Responsive image" style="height:500px">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="{{ ('img/home/rsr3.png') }}" class="d-block w-100" alt="Responsive image" style="height:500px">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev" style="background-color:black">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next" style="background-color:black">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <div class="container">
    <div class="row">
    <div class="col-12">
            <h2 class="font-italic text-center py-3">Activity</h2>
        </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-md-center py-4">
            <div class="col-sm-4">
                <p class="text-justify">&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta aut fuga recusandae 
                ad vero voluptates voluptatibus iusto expedita voluptas animi itaque, ratione commodi pariatur. 
                Quia veniam hic eius iure quis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem hic 
                ad quibusdam ex ea quis inventore rerum, cumque nam doloremque atque
                ducimus eveniet. Iste praesentium maiores magnam distinctio, perferendis quis?</p>
            </div>
            <div class="col-sm-4">
                <center><h5 class="py-1">Web Development</h5></center>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div><br>
                <center><h5 class="py-1">Web Designer</h5></center>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                </div><br>
                <center><h5 class="py-1">Android Developer</h5></center>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                </div>
            </div>


            </div>

            <div class="mx-auto" style="width: 300px;">
            <div class="spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-secondary" role="status">
            <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-success" role="status">
            <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-danger" role="status">
            <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-warning" role="status">
            <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-info" role="status">
            <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
            <span class="sr-only">Loading...</span>
            </div>
            </div>



        </div>
      </div>
      

@endsection

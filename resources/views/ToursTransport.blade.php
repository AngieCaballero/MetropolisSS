@extends('Layouts.SecondApp')

@section('contenido')

<section class="container" style="margin-top: 130px;">
  <h1 class="text-center"><b>What places to visit in Nicaragua?</b></h1>
  <div class="row m-5">
    <div class="col-">
      <p class="text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur esse odit voluptates ipsum cumque deserunt voluptate enim! Debitis, omnis. Quisquam eligendi, sed perferendis est blanditiis cum dolor doloribus rem animi provident aliquam sapiente accusantium esse aspernatur quas quod sint ex quae perspiciatis molestiae! Odio, dolores quod illum mollitia quia nam?</p>
    </div>
  </div>
      <div class="row">
        @foreach ($lugares as $lugar)
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="card border-light">
                  <div class="card-img-top">
                        <div id="carouselExampleFade{{$lugar->Id}}" class="carousel slide carousel-fade" data-bs-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="{{asset('Images/'. $lugar->Foto[0])}}" class="d-block w-100" alt="..." style="width: 50vw; height: 300px;">
                            </div>
                            <div class="carousel-item">
                              <img src="{{asset('Images/'. $lugar->Foto[1])}}" class="d-block w-100" alt="..." style="width: 50vw; height: 300px;">
                            </div>
                            <div class="carousel-item">
                              <img src="{{asset('Images/'. $lugar->Foto[2])}}" class="d-block w-100" alt="..." style="width: 50vw; height: 300px;">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade{{$lugar->Id}}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade{{$lugar->Id}}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                      </div>
                    <div class="card-body">
                      <h5 class="card-title">{{$lugar->Nombre}}</h5>
                      <p class="card-text text-muted">{{$lugar->Descripcion}}</p>
                      <a href="#" class="btn btn-warning">See more</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
</section>

@endsection
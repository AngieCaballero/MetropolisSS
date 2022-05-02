@extends('Layouts.SecondApp')

@section('contenido')


<section class="p-4" id="onetoone" style="margin-top: 100px;">
    <h3 class="text-warning text-center mb-4">One to one</h3>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 classdesc">
                <p class="text-muted my-4">Face-to-face classes with a native teacher will help you learn Spanish faster, the learning methodology that your teacher will use will be personalized and the most ideal for you.</p>
                <b class="text-warning">Prices:</b>
                <div class="classprice">
                    <div class="pt-2 px-2 row m-2">
                        <div class="col ">
                            <h2 class="text-center mt-3"><b class="text-warning">$120</b></h2>
                        </div>
                        <div class="col">
                            <p class="text-dark">4 hours per day for 5 days for a total 20 hours.</p>
                        </div>
                    </div>
                    <div class="pt-2 px-2 row m-2">
                        <div class="col ">
                            <h2 class="text-center mt-3"><b class="text-warning">$100</b></h2>
                        </div>
                        <div class="col">
                            <p class="text-dark">3 hours per day for 5 days for a total of 15 hours.</p>
                        </div>
                    </div>
                    <div class="pt-2 px-2 row m-2">
                        <div class="col ">
                            <h2 class="text-center"><b class="text-warning">$15</b></h2>
                        </div>
                        <div class="col">
                            <p class="text-dark">2 hour per days.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 classes">
                <a href="#esc1">
                    <img src="{{ asset('Images/Escuela2.jpg')}}" alt="">
                </a>
                <a href="#esc2">
                    <img src="{{ asset('Images/Escuela30.png')}}" alt="">
                </a>
                <a href="#esc3">
                    <img src="{{ asset('Images/Escuela13.jpg')}}" alt="">
                </a>
                <a href="#esc4">
                    <img src="{{ asset('Images/Escuela19.jpg')}}" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<article class="light-box" id="esc1">
    <a href="#esc4" class="next"><img src="{{ asset('back.png')}}" alt="" style="width: 20px"></a>
    <img src="{{ asset('Images/Escuela2.jpg')}}" alt="">
    <a href="#esc2" class="next"><img src="{{ asset('next.png')}}" alt="" style="width: 20px"></a>
    <a href="#onetoone" class="close"><img src="{{ asset('close.png')}}" alt="" style="width: 20px"></a>
  </article>

  <article class="light-box" id="esc2">
    <a href="#esc1" class="next"><img src="{{ asset('back.png')}}" alt="" style="width: 20px"></a>
    <img src="{{ asset('Images/Escuela30.png')}}" alt="">
    <a href="#esc3" class="next"><img src="{{ asset('next.png')}}" alt="" style="width: 20px"></a>
    <a href="#onetoone" class="close"><img src="{{ asset('close.png')}}" alt="" style="width: 20px"></a>
  </article>

  <article class="light-box" id="esc3">
    <a href="#esc2" class="next"><img src="{{ asset('back.png')}}" alt="" style="width: 20px"></a>
    <img src="{{ asset('Images/Escuela13.jpg')}}" alt="">
    <a href="#esc4" class="next"><img src="{{ asset('next.png')}}" alt="" style="width: 20px"></a>
    <a href="#onetoone" class="close"><img src="{{ asset('close.png')}}" alt="" style="width: 20px"></a>
  </article>

  <article class="light-box" id="esc4">
    <a href="#esc3" class="next"><img src="{{ asset('back.png')}}" alt="" style="width: 20px"></a>
    <img src="{{ asset('Images/Escuela19.jpg')}}" alt="">
    <a href="#esc1" class="next"><img src="{{ asset('next.png')}}" alt="" style="width: 20px"></a>
    <a href="#onetoone" class="close"><img src="{{ asset('close.png')}}" alt="" style="width: 20px"></a>
  </article>

  
    <section class="p-4" id="ingroup" style="background-color: #fffbfb">
        <h3 class="text-warning text-center my-4">In group</h3>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 classes">
                    <a href="#grp1">
                        <img src="{{ asset('Images/Escuela18.jpg')}}" alt="">
                    </a>
                    <a href="#grp2">
                        <img src="{{ asset('Images/G10.jpg')}}" alt="">
                    </a>
                    <a href="#grp3">
                        <img src="{{ asset('Images/Escuela4.jpg')}}" alt="">
                    </a>
                    <a href="#grp4">
                        <img src="{{ asset('Images/Img5.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-lg-4 classdesc">
                    <p class="text-muted my-4">
                        Learn Spanish with your partner, family, or friends.</p>
                    <b class="text-warning">Prices:</b>
                    <div class="classprice">
                        <div class="pt-2 px-2 row m-2">
                            <div class="col ">
                                <h2 class="text-center mt-3"><b class="text-warning">$180</b></h2>
                            </div>
                            <div class="col">
                                <p class="text-dark">4 hours per day for 5 days per 2 person.</p>
                            </div>
                        </div>
                        <div class="pt-2 px-2 row m-2">
                            <div class="col ">
                                <h2 class="text-center mt-3"><b class="text-warning">$160</b></h2>
                            </div>
                            <div class="col">
                                <p class="text-dark">3 hours per day for 5 days per 2 person.</p>
                            </div>
                        </div>
                        <div class="pt-2 px-2 row m-2">
                            <div class="col ">
                                <h2 class="text-center"><b class="text-warning">$5</b></h2>
                            </div>
                            <div class="col">
                                <p class="text-dark">1 hour per person.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <article class="light-box" id="grp1">
        <a href="#grp4" class="next"><img src="{{ asset('back.png')}}" alt="" style="width: 20px"></a>
        <img src="{{ asset('Images/Escuela18.jpg')}}" alt="">
        <a href="#grp2" class="next"><img src="{{ asset('next.png')}}" alt="" style="width: 20px"></a>
        <a href="#ingroup" class="close"><img src="{{ asset('close.png')}}" alt="" style="width: 20px"></a>
      </article>
    
      <article class="light-box" id="grp2">
        <a href="#grp1" class="next"><img src="{{ asset('back.png')}}" alt="" style="width: 20px"></a>
        <img src="{{ asset('Images/G10.jpg')}}" alt="">
        <a href="#grp3" class="next"><img src="{{ asset('next.png')}}" alt="" style="width: 20px"></a>
        <a href="#ingroup" class="close"><img src="{{ asset('close.png')}}" alt="" style="width: 20px"></a>
      </article>
    
      <article class="light-box" id="grp3">
        <a href="#grp2" class="next"><img src="{{ asset('back.png')}}" alt="" style="width: 20px"></a>
        <img src="{{ asset('Images/Escuela4.jpg')}}" alt="">
        <a href="#grp4" class="next"><img src="{{ asset('next.png')}}" alt="" style="width: 20px"></a>
        <a href="#ingroup" class="close"><img src="{{ asset('close.png')}}" alt="" style="width: 20px"></a>
      </article>
    
      <article class="light-box" id="grp4">
        <a href="#grp3" class="next"><img src="{{ asset('back.png')}}" alt="" style="width: 20px"></a>
        <img src="{{ asset('Images/Img5.jpg')}}" alt="">
        <a href="#grp1" class="next"><img src="{{ asset('next.png')}}" alt="" style="width: 20px"></a>
        <a href="#ingroup" class="close"><img src="{{ asset('close.png')}}" alt="" style="width: 20px"></a>
      </article>

<section class="container p-4 my-4">
    <h3 class="text-warning text-center mb-4">Online</h3>
    <div class="row">
        <div class="col-lg-6">
            <p class="text-dark my-4">
                Learn Spanish with your partner, family, or friends.</p>
            <b class="text-warning">Prices:</b>
            <div class="classprice w-75" style="width: ">
                <div class="pt-2 px-2 row m-2">
                    <div class="col ">
                        <h2 class="text-center"><b class="text-warning">$10</b></h2>
                    </div>
                    <div class="col">
                        <p class="text-dark">1 hours.</p>
                    </div>
                </div>
            </div>    
        </div>
        <div class="col-lg-6 p-4">
            <img src="{{asset('Images/Online-Class.jpg')}}" alt="" class="w-75">
        </div>
    </div>
</section>

@endsection
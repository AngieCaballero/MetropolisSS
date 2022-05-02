<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Metropolis Spanish School</title>
    <link rel="shortcut icon" href="{{ asset('Leon_Metropolis.ico')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/MisEstilos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body style="background-color: #fffbfb">
    <header>
        <div class="contenedor contenedor1" id="contPrin">
            <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark menu" id="navM">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('Index')}}"><img src="{{ asset('Images/Leon_Metropolis.png')}}" style="width: 5.5rem; height: 3rem;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('Index')}}#weare"><b>Who we are?</b></a>
                                <div class="linea" style="background-color: #e99002;"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('Index')}}#services"><b>Services</b></a>
                                <div class="linea" style="background-color: #e99002;"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('SC')}}"><b>Spanish Classes</b></a>
                                <div class="linea" style="background-color: #e99002;"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('TT')}}"><b>Tours & Transportation</b></a>
                                <div class="linea" style="background-color: #e99002;"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#contactus"><b>Contact us</b></a>
                                <div class="linea" style="background-color: #e99002;"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="resena" id="resena">
              <h2><b> Metropolis Spanish School</b></h2>
              <p>>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, ratione quae temporibus corporis aut natus.</p>
            </div>
        </div>
    </header>

  <div class="social">
		<ul>
      <li><a href="https://www.facebook.com/MetropolisSpanishSchool" target="_blank" class="icon-facebook"></a></li>
      <li><a href="https://api.whatsapp.com/send?phone=50589326686&text=I+am+interested+in+studying+spanish+at+Metropolis+Spanish+School" target="_blank" class="icon-whatsapp"></a></li>
      <li><a href="mailto:leonesamarlanica@gmail.com" class="icon-mail"></a></li>
      <li><a href="https://www.tripadvisor.com.mx/Attraction_Review-g424970-d20001573-Reviews-Metropolis_Spanish_School-Leon_Leon_Department.html" target="_blank" class="icon-tripadvisor"><img src="{{asset('tripadvisor.png')}}" alt="" style="width: 16px;"></a></li>
    </ul>
	</div>

    <div class="my-5">
        @yield('contenido')
    </div>

    <footer id="contactus" class=" text-center text-white" style="background-color:  #f5f5f3">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <h5 class="text-center text-primary mb-3"><b>Contact us:</b></h5>
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn btn-primary btn-social m-1"
              style="background-color: #3b5998;"
              href="https://www.facebook.com/MetropolisSpanishSchool"
              role="button"
              ><i class="icon-facebook"></i
            ></a>
      
            <!-- Whatsapp -->
            <a
              class="btn btn-success btn-social m-1"
              style="background-color: #2bb319;"
              href="https://api.whatsapp.com/send?phone=50589326686&text=I+am+interested+in+studying+spanish+at+Metropolis+Spanish+School"
              role="button"
              ><i class="icon-whatsapp"></i
            ></a>
      
            <!-- Comunidad 
            <a
              class="btn btn-warning btn-social m-1"
              style="background-color: #dd4b39;"
              href="https://www.facebook.com/groups/193611065308170"
              role="button"
              ><i class="icon-renren"></i>
            </a> -->

            <!-- Email -->
            <a
              class="btn btn-dark btn-social m-1"
              style="background-color: #333333;"
              href="mailto:leonesamarlanica@gmail.com"
              role="button"
              ><i class="icon-mail"></i
            ></a>

                  
            <!-- Tripadvisor -->
            <a
              class="btn btn-info btn-social m-1"
              style="background-color: #42eb8e;"
              href="https://www.tripadvisor.com.mx/Attraction_Review-g424970-d20001573-Reviews-Metropolis_Spanish_School-Leon_Leon_Department.html"
              role="button"
              ><img src="{{asset('tripadvisor.png')}}" alt="" style="width: 16px;"></a>

          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3 bg-primary">
          © 2022 Copyright:
          <a class="text-white" href="#">Metropolis Spanish School - León, Nicaragua. All rights reserved.</a>
          <br><br> <p style="font-size: 10px"> Web Master: Angie Jazmín Caballero Munguía </p>
        </div>
        <!-- Copyright -->
      </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--<script src="{{ asset('js/bootstrap.js')}}"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js')}}"></script>

</body>
</html>
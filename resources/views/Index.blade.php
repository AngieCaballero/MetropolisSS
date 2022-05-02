@extends('Layouts.app')

@section('contenido')

    <section id="weare" class="container">
        <h3 class="text-warning text-center">Who we are?</h3>
        <div class="">
            <p class="text-dark mx-5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
        </div>
    </section>
    
    <section id="services" class="my-5 py-5" style="background-color:  #f5f5f3 ">
      <div class="container">
        <div class="row justify-content-md-center ">

            <!--Descripcion #2-->
            <div class="col-12 text-center" id = "tarjetas">
              <h3 class ="text-warning">Our services:</h3>
              <p  class = "text-dark">We want you to enjoy your stay to the fullest, so we have a series of services to offer you:</p>
              <br>
            </div>
      
            <!--tarjetas en total 3-->
            <article class="col-md-6 col-lg-4 servis">
              <div class="card">
                <img src="{{asset('Images/Escuela1.JPG')}}"  style="filter: brightness(0.5);" alt="Rainting" height="450x" class = "card-img">
                <div class = "card-img-overlay text-white d-flex flex-column justify-content-center text-center">
                  <h4>Spanish Classes</h4>
                 <p>
                  We want you to enjoy your stay to the fullest, so we have a series of servic
                 </p>
                 <div>
                  <a href="{{ route('SC')}}" class = "text-reset btn btn-warning sc">See More</a>
                 </div>
                 
                </div>
              </div>
            </article>
    
            <!--tarjeta 2-->
            <article class="col-md-6 col-lg-4 servis ">
              <div class="card">
                <img src="{{asset('Images/Paseos1.jpg')}}"  style="filter: brightness(0.5);" alt="Rainting" height="450x" class = "card-img">
                <div class = "card-img-overlay text-white d-flex flex-column justify-content-center text-center">
                  <h4>Tours & Transportation</h4>
                 <p>
                  We want you to enjoy your stay to the fullest, so we have a series of servic
                 </p>
                 <div>
                  <a href="{{ route('TT')}}" class = "text-reset btn btn-warning tt">See More</a>
                 </div>
                </div>
              </div>
            </article>
    
            <!--tarjeta 3-->
            <article class="col-md-6 col-lg-4 servis mt-md-4 mt-lg-0 ">
              <div class="card">
                <img src="{{asset('Images/Casa2.jpg')}}"  style="filter: brightness(0.5);" alt="Rainting" height="450x" class = "card-img">
                <div class = "card-img-overlay text-white d-flex flex-column justify-content-center text-center">
                  <h4>Lodging with Nicaraguan Families</h4>
                 <p>
                  When living with local families you have an opportunity to practice Spanish, and to learn about the families, the culture and the customs of Nicaragua. The family will offer you a private room with a bathroom and 3 meals a day, water, fruit etc.
                 </p>
                 <!--<div>
                  <a href="" class = "text-reset btn btn-warning">See More</a>
                 </div>-->
                </div>
              </div>
            </article>
          </div>
      </div>    
    </section>

    <h3 class="text-warning text-center">Experiences</h3>
    <section id="experiences" class="container mb-4">
      
      <section id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>      
        <div class="carousel-inner">
          <div class="carousel-item active exp pb-5" data-bs-interval="5000">
            <div class="d-block w-100">
              <div class="row">
                <div class="col-lg-6 abs-center">
                  <p class="text-dark">
                    "My experience with the teachers at Metropolis Spanish School was excellent. The teachers are very friendly and hardworking, the family stay offered a great cultural experience, and Leon is a beautiful city to live in and explore.  
                    There are also many interesting places nearby to visit during the daily activities; including trips to volcanoes, a beautiful beach, and  botanical gardens and farms. 
                    Nicaragua overall is a fascinating and beautiful country. I would highly recommend studying Spanish in Leon with the Metropolis Spanish School." - Marcos.
                  </p>
                </div>
                <div class="col-lg-6 abs-center">
                  <img src="{{asset('Images/marcos.jpg')}}" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item exp pb-5" data-bs-interval="5000">
            <div class="d-block w-100">
              <div class="row">
                <div class="col-lg-6 abs-center">
                  <p class="text-dark">
                    "I am a student at the University of Nebraska at Omaha, in Omaha, Nebraska, USA. I found that the teaching at this school is well-planned and personal. The instructors try to help you from wherever you are beginning class here to help you gain ground in your Spanish skills.
                    My teachers, Marla and Frank, were very helpful in teaching me more Spanish than I knew, as well as helping me to have fun while learning. The school shifts professors from week to week to help you to learn with different teaching methods, this ensures that you have a good time here and learn a lot.
                    I recommend that if you do choose this school, and are fluent in English, to volunteer with the teachers outside of class time to help them practice their English as well as to build friendships. The staff at this school is one that you will enjoy getting to know personally." - Shelli Wakeman
                  </p>
                </div>
                <div class="col-lg-6 abs-center">
                  <img src="{{asset('Images/Shelli.jpg')}}" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item exp pb-5" data-bs-interval="5000">
            <div class="d-block w-100">
              <div class="row">
                <div class="col-lg-6 abs-center">
                  <p class="text-dark">
                    "I am a professor at the University of Nebraska at Omaha, in Omaha, Nebraska, USA.
                    I’m here every year and this year I brought two of my university students to study in this school. Thanks for teaching my students, the attended for one fun month and learned a lot.
                    I also thank the school for helping me with my Spanish, now I have less problems with verbs, John is a good teacher and I learned a lot from him.
                    I hope I can study more next year 2013." - Ann Coyne
                  </p>
                </div>
                <div class="col-lg-6 abs-center">
                  <img src="{{asset('Images/Ann.jpg')}}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </section>

    </section>
    
    <section id="map">
      <h3 class="text-warning text-center my-4">How to get?</h3>
      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15584.609407595139!2d-86.876861!3d12.439568!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x84092d5760d90c44!2sMetropolis%20Spanish%20School!5e0!3m2!1ses-419!2sni!4v1644276153251!5m2!1ses-419!2sni" style="border:0; width:100%; height: 500px;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="container mt-4">
        <div class="row">
          <div class="col-lg-8 col-md-6 abs-center">
            <div>
              <p class="text-dark">Metropolis Spanish School esta ubicada en la hermosa ciudad colonial de León, en Nicaragua, un pais ubicado en la región central del continente Americano</p>
              <h4><b>About León, Nicaragua</b></h4>
              <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil illum, officia excepturi maiores aliquid, unde, natus dolorum animi temporibus fuga amet ullam aliquam corporis tenetur praesentium blanditiis reiciendis repudiandae veniam. >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi nulla incidunt, obcaecati reiciendis beatae necessitatibus numquam vero tenetur alias adipisci et, quia fugit. Doloribus nobis natus atque nemo adipisci ipsum! Cumque error molestias adipisci, reprehenderit sit atque soluta animi praesentium, at architecto eum, nemo dolore! Nesciunt quam repudiandae veniam quidem itaque id beatae, blanditiis dicta optio eveniet ducimus quasi numquam consectetur laborum perspiciatis aliquid cupiditate. Ab iusto voluptas recusandae, corrupti aspernatur nisi quisquam aliquid distinctio voluptates. Ad quasi est ullam esse praesentium ipsam culpa reprehenderit alias perferendis quae fuga nisi fugiat numquam, rerum provident autem! Qui consequatur ratione nam tempore.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/COit_ryLp7N/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; padding:0; width:100%; ">
              <div style="padding:16px;"> 
                <a href="https://www.instagram.com/p/COit_ryLp7N/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> 
                  <div style=" display: flex; flex-direction: row; align-items: center;"> 
                    <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> 
                    <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> 
                      <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> 
                      <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                    </div>
                  </div>
                  <div style="padding: 19% 0;"></div> 
                  <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                    <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                          <g>
                            <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div style="padding-top: 8px;"> 
                    <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Ver esta publicación en Instagram</div>
                  </div>
                  <div style="padding: 12.5% 0;"></div> 
                  <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                    <div> 
                      <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> 
                      <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> 
                      <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                    </div>
                    <div style="margin-left: 8px;"> 
                      <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> 
                      <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                    </div>
                    <div style="margin-left: auto;"> 
                      <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> 
                      <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> 
                      <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                    </div>
                  </div> 
                  <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> 
                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> 
                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                  </div>
                </a>
                <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                  <a href="https://www.instagram.com/p/COit_ryLp7N/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Una publicación compartida por LEÓN, NICARAGUA | Turismo (@visit_leon)</a>
                </p>
              </div>
            </blockquote> 
            <script async src="//www.instagram.com/embed.js"></script>
          </div>
        </div>
      </div>
    </section>

    <h3 class="text-warning text-center mt-4">Galery</h3>
    <section id="galeria" class="galeria container">
     
      @for($i = 1; $i < 13; $i++)
      <a href="#g{{$i}}">
        <img src="{{ asset('Images/G'. $i .'.jpg')}}" alt="">
      </a>
      @endfor

    </section>

    @for($i = 1; $i < 13; $i++)
      @if ($i == 1)
          <?php $b = 12; ?>
      @else
          <?php $b = $i-1; ?>
      @endif
      @if ($i == 12)
          <?php $n = 1; ?>
      @else
          <?php $n = $i+1; ?>
      @endif
    <article class="light-box" id="g{{$i}}">
      <a href="#g{{$b}}" class="next"><img src="{{ asset('back.png')}}" alt="" style="width: 20px"></a>
      <img src="{{ asset('Images/G'. $i .'.jpg')}}" alt="">
      <a href="#g{{$n}}" class="next"><img src="{{ asset('next.png')}}" alt="" style="width: 20px"></a>
      <a href="#galeria" class="close"><img src="{{ asset('close.png')}}" alt="" style="width: 20px"></a>
    </article>
    @endfor

    <section id="contactus">

    </section>
@endsection


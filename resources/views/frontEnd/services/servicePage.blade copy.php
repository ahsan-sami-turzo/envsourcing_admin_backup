<style>
   .section-head{
       text-align: left !important;
       padding-top: 70px;
   }
   .features{
    padding-bottom: 70px; 
   }
   .service1{
       text-align: left !important;
   }
   .service2{
       text-align: left !important;
   }
   .service3{
       text-align: left !important;
   }
   .service4{
       text-align: left !important;
   }
   .service5{
       text-align: left !important;
   }
   .service6{
       text-align: left !important;
   }
   .home-block {
    background-color: #c2b89c; display: block; height: 180px; line-height:180px;
    text-align: center; font-size: 70px; color:#e2e2e2;
    text-shadow: 2px 2px 0 #444; margin-bottom: 20px; background-size: cover;
    background-position: 1000px 1000px; box-shadow: 1px 1px 4px #111;
    background-image: inherit;
    background-repeat: no-repeat;
}
.home-block:hover {
    background-position: center center !important;
}
</style>
<section class="w3l-index2" id="services">
    <div class="features-main py-5 text-center">
      <div class="container py-lg-3">
        <div class="section-head text-light">
         <h6><span>OUR SERVICES</span>
          <h2 class="serviceHead">What we bring to you</h2>
        </div>
        <div class="row features">
          @foreach ($services as $service)
          <div class="col-lg-4 col-md-6 feature-grid">
            <a href="{{ url('frontEnd/serviceDetails/'.$service->id )}}">
              <div class="feature-body home-block{{$service->service}}" style="background-color:rgba(0, 0, 0, 0.74); background-image:url({{asset('uploads/images/services/')}}/{{$service->image}})">
              {{-- <div class="feature-body home-block{{$service->service}}" style="linear-gradient(to right, rgba(0, 0, 0, 0.74), rgba(76, 119, 224, 0.75)), url(http://lorempixel.com/300/200);"> --}}
                <div class="feature-img">
                  <span class="{{$service->font}}" aria-hidden="true"></span>
                </div>
                <div class="feature-info mt-4">
                  <h3 class="feature-titel mb-2">{{$service->title}}</h3>
                  <p class="feature-text"> {{ Str::limit($service->shortDescription, 100) }}
                  </p>
                </div>
              </div>
            </a>
          </div>
          @endforeach
          {{-- <div class="col-lg-4 col-md-6 feature-grid">
            <a href="#url">
            <div class="feature-body service2">
              <div class="feature-img">
                <span class="fa fa-laptop icon-fea" aria-hidden="true"></span>
              </div>
              <div class="feature-info mt-4">
                <h3 class="feature-titel mb-2">Web App Development</h3>
                <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nam, minima iste molestiae.
                </p>
  
              </div>
            </div>
            </a>
          </div> --}}
          {{-- <div class="col-lg-4 col-md-6 feature-grid">
            <a href="#url">
            <div class="feature-body service3">
              <div class="feature-img">
                <span class="fa fa-line-chart" aria-hidden="true"></span>
              </div>
              <div class="feature-info mt-4">
                <h3 class="feature-titel mb-2">24/7 Call Center Service</h3>
                <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nam, minima iste molestiae.
                </p>
                <div class="hover">
                </div>
              </div>
            </div>
            </a>
          </div> --}}
          {{-- <div class="col-lg-4 col-md-6 feature-grid">
            <a href="#url">
            <div class="feature-body service4">
              <div class="feature-img">
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
              </div>
              <div class="feature-info mt-4">
                <h3 class="feature-titel mb-2">Social Media Marketing</h3>
                <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nam, minima iste molestiae.
                </p>
              </div>
            </div>
            </a>
          </div> --}}
          {{-- <div class="col-lg-4 col-md-6 feature-grid">
            <a href="#url">
            <div class="feature-body service5">
              <div class="feature-img">
                <span class="fa fa-signal icon-fea" aria-hidden="true"></span>
              </div>
              <div class="feature-info mt-4">
                <h3 class="feature-titel mb-2">Corporate Business</h3>
                <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nam, minima iste molestiae.
                </p>
              </div>
            </div>
            </a>
          </div> --}}
          {{-- <div class="col-lg-4 col-md-6 feature-grid">
            <a href="#url">
            <div class="feature-body service6">
              <div class="feature-img">
                <span class="fa fa-paint-brush icon-fea" aria-hidden="true"></span>
              </div>
              <div class="feature-info mt-4">
                <h3 class="feature-titel mb-2">Creative Consultancy</h3>
                <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nam, minima iste molestiae.
                </p>
              </div>
            </div>
            </a>
          </div> --}}
        </div>
      </div>
    </div>
  </section>
  
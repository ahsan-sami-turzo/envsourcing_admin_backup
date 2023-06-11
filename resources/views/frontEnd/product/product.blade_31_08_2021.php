<style>
  /* .card:hover{
   transform: scale(1.05);
   box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}
.card {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
  border-radius: .25rem;
}
.card-img-top {
  width: 36% !important;
} */
h1 {
color: #fff;
padding: 10px 0;
}
.card:hover{
   transform: scale(1.05);
   box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
  }
/* .card {
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.9);
transition: 0.3s;
border: none;
&:hover {
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
} */
a {
  color: initial;
  &:hover {
    text-decoration: initial;
  }
}
  h1 {
      color: #fff;
      padding: 0px !important;
  }
  .card-img-top {
      height: 100px !important;
  }
.head{
    font-size: 100px;
    text-transform: uppercase;
    color: #fff;
    line-height: 264px;
    text-shadow: 0 20px 35px rgb(44 49 56 / 50%);
    /* margin-bottom: 40px; */
    z-index: 60;
    font-weight:800;
}

#technologies > img {
  position: absolute;
  right: 16.18%;
  margin-top: -140px;
}

.technologies{
  background-color: rgba(44, 49, 56, 0.03);
}
</style>

<!-- ***** Our Experties slider Start ***** -->
{{-- <section style="padding: 5em 0"> </section>
<h2 style="width: 7em; margin: 0 auto; font-size: 2em; text-align: center: "> Our Technologies </h2> --}}

<br>
<section id="technologies" class="technologies">
<img width="391" height="257" src="{{asset('assets/images/tech.jpg')}}" class="attachment-clients-image size-clients-image" alt="Image of business men sitting at a desk in a meeting" data-parallax="-0.15" srcset="{{asset('assets/images/tech.jpg')}} 391w, {{asset('assets/images/tech.jpg')}} 300w, {{asset('assets/images/tech.jpg')}} 125w, {{asset('assets/images/tech.jpg')}} 259w, {{asset('assets/images/tech.jpg')}} 97w, {{asset('assets/images/tech.jpg')}} 135w" sizes="(max-width: 391px) 100vw, 391px" />	
  <div class="container">
    <h2 class="head" style="position: relative; color:#163249;">Our Technologies</h2>
      <div class="heading text-center mx-auto">
{{--           
          <p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
              Nulla mollis dapibus nunc, ut rhoncus
              turpis sodales quis. Integer sit amet mattis quam.
          </p>   --}}
  </div>
      <div class="row" >
          <div class="col-lg-12 col-md-6 col-xs-12">
          <div class="col-md-2">
              <img src="{{asset('assets/images/our experties icon/PHP.png')}}" alt="" width="150">
          </div>
          <div class="col-md-2">
              <img src="{{asset('assets/images/our experties icon/Bootstrap01.png')}}" alt="" width="150" >
          </div>
          <div class="col-md-2">
                  <img src="{{asset('assets/images/our experties icon/Cake_PHP.png')}}" alt="" width="150" >
          </div>
          <div class="col-md-2">
              <img src="{{asset('assets/images/our experties icon/Android.png')}}" alt="" width="150" >
          </div>
          <div class="col-md-2">
              <img src="{{asset('assets/images/our experties icon/mysql.png')}}" alt="" width="150" >
          </div>
          <div class="col-md-2" >
              <img src="{{asset('assets/images/our experties icon/laravel_02.png')}}" alt="" width="150">
          </div>
          </div>
      </div>
      <div class="row" >
        <div class="col-lg-12 col-md-6 col-xs-12 col-sm-12">
          <div class="col-md-2" style="padding-top: 40px;">
            <img src="{{asset('assets/images/our experties icon/Apache.png')}}" alt="" width="150">
          </div>
          <div class="col-md-2" style="padding-top: 40px;">
              <img src="assets/images/our experties icon/jquery-.png" alt="" width="150">
          </div>
          <div class="col-md-2" style="padding-top: 40px;" >
              <img src="assets/images/our experties icon/React01.png" alt="" width="150">
          </div>
          <div class="col-md-2" style="padding-top: 40px;">
              <img src="assets/images/our experties icon/vue-js.png" alt="" width="150">
          </div>
          <div class="col-md-2" style="padding-top: 40px;">
              <img src="assets/images/our experties icon/SQLite.png" alt="" width="150">
          </div>
          <div class="col-md-2" style="padding-top: 40px;">
              <img src="assets/images/our experties icon/Mongodb01.png" alt="" width="150">
          </div>
        </div>
    </div>
  </div>
</section>

<!-- ***** Our Clients Start ***** -->

  <section id="product" style="padding-top:100px; background:rgba(44, 49, 56, 0.03);">
      <div class="w3l-open-block-services py-5" id="services">
        <div class="container py-lg-5 pt-4">
          <div class="heading text-center mx-auto">
            <h3 >Our Clients</h3>
            {{-- <p class="my-3"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
              Nulla mollis dapibus nunc, ut rhoncus
              turpis sodales quis. Integer sit amet mattis quam.</p>   --}}
          </div>
        
          <div class="row pt-5 mt-3">
            @foreach ($clients as $client)
            <div class="col-lg-3 col-md-6" style="padding-bottom:10px;">
              <div class="card text-center">
                <div class="icon-holder">
                  <span class="" ><img src="{{asset('uploads/images/clients/')}}/{{$client->image}}" width="100%" height="200px"></span>
                </div>
                <h4 class="mission">{{$client->title}}</h4>
                <div class="open-description">
                  <p>{{$client->short_desc}}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
      </div>
  </section>

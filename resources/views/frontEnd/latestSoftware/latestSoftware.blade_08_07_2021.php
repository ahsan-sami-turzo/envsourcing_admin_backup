<style>
    .element-to-position, li a {
        padding: 0px !important;
    }
    .list-group, li a {
        background-color: #fff !important;
        color:#0071C1;
        padding-top:10px;
    }
    #projects{
        padding-bottom:200px;
    }
    @media (max-width:667px)  { 
        #technologies > img {
        right: -3.82% !important;
        margin-top: -158px !important;
        width: 235px !important;
    }
    .head {
    font-size: 28px !important;
    line-height: 209px !important;
}
    }
</style>
<!-- ***** Our Projects Area Starts ***** -->
<section class="section" id="projects">
    <div class="container" style="border-bottom: 2px solid #D9D9D9;">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading">
                    <!-- <h6>Our Projects</h6> -->
                    <h2>Our Products</h2>
                </div>
                <div class="">
                    <ul class="list-group">
                        <li><a href="#" hidden>All</a></li>
                        @foreach ($products as $product)
                        <li><a href="{{ url('frontEnd/productDetails/'.$product->id )}}">{{$product->product_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="filters-content">
                    <div class="row grid">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                            <div class="item">
                                <a href="{{asset('assets/images/project-big-item-01.png')}}" data-lightbox="image-1" data-title="Our Projects"><img src="{{asset('assets/images/project-item-01.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                            <div class="item">
                                <a href="{{asset('assets/images/project-big-item-02.png')}}" data-lightbox="image-1" data-title="Our Projects"><img src="{{asset('assets/images/project-item-02.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all gra">
                            <div class="item">
                                <a href="{{asset('assets/images/project-big-item-03.png')}}" data-lightbox="image-1" data-title="Our Projects"><img src="{{asset('assets/images/project-item-03.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all tsh">
                            <div class="item">
                                <a href="{{asset('assets/images/project-big-item-04.png')}}" data-lightbox="image-1" data-title="Our Projects"><img src="{{asset('assets/images/project-item-04.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                            <div class="item">
                                <a href="{{asset('assets/images/project-big-item-05.png')}}" data-lightbox="image-1" data-title="Our Projects"><img src="{{asset('assets/images/project-item-05.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                            <div class="item">
                                <a href="{{asset('assets/images/project-big-item-06.png')}}" data-lightbox="image-1" data-title="Our Projects"><img src="{{asset('assets/images/project-item-06.png')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
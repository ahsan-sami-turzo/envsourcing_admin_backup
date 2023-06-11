
@include('frontEnd.partials.galleryHeader')
<style>
    .img-fluid{
        height: 250px !important;
    }
    .topButton{
        float: right !important;
        color: blue !important;
        font-size: 40px !important;
    }

    .portfolio-categ li a {
        background: white !important;
    }
    .portfolio-area li a {
        background: white !important;
    }
    .galleryhead{
        color: #163249;
        text-align: center;
        border-bottom: 6px solid #163249;
        width: 12%;
        margin: 0 auto;
        font-weight: 600;
        padding-bottom: 4px;
        font-size: 40px;
    }

    
    
</style>
    <!--/gallery -->
    <section class="w3-gallery py-5">
        <div class="container py-md-5">
            <h1 class="galleryhead">Gallery</h1>
            <ul class="portfolio-categ filter mb-md-5 mb-4 p-0 justify-content-center">
                <li class="port-filter all active">
                    <a href="#">All</a>
                </li>
                @foreach ($gallery_img_types as $key => $item)
                    <li class="cat-item-{{$item->id}}">
                        <a href="#" title="Category {{$item->id}}">{{$item->name}}</a>
                    </li> 
                @endforeach
            </ul>
            <ul class="portfolio-area clearfix p-0 m-0">
                @foreach ($gallery as $key => $gal)
                    <li class="portfolio-item2 content" data-id="id-{{$key}}" data-type="cat-item-{{$gal->img_type_id_fk}}">
                        <span class="image-block">
                            <a class="image-zoom" href="{{asset('uploads/images/gallery/')}}/{{$gal->image}}" data-gal="prettyPhoto[gallery]">
                                <div class="content-overlay"></div>
                                <img src="{{asset('uploads/images/gallery/')}}/{{$gal->image}}" class="img-fluid w3layouts agileits" alt="portfolio-img">
                            </a>
                        </span>
                    </li> 
                @endforeach 
            </ul>
            <!--end portfolio-area -->
        </div>
        <!-- //gallery container -->
    </section>
       
        <!-- /move top -->
        <!-- //footer-28 block -->
    </footer>
    <!-- all js scripts and files here -->

    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function () {
            $("#owl-demo1").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false,
                        loop: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->
    <!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->
    
    <script src="{{asset('frontEnd/gallery/js/jquery-1.7.2.js')}}"></script>
    <script src="{{asset('frontEnd/gallery/js/jquery.quicksand.js')}}"></script>
    <script src="{{asset('frontEnd/gallery/js/script.js')}}"></script>
    <script src="{{asset('frontEnd/gallery/js/jquery.prettyPhoto.js')}}"></script>
    <!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>

 <!-- move top -->
 
@include('frontEnd.partials.footer')  
<button onclick="topFunction()" id="movetop" class="topButton" title="Go to top">
    &#10548;
</button>
    
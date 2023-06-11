
@include('frontEnd.partials.detailsHeader')
<style>
    .detailsParagraph{
        text-align:justify;
    }
    .modules{
        text-align:justify;
        color:#000;
    }
    .modules strong{
        font-weight: 700;
        font-size: 15px;
    }
    .productP{font-size: 20px;
        color: #000;
        font-weight: 500;
    }
    .element-to-position, li a {
        padding-bottom: 10px !important;
        color:#939393;
        border-bottom:1px solid #939393;
        padding-left: 0px !important;
    }
    

    .list-group, li a {
        background-color: #fff !important;
    }
    #footerContact {
        background-image:  url('{{ asset('assets/images/dotted-map-bg.png')}}');
        background-repeat: no-repeat;
        margin-top: 60px;
    }
</style>
     
    <section id="producDetails"> <br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <!-- <p>PROJECT DETAILS</p> -->
                    <h2>{{$product->product_name}}</h2><br>
                    <div class="detailsImage">
                        <img src="{{asset('uploads/images/products/')}}/{{$product->image}}" alt="" width="99%">
                    </div><br>
                    <p class="detailsParagraph">
                        {!!$product->product_desc!!}
                    </p><br><br>
                    <p class="modules">
                        <strong>We have several modules for the mentioned sectors which are:</strong>
                    </p><br>
                    <p class="modules">
                        <strong>Common Modules for All::</strong>
                    </p>
                    <div class="listProduct">
                        <ul class="list-group">
                            @foreach ($products as $product)
                                <li>{{$product->product_name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                <br>
                <br>
                <br>
                <br>
                    <p class="productP">Product</p>
                    <ul class="list-group">
                        @foreach ($products as $product)
                        <li><a href="{{ url('frontEnd/productDetails/'.$product->id )}}">{{$product->product_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div> 
    </section> 
@include('frontEnd.partials.footer')  
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
    .tabs {
    width: 100%;
    display:inline-block;
}
.tab-links{
    padding:0px !important;
}
    /*----- Tab Links -----*/
    .tab-links:after {
        display:block;
        clear:both;
        content:'';
    }
    
 
    .tab-links li {
        margin: 0;
        float:left;
        list-style:none;
    }
 
        .tab-links a {
            /* padding:9px 30px 5px 30px; */
            display:inline-block;
            border-radius:2px 2px 0px 0px;
            background:#2E5C8A;
            font-size:16px;
            font-weight:600;
            transition:all linear 0.3s;
            width: 150px;
            text-align: center;
            text-decoration:none;
            border-bottom: none !important;
        }
 
        .tab-links a:hover {
            text-decoration:none;
        }
 
    li.active a, li.active a:hover {
        color:#4C4C4C;
    }
 
    /*----- Content of Tabs -----*/
    
 
        .tab {
            display:none;
        }
 
        .tab.active {
            display:block;
        }
      
.home-block:hover {
   
    transform: scale(1);
}
</style>

<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <p>PROJECT DETAILS</p> -->
                 
                    <h2>{{$productlist->product_name}}</h2><br>
                    <div class="detailsImage">
                        <img src="{{asset('uploads/images/products/')}}/{{$productlist->image}}" alt="" width="99%">
                    </div><br>
                    
                </div> 
            </div>    
        <div class="row">
             <div class="col-md-8">
             <p class="detailsParagraph">
                        {!!html_entity_decode($productlist->product_desc)!!}
                        {{-- {!!$product->productlist_desc!!} --}}
                    </p>
            </div>
            </div>

                <div class="col-md-4" style="float:right;">
                
                    <p class="productP">Product</p>
                    <ul class="list-group">
                        @foreach ($products as $product)
                        <li><a href="{{ url('frontEnd/productDetails/'.$product->id )}}">{{$product->product_name}}</a></li>
                        @endforeach
                    </ul>
                </div>

         </div>
                
    </div>
            
        

                    <div  class="fusion-fullwidth fullwidth-box fusion-blend-mode nonhundred-percent-fullwidth"  style='background-color: rgba(255,255,255,0);background-position: center center;background-repeat: no-repeat;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;'>
                    @if($productlist->product_service_id==1)
                        <div class="fusion-builder-row fusion-row ">
                            <div  class="fusion-layout-column fusion_builder_column fusion_builder_column_1_1  fusion-one-full fusion-column-first fusion-column-last 1_1"  style='margin-top:0px;margin-bottom:20px;'>
                                <div class="fusion-column-wrapper" style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;"  data-bg-url="">
                                    <div class="fusion-title title fusion-title-size-two" style="margin-top:0px;margin-bottom:31px;"><h2 class="title-heading-left">Our Services</h2><div class="title-sep-container"><div class="title-sep sep-double" style="border-color:#e0dede;"></div></div></div><div class="fusion-flip-boxes flip-boxes row fusion-columns-4">
                                    @foreach($services as $service)   
                                    
                                    <div class="fusion-flip-box-wrapper fusion-column col-lg-3 col-md-3 col-sm-3">
                                            <div class="fusion-flip-box">
                                                <div class="flip-box-inner-wrapper">
                                                    <div class="flip-box-front" style="background-color:#f6f6f6;border-color:rgba(0,0,0,0);border-radius:4x;border-style:solid;border-width:1px;color:#747474;">
                                                        <div class="flip-box-front-inner">
                                                            <div class="flip-box-grafix flip-box-circle" style="background-color:#333333;border-color:#333333;">
                                                                <i class="{{$service->font}}" style="color:#ffffff;"></i>
                                                            </div>
                                                            <h2 class="flip-box-heading" style="color:#333333;">{{$service->service_name}}</h2>{{$service->service_desc}}</div></div><div class="flip-box-back" style="background-color:#a0ce4e;border-color:rgba(0,0,0,0);border-radius:4x;border-style:solid;border-width:1px;color:#ffffff;">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                        
                                    <div class="fusion-clearfix"></div>
                                    <div class="fusion-clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div  class="fusion-fullwidth fullwidth-box fusion-blend-mode nonhundred-percent-fullwidth"  style='background-color: rgba(255,255,255,0);background-position: center center;background-repeat: no-repeat;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;'>
                        @if($productlist->feature_id==1)
                            <div class="fusion-builder-row fusion-row ">
                                <div  class="fusion-layout-column fusion_builder_column fusion_builder_column_1_1  fusion-one-full fusion-column-first fusion-column-last 1_1"  style='margin-top:0px;margin-bottom:20px;'>
                                    <div class="fusion-column-wrapper" style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;"  data-bg-url="">
                                        <div class="fusion-title title fusion-title-size-two" style="margin-top:0px;margin-bottom:31px;"><h2 class="title-heading-left">Major Features</h2><div class="title-sep-container"><div class="title-sep sep-double" style="border-color:#e0dede;"></div></div></div><div class="fusion-flip-boxes flip-boxes row fusion-columns-4">
                                            <div class="tabs">
                                                <ul class="tab-links">
                                                    <li class="active"><a href="#tab{{$activeFeature->id}}">{{$activeFeature->name}}</a></li>
                                                    @foreach($featuresDesc as  $feature)
                                                        <li><a href="#tab{{$feature->id}}">{{$feature->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                                <div class="tab-content">
                                                    <div id="tab{{$activeFeature->id}}" class="tab active">
                                                        <p>{{$activeFeature->features_desc}}</p>
                                                    </div>
                                                    @foreach($featuresDesc as  $feature)
                                                    <div id="tab{{$feature->id}}" class="tab">
                                                       <p>{{$feature->features_desc}}</p>
                                                    </div>
                                                    @endforeach
                                                   
                                                </div>
                                            
                                            </div>
                                        <div class="fusion-clearfix"></div>
                                        <div class="fusion-clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    
                </div>
               
                                    <div class="fusion-sep-clear"></div>

                                </div>
                            </div>

                        </div>

                    </div>
                  
                </div>
            </div>
        </div>

    </div>
</div>

 

</div>


<script>
    $(document).ready(function() {
$('.tabs .tab-links a').on('click', function(e)  {
    var currentAttrValue = $(this).attr('href');

    // Show/Hide Tabs
    $('.tabs ' + currentAttrValue).fadeIn(400).siblings().hide();
    // Change/remove current tab to active
    $(this).parent('li').addClass('active').siblings().removeClass('active');

    e.preventDefault();
    
    
});
});
</script>
@include('frontEnd.partials.footer1') 
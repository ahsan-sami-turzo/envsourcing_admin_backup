@include('frontEnd.partials.detailsHeader')
<style>
    .detailsParagraph{
        text-align:justify;
        
    }
    .detailsParagraph p{
       
        font-size:18px;
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
        padding-bottom: 1px !important;
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
            border-bottom:3px solid white;
        }

.tab-links a:hover {
    text-decoration:none;
    
    background-color:#9ACD32;
}

li.active a, li.active a:hover {
border-bottom-color: #9ACD32;
color:#9ACD32;

}
   
 
    /*----- Content of Tabs -----*/
    
 
    .tab {
        display:none;
    }

    .tab.active {
        display:block;
    }

        
.logoLeft {
  /* height: 90px; */
  position: absolute;
  margin: auto;
  display: block;
  /* //top: 99px; */
  bottom:2px;
  left:-3px;
  right: 0;
  
}
.logoRight {
  /* height: 90px; */
  position: absolute;
  margin: auto;
  display: block;
  /* //top: 99px; */
  bottom:87px;
  right:11px;
 
  
}
.logoCenter {
  /* height: 90px; */
  position:absolute;
  /* //margin: auto; */
  display: block;
  /* //top: 99px; */
  bottom:91px;
  text-align: center;
  left: 0;
  right: 0;;



margin-right: auto;
 
}
.logo{
    border-radius: 50%;   
}

.home-block {
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8);
  position: absolute;
  top: 80%;
  transition: top .5s ease;
  color: white
}
.fusion-flip-box :hover  {
  top: 0;
transform: rotateY(180);
z-index: 30;
}

.one {
  width: 300px;
  height: 250px;
  margin: 50px auto;
  overflow: hidden;
  background-color: #663399;
  position: relative;
  
}
.two {
  width: 330px;
  height: 250px;
  background-color: rgb(154,205,50, 0.8);
  position: absolute;
  top: 100%;
  transition: top .5s ease;
  color: white;
  left:0;
}
.one:hover .two {
  top: 0;
  transform: rotateY(180);
z-index: 30;
}
.two p {
  margin: 0;
  padding: 1em;
  color: #ffffff;
  font-size: 15px;
  text-align: center;
  padding-right:40px;
}
.logoCenter h2 {
  font-family: 'Inconsolata', Consolas, monospace;
	font-size: 4em;
	color: black;
    position: relative;
    text-align: center;
    margin: auto;
    font-weight: bold;
    bottom: -66px;

}
.logoCenter img {
    position: relative;
    
    bottom: -82px;
}
.logoLeft h2 {
  font-family: 'Inconsolata', Consolas, monospace;
	font-size: 4em;
	color: black;
    position: relative;
    bottom:74px;
    font-weight: bold;
    left:194px;
}
.typing{
    overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .2em solid white; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation: 
    typing 2.5s steps(10, end),
    blink-caret .75s step-end infinite;
}
@keyframes typing {
  from { width: 0 }
  to { width: 50% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: white; }
}
.logoLeft img {
    position: relative;
    
    bottom: -55px;
}
.logoRight h2 {
  font-family: 'Inconsolata', Consolas, monospace;
	font-size: 4em;
	color: black;
    position: relative;
    right:165px;
    font-weight: bold;
    bottom: 10px;

}
.logoRight img {
    position: relative;
    
    bottom: -112px;
}


#toTop:hover {
    background-color: #a0ce4e;
}
#toTop {
    background-color: #333;
    border-radius: 4px 4px 0 0;
    bottom: 0;
    color: #fff;
    display: none;
    height: 35px;
    position: fixed;
    right: 30px;
    text-align: center;
    text-transform: uppercase;
    width: 48px;
    opacity: .9;
    z-index: 10000;
    -webkit-transition: all .2s ease-in-out 0s;
    transition: all .2s ease-in-out 0s;
}
.fa-angle-double-up:before {
    
    color:red;
}



</style>

<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <p>PROJECT DETAILS</p> -->
                    @if($productlist->logo_position==1)
                
                    <div class="logoLeft">
                        <img src="{{asset('uploads/images/products/')}}/{{$productlist->image_logo}}" alt="" width="168px" height="168px" class="logo">
                        <h2 class="typing">{{$productlist->product_name}}</h2>
                    </div>
                    @endif
                    @if($productlist->logo_position==2)
                   
                    <div class="logoRight">
                        <img src="{{asset('uploads/images/products/')}}/{{$productlist->image_logo}}" alt="" width="168px" height="168px" class="logo">
                        <h2 class="typing">{{$productlist->product_name}}</h2>
                    </div>
                    @endif
                    @if($productlist->logo_position==3)
                    <div class="logoCenter">
                        <img src="{{asset('uploads/images/products/')}}/{{$productlist->image_logo}}" alt=""   width="168px" height="168px" class="logo">
                        <h2 class="typing">{{$productlist->product_name}}</h2>
                    </div>
                    @endif
                   
                    <div class="detailsImage">
                        <img src="{{asset('uploads/images/products/')}}/{{$productlist->image}}" alt="" width="99%" height="400">
                    </div><br>
                    
                </div> 
            </div> 
            <br>
            <div class="fusion-title title fusion-title-size-two" style="margin-top:0px;margin-bottom:31px;"><h2 class="title-heading-left" style="font-size:35px;"><b>Welcome To {{$productlist->product_name}} </b></h2><div class="title-sep-container"><div class="title-sep sep-double" style="border-color:#e0dede;"></div></div></div>   
            <div class="row">
                    <div class="col-md-8">
                        <div class="detailsParagraph">
                                {!!html_entity_decode($productlist->product_desc)!!}
                            
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
                                    <div class="fusion-title title fusion-title-size-two" style="margin-top:0px;margin-bottom:12px;"><h2 class="title-heading-left">Our Services</h2><div class="title-sep-container"><div class="title-sep sep-double" style="border-color:#e0dede;"></div></div></div><div class="fusion-flip-boxes flip-boxes row fusion-columns-4">
                                    @foreach($services as $service)   
                                    
                                    <div class="fusion-flip-box-wrapper fusion-column col-lg-3 col-md-3 col-sm-3" >
                                            <div class="fusion-flip-box">
                                                <div class="flip-box-inner-wrapper">
                                                    <div class="flip-box-front one" style="background-color:#f6f6f6;border-color:rgba(0,0,0,0);border-radius:4x;border-style:solid;border-width:1px;color:#747474;">
                                                        <div class="flip-box-front-inner" style="">
                                                            <div class="flip-box-grafix flip-box-circle" style="background-color:#333333;border-color:#333333;margin-top:55px;">
                                                                <i class="" style="color:#ffffff;"><img src="{{asset('uploads/images/products_service/')}}/{{$service->image}}" alt="5Terre" height="40" width="40"></i>
                                                            
                                                            </div>
                                                            <h2 class="feature-body " style="color:#333333;">{{$service->service_name}}</h2>
                                                            <div class="feature-body two">
                                                                <p>{{$service->service_desc}}</p>
                                                         </div>
                                                        </div>&nbsp;
                                                    </div>
                                                        <div class="flip-box-back" style="background-color:#a0ce4e;border-color:rgba(0,0,0,0);border-radius:4x;border-style:solid;border-width:1px;color:#ffffff;">
                                                        
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
    </div>
                    <div  class="fusion-fullwidth fullwidth-box fusion-blend-mode nonhundred-percent-fullwidth"  style='background-color: rgba(255,255,255,0);background-position: center center;background-repeat: no-repeat;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;'>
                        @if($productlist->feature_id==1)
                            <div class="fusion-builder-row fusion-row ">
                                <div  class="fusion-layout-column fusion_builder_column fusion_builder_column_1_1  fusion-one-full fusion-column-first fusion-column-last 1_1"  style='margin-top:0px;margin-bottom:20px;'>
                                    <div class="fusion-column-wrapper" style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;"  data-bg-url="">
                                        <div class="fusion-title title fusion-title-size-two" style="margin-top:0px;margin-bottom:31px;"><h2 class="title-heading-left">Major Features</h2><div class="title-sep-container"><div class="title-sep sep-double" style="border-color:#e0dede;"></div></div></div><div class="fusion-flip-boxes flip-boxes row fusion-columns-4">
                                            <div class="tabs">
                                                <ul class="tab-links fusion-checklist fusion-checklist-1" style="font-size:13px;line-height:22.1px;">
                                                    <li class="active"><a href="#tab{{$activeFeature->id}}">{{$activeFeature->name}}</a></li>
                                                    @foreach($featuresDesc as  $feature)
                                                        <li><a href="#tab{{$feature->id}}">{{$feature->name}}</a></li>
                                                    @endforeach
                                                    
                                                </ul>
                                                <div class="tab-content" class="fusion-checklist fusion-checklist-1" style="font-size:13px;line-height:22.1px;">
                                                    <div id="tab{{$activeFeature->id}}" class="tab active">
                                                        <ul class="fusion-checklist fusion-checklist-1" style="font-size:13px;line-height:22.1px;padding-left: 20px;">
                                                        <li class="fusion-li-item">
                                                            <span style="background-color:#52b9d8;font-size:11.44px;height:22.1px;width:22.1px;margin-right:9.1px;" class="icon-wrapper circle-yes">
                                                                <i class="fusion-li-icon fa fa-check" style="color:#ffffff;"></i>
                                                            </span>
                                                            <div class="fusion-li-item-content" style="margin-left:31.2px;">{{$activeFeature->features_desc}}</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                    
                                                    
                                                    @foreach($featuresDesc as  $feature)
                                                    
                                                    <div id="tab{{$feature->id}}" class="tab">
                                                    <ul class="fusion-checklist fusion-checklist-1" style="font-size:13px;line-height:22.1px;padding-left: 20px;">
                                                        <li class="fusion-li-item">
                                                            <span style="background-color:#52b9d8;font-size:11.44px;height:22.1px;width:22.1px;margin-right:9.1px;" class="icon-wrapper circle-yes">
                                                                <i class="fusion-li-icon fa fa-check" style="color:#ffffff;"></i>
                                                            </span>
                                                            <div class="fusion-li-item-content" style="margin-left:31.2px;">{{$feature->features_desc}}</div>
                                                        </li>
                                                    </ul>
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
                    
                    <div class="fusion-separator fusion-full-width-sep sep-none" style="margin-left: auto;margin-right: auto;margin-top:20px;margin-bottom:20px;">

                    </div>
                    <div  class="fusion-fullwidth fullwidth-box fusion-blend-mode nonhundred-percent-fullwidth"  style='background-color: rgba(255,255,255,0);background-position: center center;background-repeat: no-repeat;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;'>
                    @if($productlist->chooseUs_id==1)
                    <div class="fusion-builder-row fusion-row ">
                            <div  class="fusion-layout-column fusion_builder_column fusion_builder_column_1_1  fusion-one-full fusion-column-first fusion-column-last 1_1"  style='margin-top:0px;margin-bottom:20px;'>
                                <div class="fusion-title title fusion-title-size-two" style="margin-top:0px;margin-bottom:31px;">
                                    <h2 class="title-heading-left">Why Choose Us ?</p></h2>
                                    <div class="title-sep-container">
                                        <div class="title-sep sep-double" style="border-color:#e0dede;"></div>

                                    </div>

                                </div>
                                    
                                 @foreach($chooses as $choose)
                                    <ul class="fusion-checklist fusion-checklist-94" style="font-size:13px;line-height:22.1px;">
                                        <li class="fusion-li-item">
                                            <span style="background-color:#a0ce4e;font-size:11.44px;height:22.1px;width:22.1px;margin-right:9.1px;" class="icon-wrapper circle-yes">
                                                <i class="fusion-li-icon fa fa-arrow-right" style="color:#ffffff;"></i>
                                            </span>
                                            <div class="fusion-li-item-content" style="margin-left:31.2px;">{{$choose->reasons}}</div>
                                        </li>
                                    </ul>
                                @endforeach
                         
                            
                        </div>
                    </div>
                    @endif
    </div>
                          
    <div class="to-top-container"><a href="#" id="toTop" style="display: inline;"><span id="toTopHover" style="opacity: 0;"></span><i class="fa fa-angle-double-up"></i><span class="screen-reader-text">Go to Top</span></a></div>
                        


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
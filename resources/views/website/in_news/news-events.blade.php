@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/news.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>News & Events
<span> </span>
</h4>
<ul>
<li><a href="../">Home</a></li>   
<li> > </li>  
<li>News Room</li>      
<li> > </li>  
<li class="active">News & Events</li>     
</ul>
</div>
</div>
</div>
</div>

</section> 

<section class="news-evnts">
<div class="container">
<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12">

<ul class="press-roomr">						
    
<li> 

<div class="pris-imging">
<img src="{{ asset('/public/website/assets/images/press-1.jpg') }}" alt="" class="img-fluid">
</div>

<div class="">
<h3>Specialised hospital for geriatric care launched in Chennai </h3>   
<h4>It will also offer preventive geriatric check up at home reducing the waiting time at the hospital for consultation.</h4>
<span class="bts-non">The Hindu</span>
<div class="common-button drk">
<a href="{{ url('news-detail') }}">Know More</a>
</div>
</div> 

<div class="post-dte">
<h5>09<span>May</span></h5>
</div>
    
</li>  						
    
    <li> 
    
    <div class="pris-imging">
    <img src="{{ asset('/public/website/assets/images/press-2.jpg') }}" alt="" class="img-fluid">
    </div>
    
    <div class="">
    <h3>முதியோருக்காக மருத்துவமனை தி.நகரில் </h3>   
    <h4>சென்னை - முதியோருக்கு தரமான மருத்துவ சிகிச்சை அளிக்கும் விதமாக, தி.நகரில், ...</h4>
    <span class="bts-non">Dinamalar</span>
    <div class="common-button drk">
    <a href="https://m.dinamalar.com/district_detail.php?id=2655854" target="_blank">Know More</a>
    </div>
    </div> 
    
    <div class="post-dte">
    <h5>09<span>May</span></h5>
    </div>
        
    </li> 						
    
    <li> 
    
    <div class="pris-imging">
    <img src="{{ asset('/public/website/assets/images/press-3.jpg') }}" alt="" class="img-fluid">
    </div>
    
    <div class="">
    <h3>Improving quality of life of elders News Today  </h3>   
    <h4>Chennai: Hospitalisation for seniors is now getting more attention due to the understanding of their multiple health ... </h4>
    <span class="bts-non">Nyoooz</span>
    <div class="common-button drk">
    <a href="https://www.nyoooz.com/news/chennai/1523714/improving-quality-of-life-of-elders-news-today/" target="_blank">Know More</a>
    </div>
    </div> 
    
    <div class="post-dte">
    <h5>09<span>May</span></h5>
    </div>
        
    </li> 
    
</ul>

</div>

</div>

</div>    
</div>
</section>

@endsection
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
    
    @foreach ($news_event as $news_events)
    <li> 

        <div class="pris-imging">
        <img src="{{url('/public/files/news_event/gallery_image/'.$news_events['gallery_image'])}}" alt="" class="img-fluid">
        </div>
        
        <div class="">
        <h3>{{$news_events["title"]}}</h3>   
        
        <div class="common-button drk">
         
            <a href="{{route('news-detail', ['slug' => $news_events->slug])}}" target="_blank">Know More</a>

        </div>
        </div> 
        
        <div class="post-dte">
        <h5>09<span>May</span></h5>
        </div>
            
        </li> 
    @endforeach
 						
    
    
</ul>

</div>

</div>

</div>    
</div>
</section>

@endsection
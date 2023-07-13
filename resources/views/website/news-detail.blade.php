@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">

<div class="col-lg-12">
<h1>News & Events</h1>
<ul>
<li><a href=""> Home </a></li>
<li> > </li>
<li> News & Events </li> 
<li> > </li>
<li class="active">{{$news_event_one->title}} </li>
</ul>
</div>

</div>
</div>
</section>



<section class="doctor-details-contest">
<div class="container">
<div class="row">

<div class="col-lg-12">

<div class="row"> 

<div class="row dctr-detilsbox">

<div class="col-lg-4">
<div class="doc-tor-img">
    
<a data-fancybox="gallery1" href="{{url('/public/files/news_event/gallery_image/'.$news_event_one->gallery_image)}}" data-caption="Geri Care Hospital">
<img src="{{url('/public/files/news_event/gallery_image/'.$news_event_one->gallery_image)}}" alt="Geri Care Hospital" class="w-100">
</a>
@if ($news_event_one->image)
<a class="d-none" data-fancybox="gallery1" href="{{url('/public/files/news_event/'.$news_event_one->image)}}" data-caption="Get Back to Life ! Sparkle your Intimate Beauty">&nbsp;</a>
@endif
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
    <h3>{{$news_event_one->title}}</span></h3>
<p>{!! $news_event_one->description !!}</div>
<div class="news-evnts-btns d-flex">

    @if ($news_event_one->video_link)
    <div class="cmn-brdrd-btn">
        <a data-fancybox="gallery5" href="{{$news_event_one->video_link}}"  data-caption="Nalanthana with Geriatrician Dr. Srinivasan | Sun Life Show"> Watch Video </a>
    </div>
    @endif
    @if ($news_event_one->referral_link)
<div class="common-button drk"> 
<a href="{{$news_event_one->referral_link}}" target="_blank">Know More</a>
</div>
@endif
</div>

</div>

</div> 



</div> 

</div>
</div>

</div>
</div>
</section> 
 

@endsection
@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/patient-stories.jpg') }}" alt="Geri Care Hospital" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h1>Patient Stories
<span> </span>
</h1>
<ul>
<li><a href="./">Home</a></li>   
<li> > </li>  
<li>Patient Stories</li>   
<li> > </li>   
<li class="active">Video Testimonials</li>   
</ul>
</div>
</div>
</div>
</div>

</section> 


<section class="testimonials-sector">
<div class="container">
<div class="row">

<div class="col-lg-12">
<div class="top-tbulars text-center">
<ul>
<li><a href="{{ url('testimonials') }}">Story Testimonials</a></li>
<li class="act"> Video Testimonials </li>
</ul>
</div>
</div> 
@foreach ($testimonial as $testimonials )
@if($testimonials['video_link']!='')
@php 
$link = $testimonials['video_link'];
$video_id = explode("?v=", $link);
$video_id = $video_id[1];
@endphp
<div class="col-lg-3 gallery-img mb-3">
<a data-fancybox="gallery{{$testimonials['id']}}" href="{{$testimonials['video_link']}}" data-caption="Geri Care - Wellness by Geriatricians">
<img src=" http://img.youtube.com/vi/{{$video_id}}/mqdefault.jpg" alt="Geri Care Hospital" class="img-fluid" />
<span>{{$testimonials['title']}}</span>
</a> 
</div> 		
@endif
@endforeach 

</div>
</div>
</section>

 

@endsection
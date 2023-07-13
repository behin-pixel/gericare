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
<li>Testimonials</li>   
<li> > </li>   
<li class="active">Story Testimonials</li>   
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
<li class="act">Story Testimonials</li>
<li><a href="{{ url('videotestimonials') }}"> Video Testimonials</a></li>
</ul>
</div>
</div>
@foreach ($testimonial as $testimonials )
<div class="col-sm-12 col-md-12 col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
	
<div class="testimonials"> 
<div class="rev-rat">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="Geri Care Hospital" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="Geri Care Hospital" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="Geri Care Hospital" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="Geri Care Hospital" class="">
<img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="Geri Care Hospital" class="">
</div>    
<span>{{$testimonials['title']}} <small> {{$testimonials['designation']}}</small></span>
<div class="testimonial-content mCustomScrollbar"> 
  {!! $testimonials['description'] !!}
</div> 

</div>

</div>
@endforeach


</div>
</div>
</section>

 

@endsection
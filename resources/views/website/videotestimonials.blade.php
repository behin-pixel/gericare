@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/patient-stories.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>Patient Stories
<span> </span>
</h4>
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
<li><a href="{{ url('testimonials') }}">Story Testimonials</a></li>
<li class="act"> Video Testimonials </li>
</ul>
</div>
</div> 

<div class="col-lg-3 gallery-img mb-3">
<a data-fancybox="gallery1" href="https://www.youtube.com/watch?v=_DVP1O0fdVI" data-caption="Geri Care - Wellness by Geriatricians">
<img src="{{ asset('/public/website/assets/images/testu-1.jpg') }}" alt="" class="img-fluid" />
<span>Geri Care - Wellness by Geriatricians</span>
</a> 
</div> 		 

</div>
</div>
</section>

 

@endsection
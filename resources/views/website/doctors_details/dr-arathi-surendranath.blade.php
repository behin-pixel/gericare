@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
	@php 
    $name='Dr. Arathi Surendranath';
    @endphp 
<div class="col-lg-12">
<h1>Our Doctors</h1>
<ul>
<li><a href=""> Home </a></li>
<li> > </li>
<li> Geri Care Hospitals </li>
<li> > </li>
<li><a href=""> Doctors </a></li>
<li> > </li>
<li class="active"> Dr. Arathi Surendranath </li>
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
<div class="col-lg-7">

<div class="row dctr-detilsbox">

<div class="col-lg-4">
<div class="doc-tor-img">
<img src="{{ asset('/public/website/assets/images/doctor-img-11.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr. Arathi Surendranath<span>Radiation Oncology</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 6+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>DMRT MD</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Tamil, English  </span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Location <span> </span></h4>
</div>
</div>

</div>


<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Arathi Surendranath is a Radiation Oncologist having an experience of 6 years in this field. Working in the oncology department of reputed hospitals she completed her MBBS from Kasturba Gandhi College For Women in 2003, her Diploma in Medical Radiology from Cancer Institute (WIA), Chennai in 2007, and MD - Radiotherapy from Cancer Institute (WIA), Adyar in 2009. She is a member of the Indian Brachytherapy Society. The service provided by the doctor is: Treatment of Central Nervous System Tumors.
</p>
</div>

 

  
 

</div>

<div class="col-lg-5">
    
@include('website.doctorsideform')

</div>

</div>
</div>

</div>
</div>
</section>
 

@endsection
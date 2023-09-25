@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
	@php 
    $name='Dr. Mohan Rao';
    @endphp 
<div class="col-lg-12">
<h2>Our Doctors</h2>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li>
<li> > </li>
<li> <a href="{{ url('gericare-hospital') }}">Geri Care Hospitals </a></li>
<li> > </li>
<li><a href="{{ url('our-doctors') }}"> Our Doctors  </a></li>
<li> > </li>
<li class="active"> Dr. Mohan Rao </li>
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

<div class="col-lg-5">
<div class="doc-tor-img">
<img src="{{ asset('/public/website/assets/images/doctor-img-19.jpg') }}" alt="Dr. Mohan Rao - General Surgeon" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h1>Dr. Mohan Rao<span>General Surgeon</span></h1>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 36+ Years</span></h4>
 <h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span> MBBS, MS (GEN. SURGERY), FIAGES</span></h4>
 <h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English  </span></h4>
<!-- <h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Location <span>  </span></h4>   -->
</div>
</div>

</div>


<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. A Mohan Rao, qualified from Kasturba Medical College Mangalore/ Manipal, Karnataka in 1985, is a Sr. Consultant in General, Minimal Access (Laparoscopic) Surgery and Bariatric Surgery. He is also a Fellow of the Indian Association of Gastro Endo-surgeons. He qualified as a General surgeon in the year 1985 and subsequently trained as a Laparoscopic Surgeon. 
</p>
<p>He has more than 36 years of Surgical Experience as a General Surgeon and 20 years of experience in Laparoscopic Surgery. His areas of specialty include Laparoscopic Surgery, Bariatric Surgery, Breast Surgery & General Surgery.
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
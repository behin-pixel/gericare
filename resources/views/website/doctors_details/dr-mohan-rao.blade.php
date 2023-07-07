@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
	@php 
    $name='Dr Mohan Rao';
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
<li class="active"> Dr Mohan Rao </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-19.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr Mohan Rao<span>General Surgeon</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 36+ Years</span></h4>
 <h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span> MBBS, MS (GEN. SURGERY), FIAGES</span></h4>
 <h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Tamil, English  </span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Location <span>  </span></h4>  
</div>
</div>

</div>


<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p> Dr A Mohan Rao qualified from Kasturba Medical College Mangalore/ Manipal, Karnataka in 1985 is a Sr. Consultant in General, Minimal Access (Laparoscopic) Surgery and Bariatric Surgery. He is also a Fellow of the Indian Association of Gastro Endo-surgeons. He qualified as a General surgeon in the year 1985 and subsequently trained as a Laparoscopic Surgeon. He has more than 36 years of Surgical Experience as a General Surgeon and 20 years of Laparoscopic Surgery. Areas of Specialty include Laparoscopic Surgery, Bariatric Surgery, Breast Surgery & General Surgery.
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
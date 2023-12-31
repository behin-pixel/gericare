@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
	@php 
    $name='Dr. U.P. Srinivasan';
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
<li class="active"> Dr. U.P. Srinivasan </li>
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
<img src="{{ asset('/public/website/assets/images/up-srinivas.webp') }}" alt="Dr. U.P. Srinivasan - Senior Surgical Gastroenterolgist" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h1> Dr. U.P. Srinivasan  <span>Senior Surgical Gastroenterolgist</span></h1>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 20+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span>MBBS, MS, MCh(Surgical Gastroenterology)
</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Locations <span>T. Nagar</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. U.P. Srinivasan is a renowned Surgical Gastroenterologist in Chennai. Dr. Srinivasan did his undergraduation from reputed Madurai Medical College. His passion for surgery led him to do his masters at Coimbatore Medical College. During this period, his exposure to laparoscopy and skill (key-hole surgery) grew under the guidance of Prof. Harushi Osugi from Japan.  He did his super Specialisation (MCh, Surgical Gastroenterology) from Madras Medical College under Prof Chandramohan, gaining enormous exposure to all diseases of the gastrointestinal tract, benign and malignant.
</p>
<p>His attachment to the liver transplant unit at Stanley Medical College under Prof Surendran made him very proficient with liver and gall bladder diseases. Even at the liver transplantation unit, his skills with laparoscopy always came to the fore and he was often called in to do the complex procedures with laparoscopy. Procedures for Gastrointestinal Reflux Disease (GERD), Bile Duct Surgeries, Stomach and Colon Cancer were all managed by keyhole surgeries. 
Apart from being an expert surgeon, he has keen interest in music and is well known among medical fraternity for his flavour for music as well.
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
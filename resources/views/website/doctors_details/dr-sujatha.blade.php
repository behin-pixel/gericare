@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
	@php 
    $name='Dr. Sujatha';
    @endphp 
<div class="col-lg-12">
<h1>Our Doctors</h1>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li>
<li> > </li>
<li> <a href="{{ url('gericare-hospital') }}">Geri Care Hospitals </a></li>
<li> > </li>
<li><a href="{{ url('our-doctors') }}"> Our Doctors  </a></li>
<li> > </li>
<li class="active"> Dr. Sujatha </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-22.jpg') }}" alt="Geri Care Hospital" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr. Sujatha<span>Consultant Psychiatrist </span></h3>
 <h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 8+ Years</span></h4> 
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span> M.B.B.S.</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> English, Tamil </span></h4>
<!--<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Location <span>  </span></h4> -->
</div>
</div>

</div>


<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Sujatha, Post her M.B.B.S specialized in Psychiatry from Kasturibai medical college and worked as a private consultant from 2001-2007 with a main focus on women and adolescents. During those years she co-founded an NGO to provide psychological help to those involved in major disasters like fire, tsunami, etc. Was actively involved in an integrative social experiment of spirituality and mental health. Following her move to the United States, she was actively involved in California’s county suicide program along with research for depression and PTSD at Stanford School of Medicine and veterans hospital. Moved to Chennai in 2016 and is in private practice since then.
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
@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
	@php 
    $name='Dr Asir Julin';
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
<li class="active"> Dr Asir Julin </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-18.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr Asir Julin<span>Neurologist</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 15+ Years</span></h4>
 <h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span> MBBS, MD, DM (Neurology)</span></h4>
 <h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Tamil, English  </span></h4>
<!-- <h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Location <span> </span></h4>   -->
</div>
</div>

</div>


<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Asir Julin is Asst. Professor of Neurology passed out of Rajah Muthiah Medical College Chidambaram with a distinction in Anatomy & MD from Government medical college, Chidambaram, DM Neurology from Madras Medical College. With a special interest in IV thrombolysis Dr.Asir has been associated with several reputed hospitals in Chennai as a consultant & stroke treatment specialist during the golden hour. With over 15 years of hands-on experience, Dr. Asir has worked in government hospitals in both departments of Neurology & Paediatric neurology. Being passionate about the subject Dr. Asir has participated in several national & regional conferences, and had been active in paper presentations, oral presentations, professional certification to his credit.
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
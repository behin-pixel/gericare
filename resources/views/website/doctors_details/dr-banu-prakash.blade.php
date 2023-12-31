@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
	@php 
    $name='Dr. B.C.Bhanu Prakash';
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
<li class="active"> Dr. B.C.Bhanu Prakash </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-13.jpg') }}" alt="Dr. B.C.Bhanu Prakash - Ortho Geriatrician" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h1>Dr. B.C.Bhanu Prakash<span>Ortho Geriatrician</span></h1>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 21+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span> MBBS, MS (Orthopedics)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English </span></h4>
<!-- <h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Location <span>  </span></h4> -->
</div>
</div>

</div>


<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. B C Bhanu Prakash is a Senior Consultant specialising in primary, complex & revision knee and hip replacement surgeries. He has completed his medical education from Stanley Medical College, Chennai and his MS (Ortho) in M.P. Shah Medical College, Gujarat, where he has won the “Best Outgoing Postgraduate Student Award” for the year 2000 – 2001.</p>

<p>He worked in the prestigious Ganga Hospital, Coimbatore, a super-specialty orthopedic and trauma care center for four years where he specialised in primary knee and hip replacement and revision hip and knee replacement. He has done the prestigious “Willis Marshall fellowship” in advanced arthroplasty and arthroscopy under Prof. Jegan Krishnan at the Flinders Medical Center, Adelaide, Australia, and he has done short term fellowships in knee and shoulder surgery at Sports Med Hospital, Adelaide and Ashford Hospital, Adelaide, Australia.</p>

<p>He is one of the few surgeons who has pioneered computer navigated minimally invasive Hiflex total knee replacement in this part of the country. He is also an expert in uni - compartmental knee arthroplasty, elbow and ankle replacements. He is an expert in trauma surgery including minimally invasive fracture fixations, complex polytrauma and pelvic fracture fixations. He is also the Chief Orthopedic Consultant at Sree Devi Ortho Clinic, Porur.</p>
 
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
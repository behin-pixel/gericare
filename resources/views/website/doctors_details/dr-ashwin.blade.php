@extends("website.layout.welcome")

@section('content')

@php 
$name='Dr Ashwin Subramaniam';
@endphp 
<section class="inner-layer-banner">
<div class="container">
<div class="row">

<div class="col-lg-12">
<h1>Our Doctors</h1>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li>
<li> > </li>
<li> <a href="{{ url('gericare-hospital') }}">Geri Care Hospitals </a></li>
<li> > </li>
<li><a href="{{ url('our-doctors') }}"> Our Doctors  </a></li>
<li> > </li>
<li class="active"> Dr Ashwin Subramaniam </li>
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
<img src="{{ asset('/public/website/assets/images/dr-ashwin-subramaniam.webp') }}" alt="Dr. Ashwin Subramaniam, Senior Consultant- Internal Medicine & Diabetologist" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr Ashwin Subramaniam<span>Senior Consultant- Internal Medicine & Diabetologist</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 16+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>MBBS RMMC, DNB(Internal Medicine), MRCP(UK)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> English, Tamil</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Location <span> T Nagar</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Ashwin is a highly respected general physician and diabetologist based in Chennai, India. With extensive experience in his field, he has garnered a reputation for his ability to handle complex medical problems, both acute and chronic, particularly in elderly patients.</p>


<p>He has special interest in lifestyle diseases like Diabetes Mellitus, Hypertension, Dyslipidemia and  infectious diseases like Hepatitis & HIV. </p>

<p>He has presided in various seminars and CME, educating the junior doctors in approach towards Elderly patients. He regularly conducts Public outreach programs to raise awareness in elderly patients about maintaining a healthy lifestyle. He has shown leadership in setting up and running the acute medical unit for the elderly. He has excellent bedside manners and sound knowledge of ethical standards in delivering medical care.</p>
</div>

<div class="main-contdvshon">
<h4>Education</h4>
<ul>
<li>MBBS RMMC, Annamalai University, Chidambaram (2005)</li>
<li>DNB (Internal Medicine)  - National Board of Examinations, New Delhi (2010)</li>
<li>MRCP (UK)- Royal College of Physicians, United Kingdom (2011)</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Awards and Affiliation</h4>
<ul>
<li>Dr.Harnath Memorial Award for the BEST POST GRADUATE in Internal Medicine by Apollo Hospitals, Chennai (2008)</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Memberships</h4>
<ul>
<li>Association of Physicians of India - Life member</li>
<li>Indian Medical Association (IMA)</li>
</ul>
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
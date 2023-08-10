@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
    @php 
    $name='Dr. P. Rajkumar';
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
<li class="active"> Dr. P. Rajkumar </li>
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
<img src="{{ asset('/public/website/assets/images/dr-p-rajkumar.webp') }}" alt="Dr. P. Rajkumar - Senior Surgical Oncologist" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr. P. Rajkumar <span>Senior Surgical Oncologist</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 24+ Years</span></h4>
<h4 class="educaton"><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span>MBBS, MS - General Surgery, MCh - Surgical Oncology
</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English, Hindi</span></h4>
<!-- <h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Locations <span> - </span></h4> -->
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr Rajkumar Poovananathan is a Senior Surgical Oncologist at Geri Care Hospital. He heads the Geriatric Oncology Department at the Hospital.
</p>
<p>He has completed his MBBS from Coimbatore Medical College in the year 1998. He worked in the Department of emergency, KG Hospitals Coimbatore for a year after which he pursued his Masters in General Surgery from Coimbatore Medical College, completing in 2002. He continued his career as Assistant professor in the Department of Surgery at PSG college of Medical Sciences till march 2003. </p>
<p>He then continued his super specialty degree of MCh Surgical Oncology from the renowned Cancer Institute Adyar Chennai between 2003-2006 and worked as assistant professor from mar 2006-march 2007. Past eleven years he worked as Consultant Surgical Oncologist in various Tertiary care hospitals catering to the Department of oncology in various renowned cancer care hospitals.
</p>
<p>In 2015 a group of oncologists who have known each other for the past 15 years formed a team comprising him called Integrated Cancer Care Group which is involved in oncology group practice.
</p>
</div>

<!-- <div class="main-contdvshon">
<h4>Education</h4>
<ul>
<li>MBBS  Kilpauk Medical College 1998</li>
<li>DGO  Madras Medical College 2003</li>
<li>MD Geriatrics -  Madras Medical College 2008</li>
<li> Fellowship Certificate in Diabetology MV hospitals 2009</li>

</ul>
</div> -->

<!-- <div class="main-contdvshon">
<h4>Professional Memberships</h4>
<ul>
<li>Indian Academy of Geriatrics</li>

</ul>
</div> -->



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
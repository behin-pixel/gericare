@extends("website.layout.welcome")

@section('content')


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
<li class="active"> Dr. K. Anupuma  </li>
</ul>
</div>
@php 
$name='Dr. K. Anupuma';
@endphp 
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
<img src="{{ asset('/public/website/assets/images/dr-k-anupuma.webp') }}" alt="Dr. K. Anupuma - Consultant Geriatrician" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr. K. Anupuma <span>Consultant Geriatrician</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 18 Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>MBBS, DGO, MD(Geriatrics)
</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Tamil, English, Hindi</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span> Home visit on appointment basis</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr Anupama is an experienced Geriatrician and one of the few qualified female Geriatricians with expertise in female geriatric conditions. She has worked at major Multispecialty Hospitals in Chennai. She has taken the lead in domiciliary problems in elderly. She is a regular participant in academic forums for elderly. She has done over 5000 home visits for sick elderly. Has been guiding patient families at home to manage chronic conditions such as parkinsons disease, dementia, urinary incontinence, wound management at home.
</p>
</div>

<div class="main-contdvshon">
<h4>Education</h4>
<ul>
<li>MBBS  Kilpauk Medical College 1998</li>
<li>DGO  Madras Medical College 2003</li>
<li>MD Geriatrics -  Madras Medical College 2008</li>
<li> Fellowship Certificate in Diabetology MV hospitals 2009</li>

</ul>
</div>

<div class="main-contdvshon">
<h4>Professional Memberships</h4>
<ul>
<li>Indian Academy of Geriatrics</li>

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
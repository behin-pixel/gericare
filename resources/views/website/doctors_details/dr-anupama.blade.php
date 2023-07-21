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
<li class="active"> Dr. K. Anupama  </li>
</ul>
</div>
@php 
$name='Dr. K. Anupama';
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
<img src="{{ asset('/public/website/assets/images/dr-k-anupuma.webp') }}" alt="Dr. K. Anupama - Consultant Geriatrician" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr. K. Anupama <span>Consultant Geriatrician</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 18 Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span>MBBS, DGO, MD(Geriatrics)
</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English, Hindi</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Locations <span> Home visit on appointment basis</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Anupama is a highly experienced Geriatrician with specialised expertise in female geriatric conditions. As one of the few qualified female Geriatricians, she has made significant contributions in the field of elderly care in Chennai. With her extensive experience, she has worked at major Multispecialty Hospitals in the city, providing comprehensive medical care and support to the elderly population.</p>
<p>Dr. Anupama has taken the lead in addressing unique challenges that elder females face while living. She has hence dedicated her services to understanding the importance of a comfortable and safe environment, and has shown active involvement in designing care plans that cater to the specific needs of the elderly women community. </p>
<p>Her dedication is evident from her 5000 home visits for the sick elderly and in the guidance that she has rendered during her visits, to manage chronic conditions such as parkinsons disease, dementia, urinary incontinence, and wound management.</p>
</div>

<div class="main-contdvshon">
<h4>Education</h4>
<ul>
<li>MBBS  Kilpauk Medical College 1998</li>
<li>DGO  Madras Medical College 2003</li>
<li>MD Geriatrics -  Madras Medical College 2008</li>
<li> Fellowship Certificate in Diabetology MV Hospitals 2009</li>

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
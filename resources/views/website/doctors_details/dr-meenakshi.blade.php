@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
    @php 
    $name='Dr. Meenakshi';
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
<li class="active">  Dr. Meenakshi </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-26.jpg') }}" alt="Dr. Magesh R - Consultant Geriatrician" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr. Meenakshi<span> Consultant - Obstetrician & Gynaecologist</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 17+ Years </span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span> MBBS, DGO </span></h4>
  <h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Tamil, English  </span></h4>
<!-- <h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span>  </span></h4>   -->
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr Meenakshi Balasubramanian is well known for her holistic approach and counselling Skill with a great Patient-Doctor relationship towards women’s health. She completed her graduation from Kilpauk Medical College & obtained her post graduation diploma in Gynaecology & obstetrics from the prestigious Madras Medical College.<br><br>
She also underwent training programmes and obtained certificate in fellowship In minimal access surgery and infertility, She has special interests in high risk pregnancies, laparoscopy, Gynec Endocrinology.<br><br>
She has independently handled 1000+ pregnancies and Gynecology related cases.
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
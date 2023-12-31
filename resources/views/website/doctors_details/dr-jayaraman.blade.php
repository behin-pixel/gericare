@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
	@php 
    $name='Dr Jayaraman';
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
<li class="active"> Dr Jayaraman </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-20.jpg') }}" alt="Dr Jayaraman - Pulmonologist" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h1>Dr Jayaraman<span>Pulmonologist</span></h1>
 <h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 31+ Years</span></h4>
<h4 class="educaton"><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span> MBBS, Diploma in Tuberculosis and Chest Diseases (DTCD)</span></h4>
 <h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English  </span></h4>
<!-- <h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Location <span>  </span></h4>   -->
</div>
</div>

</div>


<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p> Dr. S. Jayaraman is a practicing Pulmonologist in Chennai, India. His background working experience as a Junior Consultant - Department of Chest Medicine, Santosham Chest Hospital and Apollo Hospitals, Chennai (2000 to 2007). His strength includes being meticulous and diligent. He has good clinical expertise in dealing with all kinds of pulmonary diseases. He is well-versed with various diagnostic and therapeutic pulmonary procedures. He is also involved in research work related to pulmonary and Sleep disorder diseases.
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
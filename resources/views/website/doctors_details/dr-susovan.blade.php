@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
    @php 
    $name='Dr Susovan Mitra';
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
<li class="active"> Dr Susovan Mitra </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-23.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr Susovan Mitra<span>Chief Critical Care Physician & Intensivist</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 10+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>MBBS, MD (Emergency Medicine)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Tamil, English, Hindi, Bengali</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span> T.Nagar</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Susovan Mitra possesses vast expertise in effectively managing critical conditions such as Sepsis, MODS (Multiple Organ Dysfunction Syndrome), and emergency cases in both neurosurgical and medical fields, specifically in elderly patients. He actively conducts training programs aimed at educating junior doctors and nurses on providing optimal care for critically ill elderly individuals.</p>

<p>As part of his commitment to advancing geriatric emergency care, Dr. Mitra has initiated a Fellowship in Geriatric Emergency at Geri Care Hospital. Additionally, he served as the organizing chairman for GERICRITICON, the first-ever conference focused on the advancements and challenges in critical care specifically tailored for senior citizens. This conference took place in June 2022 and aimed to foster knowledge exchange and progress in critical care for the elderly.</p>

<p>Dr. Mitra's dedication to the field of geriatric emergency care is evident in his efforts to train medical professionals and his contributions to organizing significant events that bring attention to the unique needs of critically ill elderly patients.</p>

</div>

<div class="main-contdvshon">
<h4>Education</h4>
<ul>
<li>MBBS  Nilratan Sircar Govt Medical college, Kolkata </li>
<li>MD (Emergency Medicine) VMKV Medical College, Salem</li>
<li>Fellowship in Critical Care Medicine, SMF Hospital, Chennai</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Professional Memberships</h4>
<ul>
<li>Member of Indian Society of Critical Care Medicine (ISCCM)</li>
<li>Chairman - ISCCM Chennai Chapter</li>
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
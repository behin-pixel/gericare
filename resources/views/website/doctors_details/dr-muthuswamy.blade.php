@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
    @php 
    $name='Dr. Muthuswamy';
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
<li class="active">  Dr. Muthuswamy </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-6.jpg') }}" alt="Dr. Muthuswamy - Senior Interventional Consultant Cardiologist" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h1>Dr. Muthuswamy<span>Senior Interventional Consultant Cardiologist</span></h1>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 35+ Years </span></h4>
<h4 class="educaton"><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span>MB MRCP(UK) MRCP(Ire) FRCP(Lon) MRCP(Edin) FACC</span></h4>
 <h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English  </span></h4>
<!-- <h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Locations <span>  </span></h4>   -->
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Muthusamy is an alumnus of Madras Medical College. He has trained and worked in the United Kingdom from 1981 in Premier Institutions. He has a specialisation in Cardiology and has worked as a Consultant in Cardiology at various centres from 1989 and eventually settled in Rotherham, Yorkshire, England in 1996.</p>
<p>He was the Head and Clinical Lead for Cardiology and ran the cardiology unit efficiently for which he was awarded the Bronze award. He was an Honorary Senior Clinical Lecturer at the University of Sheffield Medical School and the teaching faculty for medical students, and a trainer for junior doctors and post graduates.</p>
<p>He was an examiner for undergraduates and postgraduates (MRCP exam). As a clinical scientist, he was the Principal Investigator for various International, National and local research programs involving Thrombolysis, anti-platelet therapies, lipid lowering drugs, arrhythmias, heart failure, acute coronary syndrome and angina. His research outcomes were published in reputable international journals and presented several papers at National and International meetings.</p>

</div>


<div class="main-contdvshon"> 
<h4>Special interests</h4>
<ul>
<li>Angiogram, angioplasty with stents and complex interventions</li>
<li>Devices therapy – Pace makers, CRT (Heart Failure) and Defibrillators (ICD)</li>
<li>Valvular heart valves diseases</li>
<li>Arrhythmias like atrial fibrillation</li>
<li>Hypertension</li>
<li>Preventive cardiology</li>
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
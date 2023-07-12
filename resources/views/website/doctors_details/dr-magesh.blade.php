@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
    @php 
    $name='Dr Magesh R';
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
<li class="active">  Dr. Magesh R </li>
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
<img src="{{ asset('/public/website/assets/images/dcv.jpg') }}" alt="Dr. Magesh R - Consultant Geriatrician" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr. Magesh R<span>Consultant Geriatrician</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 15+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>MBBS, MRCP, CCT (Int. Med. & Geriatrics), FRCP</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> English, Tamil</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span> T.Nagar, Velachery, Adyar</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Magesh completed his MBBS from Madras Medical College, Chennai. Following which, he underwent training in Internal Medicine at the University Hospital of Hartlepool and obtained MRCP (UK). A career in higher specialist training in Geriatric and Internal Medicine awaited him at the Northern Deanery, University of Newcastle, UK.</p>

<p>During his training, he gained experience in various specialties of Geriatric medicine and Internal Medicine at esteemed hospitals including James Cook University Hospital in Middlesbrough, Royal Sunderland Hospitals in Sunderland, University Hospital of North Tees in Stockton, Royal Victoria Hospitals in Newcastle, and Darlington Memorial Hospitals in Darlington.</p>

<p>After successfully completing his training, Dr. Magesh was appointed as a Consultant at the University Hospital of Hartlepool, UK in 2005. He joined Apollo Hospitals, Chennai, as a Consultant in 2007 and took the initiative to establish Outpatient Geriatric Services at Westside Clinic, Anna Nagar, in the year 2010.</p>

<p>Dr. Magesh's journey has equipped him with valuable skills and expertise in the field of Geriatric medicine and Internal Medicine, and helped him garner training for his professional roles in the UK and in India.</p>

</div>


<div class="main-contdvshon">
<h4>Education</h4>
<ul>
<li>MBBS (1995) from prestigious Madras Medical College</li>
<li>MRCP (UK) (2000) from Royal College of Physicians UK</li>
<li>UK board Certification in Internal Medicine</li>
<li>UK board Certification in Geriatric Medicine ( 2005)</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Experience</h4>
<ul>
<li>Specialist Registrar Internal Medicine & Geriatrics, Newcastle UK (2001)</li>
<li>Consultant Physician&Geriatrician, University hospital North Tees & Hartlepool UK (2005)</li>
<li>Consultant Physician & Geriatrician, Apollo hospitals, Chennai (2007 - Present)</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Affiliation</h4>
<ul>
<li>Indian Academy of Geriatrics ( Secretary 2019 - 2022)</li>
<li>British Geriatrics Society</li>
<li>Royal College of Physicians, UK</li>
</ul>
</div>


<div class="main-contdvshon">
<h4>Publications   </h4>
<ul>
<li>Fall in Elderly during COVID 19 Pandemic - JIAG 2020;16:133 – 35</li>
<li>Asymptomatic PE in patient with post COVID 19 - Indian Journal of Applied Research</li>
<li>Infection - Vol 10 Nov 2020
<li>Asymptomatic Osteoporosis in Indian Geriatric - JIAG 2017; 13:101-105 Population						 
<li>Co morbidity predicts hospitalization in COPD - Age&Ageing Nov 2003;32:37 (s)
<li>Pathway of care for COPD - Age & Ageing Nov 2003;32:38 (s)
<li>Audit on use of Anticoagulants in Elderly in AF - Age&Ageing Feb 2002;31:38 (s)
</ul>
</div>

<div class="main-contdvshon">
<h4>Recent Presentations </h4>
<ul>
<li>RCPE India Update - RCPE (UK), April 2023
<li>GERICON 2022 - Kolkota, December 2022
<li>JODHPUR ORATION - GERICON, Warangal, December 2021
<li>GERICON 2019 - CMC Vellore, December 2019
<li>FORUM (Panel discussion) - Chennai, February 2019
<li>GERICON 2018 - Kota, Rajasthan, December 2018
<li>GERICON 2017 - AIIMS, New Delhi, December 2017</li>
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
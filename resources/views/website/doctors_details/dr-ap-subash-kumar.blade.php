@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
	@php 
    $name='Dr. AP Subash Kumar';
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
<li class="active"> Dr. AP Subash Kumar </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-24.jpg') }}" alt="Geri Care Hospital" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr. AP Subash Kumar<span>Breast Surgical Oncologist </span></h3>
  <h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 35+ Years</span></h4> 
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span>MBBS, FRCSI, FRCS (Ed), FRCS (Gen), CCST- UK
</span></h4>
 <h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> English, Hindi, தமிழ் </span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Location <span>  </span></h4>  
</div>
</div>

</div>


<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>He graduated with a Bachelor of Medicine & Surgery, MBBS, from Madras Medical College, India 1984. He completed his postgraduate training and further work experience in the UK.</p>

<p>His higher postgraduate training in Breast and Endocrine Surgery was at the University Hospital of Wales, Cardiff, UK. He completed a Fellowship in Breast Surgery in Miami, Florida, USA, in 2003.</p>

<p>He worked with Prof R Mansel in Cardiff Breast Unit - 2002-03, a pioneer in sentinel node biopsy (ALMANAC Trial) and its implementation through the New Start Training Programme, in the UK.</p>

<p>He worked with Prof MH Wheeler - 2001-02, a world-renowned Endocrine Surgeon, practicing at UHW, Cardiff, UK. His experience in Thyroid and Parathyroid surgery was updated in this tertiary referral center for Endocrine disease.</p>

<p>He worked as a Consultant General and Breast Surgeon in Milton Keynes and Dudley Hospitals, UK, after his training, with a special interest in Breast Screening and Breast Reconstruction, 2004 - 09 He moved to Singapore (2010 -2016) to start a Breast Unit at the new hospital, KTPH in Yishun. He introduced SNB and ROLL techniques in Breast Screening Surgery there, through the Nuclear Medicine department, and organised a comprehensive Tumour board for the benefit of Breast Cancer patients in KTPH. He then moved to the Breast Centre in KK Hospital, Singapore as Senior Consultant in Breast Surgery, to upgrade the Breast Department there.
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
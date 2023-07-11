@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
	@php 
    $name='Dr. Vikram';
    @endphp 
<div class="col-lg-12">
<h1>Our Doctors</h1>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li>
<li> > </li>
<li> <a href="{{ url('gericare-hospital') }}">Geri Care Hospitals </a></li>
<li> > </li>
<li><a href="{{ url('our-doctors') }}"> Our Doctor's  </a></li>
<li> > </li>
<li class="active"> Dr. Vikram </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-15.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr. Vikram<span>Surgical Gastroenterologist</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 20+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span> MBBS, DNB(Gastroenterology)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Hindi, English, Tamil</span></h4>
<!-- <h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Location <span> </span></h4> -->
</div>
</div>

</div>


<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Geriatric Surgical gastroenterology Dr. Vikram is a surgical gastroenterologist, with special interest in endoscopy and endoscopic management of gastrointestinal bleed, treating recurrent hernia and large hernia, recurrent fistula in ano, enterocutanous fistula.

</p>

<p>With over 20 years of experience, he was professor of surgery Sri Ramachandra medical college, Dr. Vikram graduated from Madras Medical College, MMC and pursued a Masters in General Surgery from Grant Medical College, Mumbai on merit.
</p>

<p>He then travelled to England as a Specialist Registrar where he got trained in Laparoscopy and Endoscopy. He further obtained FRCS from the Royal College of Surgeons of Glasgow and subsequently passed the D.N.B (Diplomate National Board) in Surgical Gastro Enterology from New Delhi.
</p>

<p>Being passionate about the subject he has been actively sharing knowledge and publishing papers in many international journals in Surgical Gastro Enterology.  Dr. Vikram is a specialized and trained expert in handling advanced Laparoscopic Procedures, Surgery for Malignancy (Cancers) including esophageal, gastric, colon & rectal cancer, all therapeutic Endoscopic Procedures and Laser Surgery for Anal Procedures.He is one of the pioneers of fast track surgery(Day care surgery ) and specialist in tension free mesh repairs for a hernia.  
</p>

<p>To a lot of papers & publications to his credit Dr. Vikram conducts teaching programmes for the M.R.C.S/ course and for the D.N.B. surgery postgraduates. He is currently a tutor for the royal college of surgeons too.
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
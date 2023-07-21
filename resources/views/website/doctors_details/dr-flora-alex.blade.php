@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
    @php 
    $name='Dr. Flora Alex';
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
<li class="active"> Dr. Flora Alex </li>
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
<img src="{{ asset('/public/website/assets/images/no-img-f.jpg') }}" alt="Geri Care Hospital" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr. Flora Alex<span>Consultant Geriatrician</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 8+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span>M.B.B.S., M.D (Geriatrics)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Locations <span> OP - Anna Nagar<br>
Home visits on appointment basis
</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Flora possesses extensive knowledge and expertise in effectively managing diseases commonly found in the elderly. She specialises in conducting Comprehensive Geriatric Assessments (CGA) and tailoring personalized treatment plans accordingly. Dr. Flora has a wealth of knowledge and experience in organizing various specialised clinics to address prevalent geriatric issues and challenges. These clinics include the Comprehensive Geriatric Assessment Clinic, Falls Clinic, Incontinence Clinic, Pain Clinic, Memory Clinic, and Rehabilitation Clinic.</p>

<p>Dr. Flora's preferred approach involves working within an integrated healthcare system, and collaborating with a diverse multidisciplinary team that typically consists of physiotherapists, social workers, nurses, and nurse aides who have received specialised training in geriatric care. By engaging this comprehensive team, Dr. Flora aims to provide holistic and well-rounded care to her patients.</p>

<p>Additionally, Dr. Flora actively participates in raising awareness about elder abuse and caregiver stress. She offers guidance and support in managing both these critical aspects of elderly care. Dr. Flora's experience extends beyond clinical settings as she has successfully managed complex patients in homecare settings as well as assisted living and skilled nursing facilities (SNFs).</p>
</div>

<div class="main-contdvshon">
<h4>Education</h4>
<ul>
<li>M.D (Geriatrics) -  Madras Medical College, Chennai</li>
<li>M.B.B.S. - Pondicherry Institute of Medical Sciences, Pondicherry</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Memberships & Certifications</h4>
<ul>
<li>Life member of Indian Academy of Geriatrics (IAG)</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Works & Publications</h4>
<ul>
<li>Procalcitonin As A Marker Of Sepsis In Hospitalised Elderly - Published this study in Scholars Journal of Applied Medical Sciences dated 28.02.2019 (DOI: 10.21276/sjams.2019.7.2.79)</li>
<li>E-Journal: Association Between Short Physical Performance Battery and Recurrent Falls In Elderly
</li>
<li>Poster Presentation on “A Study of Relationship Between Procalcitonin And Severity Of Sepsis In Elderly” in GERICON 2017- AIIMS, New Delhi which was published in Journal Of Indian Academy Of Geriatrics, December 2017 Vol.13, No.4</li>

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
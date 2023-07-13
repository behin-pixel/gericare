@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
    @php 
    $name='Dr. Kathiresan ';
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
<li class="active">Dr. Kathiresan  </li>
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
<img src="{{ asset('/public/website/assets/images/dr.kathiresan.webp') }}" alt="Geri Care Hospital" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr. Kathiresan <span>Senior Surgical Oncologist</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 20+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span>MBBS, MS (General Surgery), MCh( Surgical Oncology) 
</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Locations <span> T Nagar</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr Kathiresan is a reputed senior surgical oncologist from Chennai. He did his undergraduate(MBBS) from Madras Medical College and then went on to pursue  post graduation in General Surgery(MS) (Gen.Surg) at Madras Medical College. After a brief stint as senior resident in the Department of Plastic Surgery, Govt. Royapettah Hospital, he did his super specialization(MCh) in surgical oncology at Cancer Institute (WIA), Adyar, Chennai in 2002 and successfully completed his “super specialty” course in 2005. After completion he continued at Cancer Institute (WIA) as faculty in the Department of Surgical Oncology.
</p>
<p>Attracted by the special interest in “Bone and Soft Tissue Tumors”, he designed innovative newer prosthesis which improved the quality of life of patients with bone tumors. He was heading the division of “Musculoskeletal and Genitourinary Oncology” for a period of 7 years. He is not only an eminent teacher in the field of oncology but also was an examiner in Surgical Oncology in various Medical Universities across the India. He has extensive experience in Neo Bladder reconstruction after radical cystectomy of urinary bladder cancer (Making a new pouch to function as urinary bladder after removal)</p>
<p>Being associated with renowned cancer care hospitals Dr.Kathiresan was awarded 'Best Doctor Award' from the Tamil Nadu, Dr.M.G.R Medical University, Chennai in September 2012.
</p>
<p>He has presented many research papers in National and International Conferences and received Best Paper awards.
</p>
<p>He has delivered Lectures as Faculty in multiple National and International Conferences. He has published more than 20 papers in peer reviewed National and International Journals. He is also a reviewer in few Journals.
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
<h4>Professional Work</h4>
<ul>
<li>14 years specialist in performing limb salvage surgeries for patients with Bone and Soft Tissue Sarcomas and Neo bladder reconstruction for patients with bladder cancers.
</li>

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
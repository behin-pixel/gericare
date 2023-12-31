@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">

<div class="col-lg-12">
<h2>Our Doctors</h2>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li>
<li> > </li>
<li> <a href="{{ url('gericare-hospital') }}">Geri Care Hospitals </a></li>
<li> > </li>
<li><a href="{{ url('our-doctors') }}"> Our Doctors  </a></li>
<li> > </li>
<li class="active"> Dr. V. Arulmozhiselvan   </li>
</ul>
</div>
@php 
$name='Dr. V. Arulmozhiselvan';
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
<img src="{{ asset('/public/website/assets/images/dr-v-arulmozhiselvan.webp') }}" alt="Dr. V. Arulmozhiselvan - Consultant Geriatrician" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h1>Dr. V. Arulmozhiselvan <span>Consultant Geriatrician</span></h1>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 8+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span>MBBS, MD (Geriatrics)
</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Locations <span> Adambakkam</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr V. Arulmozhiselvan is a Consultant Geriatrician, who looks forward to enhancing the health of senior citizens by his expertise in both inpatient and outpatient hospital settings.</p>

<p>With extensive training and experience, he has excelled by working collaboratively with interdisciplinary teams comprising specialists, physiotherapists, social workers, geriatric nurses, and caregivers. With his presence, Geri Care strives to provide comprehensive care and support to older adults, addressing their unique needs and ensuring their well-being.</p>

<p>He is skillful in managing elderly patients in the Geriatric Intensive Care Unit (ICU). He has good clinical expertise to reduce in-hospital morbidity and mortality rates and to promote further independence among the elderly. Working with Geri Care, he wishes to deliver top-notch care to your loved ones.</p>

<p>Furthermore, he is passionate to educate and inform the community about the importance of geriatric care, thereby fostering a society that values and supports the senior population.</p>

<p>Additionally, with our Home Care Team, he assesses the support system, addresses living conditions and health care needs of the elderly, and makes certain that they receive the right level of care - from the comfort of their homes.</p>

<p>Whether you require outpatient consultations or in-hospital care, he delivers a positive impact on the well-being of the elderly and ensures a higher quality of life for you and your loved ones.</p>

</div>

<div class="main-contdvshon">
<h4>Education</h4>
<ul>
<li>M.D (Geriatrics) -  Madras Medical College, Chennai</li>
<li>M.B.B.S. - KAP Viswanatham Govt. Medical College, Tiruchirappalli</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Awards </h4>
<ul>
<li>Certificate of appreciation from District Collector, Thanjavur for the duty rendered during restricting COVID Pandemic in Thanjavur District</li>
<li>University 2<sup>nd</sup> Rank in The Tamil Nadu Dr. M.G.R. Medical University M.D. Final exams.</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Memberships & Certifications </h4>
<ul>
<li>Life member of Indian Academy of Geriatrics (IAG)</li> 
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
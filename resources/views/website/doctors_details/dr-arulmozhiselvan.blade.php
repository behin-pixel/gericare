@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">

<div class="col-lg-12">
<h1>Our Doctors</h1>
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
$name='Dr Arulmozhiselvan';
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

<div class="col-lg-4">
<div class="doc-tor-img">
<img src="{{ asset('/public/website/assets/images/no-img-m.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr. V. Arulmozhiselvan <span>Consultant Geriatrician</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 8+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>MBBS, MD (Geriatrics)
</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Tamil, English</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span> Adambakkam</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>He is a consultant geriatrician, who looks forward to enhancing the health of senior citizens by his expertise in both inpatient and outpatient hospital settings.</p>

<p>With extensive training and experience, he has excelled by working collaboratively with interdisciplinary teams comprising specialists, physiotherapists, social workers, geriatric nurses, and caregivers. With his presence, Geri Care strives to provide comprehensive care and support to older adults, addressing their unique needs and ensuring their well-being.</p>

<p>He is skillful in managing elderly patients in the Geriatric Intensive Care Unit (ICU). He has good clinical expertise to reduce in-hospital morbidity and mortality rates and to promote further independence among elderly. Working with Geri Care, he wishes to deliver top-notch care to your loved ones.</p>

<p>Furthermore, he is passionate to educate and inform the community about the importance of geriatric care, fostering a society that values and supports our senior population.</p>

<p>Additionally, with our Home Care Team he assesses the support system, addresses the living conditions and health care needs of the elderly, and makes certain that they receive the right level of care in the comfort of their own homes.</p>
<p>Whether you require outpatient consultations or in-hospital care, he intends to deliver a positive impact on the well-being of elderly and to ensure a higher quality of life for you or your loved ones.</p>

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
<li>University 2nd Rank in The Tamilnadu Dr. M.G.R. Medical University M.D. Final exams.</li>
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
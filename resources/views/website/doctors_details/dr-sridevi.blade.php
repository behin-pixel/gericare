@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
 @php 
$name='Dr. K. Sreedevi';
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
<li class="active"> Dr. K. Sreedevi  </li>
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
<img src="{{ asset('/public/website/assets/images/sridevi.webp') }}" alt="Geri Care Hospital" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr. K. Sreedevi <span>Senior Pulmonologist</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 16+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span>MBBS, DNB(Respiratory Medicine)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English, Hindi, Kannada</span></h4>
<!-- <h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Locations <span> - </span></h4> -->
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Sreedevi K is a highly knowledgeable professional with a Specialisation in the management of diverse respiratory diseases commonly seen in elderly patients. Her expertise encompasses conditions such as asthma, COPD (Chronic Obstructive Pulmonary Disease), bronchiectasis, pneumonias, tuberculosis, pleural diseases, sleep disorders, and interstitial lung diseases.
</p>
<p>Dr. Sreedevi K actively engages in academic pursuits and stays abreast of the latest developments in her field. She has actively participated in NAPCON, the annual conference organized by the Indian Chest Society, where experts convene to share insights and advancements in the realm of respiratory care.
</p>
<p>In addition, Dr. Sreedevi K possesses proficiency in interpreting Pulmonary Function Tests (PFT), a diagnostic tool used to assess lung function. Moreover, she has considerable experience in performing numerous Bronchoscopy procedures, a diagnostic and therapeutic technique involving the examination of the airways and lung tissue.</p>
<p>Overall, Dr. Sreedevi K's extensive knowledge, active involvement in academic activities, and proficiency in performing diagnostic procedures make her a highly competent professional in the field of respiratory disease management, particularly in elderly patients.
</p>
</div>

<div class="main-contdvshon">
<h4>Education</h4>
<ul>
<li>MBBS - M.S. Ramaiah Medical College, Bangalore (2004)
</li>
<li>DNB (Respiratory Medicine) from Apollo Hospitals, Chennai (2010)
</li>

</ul>
</div>

<div class="main-contdvshon">
<h4>Professional Memberships</h4>
<ul>
<li>Member of Indian Chest Society
</li>
<li>Indian Medical Association
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
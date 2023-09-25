@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
    @php 
    $name='Dr. N. Lakshmipathy Ramesh';
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
<li class="active"> Dr. N. Lakshmipathy Ramesh </li>
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
<img src="{{ asset('/public/website/assets/images/dr-n-lakshmipathy-ramesh.webp') }}" alt="Dr N. Lakshmipathy Ramesh - Senior Consultant Geriatrician" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h1>Dr. N. Lakshmipathy Ramesh<span>Senior Consultant Geriatrician</span></h1>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 20+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span> MBBS, M.D (Geriatrics), PGD (Diabetes)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English, Telugu</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Locations <span> T. Nagar - All days<br>
Adambakkam - All days <br>
Adyar - Tuesday Mornings
</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Lakshmipathy Ramesh (Dr. LPR) is an established Geriatrician in Chennai. with over two decades of experience in taking care of the elderly people. He always prefers a multidisciplinary holistic approach towards them based on the Comprehensive Geriatric Assessment (CGA). He is a passionate Geriatrician who likes to educate his patients and their caregivers. It enables his patients to make well informed healthcare decisions. He feels a preventive approach is also very important. </p>

<p>He is an able administrator who first realised the potential of Geriatrics when he helped to establish the Geriatrics department in Amrita hospital, Kochi. He is one of the earliest in the country to see the potential of Geriatrics. He always recognized Geriatrics as an independent specialty to cater to the needs of the elderly. Then he moved to Chennai where he was affiliated with a multi-specialty hospital. He established a Geriatric unit as well as the first orthogeriatric unit in India. He also established an elderly care clinic in the evening simultaneously.</p>

<p>He then realised the needs of the elderly and co-founded a homecare team under “Gericare home services” with aspiring fellow Geriatricians. Later, he established the “first senior citizen hospital of India” with fellow doctors caring for the elderly. It is now expanded into an institution providing 360 degree care for the elderly having assisted living, doctors home visits, transitional care with a skilled nursing facility, and outpatient clinics. He aspires to take Geriatrics several notches higher. </p>
</div>

<div class="main-contdvshon">
<h4>Education </h4>
<ul>
<li>MBBS - Coimbatore Medical College</li>
<li>MD Geriatrics - Madras Medical College</li>
<li>PGD in Diabetes</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Experience </h4>
<ul>
<li>2005 - Began his career at Amritha Institute of Medical Sciences, Cochin and established the Geriatrics Department. He was also in-charge of the community outreach programme.</li>
<li>2008 - Was heading the Geriatric Department of a multi-specialty hospital in Chennai for a decade.</li>
<li>2018 - Founder & Director of Geri Care </li>
</ul>
</div>


<div class="main-contdvshon">
<h4>Memberships & Certifications</h4>
<ul>
<li>Indian Academy of Geriatrics; Life Member</li>
<li>American Geriatrics Society; Member </li>
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
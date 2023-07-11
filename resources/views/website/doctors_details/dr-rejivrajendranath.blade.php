@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
    @php 
    $name='Dr. Rejiv Rajendranath';
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
<li class="active">  Dr. Rejiv Rajendranath </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-8.jpg') }}" alt="Dr. Magesh R - Consultant Geriatrician" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr. Rejiv Rajendranat<span>Medical Oncologist</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 20+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>  MBBS, MD (General Medicine), DM (Oncology)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Tamil, English </span></h4>
<!-- <h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span>  </span></h4> -->
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Rejiv Rajendranath is a Medical Oncologist & has an experience of 19 years in this field. Having completed MBBS from Kasturba Medical College in 1999, MD - General Medicine from Kasturba Medical College in 2003 and DM - Oncology from Cancer Institute (WIA), Chennai in 2007. Dr.Rejiv had been working with reputed hospitals in Chennai in the oncology department he is a member of Indian Medical Association (IMA) and Indian Society of Medical and Paediatric Oncology (ISMPO). Some of the services provided by the doctor are: Chemotherapy of Solid Tumors, Hormone Therapy For Breast Cancer, Chemotherapy of Haematological Malignancies, Melanoma Treatment and Stem Cell Transplantation etc.</p>

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
@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
    @php 
    $name='Dr Thiruvengita Prasad';
    @endphp 
<div class="col-lg-12">
<h1>Our Doctors</h1>
<ul>
<li><a href=""> Home </a></li>
<li> > </li>
<li> Geri Care Hospitals </li>
<li> > </li>
<li><a href=""> Doctors </a></li>
<li> > </li>
<li class="active">Dr. G. Thiruvengita Prasad   </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-14.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr. G. Thiruvengita Prasad <span>Senior Orthopedic Surgeon</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 22+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>MBBS
</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Tamil, english, Telugu</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span> - </span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Thiruvengita Prasad G is a renowned Spine Surgeon, Sports Medicine Surgeon and Orthopedist and has an experience of 22 years in these fields. He completed MBBS from Stanley Medical College & Hospital, Chennai in 1997 and DNB - Orthopedics/Orthopedic Surgery from DNB board, New Delhi in 2001.
He is a member of Tamilnadu Medical Council and Medical Council of India (MCI). Some of the services provided by the doctor are: Fracture Treatment, Joint Pain Treatment, Osteoporosis Treatment, Knee Osteotomy and Correction of deformities etc.
</p>
<p>He has been the backbone of Orthogeriatrics department at the Geri Care Hospital. His expertise include managing hip fractures by doing procedures like Total Hip replacement or Hemiarthroplasty. He is also good at managing Osteoarthritis of knee and shoulder joints.</p>
<p>He works closely with Geriatric Physiotherapists to ensure optimal recovery and rehabilitation for elderly patients</p>
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
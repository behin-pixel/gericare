@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
    @php 
    $name='Dr. S. Balamurugan';
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
<li class="active"> Dr. S. Balamurugan </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-17.jpg') }}" alt="Geri Care Hospital" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr. S. Balamurugan<span>Senior Neurosurgeon</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 20+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span>M.Ch (Neurosurgery)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> English, Tamil</span></h4>
<!-- <h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Locations <span>  </span></h4> -->
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. S Balamurugan acquired MCh (Neurosurgery) from the prestigious Madras Institute of Neurology, Madras Medical College, and obtained fellowship & advanced training from Fujita Health University, Japan, in Cerebrovascular, Skull Base & Neuro endoscopy. </p>


<p>He has worked as a Neurosurgeon in Madras Medical College & Rajiv Gandhi Govt. General Hospital, Omandurar TN Govt Multi Superspeciality Hospital and Govt Kilpauk Medical College Hospital.
</p>


<p>He has operated more than 3500 patients in his Neurosurgical career in the Government and Corporate sectors ranging from Aneurysm, AVM surgeries, Skull base Surgeries including Transnasal Pituitary adenoma resections, Skull Base Meningiomas and Craniopharyngioma surgeries, CP angle and Posterior fossa tumors. In the Spinal cord, he has performed various Spinal cord tumor surgeries. In the Spinal column and Discs, he has treated TB Spine, MicroDiscectomy of Cervical and Lumbar disc prolapse, Anterior and Posterior Cervical, and Trans thoracic and Posterior Lumbar fusion procedures for Spinal Stabilization in Spine Fractures. He is also a specialist in Neuro Endoscopic procedures.
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
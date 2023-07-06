@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">

<div class="col-lg-12">
<h1>Our Doctors</h1>
<ul>
<li><a href=""> Home </a></li>
<li> > </li>
<li> Geri Care Hospitals </li>
<li> > </li>
<li><a href=""> Doctors </a></li>
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

<div class="col-lg-4">
<div class="doc-tor-img">
<img src="{{ asset('/public/website/assets/images/doctor-img-17.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr. S. Balamurugan<span>Senior Neurosurgeon</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 20+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>M.Ch (Neurosurgery)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> English, Tamil</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span>  </span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr S Balamurugan acquired MCh (Neurosurgery) from the prestigious Madras Institute of Neurology , Madras Medical College and obtained Fellowship & advanced training from Fujita Health University, Japan in Cerebrovascular, Skull Base & Neuro endoscopy. He has worked as a Neurosurgeon in Madras Medical College & Rajivgandhi Govt. General Hospital, Omandurar TN Govt Multi Superspeciality Hospital and Govt Kilpauk Medical College Hospital.</p>


<p>He has operated more than 3500 patients in his Neurosurgical career in the Government and Corporate sector ranging from Aneurysm, AVM surgeries, Skull base Surgeries including Transnasal Pituitary adenoma resections, Skull Base Meningiomas and Craniopharyngioma surgeries, CP angle and Posterior fossa tumors. In the Spinal cord, had performed various Spinalcord tumor surgeries. In the Spinal column and Discs, he has treated TB Spine, Micro Discectomy of Cervical and Lumbar disc prolapse, Anterior and Posterior Cervical , Trans thoracic and Posterior Lumbar fusion procedures for Spinal Stabilization in Spine Fractures. He is a Specialist in Neuro Endoscopic procedures also.
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
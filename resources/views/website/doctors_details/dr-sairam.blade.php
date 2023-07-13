@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
	@php 
    $name='Dr. Sairam';
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
<li class="active"> Dr. Sairam </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-25.jpg') }}" alt="Geri Care Hospital" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr. Sairam<span>Vascular Surgeon </span></h3>
  <h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 12+ Years</span></h4> 
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span>MBBS., MRCSED., DNG (Gen. Sur)</span></h4>
  <h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English  </span></h4>
<!--<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Location <span>  </span></h4> -->
</div>
</div>

</div>


<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr Sairam Subramanian, Senior Vascular and Endovascular surgeon is a board-certified and internationally trained vascular and endovascular surgeon with more than 12 years of experience in the management of vascular disease. He has had extensive training in open and endovascular (keyhole) surgical procedures with emphasis on minimally invasive treatment for varicose veins, limb salvage and preventing amputation in diabetic feet, and open and endovascular management of aortic aneurysms.</p>

<p>He graduated from the prestigious Madras Medical College, following which he undertook surgical training at the same institute. He then went on to specialty surgical training in Cardiovascular surgery at the Southern Railway Hospital, Perambur, and subsequently, completed a 3-year MCh course in Vascular Surgery at the Madras Medical College, the only institute to offer the course in India at that time.</p>

<p>The field of vascular surgery was undergoing a paradigm shift towards minimally invasive procedures (endovascular surgery) at that time. To further refine his surgical skills and to train in endovascular procedures, he underwent training in Austria and the UK. He had training as an overseas fellow at a very high-volume vascular surgery center at the Paracelsus Medical School, Salzburg, Austria where he trained in endovascular procedures, carotid artery surgery to prevent stroke, and difficult redo bypass surgery for preventing amputation in limbs. He underwent further extensive training in endovascular and endovenous procedures at the Doncaster Vascular Centre, UK as a Senior Endovascular fellow with emphasis on minimally invasive treatment for aortic aneurysms, endovascular intervention, and outpatient procedures for varicose veins including radiofrequency ablation and laser ablation.</p>

<p>He has been treating patients with vascular disease at various hospitals in Chennai for more than 8 years. During this period, he has performed more than 500 endovenous ablation procedures and has had extensive experience in limb salvage procedures for diabetic feet and aortic aneurysm repair.
He also currently holds the responsibilities of the Secretary of the Chennai Vascular Society and is Assistant Editor of the Indian Journal of Vascular and Endovascular Surgery. He is a member of various vascular societies including the Vascular Society of India, the Society of Vascular Surgery (USA), and the European Society of Vascular Surgery. To keep abreast with the ever-changing technology, he is a regular participant in international meetings and has presented many papers at national and international conferences.</p>

<p>Dr. Sairam’s career aim has been to work as a vascular specialist offering medical management, and open and endovascular surgical procedures for all vascular diseases. He continues to further develop his special interest in open and endovascular intervention for limb salvage in ischemic diabetic foot and to establish and develop an Institute of Vascular and Endovascular Surgery to teach and train young vascular surgical aspirants.
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
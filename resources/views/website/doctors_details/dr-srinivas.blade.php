@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
    @php 
    $name='Dr V. Srinivas';
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
<li class="active"> Dr V. Srinivas </li>
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
<img src="{{ asset('/public/website/assets/images/det-dcotor-1.jpg') }}" alt="Geri Care Hospital" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr V. Srinivas <span> Senior Consultant Geriatrician </span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 32+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span> MD, MRCP (UK), DIP.Geriatric Medicine (UK)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English, Telugu, Hindi</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Locations <span> T.Nagar, Adambakkam, Adyar</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. V. Srinivas is a leading Geriatrician with over three decades of clinical practice in India and the UK. He is the Founder Director of Geri Care organization. He obtained MRCP degree (1992) and diploma in Geriatric medicine (1991) from the Royal College of physicians, UK. He already had MD in General Medicine (1988) and MBBS (1984) from Kilpauk Medical College Chennai.
</p>
<p>Since 1994, he has been a Consultant/Visiting Consultant for several hospitals. In April 2012, he founded the Chennai Geriatrics Centre. He is the President of the Chennai chapter of the “Indian Academy of Geriatrics”, member of the “Indian Geriatrics Society”, the American Geriatrics Society, the British Geriatrics Society, the Indian Medical Association and the Association of Physicians of India. He is also an executive member of the National Association of Senior Citizens Association of India (NASCAI).</p>

<p>Until 2014, Dr. Srinivas was Visiting Consultant Geriatrician at Queen Alexandra Hospital, Portsmouth, UK. He took an active part in teaching programmes for junior doctors and departmental education meetings. He has also worked at the Royal Liverpool University Hospital, the University hospital in Cardiff, the Queen’s Medical Centre at Nottingham University Hospital, Leicester University Hospital, and Whittington Hospital in London, among others. His special interests include polypharmacy and osteoporosis.
</p>

<p>He is one of the few Geriatricians who deprescribes medicines for elderly and also avoids polypharmacy at all costs. His interest in Falls, lead Geri Care to start Falls Prevention Clinic, wherein patients are assessed for risk of fall by Multi Disciplinary team comprising of Geriatrician, Physiotherapist, Nurse using standardised assessment scales.
</p>

<p>He actively takes part in all academic activities at Geri care and also takes  special care about training nurses for homecare. His vision along with Dr Lakshmipathy Ramesh to develop a full fledged Geriatric care across all care settings lead to Geri Care being what’s today. 
</p>

</div>

 <!-- <div class="main-contdvshon">
<h4> </h4>
<ul>
<li> </li>
 
</ul>
</div> -->

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
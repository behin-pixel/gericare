@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
    @php 
    $name='Dr. S. Guru Balaji';
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
<li class="active"> Dr. S. Guru Balaji </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-12.jpg') }}" alt="Geri Care Hospital" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr. S. Guru Balaji <span>Senior Urologist</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 20+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span>MBBS, DNB Urology</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> English, Tamil</span></h4>
<!-- <h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Locations <span>  </span></h4> -->
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr.Guru Balaji is trained both in India and United Kingdom in urology capable of performing open, endourological and laparoscopic procedures.
Dr.Guru has many publications to his credit which includes a research paper on the role of alkaline phosphatase in thyrotoxicosis. He has also contributed to many international presentations such as day case laparoscopic adrenalectomy, audit of laparoscopic nephrectomies, role of Varicocele surgery, calculus anuria and many others for US, UK, Netherlands, Singapore and Australia. He has also written national and regional papers on varicocelectomy, iatrogenic urological injuries, renal tumor and transplantation, tuberous sclerosis and many others.</p>

<p>Dr Guru Balaji is a member of Royal College of Surgeons in Edinburgh, National Academy of Medical Sciences in India (MNAMS), The Tamil Nadu and Pondicherry Society of Urology and South Zone Urological Society of India. An avid learner, Dr.Guru had done several courses, had been actively involved in CME programs, paper presentations & has published numerous papers & articles at international, national, regional levels. Dr.Guru had been reaching out to public at large raising awareness on urology related diseases & management. He is also interested in teaching & training undergraduates postgraduates& paramedical students.</p>

<p>He has completed his MBBS from Madras Medical College, Chennai and his DNB from Kilpauk Medical College and did his DNB urology from Madurai. He worked as Assistant professor of Urology at SRM Medical College before he went to the UK for more specialised training.
He has experience in providing required care for the hospitalised patients having been associated with some of the prestigious hospitals over two decades.
His expertise in managing prostate problems in elderly is well-known among our patients.</p>


</div>

<div class="main-contdvshon">
<h4>Memberships</h4>
<ul>
<li>Member of Royal College of Surgeons - Edinburgh (MRCS)</li>
<li>Member of National Academy of Medical Sciences -India (MNAMS)</li>
<li>Member of The Tamil Nadu and Pondicherry Society of urologist</li>
<li>Member of the South Zone Urological Society of India</li>
<li>Urological Society of India</li>
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
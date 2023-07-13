@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
@php 
    $name='Dr V. Srinivas';
    @endphp 
<div class="col-lg-12">
<h1>Leadership</h1>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li>
<li> > </li>     
<li ><a href="{{ url('about-gericare') }}">About Us</a></li> 
<li> > </li>
<li><a href="{{ url('leadership') }}"> Leadership Team</a></li>
<li> > </li>
<li class="active"> Dr V. Srinivas</li>
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
<img src="{{ asset('/public/website/assets/images/dr-1.jpg') }}" alt="Geri Care Hospital" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr V. Srinivas<span>Geriatrician, Founder & Director</span></h3>
<!-- <h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 30+ Years</span></h4> -->
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span> MD, MRCP (UK), DIP.Geriatric Medicine (UK)</span></h4>
<!-- <h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English, Hindi</span></h4> -->
</div>
</div>

</div>

<div class="main-contdvshon">
<!-- <h4>Profile</h4> -->
<p>A leading Geriatrician with over three decades of clinical practice in India and the UK, Dr V Srinivas obtained the MRCP degree (1992) and Diploma in Geriatric Medicine (1991) from the Royal College of physicians, UK before he went on to establish Geri Care. He also has to his credit MD in General Medicine (1988) and MBBS (1984) from Kilpauk Medical College Chennai.
</p>
<p>Since 1994, he has been a Consultant/Visiting Consultant for several hospitals. In April 2012, he founded the Chennai Geriatrics Centre. He is the President of the Chennai chapter of the “Indian Academy of Geriatrics”, member of the “Indian Geriatrics Society”, the American Geriatrics Society, the British Geriatrics Society, the Indian Medical Association and the Association of Physicians of India. He is also an executive member of the National Association of Senior Citizens Association of India (NASCAI). </p>
<p>Until 2014, Dr. Srinivas was Visiting Consultant Geriatrician at Queen Alexandra Hospital, Portsmouth, UK. He took an active part in teaching programmes for junior doctors and departmental education meetings. He has also worked at the Royal Liverpool University Hospital, the University hospital in Cardiff, the Queen’s Medical Centre at Nottingham University Hospital, Leicester University Hospital, and Whittington Hospital in London, among others. His special interests include polypharmacy and osteoporosis.
</p>
</div>

<!-- <div class="main-contdvshon">
<h4>Detailed Experience</h4>
<ul>
<li>Consultant Psychiatrist, Department of Psychiatry at Gericare Hospital, Chennai (06/2022 – Present)</li>
<li>Consultant Psychiatrist, Department of Psychiatry at Kauvery Hospital, Chennai (12/2021 - 05/2022)</li>
<li>Consultant Psychiatrist,Psychiatry and Deaddiction Services at Malout Deaddiction Centre, Punjab (12/2020 - 11/2021)</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Professional Memberships</h4>
<ul>
<li>Indian Psychiatric Society</li>
<li>Indian Psychiatric Society – North Zone</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Awards & Accolades</h4>
<ul>
<li>Murugappan award by Indian Psychiatric Society for best thesis work. - ANCIPS 2019</li>
<li>Prefrontal Cortical Activity In Children With ADHD: A Functional Near Infrared Spectroscopy
 (fNIRS) Study</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Work and Presentations</h4>
<ul>
<li>Conducted one among the initial studies in the country on to assess prefrontal cortical activity using fNIRS in children with ADHD as a part of MD Thesis.</li>
<li>Speaker on Childhood Dissociation in Trauma Conclave in AIIMS, New Delhi</li>
<li>Speaker on fNIRS : Scope and Limitations in IIT-AIIMS Joint Workshop conducted at NBRC, Gurgaon</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Research and Publications</h4>
<ul>
<li>Rajkumar S, Balhara YP, Sarkar S. Cannabis-induced psychosis or Cannabis-associated psychosis: Diagnostically no clear winner. J Mental Health Hum Behav 2016;21:55-7</li>
<li>Kumar S, Singh S, Singh K, Rajkumar S, Balhara YPS. Prevalence and pattern of problematic internet use among engineering students from different colleges in India. Indian J Psychiatry. 2019 Nov-Dec;61(6):578-583</li>
<li>Balhara YPS, Kumar S, Singh S, Singh K, Rajkumar S. Challenges with use of internet use duration criteria as a marker of problematic internet use: Observations based on the receiver-operator curve-based analysis of data from the students. Asian J Psychiatr. 2021 Oct;64:102770. doi:10.1016/j.ajp.2021.102770. Epub 2021 Jul 14. PMID: 34274816.</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Additional information</h4>
<ul>
<li>Was part of team as Research Officer, developing Online Course module on Methadone Maintenance Treatment by NDDTC, New Delhi</li>
<li>Organized multiple conferences/CMEs/national symposium including World Congress of Social Psychiatry, 2016 , Neuromodulation Workshop and Certificate Course - 2018 , 2019 under guidance of Department of Psychiatry and NDDTC, AIIMS.</li>
<li>Elected General Secretary of RDA AIIMS, 2020</li>
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
@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
@php 
    $name='Dr. N. Lakshmipathy Ramesh';
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
<li class="active"> Dr N Lakshmipathy Ramesh </li>
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
<img src="{{ asset('/public/website/assets/images/dr-2.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr. N. Lakshmipathy Ramesh <span>Founder - Managing Director </span></h3>
<!-- <h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Experience <span> 30+ Years</span></h4> -->
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>M.D (Geriatrics)</span></h4>
<!-- <h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Languages <span> Tamil, English, Hindi</span></h4> -->
</div>
</div>

</div>

<div class="main-contdvshon">
<!-- <h4>Profile</h4> -->
<p>“Sky's the Limit to achieve anything. My passion is Geriatrics, and I see to it that, every elderly patient can get better living and best health care"
</p>
<p>Dr. Lakshmipathy Ramesh Nagarajan is a prominent and highly respected Geriatrician based in Chennai. He is among the select few in the country who specialize in the field of Geriatric care with over 15 years of exclusive experience. 
 </p>
<p>His primary focus lies in Preventive Geriatrics, emphasizing the importance of proactive measures to maintain the health and well-being of older adults. Dr. Nagarajan advocates a multi-disciplinary approach to treatment, recognizing the need for a comprehensive and collaborative effort involving various healthcare professionals to address the complex needs of older patients effectively.
</p>
<p>One of Dr. Nagarajan's key areas of expertise is Comprehensive Geriatric Assessment (CGA). This assessment involves a thorough evaluation of the elder’s physical, mental, and social well-being. By conducting a comprehensive assessment, Dr. Nagarajan gains a holistic understanding of the patient's condition, enabling him to develop personalized treatment and rehabilitation plans tailored to their specific needs.</p>
<p>Through his extensive experience, dedication, and commitment to the field of Geriatric care, Dr. Lakshmipathy Ramesh Nagarajan has established himself as a leading geriatric expert in Chennai and contributes significantly to enhancing the quality of care and improving the overall well-being of older individuals in India.
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
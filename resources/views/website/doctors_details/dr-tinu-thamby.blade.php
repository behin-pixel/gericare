@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
    @php 
    $name='Mrs. Tinu Thamby T';
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
<li class="active"> Mrs. Tinu Thamby T </li>
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
<img src="{{ asset('/public/website/assets/images/mrs-tinu-thamby-t.webp') }}" alt="Geri Care Hospital" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Mrs. Tinu Thamby T<span>Clinical Psychologist</span></h3>
  <h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 8+ Years</span></h4>  
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span>B.A., M.Sc., M.Phil (Clinical Psychology) </span></h4>
  <h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English, Malayalam   </span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Locations <span> T.Nagar </span></h4>  
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Profile</h4>
<p>Tinu Thamby T is a highly qualified clinical psychologist holding an M.Phil. in Clinical Psychology licensed by the Rehabilitation Council of India (RCI) with a decade of experience in offering various Comprehensive Psychometric assessments and evidence-based psychotherapies.</p>

<p>Her core area of interest is Anxiety spectrum disorders (Generalized Anxiety Disorder (GAD), Panic Disorder, Social Anxiety Disorder (Social Phobia), Specific Phobias, Obsessive-Compulsive Disorder (OCD), Post-Traumatic Stress Disorder (PTSD), Separation Anxiety Disorder). She excels in providing Exposure Response Prevention therapy (ERP) for OCD and is actively involved in the establishment and guidance of a youth peer support program for individuals living with OCD.
Her expertise includes detailed Psychological assessments for diagnosing various common conditions like ADHD, OCD, Emotional dysregulation, Personality disorders and other Psychiatric Conditions.</p>

<p>She is also certified to carry out comprehensive DBT programs for people suffering from Emotional regulation difficulties. Passionate about youth mental health, Dr. Tinu Thamby T has received training in suicide gatekeeper protocols. </p>

<p>She actively conducts outreach programs in schools and colleges, raising awareness about mental health and promoting suicide prevention initiatives. She has worked with the elderly population as part of a memory clinic. She has been instrumental in organizing outreach activities centered around Dementia awareness and care initiatives, as well as Neurocognitive support. In addition to her expertise, Tinu Thamby T is multilingual and proficient in Tamil, English, and Malayalam. Her strong educational background, extensive experience, and dedication to improving the lives of individuals dealing with various psychological challenges make her a highly respected and sought-after clinical psychologist.</p>
</div>

<div class="main-contdvshon">
<h4>Educations</h4>
<ul>
<li>M.Phil. in Clinical Psychology (RCI (A60831)</li>
<li>M.Sc Master Degree in Clinical and Counseling Psychology</li>
<li>B.A Psychology</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Psychometric assessments offered</h4>
<ul>
<li>IQ assessments - WISC, MISIC, BKT, WAIS</li>
<li>NIMHANS- Learning disability battery</li>
<li>Child Assessments - Screening and detailed assessments for ADHD, Autism & other Neurodevelopmental disorders and behavioral issues</li>
<li>Projective Assessments - SCT, TAT, Rorschach, etc</li>
<li>Personality Assessments </li>
<li>Neurocognitive Assessments - Dementia screening and Comprehensive memory assessments - WMS, NIMHANS Neurocognitive Battery, PGI-BDD</li>

</ul>
</div>

<div class="main-contdvshon">
<h4>Therapies Offered</h4>
<ul>
<li>Cognitive Behavioral Therapy (CBT)</li>
<li>Dialectical Behavior Therapy (DBT)</li>
<li>Exposure Response Prevention (ERP)</li>
<li>Motivational Enhancement Therapy & Relapse Prevention Therapy (RPT)</li>
<li>Behaviour therapy</li>
<li>Supportive Therapy</li>
<li>Couple Therapy</li>
<li>Social Skills Training</li>
<li>Cognitive Rehabilitation </li>
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
@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
	@php 
    $name='Dr K. Vasanth';
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
<li class="active"> Dr K. Vasanth </li>
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
<img src="{{ asset('/public/website/assets/images/dr-k-vasanth.webp') }}" alt="Dr. K. Vasanth - Consultant Geriatrician" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr K. Vasanth<span>Consultant Geriatrician</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 8+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span>MD (Geriatrics)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Location <span> Available for Home Visits on appointment basis OP Location - Adyar & Adambakkam</span></h4>
</div>
</div>

</div>


<div class="main-contdvshon">
<h4>About Us</h4>
<p>Dr. K. Vasanth is an experienced and highly skilled Elderly Care Physician specializing in the complex medical needs of older patients. With a particular focus on Homecare for the elderly, Dr. Vasanth is recognized as one of the few qualified Geriatricians in this field. His specialization in Community Geriatrics allows him to address a wide range of health issues commonly faced by older adults.

</p>

<p>Dr. Vasanth holds an MBBS degree from KAPV Government Medical College, Tiruchirappalli, and has completed his MD in Geriatrics from the esteemed Madras Medical College. With this extensive medical education and training, he possesses the knowledge and expertise necessary to provide comprehensive care to geriatric patients.
</p>

<p>One of Dr. Vasanth's notable strengths lies in his ability to handle both acute and chronic health problems that commonly affect the elderly population. He takes a holistic approach to patient care, ensuring that all aspects of their well-being are addressed. With a strong background in home visits, he understands the unique challenges and requirements of providing medical care in the comfort of patients' own homes.
</p>

<p>Dr. Vasanth excels in coordinating care plans for his patients, ensuring that they receive appropriate referrals to specialists when needed. His expertise extends to transitional care for the elderly, helping them smoothly navigate the transitions between different healthcare settings. Additionally, he possesses valuable experience in caring for individuals with dementia, offering compassionate and tailored support for these patients and their families.
</p>

<p>A standout aspect of Dr. Vasanth's practice is his commitment to providing affordable and high-quality long-term care for the elderly. He understands the financial challenges that older individuals and their families may face and strives to ensure that his services remain accessible without compromising on the quality of care provided.
</p>

<p>Overall, Dr. K. Vasanth's extensive training, experience in Homecare and Community Geriatrics, and dedication to holistic elderly care make him a highly trusted and sought-after physician in the field of geriatric medicine.
</p>
</div>

<div class="main-contdvshon">
<h4>Education</h4>
<ul>
<li>M.D (Geriatrics) -  Madras Medical College, Chennai</li>
<li>M.B.B.S. - KAP Viswanatham Govt. Medical College, Tiruchirappalli</li>
</ul>
</div>


<div class="main-contdvshon">
<h4>Awards </h4>
<ul>
<li>Best Poster Presentation award at GERICON 2018 held in All India Institute of Medical Sciences (AIIMS), New Delhi</li>
<li>Second Prize for Quiz competition at GERICON 2018 held in All India Institute of Medical Sciences (AIIMS), New Delhi</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Memberships & Certifications</h4>
<ul>
<li>Life member of Indian Academy of Geriatrics (IAG)</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Works & Publications</h4>
<ul>
<li>Change in the multidimensional prognostic index score based on a standard comprehensive geriatric assessment during hospitalization in elderly patients. Masters thesis, Madras Medical College, Chennai. (http://repository-tnmgrmu.ac.in/id/eprint/8941)</li>

<li>The Associations of Depression, Social Support and Elder Mistreatment in a Community dwelling Elderly South Indian population - Med e-journal TNMGRMU
</li>

<li>Ethical Dilemma in Geriatric ICU- GERICRITICON 2022- Panel Discussion</li>
<li>Transitional Care- Emerging Paradigm in Geriatric Medicine- 6th Annual conference, IAG TN & Chennai Chapter - Geriatric Update 2023- Panel discussion</li>

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
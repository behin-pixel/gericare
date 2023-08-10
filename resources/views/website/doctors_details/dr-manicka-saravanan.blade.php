@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">
	@php 
    $name='Dr. S Manicka Saravanan';
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
<li class="active"> Dr. S Manicka Saravanan </li>
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
<img src="{{ asset('/public/website/assets/images/Dr-s-manicka-saravanan.webp') }}" alt="Dr. S Manicka Saravanan - Consultant Geriatrician" class="w-100">
</div>
</div>

<div class="col-lg-7">
<div class="doc-tor-cnt">
<h3>Dr. S Manicka Saravanan<span>Consultant Geriatrician</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="Geri Care Hospital" class=""> Experience <span> 9+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> Education <span>M.B.B.S., M.D(Geriatrics)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Languages <span> Tamil, English, Hindi</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Location <span> Adambakkam</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Manicka Saravanan is a reputed Geriatrician and a postgraduate in Geriatric Medicine at the prestigious All India Institute of Medical Sciences (AIIMS) in New Delhi, under the guidance of the renowned Prof. A.B. Dey, who played a pivotal role in establishing Geriatrics as a specialised field in India. Dr. Saravanan brings in close to a decade of clinical and research experience to the organization.</p>

<p>His research interests encompass a wide range of areas including orthogeriatrics, pain and palliative care, geriatric syndromes, and cognitive disorders. He has actively shared his research findings at numerous national and international conferences. Dr. Saravanan has also served as a teaching faculty member for esteemed international and national organizations such as the International Society of Geriatric Oncology (SIOG)-Asia Pacific region, Indian Academy of Geriatrics (IAG), Indira Gandhi National Open University (IGNOU), and the World Health Organization-Integrated care for Older People (WHO-ICOPE) master training.</p>

<p>Dr. Saravanan has a profound belief in the importance of holistic care for the elderly individuals. One of Dr. Saravanan's areas of expertise lies in Comprehensive Geriatric Assessment (CGA). Through CGA, he offers Personalised care to address the complex challenges of multimorbidity, polypharmacy, and falls—issues that are more prevalent among the elderly population compared to younger individuals. By utilizing CGA, Dr. Saravanan effectively addresses the unique needs of each patient, providing them with the highest standard of care.</p>

<p>Furthermore, Dr. Saravanan has developed a specialised focus on frailty—an intricate medical condition that affects vulnerable elders, leading to reduced physical strength and resilience. It results in a decline in overall health and physical function. Through his extensive research in frailty, he has gained a deep understanding of the condition. He employs thorough geriatric assessments to identify healthcare indicators of frailty, enabling him to create tailored care plans for vulnerable individuals. Driven by a patient-centered approach, he strives to improve the quality of life for older adults and contribute to the advancement of geriatric medicine as a whole.</p>
</div>

<div class="main-contdvshon">
<h4>Education</h4>
<ul>
<li>M.D (Geriatrics) -  All India Institute of Medical Sciences (AIIMS), Delhi</li>
<li>M.B.B.S. - Government Theni Medical College, Theni</li> 
</ul>
</div>

<div class="main-contdvshon">
<h4>Awards </h4>
<ul>
<li>December 2019: Travel Grant/Young Scholar Award at the 1<sup>st</sup> World Congress on falls and postural stability, Kuala Lumpur.</li>
<li>September 2019: Travel Grant/Best 100 Abstract Award at the 15th European Geriatric Medicine society conference, Krakow.</li> 
<li>July 2017: Travel Grant/Young Scholar Award at the 21<sup>st</sup> International Congress on Geriatrics and Gerontology, San Francisco.</li>
<li>2016: Third place in Open quiz, Geriatrics, Indian Ageing Congress</li>
</ul>

</div>




<div class="main-contdvshon">
<h4>Memberships & Certifications</h4>
<ul>
<li>Indian Academy of Geriatrics (IAG); Life Member</li>
 
</ul>
</div>

<div class="main-contdvshon">
<h4>Works & Publications</h4>
<ul>
<li>Subramanian MS, Singh V, Chatterjee P, Dwivedi SN, Dey AB. Prevalence and predictors of falls in a health-seeking older population: An outpatient-based study. Aging Med. 2020;00:1–7. https://doi.org/10.1002/agm2.12096</li>

<li>Subramanian, M.S., Rao, A.R., Bhattarai, U, et al. Diffuse Large B-cell Lymphoma with Renal Involvement Presenting with Multiple Cranial Nerve Palsy in a Frail Older Adult: a Case Report.SN Compr. Clin. Med.(2021). https://doi.org/10.1007/s42399-021-00956-7</li>

<li>Kumari B, Rao A, Subramanian MS, Dey AB.Spontaneous regression of chronic Epstein – Barr virus infection‑relatedlymphoproliferative disease. J Indian Acad Geriatr 2021;17:40-2</li>

<li>Gunasekaran, V, Subramanian, MS, Singh, V, Dey, AB. Outcome of older adults at risk of frailty. Aging Med. 2021; 4: 266– 271. https://doi.org/10.1002/agm2.12181</li>

<li>Health-related quality of life in treatment-naive, older patients with cancer from India: A prospective observational study Soni, Nidhi; Banerjee, Joyita; Saravanan, Manicka; More Cancer Research, Statistics, and Treatment. 5(3):474-481, Jul-Sep 2022</li>

<li>Soni, Nidhi; Banerjee, Joyita; Saravanan, Manicka; Rao, Abhijith R.; Upadhyay, Ashish D.; Dey, Aparajit B. Authors’ reply to Padmanabhan. Cancer Research, Statistics, and Treatment 5(4):p 773-774, Oct–Dec 2022. | DOI: 10.4103/crst.crst_343_22</li>

<li>Kandel R, Banerjee J, Saravanan M, Chatterjee P, Chakrawarty A, Dwivedi SN, et al. Challenges and determinants in the management of the older patients with cancer – Report from a low- and middle-income country. J Indian Acad Geriatr 2021;17:2-8</li>

<li>Saini M, Subramanian MS, Soni N, Singh V, Chakrawarty A, Chatterjee P, et al. Risk factors for falls in older adults with cognitive impairment. J Indian Acad Geriatr 2022;18:15-9</li>
</ul>
</div>
 

<div class="table-content main-contdvshon">
	
<h4>Conference presentations</h4> 

<ul>
<li><storng><em>AGS Annual meet, Los Angeles; May 2023</em></strong><br>
<strong>Biological aging Index score (BAIS); Development of a predictive model to quantify biological age.</strong><br>
Bhattarai Urza, Chatterjee Prasun, Gautam Arun, Saravanan Manicka, Khan Maroof, Dey A B
</li>

	<li><storng>1<sup>st</sup> WCFPS, Kuala Lumpur December 2019</strong><br>
	<strong>Correlates of falls in health-seeking older Indian population.</strong><br>
	Manicka Saravanan Subramanian, Vishwajeet Singh, Prashun Chatterjee, Sadanand Dwivedi, Aparajit Ballav Dey
</li>

<li><storng>15<sup>st</sup> EuGMS, Krakow September 2019</strong><br>
	<strong>Frailty in the health-seeking older population: Findings from an Indian registry.</strong><br>
	Subramanian Manicka Saravanan, Gunasekaran Venugopalan, Chatterjee Prashun, Sadanand Dwivedi, Dey Aparajit Ballav
</li>

<li><storng>21<sup>st</sup> IAGG, San Francisco;July 2017</strong><br>
	<strong>Assessment of gait and balance in older Indians.</strong><br>
	Manicka Saravanann, Prashun Chatterjee, Avinash Chakrawarty, A.B.Dey
</li>


<li><storng>Indian Ageing Congress, November 2016</strong><br>
	<strong>Assessment of gait and balance in the oldest old.</strong><br>
	Manicka Saravanan, Prashun Chatterjee, Avinash Chakrawarty, A.B.Dey
</li>

<li><storng>3rd International Conference on Gerontology and Geriatric Medicine (ICGGM) and international network for the Prevention of Elder Abuse (INPEA); New Delhi November 2015</strong><br>
	<strong>A study of functionality and cognitive decline in the oldest old.</strong><br>
	Manicka Saravanan S, Akash Kumar Ambashtha, AB Dey
</li>

<li><storng>12th annual conference of the Indian Academy of Geriatrics (IAG); GERICON September 2015; Chandigarh</strong><br>
	<strong>Validation of new clinical protocols for detection of frailty among older Indians.</strong><br>
	Manicka Saravanan S, Venugopalan G, Navinath Mohan, AB Dey
</li>


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
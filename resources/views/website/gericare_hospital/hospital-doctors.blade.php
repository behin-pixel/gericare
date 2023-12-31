@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/inner-banner-8.jpg') }}" alt="Geri Care Hospital" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h1>Welcome to India's 1<sup>st</sup>
Multi-Speciality <span>Hospital
for  Senior Citizens</span>
</h1>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li>   
<li>></li>  
<li><a href="{{ url('gericare-hospital') }}">Geri Care Hospitals</a></li>   
<li>></li>     
<li class="active"> Our Doctors </li>    
</ul>
</div>
</div>
</div>
</div>

</section> 

<section class="doctors-page">
<div class="container">
<div class="row justify-content-center">

<div class="col-lg-10"> 

<div class="vertical-tabdetails">

<div class="d-flex align-items-start">

  <div class="nav flex-column nav-pills me-3 sticky-top" id="v-pills-tab" role="tablist" aria-orientation="1">
    <h4> Select Department </h4>
    <div class="doctors-filters-btns mCustomScrollbar">
    <button class="nav-link active" id="v-pills-1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-1" type="button" role="tab" aria-controls="v-pills-1" aria-selected="true">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-18.png') }}" alt="Geri Care Hospital" class=""> 
    </div>    
    Geriatric Medicine
    </button>
    <button class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2" type="button" role="tab" aria-controls="v-pills-2" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
    Geriatric Cardiology
    </button>

    <button class="nav-link" id="v-pills-5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-5" type="button" role="tab" aria-controls="v-pills-5" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-4.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
    Ortho Geriatrics 
    </button>


    <button class="nav-link" id="v-pills-10-tab" data-bs-toggle="pill" data-bs-target="#v-pills-10" type="button" role="tab" aria-controls="v-pills-10" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-10.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
    Geriatric Psychiatry
    </button>


    <button class="nav-link" id="v-pills-7-tab" data-bs-toggle="pill" data-bs-target="#v-pills-7" type="button" role="tab" aria-controls="v-pills-7" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-6.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
    Geriatric Neurology
    </button>

    <button class="nav-link" id="v-pills-8-tab" data-bs-toggle="pill" data-bs-target="#v-pills-8" type="button" role="tab" aria-controls="v-pills-8" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-7.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
    Geriatric Surgery
    </button>

    <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-3" type="button" role="tab" aria-controls="v-pills-3" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/oncology.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
    Geriatric Oncology
    </button>

    <button class="nav-link" id="v-pills-4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-4" type="button" role="tab" aria-controls="v-pills-4" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-9.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
    Geriatric Urology
    </button>

    <button class="nav-link" id="v-pills-6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-6" type="button" role="tab" aria-controls="v-pills-6" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/stomach.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
    Gastroenterology
    </button>

    <button class="nav-link" id="v-pills-9-tab" data-bs-toggle="pill" data-bs-target="#v-pills-9" type="button" role="tab" aria-controls="v-pills-9" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/lungs.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
    Pulmonology
    </button> 

    <button class="nav-link" id="v-pills-11-tab" data-bs-toggle="pill" data-bs-target="#v-pills-11" type="button" role="tab" aria-controls="v-pills-11" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-16.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
    Geriatric ICU
    </button>


    <button class="nav-link" id="" data-bs-toggle="pill" data-bs-target="" type="button" role="tab" aria-controls="" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-11.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
    Dermatology
    </button> 

  
    <button class="nav-link" id="v-pills-13-tab" data-bs-toggle="pill" data-bs-target="#v-pills-13" type="button" role="tab" aria-controls="v-pills-13" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-12.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
    Vascular Surgery
    </button> 
   

    <button class="nav-link" id="v-pills-14-tab" data-bs-toggle="pill" data-bs-target="#v-pills-14" type="button" role="tab" aria-controls="v-pills-14" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-13.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
    Uro Gynaecology 
    </button> 


    <!-- <button class="nav-link" id="v-pills-12-tab" data-bs-toggle="pill" data-bs-target="#v-pills-12" type="button" role="tab" aria-controls="v-pills-12" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-7.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
    Geriatric Psychology
    </button>  -->


  


    <button class="nav-link" id="v-pills-16-tab" data-bs-toggle="pill" data-bs-target="#v-pills-16" type="button" role="tab" aria-controls="v-pills-16" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-15.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
    Nephrology 
    </button> 

    <button class="nav-link" id="" data-bs-toggle="pill" data-bs-target="" type="button" role="tab" aria-controls="" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-17.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
      ENT
    </button> 

    <button class="nav-link" id="v-pills-17-tab" data-bs-toggle="pill" data-bs-target="#v-pills-17" type="button" role="tab" aria-controls="v-pills-17" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-20.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
       Ophthalmology
    </button> 

    <button class="nav-link" id="v-pills-18-tab" data-bs-toggle="pill" data-bs-target="#v-pills-18" type="button" role="tab" aria-controls="v-pills-18" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-21.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
      Dentistry
    </button> 

    <button class="nav-link" id="v-pills-19-tab" data-bs-toggle="pill" data-bs-target="#v-pills-19" type="button" role="tab" aria-controls="v-pills-19" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-14.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
     Geriatric Physiotherapy
    </button> 

    <button class="nav-link" id="v-pills-15-tab" data-bs-toggle="pill" data-bs-target="#v-pills-15" type="button" role="tab" aria-controls="v-pills-15" aria-selected="false">
    <div class="geric-img">
    <img src="{{ asset('/public/website/assets/images/icn-22.png') }}" alt="Geri Care Hospital" class=""> 
    </div>     
    Lab Services
    </button> 

  


</div>     
  </div>

  <div class="tab-content" id="v-pills-tabContent">
    
    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">

    <h4>Geriatric Medicine</h4>

    <div class="dctrs-detls">
    <div class="dctrm-img">
    <img src="{{ asset('/public/website/assets/images/dr-n-lakshmipathy-ramesh.webp') }}" alt="Dr N. Lakshmipathy Ramesh - Senior Consultant Geriatrician" class="">
    </div>
    <div class="dctrm-deitals">
    <h3> Dr. N. Lakshmipathy Ramesh  </h3>
    <h4> Senior Consultant Geriatrician </h4>
    <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> MBBS, M.D (Geriatrics), PGD (Diabetes) </h5>
    <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> T. Nagar, Adambakkam, Adyar  </h5>
    <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class="">  Tamil, English, Telugu  </h5>
    <a href="{{ url('dr-lakshmipathy-ramesh') }}">Book Appointment</a>
    <a href="{{ url('dr-lakshmipathy-ramesh') }}">View Profile</a>
    </div>
    </div>


    <div class="dctrs-detls">
    <div class="dctrm-img">
    <img src="{{ asset('/public/website/assets/images/doctor-img-1.jpg') }}" alt="Dr. V. Srinivas - Senior Consultant Geriatrician" class="">
    </div>
    <div class="dctrm-deitals">
    <h3> Dr. V. Srinivas </h3>
    <h4> Senior Consultant Geriatrician </h4>
    <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> MD, MRCP (UK), DIP. Geriatric Medicine (UK) </h5>
    <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> T. Nagar, Adambakkam, Adyar  </h5>
    <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class="">  Tamil, English, Telugu, Hindi  </h5>
    <a href="{{ url('dr-srinivas') }}">Book Appointment</a>
    <a href="{{ url('dr-srinivas') }}">View Profile</a>
    </div>
    </div>
     
      
    <div class="dctrs-detls">
     <div class="dctrm-img">
     <img src="{{ asset('/public/website/assets/images/dr-mageshr.webp') }}" alt="Dr. Magesh R - Consultant Geriatrician" class="w-100">
     </div>
     <div class="dctrm-deitals">
     <h3> Dr. Magesh R </h3>
     <h4> Consultant Geriatrician  </h4>
     <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> MBBS, MRCP, CCT (Int. Med. & Geriatrics), FRCP </h5>
     <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> T. Nagar, Adambakkam, Adyar  </h5>
     <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class="">  English, Tamil  </h5>
     <a href="{{ url('dr-magesh ') }}">Book Appointment</a>
     <a href="{{ url('dr-magesh') }}">View Profile</a>
     </div>
     </div>

     <div class="dctrs-detls">
     <div class="dctrm-img">
     <img src="{{ asset('/public/website/assets/images/dr-ashwin-subramaniam.webp') }}" alt="Dr. Ashwin Subramaniam, Senior Consultant- Internal Medicine & Diabetologist" class="">
     </div>
     <div class="dctrm-deitals">
     <h3> Dr. Ashwin Subramaniam </h3>
     <h4> Senior Consultant- Internal Medicine & Diabetologist  </h4>
     <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> MBBS RMMC, DNB (Internal Medicine), MRCP (UK)</h5>
     <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> T. Nagar</h5>
     <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class="">  English, Tamil  </h5>
     <a href="{{ url('dr-ashwin-subramaniam') }}">Book Appointment</a>
     <a href="{{ url('dr-ashwin-subramaniam') }}">View Profile</a>
     </div>
     </div>


    <div class="dctrs-detls">
     <div class="dctrm-img">
     <img src="{{ asset('/public/website/assets/images/dr-k-vasanth.webp') }}" alt="Dr. K. Vasanth - Consultant Geriatrician" class="">
     </div>
     <div class="dctrm-deitals">
     <h3> Dr. K. Vasanth </h3>
     <h4> Consultant Geriatrician  </h4>
     <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> MD (Geriatrics) </h5>
     <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class="">  Adyar & Adambakkam  </h5>
     <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class="">  Tamil, English  </h5>
     <a href="{{ url('dr-vasanth') }}">Book Appointment</a>
     <a href="{{ url('dr-vasanth') }}">View Profile</a>
     </div>
     </div>


    <div class="dctrs-detls">
     <div class="dctrm-img">
     <img src="{{ asset('/public/website/assets/images/dr-k-anupuma.webp') }}" alt="Dr. K. Anupama - Consultant Geriatrician" class="">
     </div>
     <div class="dctrm-deitals">
     <h3> Dr. K. Anupama </h3>
     <h4> Consultant Geriatrician  </h4>
     <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class="">  MBBS, MD (Geriatrics), DGO  </h5>
     <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Home visit on appointment basis</h5>
     <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class="">  Tamil, English, Hindi  </h5>
     <a href="{{ url('dr-anupama') }}">Book Appointment</a>
     <a href="{{ url('dr-anupama') }}">View Profile</a>
     </div>
     </div>

     <div class="dctrs-detls">
     <div class="dctrm-img">
     <img src="{{ asset('/public/website/assets/images/Dr-s-manicka-saravanan.webp') }}" alt="Geri Care Hospital" class="">
     </div>
     <div class="dctrm-deitals">
     <h3> Dr. S. Manicka Saravanan  </h3>
     <h4> Consultant Geriatrician  </h4>
     <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class="">  MBBS, MD (Geriatrics)  </h5>
     <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class="">  Adambakkam</h5>
     <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class="">  Tamil, English, Hindi</h5>
     <a href="{{ url('dr-manicka-saravanan') }}">Book Appointment</a>
     <a href="{{ url('dr-manicka-saravanan') }}">View Profile</a>
     </div>
     </div>


     <div class="dctrs-detls">
     <div class="dctrm-img">
     <img src="{{ asset('/public/website/assets/images/dr-v-arulmozhiselvan.webp') }}" alt="Geri Care Hospital" class="">
     </div>
     <div class="dctrm-deitals">
     <h3> Dr. V. Arulmozhiselvan  </h3>
     <h4> Consultant Geriatrician  </h4>
     <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class="">  MBBS, MD (Geriatrics)  </h5>
     <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Adambakkam</h5>
     <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class="">   Tamil, English  </h5>
     <a href="{{ url('dr-arulmozhiselvan') }}">Book Appointment</a>
     <a href="{{ url('dr-arulmozhiselvan') }}">View Profile</a>
     </div>
     </div>

     <div class="dctrs-detls">
     <div class="dctrm-img">
     <img src="{{ asset('/public/website/assets/images/no-img-f.jpg') }}" alt="Geri Care Hospital" class="">
     </div>
     <div class="dctrm-deitals">
     <h3> Dr. Flora Alex  </h3>
     <h4> Consultant Geriatrician  </h4>
     <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class="">  MBBS, MD (Geriatrics)  </h5>
     <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class="">  Anna Nagar</h5>
     <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class="">   Tamil, English  </h5>
     <a href="{{ url('dr-flora-alex') }}">Book Appointment</a>
     <a href="{{ url('dr-flora-alex') }}">View Profile</a>
     </div>
     </div>


   



    </div>

    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
        
    <h4>Geriatric Cardiology</h4>
    <div class="dctrs-detls">
    <div class="dctrm-img">
    <img src="{{ asset('/public/website/assets/images/doctor-img-6.jpg') }}" alt="Geri Care Hospital" class="">
    </div>
    <div class="dctrm-deitals">
    <h3> Dr. Muthuswamy  </h3>
    <h4> Cardiologist  </h4>
    <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> MB MRCP(UK) MRCP(Ire) FRCP(Lon) MRCP(Edin) FACC </h5>
    <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English</h5>
    <a href="{{ url('dr-muthuswamy') }}">Book Appointment</a>
    <a href="{{ url('dr-muthuswamy') }}">View Profile</a>
    </div>
    </div>
     
   

    </div>

    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
        
    <h4>Geriatric Oncology</h4>

    <div class="dctrs-detls">
    <div class="dctrm-img">
    <img src="{{ asset('/public/website/assets/images/dr.rejivrajendranath.webp') }}" alt="Geri Care Hospital" class="">
    </div>
    <div class="dctrm-deitals">
    <h3> Dr. Rejiv Rajendranath  </h3>
    <h4> Medical Oncologist   </h4>
    <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> MBBS, MD (General Medicine), DM (Oncology)</h5>
    <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English</h5>
    <a href="{{ url('dr-rejivrajendranath') }}">Book Appointment</a>
    <a href="{{ url('dr-rejivrajendranath') }}">View Profile</a>
    </div>
    </div>
     
    <div class="dctrs-detls">
    <div class="dctrm-img">
    <img src="{{ asset('/public/website/assets/images/dr.kathiresan.webp') }}" alt="Geri Care Hospital" class="">
    </div>
    <div class="dctrm-deitals">
    <h3> Dr. Kathiresan </h3>
    <h4> Senior Surgical Oncologist  </h4>
    <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class="">MBBS, MS (General Surgery), MCh (Surgical Oncology)</h5>
    <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English</h5>
    <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class="">  T. Nagar</h5>
    <a href="{{ url('dr-kathiresan') }}">Book Appointment</a>
    <a href="{{ url('dr-kathiresan') }}">View Profile</a>
    </div>
    </div>

<div class="dctrs-detls">
<div class="dctrm-img">
<img src="{{ asset('/public/website/assets/images/dr-p-rajkumar.webp') }}" alt="Geri Care Hospital" class="">
</div>
<div class="dctrm-deitals">
<h3> Dr. P. Rajkumar  </h3>
<h4> Senior Surgical Oncologist  </h4>
<h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class="">MBBS, MS - General Surgery, MCh - Surgical Oncology</h5>
<h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English, Hindi</h5>
<a href="{{ url('dr-rajkumar') }}">Book Appointment</a> 
<a href="{{ url('dr-rajkumar') }}">View Profile</a>
</div>
</div>
 
<div class="dctrs-detls">
<div class="dctrm-img">
<img src="{{ asset('/public/website/assets/images/doctor-img-11.jpg') }}" alt="Geri Care Hospital" class="">
</div>
<div class="dctrm-deitals">
<h3> Dr. Arathi Surendranath </h3>
<h4> Radiation Oncology   </h4>
<h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> DMRT MD</h5>
<h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English</h5>
<a href="{{ url('dr-arathi-surendranath') }}">Book Appointment</a>
<a href="{{ url('dr-arathi-surendranath') }}">View Profile</a>
</div>
</div> 



<!-- <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/no-img-m.jpg') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Dr. AP Subash Kumar  </h3>
        <h4> Breast Surgical Oncologist  </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> MBBS, FRCSI, FRCS (Ed), FRCS (Gen), CCST- UK </h5>
          <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class="">   </h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class="">   </h5> -->
        <!-- <a href="{{ url('dr-ap-subash-kumar') }}">Book Appointment</a>
        <a href="{{ url('dr-ap-subash-kumar') }}">View Profile</a>
        </div>
        </div> -->  

    </div>   
    <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
        
        <h4>Geriatric Urology</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-12.jpg') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Dr. Guru Balaji </h3>
        <h4> Senior Urologist   </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class="">DNB (General Surgery), MRCS (Edin), MNAMS, DNB (Urology)</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class="">  English, Tamil   </h5>

        <a href="{{ url('dr-guru-balaji') }}">Book Appointment</a>
        <a href="{{ url('dr-guru-balaji') }}">View Profile</a>
        </div>
        </div>
        </div>
     <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
        
        <h4>Ortho Geriatrics</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-13.jpg') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Dr. B.C.Bhanu Prakash </h3>
        <h4> Senior Consultant    </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> MBBS, MS (Orthopedics)</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English</h5>
        <a href="{{ url('dr-banu-prakash') }}">Book Appointment</a>
        <a href="{{ url('dr-banu-prakash') }}">View Profile</a>
        </div>
        </div>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/dr.thiruvengitaprasad.webp') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Dr. Thiruvengita Prasad </h3>
        <h4> Senior Orthopedic Surgeon  </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class="">MBBS, DNB (Orthopedics/Orthopedic)</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English, Telugu </h5>
        <a href="{{ url('dr-thiruvengida') }}">Book Appointment</a>
        <a href="{{ url('dr-thiruvengida') }}">View Profile</a>
        </div>
        </div>
      </div> 


      <div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">
        
        <h4>Geriatric Psychiatry</h4>

        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/dr-srinivas-rajkumar-t.webp') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Dr Srinivas Rajkumar T </h3>
        <h4>Consultant Psychiatrist  </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> M.D (Psychiatry)</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English, Hindi   </h5>
        <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> T. Nagar, Adambakkam, Adyar</h5>
        <a href="{{ url('dr-srinivas-rajkumar') }}">Book Appointment</a>
        <a href="{{ url('dr-srinivas-rajkumar') }}">View Profile</a>
        </div>
        </div>


        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-22.jpg') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Dr. Sujatha </h3>
        <h4>Consultant Psychiatrist  </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> M.B.B.S.</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English   </h5>
        <a href="{{ url('dr-sujatha') }}">Book Appointment</a>
        <a href="{{ url('dr-sujatha') }}">View Profile</a>
        </div>
        </div>

        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/mrs-tinu-thamby-t.webp') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Mrs. Tinu Thamby T  </h3>
        <h4> Clinical Psychologist  </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> B.A., M.Sc., M.Phil (Clinical Psychology) </h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English   </h5>
        <!-- <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class="">   </h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class="">   </h5> -->
        <a href="{{ url('tinu-thamby') }}">Book Appointment</a>
        <a href="{{ url('tinu-thamby') }}">View Profile</a>
        </div>
        </div>

      </div>


      <!-- <div class="tab-pane fade" id="v-pills-12" role="tabpanel" aria-labelledby="v-pills-12-tab">
        
        <h4>Geriatric Psychology</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/mrs-tinu-thamby-t.webp') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Mrs. Tinu Thamby T  </h3>
        <h4> Clinical Psychologist  </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> B.A., M.Sc., M.Phil (Clinical Psychology) </h5>
        <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class="">   </h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class="">   </h5> -->
        <!-- <a href="{{ url('tinu-thamby') }}">Book Appointment</a>
        <a href="{{ url('tinu-thamby') }}">View Profile</a>
        </div>
        </div>
               
    
        </div> -->




      <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
        
        <h4>Gastroenterology</h4>
        
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/up-srinivas.webp') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3>Dr. U.P. Srinivas </h3>
        <h4> Senior Surgical Gastroenterolgist</h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class="">MBBS, MS, MCh(Surgical Gastroenterology)</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> English, Tamil   </h5>
        <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class="">  T. Nagar</h5>
        <a href="{{ url('dr-up-srinivas') }}">Book Appointment</a>
        <a href="{{ url('dr-up-srinivas') }}">View Profile</a>
        </div>
        </div>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-15.jpg') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Dr. Vikram</h3>
        <h4> Surgical Gastroenterologist   </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> MBBS, DNB(Gastroenterology)</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Hindi, English, Tamil   </h5>
        <a href="{{ url('dr-vikram') }}">Book Appointment</a>
        <a href="{{ url('dr-vikram') }}">View Profile</a>
        </div>
        </div>



      </div>        
      <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
        
        <h4>Geriatric Neurology</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-17.jpg') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3>Dr. S. Balamurugan</h3>
        <h4> Senior Neurosurgeon </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class="">M.Ch (Neurosurgery)</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English   </h5>
        <a href="{{ url('dr-balamurugan-s') }}">Book Appointment</a>
        <a href="{{ url('dr-balamurugan-s') }}">View Profile</a>
        </div>
        </div>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-18.jpg') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3>Dr. Asir Julin</h3>
        <h4> Neurologist   </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class="">  MBBS, MD, DM (Neurology) </h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English   </h5>
        <a href="{{ url('dr-asir-julin') }}">Book Appointment</a>
        <a href="{{ url('dr-asir-julin') }}">View Profile</a>
        </div>
        </div>
      </div>

      <div class="tab-pane fade" id="v-pills-16" role="tabpanel" aria-labelledby="v-pills-16-tab">
        
        <h4>Nephrology</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/balamurugan-b.webp') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3>Dr. B. Balamurugan</h3>
        <h4>Senior Consultant Nephrologist </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> M.B.B.S., MD (General Medicine), DM (Nephrology)</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English   </h5>
        <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> Adambakkam </h5>

        <a href="{{ url('dr-balamurugan-b') }}">Book Appointment</a>
        <a href="{{ url('dr-balamurugan-b') }}">View Profile</a>
        </div>
        </div>
      </div>




      <div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">
        
        <h4>Geriatric Surgery</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-19.jpg') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Dr. Mohan Rao </h3>
        <h4>General Surgeon  </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> MBBS, MS (GEN. SURGERY), FIAGES</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English   </h5>
        <a href="{{ url('dr-mohan-rao') }}">Book Appointment</a>
        <a href="{{ url('dr-mohan-rao') }}">View Profile</a>
        </div>
        </div>
      </div>  
      <div class="tab-pane fade" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab">
        
        <h4>Pulmonology</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-20.jpg') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3>Dr. Jayaraman</h3>
        <h4> Pulmonologist    </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> MBBS, Diploma in Tuberculosis and Chest Diseases (DTCD)</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English   </h5>
        <a href="{{ url('dr-jayaraman') }}">Book Appointment</a>
        <a href="{{ url('dr-jayaraman') }}">View Profile</a>
        </div>
        </div>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/sridevi.webp') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3>Dr. Sreedevi</h3>
        <h4> Senior Pulmonologist</h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class="">MBBS, DNB(Respiratory Medicine)</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, Hindi, English, Kannada    </h5>
        <a href="{{ url('dr-sridevi') }}">Book Appointment</a>
        <a href="{{ url('dr-sridevi') }}">View Profile</a>
        </div>
        </div>
      </div>  
          
      <div class="tab-pane fade" id="v-pills-11" role="tabpanel" aria-labelledby="v-pills-11-tab">
        
        <h4>Geriatric ICU</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/dr.susovan-mitra.webp') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3> Dr. Susovan Mitra </h3>
        <h4>Chief Critical Care Physician & Intensivist</h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class="">MBBS, MD (Emergency Medicine)</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English, Hindi, Bengali   </h5>
        <h5> <img src="{{ asset('/public/website/assets/images/location.png') }}" alt="Geri Care Hospital" class=""> T. Nagar  </h5>
        <a href="{{ url('dr-susovan') }}">Book Appointment</a>
        <a href="{{ url('dr-susovan') }}">View Profile</a>
        </div>
        </div>
      </div>  
           
      <div class="tab-pane fade" id="v-pills-13" role="tabpanel" aria-labelledby="v-pills-13-tab">
        
        <h4>Vascular Surgery</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-25.jpg') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3>Dr. Sairam</h3>
        <h4>Vascular Surgeon </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> MBBS., MRCSED., DNG (Gen. Sur)</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English   </h5>
        <a href="{{ url('dr-sairam') }}">Book Appointment</a>
        <a href="{{ url('dr-sairam') }}">View Profile</a>
        </div>
        </div>
      </div>    
      <div class="tab-pane fade" id="v-pills-14" role="tabpanel" aria-labelledby="v-pills-14-tab">
        
        <h4>Uro Gynaecology</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-26.jpg') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3>Dr. Meenakshi</h3>
        <h4>Consultant - Obstetrician & Gynaecologist </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> MBBS, DGO</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English   </h5>
        <a href="{{ url('dr-meenakshi') }}">Book Appointment</a>
        <a href="{{ url('dr-meenakshi') }}">View Profile</a>
        </div>
        </div>
      </div>    
      <div class="tab-pane fade" id="v-pills-15" role="tabpanel" aria-labelledby="v-pills-15-tab">
        
        <h4>Pathology</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-27.jpg') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3>Dr. Kanimozhi</h3>
        <h4>Pathologist </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> MBBS, MD(Pathology)</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English   </h5>
        <a href="{{ url('book-an-appointment') }}">Book Appointment</a>
        <a href="{{ url('book-an-appointment') }}">View Profile</a>
        </div>
        </div>
      </div> 
      
     



    <div class="dts-picx">
    <img src="{{ asset('/public/website/assets/images/dots.png') }}" alt="Geri Care Hospital" class="w-100">  
    </div>

  </div>
</div>

</div>

</div>

</div>
</div>
</section> 

<section class="peace-of-mind">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
<div class="pseofmnd">
We are here to improve the <br> 
quality of your life.<br>
<span>To experience our care, call us today!</span>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<div class="pseofmnd-lst text-end">
<ul>
<li>
<a href="https://api.whatsapp.com/send?phone=914440614061&text=Hello GERICARE, I have something to ask..." target="_blank">
<img src="{{ asset('/public/website/assets/images/wp-cta.png') }}" alt="Geri Care Hospital" class="" />
<span>24*7 SERVICE AVAILABLE</span>  
+91 44 4061 4061
</a>
</li>
<li>
<a href="" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
<img src="{{ asset('/public/website/assets/images/call-cta.png') }}" alt="Geri Care Hospital" class="" /> 
Request a Call Back
</a>
</li>
</ul>
</div>
</div>

</div>
</div>
</section>

@endsection
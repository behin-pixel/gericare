@extends("website.layout.welcome")

@section('content')

<!-- <section class="inner-banner p-0">

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

</section>  -->

<section class="inner-layer-banner">
<div class="container">
<div class="row">
   
<div class="col-lg-12">
<h1>Departments</h1>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li>
<li> > </li>
<li> <a href="{{ url('gericare-hospital') }}">Hospitals </a></li>
<li> > </li>
<li><a href="{{ url('gericare-hospital#departments') }}">Department</a></li>
<li> > </li>
<li class="active">Geriatric Medicine</li>
</ul>
</div>

</div>
</div>
</section>

<section class="doctors-page">
<div class="container">
<div class="row justify-content-center">

<div class="col-lg-10"> 

<div class="vertical-tabdetails">
 @include('website.departments.department-sidebar') 
</div>

  <div class="tab-content" id="v-pills-tabContent">
    
    <div class="show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">

    <h4>Geriatric Medicine</h4>
      <div class="department-content">
        <p>Geriatric Medicine is a branch of healthcare dedicated to the well-being of older adults. Our experienced team of doctors, nurses, and healthcare professionals in this department specializes in managing and preventing the unique medical challenges that come with aging.</p>
      </div> 
    <hr>  
    <h4>Our Doctors</h4>
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
    <a href="{{ url('dr-lakshmipathy-ramesh') }}">Request an Appointment </a>
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
    <a href="{{ url('dr-srinivas') }}">Request an Appointment </a>
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
     <a href="{{ url('dr-magesh ') }}">Request an Appointment </a>
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
     <a href="{{ url('dr-ashwin-subramaniam') }}">Request an Appointment </a>
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
     <a href="{{ url('dr-vasanth') }}">Request an Appointment </a>
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
     <a href="{{ url('dr-anupama') }}">Request an Appointment </a>
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
     <a href="{{ url('dr-manicka-saravanan') }}">Request an Appointment </a>
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
     <a href="{{ url('dr-arulmozhiselvan') }}">Request an Appointment </a>
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
     <a href="{{ url('dr-flora-alex') }}">Request an Appointment </a>
     <a href="{{ url('dr-flora-alex') }}">View Profile</a>
     </div>
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
        <!-- <a href="{{ url('dr-ap-subash-kumar') }}">Request an Appointment </a>
        <a href="{{ url('dr-ap-subash-kumar') }}">View Profile</a>
        </div>
        </div> -->  

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
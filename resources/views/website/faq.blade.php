@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/FAQs.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>Frequenty Asked Questions
</h4>
<ul>
<li><a href="./">Home</a></li>   
<li> > </li>  
<li>FAQs</li>   
</ul>
</div>
</div>
</div>
</div>

</section> 

<section class="frekents">
<div class="container">
         <div class="row flex-column-reverse flex-lg-row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-7">
            <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header active-acc" id="heading1">
    <button class="accordion-button button" type="button"  data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-minus"></i>What is Geriatrics?</button>
    </h2>
    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Geriatrics is a branch of treating and giving medical care to elderly people, which includes preventing, diagnosing, and treating various health problems among seniors. Commonly, people above the age of 60 are considered as elders and are treated by Geriatricians. Geriatrics also deals with giving palliative care for seniors who are terminally ill and require comprehensive care and support.</p>
      <p> Along with doctors, Geriatric caregivers comprise Nurses, Social workers, care managers, Pharmacists, Physical therapists, Nutritionists, Occupational therapists who work collaboratively to provide comprehensive care for elders. Elders are often affected by age-related diseases and mind related diseases. The diseases are classified as multiple diseases, chronic diseases, and symptoms from multiple medications. Geriatricians would comprehensively look into the patient’s report and their previous history to treat the existing diseases. The stream of Geriatrics is taking prominence, as specialized individualistic care becomes the need of the hour.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading2">
    <button class="accordion-button button collapsed" type="button"  data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2"><i class="fa fa-plus"></i>
    Why is a regular doctor’s visit very essential for elders?
    </button> 
    </h2>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ul> 
        <li><img src="{{ asset('/public/website/assets/images/hme-icn.png') }}" alt="Geri care Hospitals" class="img-fluid"> The aging process makes the body weak and vulnerable to many diseases. It causes a lot of deficiencies, and malfunctioning of certain glands, hormones, and organs.</li>
        <li><img src="{{ asset('/public/website/assets/images/hme-icn.png') }}" alt="Geri care Hospitals" class="img-fluid"> A regular doctor’s visit helps to constantly evaluate the health of the elders, as the doctor might know their previous health record, and can be able to quickly devise a method to heal quickly.</li>
        <li><img src="{{ asset('/public/website/assets/images/hme-icn.png') }}" alt="Geri care Hospitals" class="img-fluid"> When you are connected with Geri Care, all the necessary tests, readings, and important parameters are noted down, and a pool of experts keeps constant checks and assists the patient.</li>
        </ul>  
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading3">
    <button class="accordion-button button collapsed" type="button"  data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3"><i class="fa fa-plus"></i>
    What Nursing Care can you provide for the elderly?
    </button> 
    </h2>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <ul>
        <li><img src="{{ asset('/public/website/assets/images/hme-icn.png') }}" alt="Geri care Hospitals" class="img-fluid"> Our nurses hold essential qualifications, and are highly congenial with elders.</li>
        <li><img src="{{ asset('/public/website/assets/images/hme-icn.png') }}" alt="Geri care Hospitals" class="img-fluid"> We have both male nurses, and female nurses pertaining to the requirement.</li>
        <li><img src="{{ asset('/public/website/assets/images/hme-icn.png') }}" alt="Geri care Hospitals" class="img-fluid"> Right from taking the elders for walking, helping them change their clothes, cleaning their soiled clothes, taking them to the toilet, and helping them excrete - our nurses display a great level of dedication.</li>
        <li><img src="{{ asset('/public/website/assets/images/hme-icn.png') }}" alt="Geri care Hospitals" class="img-fluid"> Our nurses attend to regular cleaning of the wound and dressing the wound.</li>
      </ul>  
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading4">
    <button class="accordion-button button collapsed" type="button"  data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4"><i class="fa fa-plus"></i>
    Explain the role of Physiotherapy in treating an elderly patient?
    </button> 
    </h2>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <ul>
        <li><img src="{{ asset('/public/website/assets/images/hme-icn.png') }}" alt="Geri care Hospitals" class="img-fluid"> Physiotherapists know the pain points and are able to identify the musculoskeletal, neurological, and cardiovascular problems of the elderly.</li>
        <li><img src="{{ asset('/public/website/assets/images/hme-icn.png') }}" alt="Geri care Hospitals" class="img-fluid"> Different body conditions requires different types of cure and care.</li>
        <li><img src="{{ asset('/public/website/assets/images/hme-icn.png') }}" alt="Geri care Hospitals" class="img-fluid"> Our Physiotherapists identify the strength, balance, coordination, flexibility <br>and pain levels of the patients.</li>
      </ul>  
      </div>
    </div>
  </div> 
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading5">
    <button class="accordion-button button collapsed" type="button"  data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5"><i class="fa fa-plus"></i>
    What is the role of an Ambulance Service in caring for an elderly person?
    </button> 
    </h2>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <ul>
      <li><img src="{{ asset('/public/website/assets/images/hme-icn.png') }}" alt="Geri care Hospitals" class="img-fluid"> An ambulance not only helps elders during an emergency, but it is also used when the elders want to travel.</li>
      <li><img src="{{ asset('/public/website/assets/images/hme-icn.png') }}" alt="Geri care Hospitals" class="img-fluid"> An ambulance consists of first-aid and life support tools to help elders have a safe journey in times of medical need.</li>
      </ul> 
      </div>
    </div>
  </div> 
</div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
               <div class="inner-image-bg1 image-bg" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
               <img src="{{ asset('/public/website/assets/images/faq-img.png') }}" alt="Geri care Hospitals" class="img-fluid">
               </div>
            </div>
         </div>
      </div>   
</section>
 

 
@include('website.bottomform')

@include('website.mobilebottomform')

@endsection
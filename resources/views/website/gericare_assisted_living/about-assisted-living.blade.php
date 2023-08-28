@extends('website.layout.welcome')

@section('content')
    <section class="inner-banner p-0">

        <div class="">
            <img src="{{ asset('/public/website/assets/images/banners/assisted.jpg') }}" alt="Geri Care Hospital"
                class="w-100" />
        </div>

        <!-- <div class="banner-liners">
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <h4>India’s 1<sup>st</sup> 24/7
    <span>Assisted Living & Skilled Nursing <br>
    under the expert care of Geriatricians</span>
    </h4>
    <ul>
    <li><a href="../">Home</a></li>
    <li>></li>
    <li>Assisted Living</li>
    <li>></li>
    <li class="active">About Assisted Living</li>
    </ul>
    </div>
    </div>
    </div>
    </div> -->

    </section>




    <section class="home-gericare pb-0">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="common-heading text-center">

                        <h1>India’s 1<sup>st</sup> 24/7 Assisted Living & Skilled Nursing <br>
                            under the expert care of Geriatricians</h1>

                        <!-- <h2>State-of-the-art residential arrangements <br>
    to assist those in need. </h2> -->
                    </div>
                    <div class="seconday-paragraph text-center">
                        In a pioneering attempt, Geri Care offers 24/7 Assisted Living and Skilled Nursing facilities in
                        Chennai, specifically catering to the needs of the elderly, who require medical attention, support
                        and a positive mindset in their day-to-day lives.<br><br>
                        Our state-of-the-art facility houses a comprehensive range of services and amenities to care, treat
                        and provide for residents, ensuring utmost comfort, safety, and a homely atmosphere. <br><br>
                        Our professionals, along with a dedicated team, address concerns and offer peace of mind to both
                        residents and their families. Choose Geri Care for trusted Assisted Living & <a
                            href="https://www.gericare.in/nursing-care">Skilled Nursing facilities</a> in Chennai, where
                        personalised care and well-being are top priorities.<br><br>
                    </div>
                </div>



                {{-- <div class="col-lg-12">

<div class="serveces-doctrs">

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-1.png') }}" alt="Geri Care Hospital" class="" />
<h4> Meet our Experts  </h4>
<p> Interact with our Assisted Living <br>team of experts </p>
<a href="{{ url('our-doctors') }}"> View All Doctors <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt="Geri Care Hospital" class="" />
<h4> Locate our Facility </h4>
<p> Find an Assisted Living Center <br>near your home </p>
<a href="#add-res-bar"> View On Map <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-3.png') }}" alt="Geri Care Hospital" class="" />
<h4> Book your Visit </h4>
<p> Schedule an appointment to <br>check out our facility </p>
<a href="{{ url('book-an-appointment') }}"> Book Your Appointment <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>

</div>

<!-- <div class="ambulance-runing text-end">
<h4>24x7 Emergency Ambulance Available <br> Call Us at: <span>+91 44 4061 4061</span></h4>

<div class="ambuloo">
<img src="{{ asset('/public/website/assets/images/ambulance-servie.gif') }}" alt="Geri Care Hospital" class="" />
</div>

</div> -->

</div> --}}

            </div>
        </div>
    </section>



    <section class="location-fixer p-0">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-3">
                    <div class="common-heading text-start">
                        <h2>Our Geri Care <br>
                            Assisted Living <br>
                            are located at<br>
                            RA Puram &<br>
                            Thoraipakkam</h2>
                    </div>
                </div>

                <div class="col-lg-9">


                    <div class="serveces-doctrs">

                        <div class="servce">
                            <img src="{{ asset('/public/website/assets/images/Loaction-RA Puram.jpg') }}"
                                alt="Geri Care Hospital" class="w-100" />
                            <div class="servrse-contest">
                                <h4> Geri Care Assisted Living - RA Puram </h4>
                                <p>New #10, Old #23, 7th Main Road, <br> RA Puram, Chennai - 600028</p>
                                <!-- <p> No.8, Dr. Nair Road, Behind Vani<br> Mahal, T. Nagar, Chennai - 600 017 </p> -->
                                <a href="https://goo.gl/maps/j6n7agMHAkr19NEf8" target="_blank"> View On Map <img
                                        src="{{ asset('/public/website/assets/images/small-arr.png') }}"
                                        alt="Geri Care Hospital" class="" /></a>
                            </div>
                        </div>

                        <div class="servce">
                            <img src="{{ asset('/public/website/assets/images/Loaction-Thoraipakkam.jpg') }}"
                                alt="Geri Care Hospital" class="w-100" />
                            <div class="servrse-contest">
                                <h4> Geri Care Assisted Living - Thoraipakkam </h4>
                                <p>AKS Residency, Balamurugan Garden 1st Main Road, <br> Thoraipakkam, Chennai-600097</p>
                                <!-- <p> 100 Feet Velachery, 100 Feet Rd, Ward F,<br> Block 17, Adambakkam, Chennai - 600 088 </p> -->
                                <a href="https://goo.gl/maps/eZNZbkaZcb3gtZqE7" target="_blank"> View On Map <img
                                        src="{{ asset('/public/website/assets/images/small-arr.png') }}"
                                        alt="Geri Care Hospital" class="" /></a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="prcess-img text-center pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="common-heading text-center">
                    <h2> Our Step-by-Step Approach </h2>
                </div>
                <div class="col-lg-12">

                    <picture>
                        <source media="(min-width: 800px)"
                            srcset="{{ asset('/public/website/assets/images/assisted-live-flow-dsk.jpg') }}" class="w-100">
                        <img src="{{ asset('/public/website/assets/images/assisted-live-flow-mbs.jpg') }}"
                            class="img-responsive w-100 mb-5" alt="Geri Care Hospital">
                    </picture>

                </div>
                <div class="care-service-btn">
                    <a href="tel:+914440614061">Call Us at <b>+91 44 4061 4061</b></a>
                </div>
                <a id="services-we-offer"></a>
            </div>
        </div>
    </section>

    <section class="server-ces text-center pb-0">
        <div class="container">

            <div class="row align-items-center">

                <div class="common-heading">
                    <h2>Our Services</h2>
                </div>

            </div>
        </div>

    </section>

    <div class="adrenaline">

        <section class="event-layer bg-layer-1">
            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="spotlght-lists">

                            <img class="resp-onsive"
                                src="{{ asset('/public/website/assets/images/Respite-Care-transformed.jpeg') }}"
                                alt="Respite Care">

                            <div class="common-heads aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
                                <h2> Respite Care </h2>
                            </div>

                            <div class="common-parra aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
                                <p>Recognizing the high burden that falls on caregivers, Geri Care Assisted Living provides
                                    a supportive environment where frail older individuals requiring continuous supervision
                                    can be taken care of. This allows caregivers to take a break, attend functions, or visit
                                    relatives out of town, knowing that their loved ones are in caring hands.</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="event-layer bg-layer-2 cont-right">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="spotlght-lists text-end">
                            <img class="resp-onsive"
                                src="{{ asset('/public/website/assets/images/Rehabilitative-_-Restorative-care-transformed.jpeg') }}"
                                alt="Rehabilitative & Restorative Care">
                            <div class="common-heads text-drk aos-init aos-animate" data-aos="fade-right"
                                data-aos-duration="1000">
                                <h2> Rehabilitative & Restorative Care </h2>
                            </div>

                            <div class="common-parra text-drk aos-init aos-animate" data-aos="fade-right"
                                data-aos-duration="1000">
                                <p>By providing in-house specialist physiotherapy services, Geri Care Assisted Living
                                    ensures that residents have ease of access to vital rehabilitative and restorative
                                    services, which eliminates the need for residents to travel to external therapy centers,
                                    reducing any potential inconvenience or discomfort associated with travel. </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    </div>

                </div>
            </div>
        </section>

        <section class="event-layer bg-layer-3">
            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="spotlght-lists">

                            <img class="resp-onsive"
                                src="{{ asset('/public/website/assets/images/Dementia-care-transformed.jpeg') }}"
                                alt="Dementia Care">

                            <div class="common-heads aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
                                <h2> Dementia Care </h2>
                            </div>

                            <div class="common-parra aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
                                <p>At Geri Care, our Dementia Care goes beyond objective assessments. Our dedicated team of
                                    Geriatricians, Psychiatrists, and Psychologists ensures a comprehensive evaluation of
                                    physical and mental health. We prioritize individualised care, considering hobbies,
                                    interests, and lifestyle choices - to create a tailored activity schedule. As dementia
                                    progresses, our care plan evolves too, but never compromising on meeting our patients'
                                    needs.</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="event-layer bg-layer-4 cont-right">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="spotlght-lists text-end">
                            <img class="resp-onsive"
                                src="{{ asset('/public/website/assets/images/Transitional-Care-transformed.jpeg') }}"
                                alt="Transitional Care">
                            <div class="common-heads text-drk aos-init aos-animate" data-aos="fade-right"
                                data-aos-duration="1000">
                                <h2> Transitional Care </h2>
                            </div>

                            <div class="common-parra text-drk aos-init aos-animate" data-aos="fade-right"
                                data-aos-duration="1000">
                                <p>At Geri Care, we aim to facilitate a safe and successful transition for individuals after
                                    hospitalization, minimizing the risk of readmissions, preventing complications,
                                    improving overall health outcomes, and enhancing quality of lives. </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    </div>

                </div>
            </div>
        </section>

        <section class="event-layer bg-layer-5">
            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="spotlght-lists">

                            <img class="resp-onsive"
                                src="{{ asset('/public/website/assets/images/Palliative-Care-transformed.jpeg') }}"
                                alt="Geri Care Hospital">

                            <div class="common-heads aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
                                <h2> Palliative Care </h2>
                            </div>

                            <div class="common-parra aos-init aos-animate" data-aos="fade-right"
                                data-aos-duration="1000">
                                <p>At Geri Care, we recognise the importance of geriatric palliative care in enhancing the
                                    quality of life for elderly individuals confronting serious illnesses. This specialised
                                    care approach focuses on addressing their physical, emotional, and social needs while
                                    taking into account the complexities associated with aging.</p>
                            </div>

                            <div class="common-parra aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
                                <p> </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>

    {{-- <section class="our-faacilities text-center">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    

<div class="common-heading">
<h2>Our Facilities</h2>
</div>
<div class="gentric-systems">

<ul>

<li>
<div class="geric-img">
<img src="{{ asset('/public/website/assets/images/fac-1.png') }}" alt="Geri Care Hospital" class=""> 
</div>
<span> Daily doctor visit </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/fac-2.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span>  Medication management  </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/fac-3.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> 24x7 skilled nursing availability </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/fac-4.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Nutritiously curated food </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/fac-5.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Group yoga & physiotherapy </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/fac-6.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Periodic WhatsApp communication </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/fac-7.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Outside specialist consultations  </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/fac-8.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> 24x7 emergency coordination </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/fac-9.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Three levels of nursing care  </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/fac-10.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Weekly geriatrician visits & medical review </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/fac-11.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Indoor & outdoor recreational activities </span>    
</li>

<li>
<div class="geric-img">
<img src="{{ asset('/public/website/assets/images/fac-12.png') }}" alt="Geri Care Hospital" class=""> 
</div>
<span> Initial Comprehensive Geriatric Assessment (CGA) </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/fac-13.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Fully furnished elder-friendly accommodations </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/fac-14.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Geriatrician reviewed, individualised, care plans </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/fac-15.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Nutritious vegetarian diet meals & mid-day snacks </span>    
</li>

</ul> 

</div>

</div>

</div>
</div>
</section> --}}

    {{-- <section class="gallery-tabulars text-center">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-12 col-md-12 col-sm-12">

<div class="common-heading">
<h2>Gallery</h2>
</div>

<div class="galerry-lsts">

<!-- <ul class="nav nav-pills mb-3 text-center" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">RA Puram</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Thoraipakkam</button>
  </li> 
</ul> -->
<!-- <div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"> -->

<div class="galleruie-slider-rapuram text-end">

<!-- <div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-3.jpg') }}" alt="Geri Care Hospital" class="">
</div>  -->



<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-1.jpg') }}" alt="Geri Care Hospital" class="">
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-4.jpg') }}" alt="Geri Care Hospital" class="">
</div>

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-5.jpg') }}" alt="Geri Care Hospital" class="">
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-6.jpg') }}" alt="Geri Care Hospital" class="">
</div> 

<!-- <div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-7.jpg') }}" alt="Geri Care Hospital" class="">
</div>  -->

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-8.jpg') }}" alt="Geri Care Hospital" class="">
</div>

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-2.jpg') }}" alt="Geri Care Hospital" class="">
</div> 


 <!-- <div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-4.jpg') }}" alt="Geri Care Hospital" class="">
</div>    -->




 
  
  <!-- </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> -->



  <!-- <div class="galleruie-slider-royapuram text-end">





</div> -->
  </div> 
</div>

</div>

</div>
<a id="add-res-bar"></a>
<a id="locations"></a>
</div>
</div>
</section> --}}

    <section class="embrance-compfort">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="row align-items-center main-sb-box">

                        <div class="col-lg-8">
                            <h3>Embrace Comfort and Companionship with <br>
                                Our Assisted Living Plans Starting from Only 15 Days</h3>
                            <h4>Monthly, Quarterly & Annual Plans also available</h4>
                        </div>

                        <div class="col-lg-4 text-end">
                            <a href="tel:+914440614061">Call Us at <span>+91 44 4061 4061</span></a>
                        </div>

                    </div>

                </div>
                <a id="facilities-amenities"></a>
            </div>
        </div>
    </section>

    <section class="world-facilities">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4">

                    <div class="common-heading text-start">
                        <h2>Our Assisted Living<br>
                            Facilities</h2>
                    </div>

                    {{-- <div class="common-para text-start">
                  <p class="mb-0">At Geri Care, we have invested in state-of-the-art<br> facilities and world-class
                      amenities to<br> ensure quality, accurate and reliable<br> services to the elders, who require a
                      positive<br> mindset and emotional support.</p>
              </div> --}}

                </div>

                <div class="col-lg-8">

                    <div class="facilities-slider text-end">

                        <!-- <div class="facity-img">
      <img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="Geri Care Hospital" class="">
      <span>State of the art ICU</span>
      </div>  -->

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/assistedliving-facility-1.jpg') }}"
                                alt="Geri Care Hospital" class="">
                            <div class="facity-content-underimg">
                                <span class="insect-tion">Daily Doctor Visit</span>
                                {{-- <p>Instant radiology imaging services help our patients and doctors to treat patient
                              effectively.</p> --}}
                            </div>
                        </div>


                    </div>

                </div>

                <a id="hospital-departments"></a>
            </div>
        </div>
    </section>


    <section class="why-love infthis-layer">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-10">
                    <div class="common-heading text-center">
                        <h2>Activities for Our Residents</h2>
                    </div>

                    <div class="vertical-tabdetails">

                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="1">
                                <button class="nav-link active" id="v-pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-1" type="button" role="tab" aria-controls="v-pills-1"
                                    aria-selected="true">Walking</button>
                                <button class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-2" type="button" role="tab" aria-controls="v-pills-2"
                                    aria-selected="false">Outdoor Exercise</button>
                                <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-3" type="button" role="tab" aria-controls="v-pills-3"
                                    aria-selected="false">Outdoor Meditation Classes</button>
                                <button class="nav-link" id="v-pills-4-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-4" type="button" role="tab" aria-controls="v-pills-4"
                                    aria-selected="false">Cooking or Baking</button>
                                <button class="nav-link" id="v-pills-5-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-5" type="button" role="tab" aria-controls="v-pills-5"
                                    aria-selected="false">Book Clubs</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                    aria-labelledby="v-pills-1-tab">

                                    <div class="skills-img">
                                        <img src="{{ asset('/public/website/assets/images/assisted-living-1.jpg') }}"
                                            alt="Geri Care Hospital" class="w-100">
                                        {{-- <div class="skills-cnt">
      <span>Round-the-clock availability, ensuring that patients receive immediate care and attention.</span>  
      </div> --}}
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                    aria-labelledby="v-pills-2-tab">

                                    <div class="skills-img">
                                        <img src="{{ asset('/public/website/assets/images/hospitalo-1.jpg') }}"
                                            alt="Geri Care Hospital" class="w-100">
                                        {{-- <div class="skills-cnt">
      <span>Long-standing experience in treating and managing the unique medical needs of older adults.</span>  
      </div> --}}
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                    aria-labelledby="v-pills-3-tab">

                                    <div class="skills-img">
                                        <img src="{{ asset('/public/website/assets/images/360-personalized-care.jpg') }}"
                                            alt="Geri Care Hospital" class="w-100">
                                        {{-- <div class="skills-cnt">
      <span>Comprehensive and customised treatment plans that are unique and enriching for seniors.</span>  
      </div> --}}
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="v-pills-4" role="tabpanel"
                                    aria-labelledby="v-pills-4-tab">

                                    <div class="skills-img">
                                        <img src="{{ asset('/public/website/assets/images/expert-geriatricians.jpg') }}"
                                            alt="Geri Care Hospital" class="w-100">
                                        {{-- <div class="skills-cnt">
      <span>Medical professionals with extensive knowledge and experience in treating elderly patients.</span>  
      </div> --}}
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="v-pills-5" role="tabpanel"
                                    aria-labelledby="v-pills-5-tab">

                                    <div class="skills-img">
                                        <img src="{{ asset('/public/website/assets/images/best-in-class-staff.jpg') }}"
                                            alt="Geri Care Hospital" class="w-100">
                                        {{-- <div class="skills-cnt">
      <span>Dedicated and skilled staff that works collaboratively to ensure comfort and well-being.</span>  
      </div> --}}
                                    </div>

                                </div>

                                <div class="dts-picx">
                                    <img src="{{ asset('/public/website/assets/images/dots.png') }}"
                                        alt="Geri Care Hospital" class="w-100">
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="world-facilities mob-response-vely">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4">

                    <div class="common-heading text-start">
                        <h2>Activities for Our Residents</h2>
                    </div>

                    {{-- <div class="common-para text-start">
                    <p class="mb-0">At Geri Care, we have invested in state-of-the-art<br> facilities and world-class
                        amenities to<br> ensure quality, accurate and reliable<br> services to the elders, who require a
                        positive<br> mindset and emotional support.</p>
                </div> --}}

                </div>

                <div class="col-lg-8">

                    <div class="facilities-slider text-end">

                        <!-- <div class="facity-img">
        <img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="Geri Care Hospital" class="">
        <span>State of the art ICU</span>
        </div>  -->

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/assisted-living-1.jpg') }}"
                                alt="Geri Care Hospital" class="">
                            <div class="facity-content-underimg">
                                <span class="insect-tion">Walking</span>
                                {{-- <p>Instant radiology imaging services help our patients and doctors to treat patient
                                effectively.</p> --}}
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="peace-of-mind m-0">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="pseofmnd">
                        Experience support & care <br>
                        at every step
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="pseofmnd-lst text-end">
                        <ul>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=914440614061&text=Hello GERICARE, I have something to ask..."
                                    target="_blank">
                                    <img src="{{ asset('/public/website/assets/images/wp-cta.png') }}"
                                        alt="Geri Care Hospital" class="" />
                                    <span>24*7 SERVICE AVAILABLE</span>
                                    +91 44 4061 4061
                                </a>
                            </li>
                            <li>
                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                    <img src="{{ asset('/public/website/assets/images/call-cta.png') }}"
                                        alt="Geri Care Hospital" class="" />
                                    Request a Callback
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="why-love">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-12">

                    <div class="common-heading text-center">
                        <h2>Patient Success Stories</h2>
                    </div>

                    <div class="google-revews">

                        @foreach ($testimonial as $testimonials)
                            <div class="revew-box text-center">

                                <div class="rev-rat d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('/public/website/assets/images/star.png') }}"
                                        alt="Geri Care Hospital" class="">
                                    <img src="{{ asset('/public/website/assets/images/star.png') }}"
                                        alt="Geri Care Hospital" class="">
                                    <img src="{{ asset('/public/website/assets/images/star.png') }}"
                                        alt="Geri Care Hospital" class="">
                                    <img src="{{ asset('/public/website/assets/images/star.png') }}"
                                        alt="Geri Care Hospital" class="">
                                    <img src="{{ asset('/public/website/assets/images/half-star.png') }}"
                                        alt="Geri Care Hospital" class="">
                                </div>
                                <div class="rev-cnt">
                                    {!! $testimonials['description'] !!}

                                </div>
                                <div class="rev-img">
                                    <h4> {{ $testimonials['title'] }}<span> {{ $testimonials['designation'] }} </span>
                                    </h4>
                                </div>
                                <div class="rev-goog d-flex align-items-center justify-content-center">

                                    <!-- <img src="{{ asset($testimonials['photo']) }}" alt="Geri Care Hospital" class="">


        <img src="{{ asset(Storage::url("app/{$testimonials['photo']}")) }}"  /> -->
                                    <img src="{{ asset('/public/website/assets/images/gog.png') }}" />

                                </div>

                            </div>
                        @endforeach

                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- @include('website.bottomform') -->

    <!-- @include('website.mobilebottomform') -->

    @include('website.bottombar')
@endsection

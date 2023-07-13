@extends('website.layout.welcome') 

@section('content')
    <section class="inner-banner p-0">

        <div class="">
            <img src="{{ asset('/public/website/assets/images/banners/inner-banner-1.jpg') }}" alt="Geri Care Hospital"
                class="w-100" />
        </div>

    </section>


    <section class="home-gericare">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="common-heading text-center">
                        <h2>India’s 1<sup>st</sup> Multi-Speciality Hospital<br> envisioned by
                            Expert Geriatricians</h2>
                    </div>
                    <div class="seconday-paragraph text-center">
                        Geri Care, India's 1<sup>st</sup> multi-speciality hospital, is the visionary brainchild of renowned
                        geriatricians, Dr. LPR and Dr. Srinivas. Their extensive experience and expertise have enabled them
                        to assemble a team of professionals from various medical disciplines who possess a deep
                        understanding of the complexities and common health conditions associated with the elderly.
                        <br><br>Unlike traditional hospitals, our revolutionary approach involves a cohesive and coordinated
                        team that collaboratively designs personalized care plans, eliminating the need for multiple
                        consultations with minimal or no coordination. At Geri Care, we are dedicated to redefining elderly
                        healthcare with a truly comprehensive and integrated approach.
                    </div>
                </div>

                <div class="col-lg-12">

                    <div class="serveces-doctrs">

                        <div class="servce">
                            <img src="{{ asset('/public/website/assets/images/icon-1.png') }}" alt="Geri Care Hospital"
                                class="" />
                            <h4> Meet our Experts </h4>
                            <p> Choose a Geriatric Expert for a Consultation </p>
                            <a href="{{ url('our-doctors') }}"> View All Doctors <img
                                    src="{{ asset('/public/website/assets/images/small-arr.png') }}"
                                    alt="Geri Care Hospital" class="" /></a>
                        </div>

                        <div class="servce">
                            <img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt="Geri Care Hospital"
                                class="" />
                            <h4> Locate your Hospital </h4>
                            <p> Choose a Hospital that is closest<br> to your home </p>
                            <a href="#add-res-bar"> View On Maps <img
                                    src="{{ asset('/public/website/assets/images/small-arr.png') }}"
                                    alt="Geri Care Hospital" class="" /></a>
                        </div>

                        <div class="servce">
                            <img src="{{ asset('/public/website/assets/images/icon-3.png') }}" alt="Geri Care Hospital"
                                class="" />
                            <h4> Book an Appointment </h4>
                            <p> Schedule an appointment as per <br>your health requirement </p>
                            <a href="{{ url('book-an-appointment') }}"> Book Your Appointment <img
                                    src="{{ asset('/public/website/assets/images/small-arr.png') }}"
                                    alt="Geri Care Hospital" class="" /></a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>


    <section class="care-fromus p-0">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 age-bars">

                    <div class="row">

                        <div class="col-lg-6">

                        </div>

                        <div class="col-lg-6">

                            <div class="common-heading">
                                <h2>Why Choose Geri Care?</h2>
                            </div>

                            <div class="age-stemp">

                                <div class="age-layer">
                                    <h4>Expert Geriatricians </h4>
                                    <p>Our Geriatric professionals have undergone exemplary training at renowned
                                        institutions including Madras Medical College (MMC) in Chennai and the All India
                                        Institute of Medical Sciences (AIIMS) in New Delhi. Additionally, they have gained
                                        valuable experience as consultants in esteemed hospitals overseas, particularly in
                                        the United Kingdom (UK). </p>
                                </div>

                                <div class="age-layer">
                                    <h4>Continuity of Care</h4>
                                    <p>From clinical interventions to comprehensive hospital treatments, and post
                                        hospitalization home care services along with assisted living options, we ensure
                                        continuous medical support and comfort 24/7.</p>
                                </div>

                                <div class="age-layer">
                                    <h4>Multi-disciplinary Approach</h4>
                                    <p>We bring cutting-edge research and innovative approaches that reflect geriatric
                                        excellence and help transform the lives of the elderly, their loved ones and family
                                        members.</p>
                                </div>

                                <div class="age-layer">
                                    <h4>Unique Healthcare Culture</h4>
                                    <p>We pride over a culture that prioritizes tailored treatment plans & comprehensive
                                        care to ensure remarkable treatments along with a positive healthcare experience
                                        that helps the elderly recover and heal at ease.</p>
                                </div>



                            </div>

                        </div>

                    </div>

                </div>

                <a id="hospital-facilities"></a>
            </div>
        </div>
    </section>


    <!-- <section class="gericare-services">
        <div class="container">
        <div class="row">

        <div class="col-lg-12">

        <div class="common-heading text-center">
        <h2>Our Services</h2>
        </div>

        <div class="servce-strture">

        <div class="main-srvcestr">
        <img src="{{ asset('/public/website/assets/images/gericare-service-1.jpg') }}" alt="Geri Care Hospital" class="" />
        <h4>24x7 Emergency & Trauma</h4>
        </div>

        <div class="main-srvcestr">
        <img src="{{ asset('/public/website/assets/images/gericare-service-2.jpg') }}" alt="Geri Care Hospital" class="" />
        <h4>On-Call Ambulance Services</h4>
        </div>

        <div class="main-srvcestr">
        <img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="Geri Care Hospital" class="" />
        <h4>Pharmacy</h4>
        </div>

        <div class="main-srvcestr">
        <img src="{{ asset('/public/website/assets/images/gericare-service-2.jpg') }}" alt="Geri Care Hospital" class="" />
        <h4>On-Call Ambulance Services</h4>
        </div>

        <div class="main-srvcestr">
        <img src="{{ asset('/public/website/assets/images/gericare-service-1.jpg') }}" alt="Geri Care Hospital" class="" />
        <h4>24x7 Emergency & Trauma</h4>
        </div>

        <div class="main-srvcestr">
        <img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="Geri Care Hospital" class="" />
        <h4>Pharmacy</h4>
        </div>

        </div>

        </div>
        </div>
        </div>
        </section> -->



    <section class="world-facilities">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5">

                    <div class="common-heading text-start">
                        <h2>World-class Facilities<br>
                            Chosen for You</h2>
                    </div>

                    <div class="common-para text-start">
                        <p class="mb-0">At Geri Care, we have invested in state-of-the-art<br> facilities and world-class
                            amenities to<br> ensure quality, accurate and reliable<br> services to the elders, who require a
                            positive<br> mindset and emotional support.</p>
                    </div>

                </div>

                <div class="col-lg-7">

                    <div class="facilities-slider text-end">

                        <!-- <div class="facity-img">
        <img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="Geri Care Hospital" class="">
        <span>State of the art ICU</span>
        </div>  -->

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/2d-echo-usg-doppler.jpg') }}"
                                alt="Geri Care Hospital" class="">
                            <div class="facity-content-underimg">
                                <span>2D Echo/USG/Doppler</span>
                                <p>Instant radiology imaging services help our patients and doctors to treat patient
                                    effectively.</p>
                            </div>
                        </div>

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/day-care.jpg') }}" alt="Geri Care Hospital"
                                class="">
                            <div class="facity-content-underimg">
                                <span>Day care</span>
                                <p>Day care procedures are carefully planned, efficiently executed, and typically involve
                                    minimal risk and recovery time, allowing patients to return home on the same day.</p>
                            </div>
                        </div>

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/ambulance-service.jpg') }}"
                                alt="Geri Care Hospital" class="">
                            <div class="facity-content-underimg">
                                <span>Ambulance services</span>
                                <p> Ambulance Service offers swift & reliable emergency medical transportation, ensuring
                                    prompt response and expert care during critical and non-emergency situations.</p>
                            </div>
                        </div>

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/icu.jpg') }}" alt="Geri Care Hospital"
                                class="">
                            <div class="facity-content-underimg">
                                <span>State-of-the-art ICU </span>
                                <p>Geriatric ICU setup combines advanced technology and specialized intensive care to
                                    address the unique needs of senior citizens with a focus on their comfort, safety &
                                    recovery.</p>
                            </div>
                        </div>

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/op-ip.jpg') }}" alt="Geri Care Hospital"
                                class="">
                            <div class="facity-content-underimg">
                                <span>OP-IP services</span>
                                <p> OP-IP services offer expert medical attention and support, with the flexibility to
                                    transition smoothly from outpatient consultations to inpatient care, that is
                                    uninterrupted.</p>
                            </div>
                        </div>

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/ctscan.jpg') }}" alt="Geri Care Hospital"
                                class="">
                            <div class="facity-content-underimg">
                                <span>Advanced CT Scan</span>
                                <p>Our CT scan services offer fast and precise imaging, enabling effective medical
                                    interventions and improved patient care.</p>
                            </div>
                        </div>

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/health-checkup.jpg') }}"
                                alt="Geri Care Hospital" class="">
                            <div class="facity-content-underimg">
                                <span>Health check up</span>
                                <p>Geriatric Preventive Health Checks offer a thorough evaluation of physical, cognitive,
                                    and emotional health, empowering older adults to proactively manage their well-being.
                                </p>
                            </div>
                        </div>

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/lab-services.jpg') }}"
                                alt="Geri Care Hospital" class="">
                            <div class="facity-content-underimg">
                                <span>Lab services</span>
                                <p>Our state-of-the-art lab services for accurate and timely diagnostic testing, ensuring
                                    precise results to guide your healthcare decisions in the comfort of your home. </p>
                            </div>
                        </div>

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/elder-rooms.jpg') }}"
                                alt="Geri Care Hospital" class="">
                            <div class="facity-content-underimg">
                                <span>Elder friendly rooms</span>
                                <p>Experience a welcoming and inclusive environment in our Elder-Friendly Rooms,
                                    specifically tailored to support the well-being of elderly patients, in a safe setting.
                                </p>
                            </div>
                        </div>

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/pharmacy.jpg') }}" alt="Geri Care Hospital"
                                class="">
                            <div class="facity-content-underimg">
                                <span>Pharmacy</span>
                                <p>Our experienced pharmacists provide accurate medication dispensing, medication therapy
                                    management, and helpful guidance, along with discounted home delivery services.</p>
                            </div>
                        </div>

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/laminar-air-flow-ot.jpg') }}"
                                alt="Geri Care Hospital" class="">
                            <div class="facity-content-underimg">
                                <span>Laminar Air Flow OT</span>
                                <p>Ensuring a high level of cleanliness and air quality, our Laminar Airflow OT utilizes
                                    filtered airflow systems to create a controlled and sterile surgical environment.</p>
                            </div>
                        </div>

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/home-checkup.jpg') }}"
                                alt="Geri Care Hospital" class="">
                            <div class="facity-content-underimg">
                                <span>Home health checkup</span>
                                <p>Experience the convenience of Home Health Checkup, where our skilled healthcare
                                    professionals provide comprehensive medical assessments in the comfort of your own home.
                                </p>
                            </div>
                        </div>

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/geriatric-physiotherapy.jpg') }}"
                                alt="Geri Care Hospital" class="">
                            <div class="facity-content-underimg">
                                <span>Geriatric Physiotherapy</span>
                                <p>By tailoring treatment plans to individual needs, geriatric physiotherapy helps older
                                    adults regain or maintain their physical abilities, enhancing their overall well-being.
                                </p>
                            </div>
                        </div>

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/dietitian-curated.jpg') }}"
                                alt="Geri Care Hospital" class="">
                            <div class="facity-content-underimg">
                                <span>Dietitian curated elder friendly diet</span>
                                <p>With a focus on nourishment and taste, our Elder-Friendly Diet offers carefully planned
                                    meals that are easy to chew, digest, and packed with essential nutrients.</p>
                            </div>
                        </div>

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/dental-services.jpg') }}"
                                alt="Geri Care Hospital" class="">
                            <div class="facity-content-underimg">
                                <span>Dental services at hospital and at home</span>
                                <p>Our Geriatric Dental Service provides specialized oral care for older adults, addressing
                                    age-related dental concerns with gentle expertise and a compassionate approach.</p>
                            </div>
                        </div>

                        <div class="facity-img">
                            <img src="{{ asset('/public/website/assets/images/treadmill-test.jpg') }}"
                                alt="Geri Care Hospital" class="">
                            <div class="facity-content-underimg">
                                <span>Treadmill Test (TMT)</span>
                                <p>Our TMT services provide valuable insights into cardiac health, assessing the heart's
                                    performance, diagnosing heart conditions and determining appropriate treatment plans.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

                <a id="hospital-departments"></a>
            </div>
        </div>
    </section>

    <section class="gericare-deprtmnts">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="common-heading text-center">
                        <h2>Our Departments</h2>
                    </div>

                    <div class="col-lg-12">
                        <div class="gentric-systems">

                            <ul>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-18.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span> Geriatric Medicine </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-1.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span> Geriatric Cardiology </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-4.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span> Ortho Geriatrics </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-10.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span> Geriatric Psychiatry </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-6.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span>Geriatric Neurology </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-7.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span>Geriatric Surgery </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-2.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span> Geriatric Oncology </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-9.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span> Geriatric Urology </span>
                                    </a>
                                </li>



                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-5.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span> Gasteroentrology </span>
                                    </a>
                                </li>


                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-8.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span> Pulmonology </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-16.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span>Geriatric ICU </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-11.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span> Dermatology </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-12.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span> Vascular Surgery </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-13.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span> Uro Gynaecology </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-15.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span> Nephrology and Dialysis 24x7 </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-17.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span> ENT </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-20.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span> Ophthalmology </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-21.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span> Dentistry </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-14.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span>Geriatric Physiotherapy </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('hospital-departments') }}">
                                        <div class="geric-img">
                                            <img src="{{ asset('/public/website/assets/images/icn-22.png') }}"
                                                alt="Geri Care Hospital" class="">
                                        </div>
                                        <span> Lab Services </span>
                                    </a>
                                </li>





                            </ul>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="panel-of-experts">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="common-heading text-center">
                        <h2>Our Panel of Geriatric Experts</h2>
                    </div>

                    <div class="panell-drts">

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/dr-n-lakshmipathy-ramesh.webp') }}"
                                alt="Dr N. Lakshmipathy Ramesh - Senior Consultant Geriatrician" class="">
                            <div class="de-detl">
                                <h4>Dr. N. Lakshmipathy Ramesh</h4>
                                <span>Senior Consultant Geriatrician</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-lakshmipathy-ramesh') }}"> Book Appointment </a>
                                <a href="{{ url('dr-lakshmipathy-ramesh') }}"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a>
                            </div>
                        </div>

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/gericare-doctor-1.jpg') }}"
                                alt="Geri Care Hospital" class="">
                            <div class="de-detl">
                                <h4>Dr. V. Srinivas</h4>
                                <span>Senior Consultant Geriatrician</span>
                            </div>
                            <div class="de-detl-btn">
                                <!-- <a href="{{ url('book-appointment') }}"> Book Appointment </a> -->
                                <a href="{{ url('dr-srinivas') }}">Book Appointment</a>
                                <a href="{{ url('dr-srinivas') }}"> <i class="fa fa-eye" aria-hidden="true"></i> </a>
                            </div>
                        </div>

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/dr-mageshr.webp') }}"
                                alt="Dr. Magesh R - Consultant Geriatrician" class="">
                            <div class="de-detl">
                                <h4> Dr. Magesh R</h4>
                                <span>Consultant Geriatrician</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-magesh ') }}"> Book Appointment </a>
                                <a href="{{ url('dr-magesh ') }}"> <i class="fa fa-eye" aria-hidden="true"></i> </a>
                            </div>
                        </div>

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/dr-ashwin-subramaniam.webp') }}"
                                alt="Dr. Ashwin Subramaniam, Senior Consultant- Internal Medicine & Diabetologist"
                                class="">
                            <div class="de-detl">
                                <h4>Dr. Ashwin</h4>
                                <span> Physician & Diabetologist </span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-ashwin-subramaniam') }}"> Book Appointment </a>
                                <a href="{{ url('dr-ashwin-subramaniam') }}"> <i class="fa fa-eye"
                                        aria-hidden="true"></i> </a>
                            </div>
                        </div>

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/dr-k-vasanth.webp') }}"
                                alt="Dr. K. Vasanth - Consultant Geriatrician" class="">
                            <div class="de-detl">
                                <h4>Dr. Vasanth</h4>
                                <span>Consultant Geriatrician</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-vasanth') }}"> Book Appointment </a>
                                <a href="{{ url('dr-vasanth') }}"> <i class="fa fa-eye" aria-hidden="true"></i> </a>
                            </div>
                        </div>

                    </div>

                    <div class="cmn-brdrd-btn text-center">
                        <a href="{{ url('our-doctors') }}"> View All Doctors </a>
                    </div>

                </div>

                <a id="add-res-bar"></a>
                <a id="locations"></a>
            </div>
        </div>
    </section>


    <section class="location-fixer">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-3">
                    <div class="common-heading text-start">
                        <h2>Our <br> Location</h2>
                    </div>
                </div>

                <div class="col-lg-9">

                    <div class="serveces-doctrs">

                        <div class="servce">
                            <img src="{{ asset('/public/website/assets/images/location-gericare-1.jpg') }}"
                                alt="Geri Care Hospital" class="w-100" />
                            <div class="servrse-contest">
                                <h4> Geri Care Hospital - T. Nagar </h4>
                                <p>No.8, Dr. Nair Road, Behind Vani Mahal,<br>
                                    T. Nagar, Chennai 600017</p>
                                <a href="https://goo.gl/maps/u6K6owxWtpxry8EV8" target="_blank"> View on map <img
                                        src="{{ asset('/public/website/assets/images/small-arr.png') }}"
                                        alt="Geri Care Hospital" class="" /></a>
                            </div>
                        </div>

                        <div class="servce">
                            <img src="{{ asset('/public/website/assets/images/hospital-loc-1.jpg') }}"
                                alt="Geri Care Hospital" class="w-100" />
                            <div class="servrse-contest">
                                <h4> Geri Care Hospital - Adambakkam </h4>
                                <p>100 Feet Velachery Inner Ring Road, Ward F, Block 17, Adambakkam,
                                    Chennai, Tamil Nadu 600088</p>
                                <a href="https://goo.gl/maps/KFAt8ytkXKEeuxZ59" target="_blank"> View on map <img
                                        src="{{ asset('/public/website/assets/images/small-arr.png') }}"
                                        alt="Geri Care Hospital" class="" /></a>
                            </div>
                        </div>

                    </div>

                </div>



                <div class="ambulance-runing text-end mt-5">
                    <h4>24x7 Emergency Ambulance Available <br> Call Us at: <span>+91 44 4061 4061</span></h4>

                    <div class="ambuloo">
                        <img src="{{ asset('/public/website/assets/images/ambulance-servie.gif') }}"
                            alt="Geri Care Hospital" class="" />
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
                        To experience a level of care that<br>
                        brings you peace of mind...<br>
                        <span>Call us today.</span>
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
                                    Request Call Back
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
  
    @if(count($testimonial)>0)
    <section class="why-love">
<div class="container">
<div class="row justify-content-center">

<div class="col-lg-12">

<div class="common-heading text-center">
   
<h2>Patient Success Stories</h2>
</div>

<div class="google-revews">    

  @foreach ($testimonial as $testimonials )

  <div class="revew-box text-center">

    <div class="rev-rat d-flex align-items-center justify-content-center">
    <img src="{{ asset('/public/website/assets/images/star.png') }}" alt="Geri Care Hospital" class="">
    <img src="{{ asset('/public/website/assets/images/star.png') }}" alt="Geri Care Hospital" class="">
    <img src="{{ asset('/public/website/assets/images/star.png') }}" alt="Geri Care Hospital" class="">
    <img src="{{ asset('/public/website/assets/images/star.png') }}" alt="Geri Care Hospital" class="">
    <img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="Geri Care Hospital" class="">
    </div>
    <div class="rev-cnt">
      {!! $testimonials['description'] !!}
   
    </div>
    <div class="rev-img">
    <h4> {{$testimonials['title']}}<span> {{$testimonials['designation']}} </span></h4>
    </div>
    <div class="rev-goog d-flex align-items-center justify-content-center">

       <!-- <img src="{{ asset($testimonials["photo"]) }}" alt="Geri Care Hospital" class="">


    <img src="{{ asset(Storage::url("app/{$testimonials["photo"]}")) }}"  /> -->
    <img src="{{ asset('/public/website/assets/images/gog.png') }}"  />
 
    </div>
    
    </div>
    
  @endforeach

</div>

</div>

</div>

</div> 
</section>
@endif

    @include('website.bottomform')

    @include('website.mobilebottomform')
@endsection

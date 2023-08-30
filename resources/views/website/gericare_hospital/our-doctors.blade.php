@extends('website.layout.welcome') 

@section('content')
<section class="inner-layer-banner">
<div class="container">
<div class="row">
   
<div class="col-lg-12">
<h1>Our Doctors</h1>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li>
<li> > </li>
<li> <a href="{{ url('gericare-hospital') }}">Hospitals </a></li>
<li> > </li>
<!-- <li><a href="{{ url('gericare-hospital#departments') }}">Department</a></li>
<li> > </li> -->
<li class="active">Our Doctors</li>
</ul>
</div>

</div>
</div>
</section> 


    
    <section class="our-doctors-list">
        <div class="container">
            <div class="">

                <div class="col-lg-12">

                    <!-- <div class="common-heading text-center">
                        <h2>Meet Our Doctors</h2>
                    </div> -->
                      <div class="row justify-content-center">
                         <div class="col-lg-5">
                            <div class="selt-deps only-for-mobby">
                                <h4 class="mb-0">Select Department</h4>
                                    <select class="form-control mb-0" id="sel-dept" name="sel-dept">
                                        <option value="" selected>--All--</option>
                                        <option value="{{ url('/departments/geriatric-medicine') }}">Geriatric Medicine</option> 
                                        <option value="{{ url('/departments/geriatric-cardiology') }}">Geriatric Cardiology</option> 
                                        <option value="{{ url('/departments/ortho-geriatrics') }}">Ortho Geriatrics</option> 
                                        <option value="{{ url('/departments/geriatric-psychiatry') }}">Geriatric Psychiatry</option> 
                                        <option value="{{ url('/departments/geriatric-neurology') }}">Geriatric Neurology</option> 
                                        <option value="{{ url('/departments/geriatric-surgery') }}">Geriatric Surgery</option> 
                                        <option value="{{ url('/departments/geriatric-oncology') }}">Geriatric Oncology</option> 
                                        <option value="{{ url('/departments/geriatric-urology') }}">Geriatric Urology</option> 
                                        <option value="{{ url('/departments/gastroenterology') }}">Gastroenterology</option> 
                                        <option value="{{ url('/departments/pulmonology') }}">Pulmonology</option> 
                                        <option value="{{ url('/departments/geriatric-icu') }}">Geriatric ICU</option> 
                                        <option value="{{ url('/departments/dermatology') }}">Dermatology</option> 
                                        <option value="{{ url('/departments/vascular-surgery') }}">Vascular Surgery</option> 
                                        <option value="{{ url('/departments/uro-gynaecology') }}">Uro Gynaecology</option> 
                                        <option value="{{ url('/departments/nephrology') }}">Nephrology</option> 
                                        <option value="{{ url('/departments/ent') }}">ENT</option> 
                                        <option value="{{ url('/departments/ophthalmology') }}">Ophthalmology</option> 
                                        <option value="{{ url('/departments/dentistry') }}">Dentistry</option> 
                                        <option value="{{ url('/departments/pathology') }}">Pathology</option> 
                                    </select>
                            </div>
                         </div>   
                       </div>
                    <h4 class="department-title">Geriatric Medicine</h4>
                  <div class="">  
                    <div class="panell-drts mb-4">   
                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/dr-n-lakshmipathy-ramesh.webp') }}"
                                alt="Dr N. Lakshmipathy Ramesh - Senior Consultant Geriatrician" class="">
                            <div class="de-detl">
                                <h4>Dr. N. Lakshmipathy Ramesh</h4>
                                <span>Senior Consultant Geriatrician</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-lakshmipathy-ramesh') }}">Request an Appointment </a>
                                <a href="{{ url('dr-lakshmipathy-ramesh') }}">Doctor's Profile </a>
                            </div>
                        </div>

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/gericare-doctor-1.jpg') }}"
                                alt="Dr. V. Srinivas - Senior Consultant Geriatrician" class="">
                            <div class="de-detl">
                                <h4>Dr. V. Srinivas</h4>
                                <span>Senior Consultant Geriatrician</span>
                            </div>
                            <div class="de-detl-btn">
                                <!-- <a href="{{ url('book-appointment') }}"> Book Appointment </a> -->
                                <a href="{{ url('dr-srinivas') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-srinivas') }}">Doctor's Profile </a>
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
                                <a href="{{ url('dr-magesh ') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-magesh ') }}">Doctor's Profile</a>
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
                                <a href="{{ url('dr-ashwin-subramaniam') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-ashwin-subramaniam') }}">Doctor's Profile</a>
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
                                <a href="{{ url('dr-vasanth') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-vasanth') }}">Doctor's Profile</a>
                            </div>
                        </div>

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/dr-k-anupuma.webp') }}"
                                alt="Dr. K. Anupama - Consultant Geriatrician" class="">
                            <div class="de-detl">
                                <h4>Dr. K. Anupama</h4>
                                <span>Consultant Geriatrician</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-anupama') }}">Request an Appointment </a>
                                <a href="{{ url('dr-anupama') }}">Doctor's Profile </a>
                            </div>
                        </div>

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/Dr-s-manicka-saravanan.webp') }}"
                                alt="Dr. S. Manicka Saravanan  - Consultant Geriatrician" class="">
                            <div class="de-detl">
                                <h4>Dr. S. Manicka Saravanan </h4>
                                <span>Consultant Geriatrician</span>
                            </div>
                            <div class="de-detl-btn">
                                <!-- <a href="{{ url('book-appointment') }}"> Book Appointment </a> -->
                                <a href="{{ url('dr-manicka-saravanan') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-manicka-saravanan') }}">Doctor's Profile </a>
                            </div>
                        </div>

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/dr-v-arulmozhiselvan.webp') }}"
                                alt="Dr. V. Arulmozhiselvan - Consultant Geriatrician" class="">
                            <div class="de-detl">
                                <h4>Dr. V. Arulmozhiselvan</h4>
                                <span>Consultant Geriatrician</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-arulmozhiselvan') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-arulmozhiselvan') }}">Doctor's Profile</a>
                            </div>
                        </div>

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/no-img-f.jpg') }}"
                                alt="Dr. Flora Alex , Consultant Geriatrician"
                                class="">
                            <div class="de-detl">
                                <h4>Dr. Flora Alex  </h4>
                                <span> Consultant Geriatrician </span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-flora-alex') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-flora-alex') }}">Doctor's Profile</a>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <h4 class="department-title">Geriatric Medicine</h4>
                    <div class="panell-drts mb-4">

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/doctor-img-6.jpg') }}"
                                alt="Dr. Muthuswamy - Cardiologist" class="">
                            <div class="de-detl">
                                <h4>Dr. Muthuswamy</h4>
                                <span>Cardiologist</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-muthuswamy') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-muthuswamy') }}">Doctor's Profile</a>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <h4 class="department-title">Ortho Geriatrics</h4>
                    <div class="panell-drts mb-4">
                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/doctor-img-13.jpg') }}"
                                alt="Dr. B.C.Bhanu Prakash - Senior Consultan" class="">
                            <div class="de-detl">
                                <h4>Dr. B.C.Bhanu Prakash</h4>
                                <span>Senior Consultan</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-banu-prakash') }}">Request an Appointment </a>
                                <a href="{{ url('dr-banu-prakash') }}">Doctor's Profile </a>
                            </div>
                        </div>

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/dr.thiruvengitaprasad.webp') }}"
                                alt="Dr. Thiruvengita Prasad - Senior Orthopedic Surgeon" class="">
                            <div class="de-detl">
                                <h4>Dr. Thiruvengita Prasad </h4>
                                <span>Senior Orthopedic Surgeon</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-thiruvengida') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-thiruvengida') }}">Doctor's Profile </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4 class="department-title">Geriatric Psychiatry</h4>
                    <div class="panell-drts mb-4">
                        <div class="dr-panel">
                                <img src="{{ asset('/public/website/assets/images/dr-srinivas-rajkumar-t.webp') }}"
                                    alt="Dr Srinivas Rajkumar T - Consultant Psychiatrist" class="">
                                <div class="de-detl">
                                    <h4>Dr Srinivas Rajkumar T</h4>
                                    <span>Consultant Psychiatrist</span>
                                </div>
                                <div class="de-detl-btn">
                                    <a href="{{ url('dr-srinivas-rajkumar') }}"> Request an Appointment </a>
                                    <a href="{{ url('dr-srinivas-rajkumar') }}">Doctor's Profile</a>
                                </div>
                            </div>

                            <div class="dr-panel">
                                <img src="{{ asset('/public/website/assets/images/doctor-img-22.jpg') }}"
                                    alt="Dr. Sujatha, Consultant Psychiatrist"
                                    class="">
                                <div class="de-detl">
                                    <h4>Dr. Sujatha</h4>
                                    <span> Consultant Psychiatrist </span>
                                </div>
                                <div class="de-detl-btn">
                                    <a href="{{ url('dr-sujatha') }}"> Request an Appointment </a>
                                    <a href="{{ url('dr-sujatha') }}">Doctor's Profile</a>
                                </div>
                            </div>

                            <div class="dr-panel">
                                <img src="{{ asset('/public/website/assets/images/mrs-tinu-thamby-t.webp') }}"
                                    alt="Mrs. Tinu Thamby T  - Clinical Psychologist" class="">
                                <div class="de-detl">
                                    <h4>Mrs. Tinu Thamby T </h4>
                                    <span>Clinical Psychologist</span>
                                </div>
                                <div class="de-detl-btn">
                                    <a href="{{ url('tinu-thamby') }}"> Request an Appointment </a>
                                    <a href="{{ url('tinu-thamby') }}">Doctor's Profile</a>
                                </div>
                            </div>
                    </div>
                    <hr>
                    <h4 class="department-title">Geriatric Neurology</h4>
                    <div class="panell-drts mb-4">
                    <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/doctor-img-17.jpg') }}"
                                alt="Dr. S. Balamurugan - Senior Neurosurgeon" class="">
                            <div class="de-detl">
                                <h4>Dr. S. Balamurugan</h4>
                                <span>Senior Neurosurgeon</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-balamurugan-s') }}">Request an Appointment </a>
                                <a href="{{ url('dr-balamurugan-s') }}">Doctor's Profile </a>
                            </div>
                        </div>

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/doctor-img-18.jpg') }}"
                                alt="Dr. Asir Julin - Neurologist" class="">
                            <div class="de-detl">
                                <h4>Dr. Asir Julin</h4>
                                <span>Senior Orthopedic Surgeon</span>
                            </div>
                            <div class="de-detl-btn">
                                <!-- <a href="{{ url('book-appointment') }}"> Book Appointment </a> -->
                                <a href="{{ url('dr-asir-julin') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-asir-julin') }}">Doctor's Profile </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4 class="department-title">Geriatric Surgery</h4>
                    <div class="panell-drts mb-4">
                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/doctor-img-19.jpg') }}"
                                alt="Dr. Mohan Rao - General Surgeon" class="">
                            <div class="de-detl">
                                <h4>Dr. Mohan Rao</h4>
                                <span>General Surgeon</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-mohan-rao') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-mohan-rao') }}">Doctor's Profile</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4 class="department-title">Geriatric Oncology</h4>
                     <div class="panell-drts mb-4">
                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/dr.rejivrajendranath.webp') }}"
                                alt="Dr. Rejiv Rajendranath, Medical Oncologist"
                                class="">
                            <div class="de-detl">
                                <h4>Dr. Rejiv Rajendranath</h4>
                                <span> Medical Oncologist </span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-rejivrajendranath') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-rejivrajendranath') }}">Doctor's Profile</a>
                            </div>
                        </div>
                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/dr.kathiresan.webp') }}"
                                alt="Dr. Kathiresan - Senior Surgical Oncologist" class="">
                            <div class="de-detl">
                                <h4>Dr. Kathiresan</h4>
                                <span>Senior Surgical Oncologist</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-kathiresan') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-kathiresan') }}">Doctor's Profile</a>
                            </div>
                        </div>
                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/dr-p-rajkumar.webp') }}"
                                alt=" Dr. P. Rajkumar - Senior Surgical Oncologist " class="">
                            <div class="de-detl">
                                <h4> Dr. P. Rajkumar</h4>
                                <span>Senior Surgical Oncologist </span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-rajkumar') }}">Request an Appointment </a>
                                <a href="{{ url('dr-rajkumar') }}">Doctor's Profile </a>
                            </div>
                        </div>
                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/doctor-img-11.jpg') }}"
                                alt="Dr. Arathi Surendranath - Radiation Oncology" class="">
                            <div class="de-detl">
                                <h4>Dr. Arathi Surendranath</h4>
                                <span>Radiation Oncology</span>
                            </div>
                            <div class="de-detl-btn">
                                <!-- <a href="{{ url('book-appointment') }}"> Book Appointment </a> -->
                                <a href="{{ url('dr-arathi-surendranath') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-arathi-surendranath') }}">Doctor's Profile </a>
                            </div>
                        </div>
                      </div>
                    <!-- <div class="cmn-brdrd-btn text-center">
                        <a href="{{ url('our-doctors') }}"> View All Doctors </a>
                    </div> -->

                </div>
                <hr>
                    <h4 class="department-title">Geriatric Urology</h4>
                    <div class="panell-drts mb-4">
                        <div class="dr-panel">
                                <img src="{{ asset('/public/website/assets/images/doctor-img-12.jpg') }}"
                                    alt="Dr. Guru Balaji - Senior Urologist" class="">
                                <div class="de-detl">
                                    <h4>Dr. Guru Balaji</h4>
                                    <span>Senior Urologist</span>
                                </div>
                                <div class="de-detl-btn">
                                    <a href="{{ url('dr-guru-balaji') }}"> Request an Appointment </a>
                                    <a href="{{ url('dr-guru-balaji') }}">Doctor's Profile</a>
                                </div>
                            </div>
                        </div>     
                   </div>
                <hr>
                <h4 class="department-title">Gastroenterology</h4>
                <div class="panell-drts mb-4">
                    <div class="dr-panel">
                                <img src="{{ asset('/public/website/assets/images/up-srinivas.webp') }}"
                                    alt="Dr. U.P. Srinivas, Senior Surgical Gastroenterolgist"
                                    class="">
                                <div class="de-detl">
                                    <h4>Dr. U.P. Srinivas</h4>
                                    <span>Senior Surgical Gastroenterolgist</span>
                                </div>
                                <div class="de-detl-btn">
                                    <a href="{{ url('dr-up-srinivas') }}"> Request an Appointment </a>
                                    <a href="{{ url('dr-up-srinivas') }}">Doctor's Profile</a>
                                </div>
                            </div>

                            <div class="dr-panel">
                                <img src="{{ asset('/public/website/assets/images/doctor-img-15.jpg') }}"
                                    alt="Dr. Vikram - Surgical Gastroenterologist" class="">
                                <div class="de-detl">
                                    <h4>Dr. Vikram</h4>
                                    <span>Surgical Gastroenterologist</span>
                                </div>
                                <div class="de-detl-btn">
                                    <a href="{{ url('dr-vikram') }}"> Request an Appointment </a>
                                    <a href="{{ url('dr-vikram') }}">Doctor's Profile</a>
                                </div>
                           </div>
                </div>
                <hr>    
                <h4 class="department-title">Pulmonology</h4>
                <div class="panell-drts mb-4">
                   <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/doctor-img-20.jpg') }}"
                                alt="Dr. Jayaraman - Pulmonologist" class="">
                            <div class="de-detl">
                                <h4> Dr. Jayaraman</h4>
                                <span>Pulmonologist</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-jayaraman') }}">Request an Appointment </a>
                                <a href="{{ url('dr-jayaraman') }}">Doctor's Profile </a>
                            </div>
                        </div>

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/sridevi.webp') }}"
                                alt="Dr. Sreedevi - Senior Pulmonologist" class="">
                            <div class="de-detl">
                                <h4>Dr. Sreedevi</h4>
                                <span>Senior Pulmonologist</span>
                            </div>
                            <div class="de-detl-btn">
                                <!-- <a href="{{ url('book-appointment') }}"> Book Appointment </a> -->
                                <a href="{{ url('dr-sridevi') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-sridevi') }}">Doctor's Profile </a>
                            </div>
                      </div>
                </div>
                 <hr>    
                 <h4 class="department-title">Geriatric ICU</h4>
                 <div class="panell-drts mb-4">
                      <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/dr.susovan-mitra.webp') }}"
                                alt="Dr. Susovan Mitra - Chief Critical Care Physician & Intensivist" class="">
                            <div class="de-detl">
                                <h4>Dr. Susovan Mitra</h4>
                                <span>Chief Critical Care Physician & Intensivist</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-susovan') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-susovan') }}">Doctor's Profile</a>
                            </div>
                        </div>
                 </div>
                 <hr>    
                 <h4 class="department-title">Vascular Surgery</h4>
                   <div class="panell-drts mb-4">
                      <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/doctor-img-25.jpg') }}"
                                alt="Dr. Sairam, Vascular Surgeon"
                                class="">
                            <div class="de-detl">
                                <h4>Dr. Sairam</h4>
                                <span>Vascular Surgeon</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-sairam') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-sairam') }}">Doctor's Profile</a>
                            </div>
                        </div>
                  </div>  
                  <hr>    
                  <h4 class="department-title">Uro Gynaecology</h4>
                   <div class="panell-drts mb-4"> 
                      <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/doctor-img-26.jpg') }}"
                                alt="Dr. Meenakshi - Consultant - Obstetrician & Gynaecologist" class="">
                            <div class="de-detl">
                                <h4>Dr. Meenakshi</h4>
                                <span>Consultant - Obstetrician & Gynaecologist</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-meenakshi') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-meenakshi') }}">Doctor's Profile</a>
                            </div>
                        </div> 
                    </div>  
                <hr>    
                <h4 class="department-title">Nephrology</h4>
                <div class="panell-drts mb-4"> 
                    <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/balamurugan-b.webp') }}"
                                alt="Dr. B. Balamurugan - Senior Consultant Nephrologist" class="">
                            <div class="de-detl">
                                <h4> Dr. B. Balamurugan</h4>
                                <span>Senior Consultant Nephrologist</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-balamurugan-b') }}">Request an Appointment </a>
                                <a href="{{ url('dr-balamurugan-b') }}">Doctor's Profile </a>
                            </div>
                     </div>
                </div>  
                <hr>    
                <h4 class="department-title">Pathology</h4>
                <div class="panell-drts mb-4">
                   <div class="dr-panel pb-4">
                            <img src="{{ asset('/public/website/assets/images/doctor-img-27.jpg') }}"
                                alt="Dr. Kanimozhi - Pathologist" class="">
                            <div class="de-detl">
                                <h4>Dr. Kanimozhi</h4>
                                <span>Pathologist</span>
                            </div>
                            <div class="de-detl-btn">
                                <!-- <a href="{{ url('book-appointment') }}"> Book Appointment </a> -->
                                <a href="{{ url('request-an-appointment') }}"> Request an Appointment </a>
                                <!-- <a href="{{ url('book-an-appointment') }}">Doctor's Profile </a> -->
                            </div>
                     </div> 
                </div>     
                <a id="add-res-bar"></a>
                <a id="locations"></a>
            </div>
            <a id="hospital-departments"></a>
        </div>
    </section>

    <!-- <section class="care-fromus p-0">
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
                                    <h4>Expert Geriatricians</h4>
                                    <p>Our experts have undergone exemplary training at renowned institutions including Madras Medical College (MMC) in Chennai and the All India Institute of Medical Sciences (AIIMS) in New Delhi. Additionally, they have gained valuable experience as consultants in esteemed hospitals overseas, particularly in the United Kingdom (UK).</p>
                                </div>

                                <div class="age-layer">
                                    <h4>Continuity of Care</h4>
                                    <p>From clinical interventions to comprehensive hospital treatments, and post
                                        hospitalization home care services along with assisted living options, we ensure
                                        continuous medical support and comfort 24/7.</p>
                                </div>

                                <div class="age-layer">
                                    <h4>Multi-disciplinary Approach</h4>
                                    <p>We bring cutting-edge research and innovative approaches that reflect geriatric excellence and help transform not just the lives of the elderly, but also their loved ones and family members.</p>
                                </div>

                                <div class="age-layer">
                                    <h4>Unique Healthcare Culture</h4>
                                    <p>We take pride over a culture that prioritizes tailored treatment plans & comprehensive care to ensure remarkable treatments along with a positive experience that helps the elderly recover and heal at ease.</p>
                                </div>



                            </div>

                        </div>

                    </div>

                </div>

                <a id="hospital-facilities"></a>
            </div>
        </div>
    </section> -->


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

   
  
      
  
  

    <!-- @include('website.bottomform') -->

    <!-- @include('website.mobilebottomform') -->
    @include('website.bottombar')
@endsection

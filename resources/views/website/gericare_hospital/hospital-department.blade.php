@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/Banner.jpg') }}" alt="Geri Care Hospital" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h1>Departments</span>
</h1>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li>   
<li>></li>  
<li><a href="{{ url('gericare-hospital') }}">Geri Care Hospitals</a></li> 
<li>></li>     
<li class="active"> Departments </li>    
</ul>
</div>
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
<div class="common-heading">
<h2 class="mb-4">Dedicated Centers of Excellence, with Specialists in every function </h2>
</div>

<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-2.jpg') }}" alt="Geri Care Hospital" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Geriatric Cardiology </h3>
                         <p>Combining expertise in cardiology and geriatrics, our Geriatric Cardiology department delivers personalized care for elderly individuals, ensuring optimal heart function and improved quality of life. </p>
                         <div class="minrester-link">
                    <a href="{{ url('our-doctors') }}"   tabindex="0">Find a doctor<img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class=""></a>
                    </div>  
            </div>
        </div>
</div>

<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-4.jpg') }}" alt="Geri Care Hospital" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Ortho Geriatrics </h3>
                         <p>Our Orthogeriatrics department offers comprehensive orthopedic care designed specifically for elderly patients, promoting timely and effective management of hip fractures and age-related musculoskeletal conditions such as OA and osteoporosis.</p>
                         <div class="minrester-link">
                       <a href="{{ url('our-doctors') }}"   tabindex="0">Find a doctor<img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class=""></a>
                    </div>  
            </div>
        </div>
</div>

<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-6.jpg') }}" alt="Geri Care Hospital" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Geriatric Neurology </h3>
                         <p>Combining neurologic expertise and geriatric care, our Geriatric Neurology department offers comprehensive evaluation and treatment for neurological conditions such as parkinsons disease, peripheral neuropathy, stroke, seizure disorders in older adults, providing personalized care to enhance brain health and cognitive function.</p>
                         <div class="minrester-link">
                           <a href="{{ url('our-doctors') }}"   tabindex="0">Find a doctor<img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class=""></a>
                        </div>  
            </div>
        </div>
</div>


<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-7.jpg') }}" alt="Geri Care Hospital" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Geriatric Surgery</h3>
                         <p>Our Geriatric Surgery department provides specialized surgical care for older adults, ensuring safe and effective procedures tailored to the unique needs of elderly patients.</p>
                    <div class="minrester-link">
                       <a href="{{ url('our-doctors') }}"   tabindex="0">Find a doctor<img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class=""></a>
                    </div>  
            </div>
        </div>
</div>

<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-1.jpg') }}" alt="Geri Care Hospital" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Geriatric Oncology </h3>
                         <p>Specialized care for elderly cancer patients, combining oncology expertise with geriatric medicine to ensure personalized and comprehensive treatment. Equipped with a team of Medical Oncologists and Surgical Oncologists and a dedicated Tumour Board, the Geriatric Oncology department offers 360 degree care right from hospital to homecare for elderly patients.</p>
                    <div class="minrester-link">
                    <a href="{{ url('our-doctors') }}"   tabindex="0">Find a doctor<img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class=""></a>
                    </div>   
            </div>
        </div>
</div>

<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-3.jpg') }}" alt="Geri Care Hospital" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Geriatric Urology</h3>
                         <p>Our Geriatric Urology department offers tailored urological care for older adults, addressing age-related urinary issues such as prostate issues, urinary incontinence, UTIs with compassion and expertise.</p>
                    <div class="minrester-link">
                       <a href="{{ url('our-doctors') }}"   tabindex="0">Find a doctor<img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class=""></a>
                    </div>  
            </div>
        </div>
</div>

<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-5.jpg') }}" alt="Geri Care Hospital" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Gasteroentrology </h3>
                         <p>Specializing in digestive health for older adults, our Geriatric Gastroenterology department provides personalized care and advanced treatments to address age-related gastrointestinal conditions such as indigestion, constipation, IBS, GERD with precision and compassion. Equipped with Upper GI Scopy and Colonoscopy, the hospital provides holistic solutions for GI problems.</p>
                         <div class="minrester-link">
                       <a href="{{ url('our-doctors') }}"   tabindex="0">Find a doctor<img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class=""></a>
                    </div>  
            </div>
        </div>
</div>

<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-8.jpg') }}" alt="Geri Care Hospital" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Pulmonology</h3>
                         <p>Specializing in chronic respiratory for older adults, our Geriatric Pulmonology department provides comprehensive diagnostics such as PFT, Bronchoscopy and treatment services for pulmonary conditions in elderly patients such as asthma, COPD, Respiratory failure, Chronic Bronchitis, IL, ensuring optimal lung function and general well being.</p>
                    <div class="minrester-link">
                       <a href="{{ url('our-doctors') }}"   tabindex="0">Find a doctor<img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class=""></a>
                    </div>  
            </div>
        </div>
</div>

<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-9.jpg') }}" alt="Geri Care Hospital" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Geriatric ICU </h3>
                         <p>At our Geriatric ICU, we offer individualized and advanced critical care for older adults, addressing complex medical needs and age-specific considerations to deliver exceptional support and promote recovery. We are one of India's first hospitals to respect patient’s advanced healthcare directives.</p>
                    <div class="minrester-link">
                       <a href="{{ url('our-doctors') }}"   tabindex="0">Find a doctor<img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class=""></a>
                    </div>  
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-10.jpg') }}" alt="Geri Care Hospital" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Dermatology </h3>
                         <p>Specializing in skin health for older adults, our Geriatric Dermatology department offers tailored treatments and skincare solutions, addressing age-related dermatological conditions such as psoriasis, dry skin, bullous pemphigoid, melanoma with expertise and compassion.</p>
                    <div class="minrester-link">
                       <a href="{{ url('our-doctors') }}"   tabindex="0">Find a doctor<img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class=""></a>
                    </div>  
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-11.jpg') }}" alt="Geri Care Hospital" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Vascular Surgery </h3>
                         <p>The vascular surgery department offers advanced surgical interventions and personalized treatment plans to address age-related vascular conditions such as peripheral vascular diseases.</p>
                    <div class="minrester-link">
                       <a href="{{ url('our-doctors') }}"   tabindex="0">Find a doctor<img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class=""></a>
                    </div>  
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-12.jpg') }}" alt="Geri Care Hospital" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Uro Gynaecology </h3>
                         <p>Combining expertise in urology and gynecology, our Urogynecology department provides personalized care for women's pelvic health, addressing urinary and pelvic floor disorders with compassion and advanced treatment option.</p>
                    <div class="minrester-link">
                       <a href="{{ url('our-doctors') }}"   tabindex="0">Find a doctor<img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class=""></a>
                    </div>  
            </div>
        </div>
</div>

<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-15.jpg') }}" alt="Geri Care Hospital" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Nephrology and Dialysis 24x7</h3>
                         <p>Combining expertise in geriatrics and nephrology, our Geriatric Nephrology and Dialysis department offers comprehensive care for older adults with kidney disease, including state-of-the-art dialysis services, ensuring enhanced quality of life and constant follow up.</p>
                    <div class="minrester-link">
                       <a href="{{ url('our-doctors') }}"   tabindex="0">Find a doctor<img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class=""></a>
                    </div>  
            </div>
        </div>
</div>

<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-14.jpg') }}" alt="Geri Care Hospital" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Geriatric Physiotherapy  </h3>
                         <p>Geriatric physiotherapists utilize a holistic approach, combining exercises, manual therapy, and other therapeutic techniques to address age-related conditions such as arthritis, osteoporosis, balance impairments, and mobility limitations. By tailoring treatment plans to individual needs, geriatric physiotherapy helps older adults regain or maintain their physical abilities, enhancing their overall well-being and promoting active and independent living. Services are provided across all care settings such as Home and Assisted living facilities also.</p>
                    <div class="minrester-link">
                       <a href="{{ url('our-doctors') }}"   tabindex="0">Find a doctor<img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class=""></a>
                    </div>  
            </div>
        </div>
</div>

<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-13.jpg') }}" alt="Geri Care Hospital" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Lab Services </h3>
                         <p>Our state-of-the-art lab services for accurate and timely diagnostic testing, ensuring precise results to guide your healthcare decisions at the comfort of your home.</p>
                    <div class="minrester-link">
                       <a href="{{ url('our-doctors') }}"   tabindex="0">Find a doctor<img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class=""></a>
                    </div>  
            </div>
        </div>
</div>





</div>

<div class="col-lg-5">
    
<div class="form-detilsbox text-center">
<h4>Book Your Appointment</h4>
<form class="appointment-form" name="AppointmentForm" method="post" action="#" id="AppointmentForm">
    @csrf
                            <input type="hidden" name="from" id="from" value="departments">
								<input type="hidden" name="form_name" value="book_an_appointment_departments" >
                               
  							    <div class="row"> 
                                
								<!-- <div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="text" name="name" id="aname" class="form-control" placeholder="Dr.Srinivas" readonly/>
								</div> -->
                                
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="text" name="name" id="aname" required class="form-control" placeholder="Name *" required/>
                                    
                                </div> 
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="email" name="email" id="aemail" class="form-control" placeholder="Email" />
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="tel" id="aphone" name="mobile_no" value="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" placeholder="Phone *" required>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<div class=" date"> 
										<input type="date" placeholder="Select Date" name="appointment_date" class="form-control" id="fecha1" required>
										<div class="input-group-append">
										<span class="input-group-text"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6"> 
                                                                    <select class="form-control tmepcr" id="appointment_time" name="appointment_time" required>
                                                                        <option value="">Select Time</option>
                                                                        <option value="8:00am">8:00 AM</option>  
                                                                        <option value="8:15am">8:15 AM</option>  
                                                                        <option value="8:30am">8:30 AM</option>  
                                                                        <option value="8:45am">8:45 AM</option> 
                                                                        <option value="9:00am">9:00 AM</option>  
                                                                        <option value="9:15am">9:15 AM</option>  
                                                                        <option value="9:30am">9:30 AM</option>  
                                                                        <option value="9:45am">9:45 AM</option>  
                                                                        <option value="10:00am">10:00 AM</option>  
                                                                        <option value="10:15am">10:15 AM</option>  
                                                                        <option value="10:30am">10:30 AM</option>  
                                                                        <option value="10:45am">10:45 AM</option>   
                                                                        <option value="11:00am">11:00 AM</option>  
                                                                        <option value="11:15am">11:15 AM</option>  
                                                                        <option value="11:30am">11:30 AM</option>  
                                                                        <option value="11:45am">11:45 AM</option>    
                                                                        <option value="12:00pm">12:00 PM</option>  
                                                                        <option value="12:15pm">12:15 PM</option>  
                                                                        <option value="12:30pm">12:30 PM</option>  
                                                                        <option value="12:45pm">12:45 PM</option>     
                                                                        <option value="1:00pm">1:00 PM</option>  
                                                                        <option value="1:15pm">1:15 PM</option>  
                                                                        <option value="1:30pm">1:30 PM</option>  
                                                                        <option value="1:45pm">1:45 PM</option>      
                                                                        <option value="2:00pm">2:00 PM</option>  
                                                                        <option value="2:15pm">2:15 PM</option>  
                                                                        <option value="2:30pm">2:30 PM</option>  
                                                                        <option value="2:45pm">2:45 PM</option>       
                                                                        <option value="3:00pm">3:00 PM</option>  
                                                                        <option value="3:15pm">3:15 PM</option>  
                                                                        <option value="3:30pm">3:30 PM</option>  
                                                                        <option value="3:45pm">3:45 PM</option>        
                                                                        <option value="4:00pm">4:00 PM</option>  
                                                                        <option value="4:15pm">4:15 PM</option>  
                                                                        <option value="4:30pm">4:30 PM</option>  
                                                                        <option value="4:45pm">4:45 PM</option>         
                                                                        <option value="5:00pm">5:00 PM</option>  
                                                                        <option value="5:15pm">5:15 PM</option>  
                                                                        <option value="5:30pm">5:30 PM</option>  
                                                                        <option value="5:45pm">5:45 PM</option>          
                                                                        <option value="6:00pm">6:00 PM</option>  
                                                                        <option value="6:15pm">6:15 PM</option>  
                                                                        <option value="6:30pm">6:30 PM</option>  
                                                                        <option value="6:45pm">6:45 PM</option>           
                                                                        <option value="7:00pm">7:00 PM</option>  
                                                                        <option value="7:15pm">7:15 PM</option>  
                                                                        <option value="7:30pm">7:30 PM</option>  
                                                                        <option value="7:45pm">7:45 PM</option>            
                                                                        <option value="8:00pm">8:00 PM</option>  
                                                                        <option value="8:15pm">8:15 PM</option>  
                                                                        <option value="8:30pm">8:30 PM</option>  
                                                                        <option value="8:45pm">8:45 PM</option>             
                                                                        <option value="9:00pm">9:00 PM</option>  
                                                                        <option value="9:15pm">9:15 PM</option>  
                                                                        <option value="9:30pm">9:30 PM</option>  
                                                                        <option value="9:45pm">9:45 PM</option>              
                                                                        <option value="10:00pm">10:00 PM</option>  
                                                                        <option value="10:15pm">10:15 PM</option>  
                                                                        <option value="10:30pm">10:30 PM</option>  
                                                                        <option value="10:45pm">10:45 PM</option>  
                                                                        <option value="11:00pm">11:00 PM</option> 
                                                                    </select>
                                                                    </div>
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<textarea class="form-control" name="details" placeholder="Message"></textarea>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-data cnt text-center clearfix"><input type="submit" id="appoi_submit-btn" name="submit" value="Submit"> </div>
										</div>
							</div>
						</form>
</div>

</div>

</div>
</div>

</div>
</div>
</section>
@endsection
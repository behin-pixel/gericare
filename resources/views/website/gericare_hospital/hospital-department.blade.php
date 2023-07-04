@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/Banner.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>Departments</span>
</h4>
<ul>
<li><a href="../">Home</a></li>  
<li>></li>  
<li>Geri Care Hospitals</li>  
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
<h2 class="mb-4">Dedicated centers of excellence, with specialists in every function </h2>
</div>
<div class="row dctr-detilsbox  ">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-1.jpg') }}" alt="" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Geriatric Oncology </h3>
                         <p>Specialized care for elderly cancer patients, combining oncology expertise with geriatric medicine to ensure personalized and comprehensive treatment. Equipped with a team of Medical Oncologists and Surgical Oncologists and a dedicated Tumour Board, the Geriatric Oncology department offers 360 degree care right from hospital to homecare for elderly patients.</p>
                    <div class="minrester-link">
                    <a href="{{ url('/gericare-hospital/hospital-doctors') }}"   tabindex="0">Fina a doctor<img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="" class=""></a>
                    </div>   
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-2.jpg') }}" alt="" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Geriatric Cardiology </h3>
                         <p>Combining expertise in cardiology and geriatrics, our Geriatric Cardiology department delivers personalized care for elderly individuals, ensuring optimal heart function and improved quality of life. </p>
                         <div class="minrester-link">
                    <a href="{{ url('/gericare-hospital/hospital-doctors') }}"   tabindex="0">Fina a doctor<img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="" class=""></a>
                    </div>  
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-3.jpg') }}" alt="" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Geriatric Urology</h3>
                         <p>Our Geriatric Urology department offers tailored urological care for older adults, addressing age-related urinary issues such as prostate issues, urinary incontinence, UTIs with compassion and expertise.</p>
                    <div class="minrester-link">
                       <a href="{{ url('/gericare-hospital/hospital-doctors') }}"   tabindex="0">Fina a doctor<img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="" class=""></a>
                    </div>  
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-4.jpg') }}" alt="" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Orthogeriatrics </h3>
                         <p>Our Orthogeriatrics department offers comprehensive orthopedic care designed specifically for elderly patients, promoting timely and effective management of hip fractures and age-related musculoskeletal conditions such as OA and osteoporosis.</p>
                         <div class="minrester-link">
                       <a href="{{ url('/gericare-hospital/hospital-doctors') }}"   tabindex="0">Fina a doctor<img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="" class=""></a>
                    </div>  
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-5.jpg') }}" alt="" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Gasteroentrology </h3>
                         <p>Specializing in digestive health for older adults, our Geriatric Gastroenterology department provides personalized care and advanced treatments to address age-related gastrointestinal conditions such as indigestion, constipation, IBS, GERD with precision and compassion. Equipped with Upper GI Scopy and Colonoscopy, the hospital provides holistic solutions for GI problems.</p>
                         <div class="minrester-link">
                       <a href="{{ url('/gericare-hospital/hospital-doctors') }}"   tabindex="0">Fina a doctor<img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="" class=""></a>
                    </div>  
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-6.jpg') }}" alt="" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Neurology </h3>
                         <p>Combining neurologic expertise and geriatric care, our Geriatric Neurology department offers comprehensive evaluation and treatment for neurological conditions such as parkinsons disease, peripheral neuropathy, stroke, seizure disorders in older adults, providing personalized care to enhance brain health and cognitive function.</p>
                         <div class="minrester-link">
                           <a href="{{ url('/gericare-hospital/hospital-doctors') }}"   tabindex="0">Fina a doctor<img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="" class=""></a>
                        </div>  
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-7.jpg') }}" alt="" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Surgery</h3>
                         <p>Our Geriatric Surgery department provides specialized surgical care for older adults, ensuring safe and effective procedures tailored to the unique needs of elderly patients.</p>
                    <div class="minrester-link">
                       <a href="{{ url('/gericare-hospital/hospital-doctors') }}"   tabindex="0">Fina a doctor<img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="" class=""></a>
                    </div>  
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-8.jpg') }}" alt="" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Pulmonology</h3>
                         <p>Specializing in chronic respiratory for older adults, our Geriatric Pulmonology department provides comprehensive diagnostics such as PFT, Bronchoscopy and treatment services for pulmonary conditions in elderly patients such as asthma, COPD, Respiratory failure, Chronic Bronchitis, IL, ensuring optimal lung function and general well being.</p>
                    <div class="minrester-link">
                       <a href="{{ url('/gericare-hospital/hospital-doctors') }}"   tabindex="0">Fina a doctor<img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="" class=""></a>
                    </div>  
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-9.jpg') }}" alt="" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>ICU </h3>
                         <p>At our Geriatric ICU, we offer individualized and advanced critical care for older adults, addressing complex medical needs and age-specific considerations to deliver exceptional support and promote recovery. We are one of India's first hospitals to respect patient’s advanced healthcare directives.</p>
                    <div class="minrester-link">
                       <a href="{{ url('/gericare-hospital/hospital-doctors') }}"   tabindex="0">Fina a doctor<img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="" class=""></a>
                    </div>  
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-10.jpg') }}" alt="" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Dermatology </h3>
                         <p>Specializing in skin health for older adults, our Geriatric Dermatology department offers tailored treatments and skincare solutions, addressing age-related dermatological conditions such as psoriasis, dry skin, bullous pemphigoid, melanoma with expertise and compassion.</p>
                    <div class="minrester-link">
                       <a href="{{ url('/gericare-hospital/hospital-doctors') }}"   tabindex="0">Fina a doctor<img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="" class=""></a>
                    </div>  
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-11.jpg') }}" alt="" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Vascular Surgery </h3>
                         <p>The vascular surgery department offers advanced surgical interventions and personalized treatment plans to address age-related vascular conditions such as peripheral vascular diseases.</p>
                    <div class="minrester-link">
                       <a href="{{ url('/gericare-hospital/hospital-doctors') }}"   tabindex="0">Fina a doctor<img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="" class=""></a>
                    </div>  
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-12.jpg') }}" alt="" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Uro Gynaecology </h3>
                         <p>Combining expertise in urology and gynecology, our Urogynecology department provides personalized care for women's pelvic health, addressing urinary and pelvic floor disorders with compassion and advanced treatment option.</p>
                    <div class="minrester-link">
                       <a href="{{ url('/gericare-hospital/hospital-doctors') }}"   tabindex="0">Fina a doctor<img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="" class=""></a>
                    </div>  
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-13.jpg') }}" alt="" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Lab Services </h3>
                         <p>Our state-of-the-art lab services for accurate and timely diagnostic testing, ensuring precise results to guide your healthcare decisions at the comfort of your home.</p>
                    <div class="minrester-link">
                       <a href="{{ url('/gericare-hospital/hospital-doctors') }}"   tabindex="0">Fina a doctor<img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="" class=""></a>
                    </div>  
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-14.jpg') }}" alt="" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Physiotherapy  </h3>
                         <p>Geriatric physiotherapists utilize a holistic approach, combining exercises, manual therapy, and other therapeutic techniques to address age-related conditions such as arthritis, osteoporosis, balance impairments, and mobility limitations. By tailoring treatment plans to individual needs, geriatric physiotherapy helps older adults regain or maintain their physical abilities, enhancing their overall well-being and promoting active and independent living. Services are provided across all care settings such as Home and Assisted living facilities also.</p>
                    <div class="minrester-link">
                       <a href="{{ url('/gericare-hospital/hospital-doctors') }}"   tabindex="0">Fina a doctor<img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="" class=""></a>
                    </div>  
            </div>
        </div>
</div>
<div class="row dctr-detilsbox   mt-4">
        <div class=" col-md-4 col-lg-4">
            <div class="doc-tor-img">
                <img src="{{ asset('/public/website/assets/images/department-15.jpg') }}" alt="" class="w-100">
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="servrse-contest-p p-0">
                <h3>Nephrology and Dialysis 24x7</h3>
                         <p>Combining expertise in geriatrics and nephrology, our Geriatric Nephrology and Dialysis department offers comprehensive care for older adults with kidney disease, including state-of-the-art dialysis services, ensuring enhanced quality of life and constant follow up.</p>
                    <div class="minrester-link">
                       <a href="{{ url('/gericare-hospital/hospital-doctors') }}"   tabindex="0">Fina a doctor<img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="" class=""></a>
                    </div>  
            </div>
        </div>
</div>



</div>

<div class="col-lg-5">
    
<div class="form-detilsbox text-center">
<h4>Book Your Appointment</h4>
<form class="appointment-form" name="AppointmentForm" method="post" onSubmit="return valid_chk4()" action="#" id="AppointmentForm">
								<input type="hidden" name="form_name" value="book_an_appointment" >
  							<div class="row"> 
                                
								<!-- <div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="text" name="name" id="aname" class="form-control" placeholder="Dr.Srinivas" readonly/>
								</div> -->
                                
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="text" name="name" id="aname" class="form-control" placeholder="Name *" />
								</div> 
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="email" name="email" id="aemail" class="form-control" placeholder="Email *" />
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="tel" id="aphone" name="phone" value="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" placeholder="Phone *">
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<div class="datepicker date"> 
										<input type="text" placeholder="Select Date" name="appointment_date" class="form-control" id="fecha1 " placeholder="Date *">
										<div class="input-group-append">
										<span class="input-group-text"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6"> 
									<input type="text" class="form-control" name="appointment_time"  id="timepicker"/ placeholder="Select Time *">
								</div> 
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<textarea class="form-control" name="details" placeholder="Message"></textarea>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-data cnt text-center clearfix"><input type="submit" name="submit" value="Submit"> </div>
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
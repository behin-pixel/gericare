
<div class="col-lg-12">
<div class="selt-deps only-for-mobby">
<h4>Select Department</h4>
<select class="form-control " id="sel-dept" name="sel-dept">
	<option value="" selected>Select Department</option>
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

<div class="d-flex align-items-start">

      <div class="nav flex-column nav-pills me-3 sticky-top" id="v-pills-tab" role="tablist" aria-orientation="1">
        <h4> Select Department </h4>
        <div class="doctors-filters-btns mCustomScrollbar">
        <a href="{{ url('/departments/geriatric-medicine') }}" class="@if(request()->routeIs(['departments.geriatric-medicine'])) active @endif nav-link">
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-18.png') }}" alt="Geri Care Hospital" class=""> 
        </div>    
        Geriatric Medicine
        </a>
        <a href="{{ url('/departments/geriatric-cardiology') }}" class="@if(request()->routeIs(['departments.geriatric-cardiology'])) active @endif nav-link">      
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Geriatric Cardiology
        </a>

        <a href="{{ url('/departments/ortho-geriatrics') }}" class="@if(request()->routeIs(['departments.ortho-geriatrics'])) active @endif nav-link">  
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-4.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Ortho Geriatrics 
        </a>


        <a href="{{ url('/departments/geriatric-psychiatry') }}" class="@if(request()->routeIs(['departments.geriatric-psychiatry'])) active @endif nav-link">        
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-10.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Geriatric Psychiatry
        </a>
        

        <a href="{{ url('/departments/geriatric-neurology') }}" class="@if(request()->routeIs(['departments.geriatric-neurology'])) active @endif nav-link">          
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-6.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Geriatric Neurology
        </a>
    
        <a href="{{ url('/departments/geriatric-surgery') }}" class="@if(request()->routeIs(['departments.geriatric-surgery'])) active @endif nav-link">     
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-7.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Geriatric Surgery
        </a>

        <a href="{{ url('/departments/geriatric-oncology') }}" class="@if(request()->routeIs(['departments.geriatric-oncology'])) active @endif nav-link">          
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/oncology.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Geriatric Oncology
        </a>

        <a href="{{ url('/departments/geriatric-urology') }}" class="@if(request()->routeIs(['departments.geriatric-urology'])) active @endif nav-link"> 
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-9.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Geriatric Urology
        </a>
        
        <a href="{{ url('/departments/gastroenterology') }}" class="@if(request()->routeIs(['departments.gastroenterology'])) active @endif nav-link">
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/stomach.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Gastroenterology
        </a>

        <a href="{{ url('/departments/pulmonology') }}" class="@if(request()->routeIs(['departments.pulmonology'])) active @endif nav-link">
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/lungs.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Pulmonology
        </a> 

        <a href="{{ url('/departments/geriatric-icu') }}" class="@if(request()->routeIs(['departments.geriatric-icu'])) active @endif nav-link">
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-16.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Geriatric ICU
        </a>


        <a href="{{ url('/departments/dermatology') }}" class="@if(request()->routeIs(['departments.dermatology'])) active @endif nav-link">
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-11.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Dermatology
        </a> 

      
        <a href="{{ url('/departments/vascular-surgery') }}" class="@if(request()->routeIs(['departments.vascular-surgery'])) active @endif nav-link">      
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-12.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Vascular Surgery
        </a> 
      
        
        <a href="{{ url('/departments/uro-gynaecology') }}" class="@if(request()->routeIs(['departments.uro-gynaecology'])) active @endif nav-link">    
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-13.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Uro Gynaecology 
        </a> 


        <!-- <button class="nav-link" id="v-pills-12-tab" data-bs-toggle="pill" data-bs-target="#v-pills-12" type="button" role="tab" aria-controls="v-pills-12" aria-selected="false">
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-7.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Geriatric Psychology
        </button>  -->

        <a href="{{ url('/departments/nephrology') }}" class="@if(request()->routeIs(['departments.nephrology'])) active @endif nav-link">
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-15.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Nephrology 
        </a> 

        <!-- <a href="{{ url('ent') }}" class="@if(request()->routeIs(['departments.ent'])) active @endif nav-link">
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-17.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
          ENT
        </a>  -->

        <!-- <a href="{{ url('ophthalmology') }}" class="@if(request()->routeIs(['departments.ophthalmology'])) active @endif nav-link">
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-20.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
          Ophthalmology
        </a>  -->

        <!-- <a href="{{ url('dentistry') }}" class="@if(request()->routeIs(['departments.dentistry'])) active @endif nav-link">
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-21.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
          Dentistry
        </a>  -->

        <a href="{{ url('/departments/geriatric-physiotherapy') }}" class="@if(request()->routeIs(['departments.geriatric-physiotherapy'])) active @endif nav-link">
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-14.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Geriatric Physiotherapy
        </a> 

        <a href="{{ url('/departments/pathology') }}" class="@if(request()->routeIs(['departments.pathology'])) active @endif nav-link">
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-22.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Pathology
        </a> 

        <a href="{{ url('/departments/dentistry') }}" class="@if(request()->routeIs(['departments.dentistry'])) active @endif nav-link">
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-21.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Dentistry 
        </a> 

        <a href="{{ url('/departments/ent') }}" class="@if(request()->routeIs(['departments.ent'])) active @endif nav-link">
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-17.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        ENT
        </a> 
        <a href="{{ url('/departments/ophthalmology') }}" class="@if(request()->routeIs(['departments.ophthalmology'])) active @endif nav-link">
        <div class="geric-img">
        <img src="{{ asset('/public/website/assets/images/icn-20.png') }}" alt="Geri Care Hospital" class=""> 
        </div>     
        Ophthalmology
        </a> 
    </div> 
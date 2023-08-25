<div class="col-lg-12 no-at-desk">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Select Your Service
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"> 
<li class="@if(request()->routeIs(['homecare-services.geriatric-physiotherapy-at-home'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="Geri Care Hospital" class=""> <a class="dropdown-item" href="{{ url('falls-prevention-clinic') }}">Falls Prevention (Osteoporosis) Clinic</a>
</li> 
<li class="@if(request()->routeIs(['homecare-services.psychiatrist-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="Geri Care Hospital" class=""> <a class="dropdown-item"href="{{ url('memory-clinic') }}">Memory Clinic</a>
</li> 
<li class="@if(request()->routeIs(['homecare-services.orthopedician-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="Geri Care Hospital" class=""> <a class="dropdown-item"href="{{ url('incontinence-clinic') }}">Incontinence Clinic (Urinary)</a>
</li>                    
<li class="@if(request()->routeIs(['homecare-services.dentist-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="Geri Care Hospital" class=""> <a class="dropdown-item"href="{{ url('preventive-health-care-clininc') }}">Preventive Health Checks Clinic</a>
</li>   
<li class="@if(request()->routeIs(['homecare-services.iv-fluids-monitoring'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="Geri Care Hospital" class=""> <a class="dropdown-item"href="{{ url('adult-vaccination-clinic') }}">Adult Vaccination Clinic</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.urinary-catheterization'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="Geri Care Hospital" class=""> <a class="dropdown-item"href="{{ url('seniors-diabetic-clinic') }}">Seniors Diabetic Clinic</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.outpatient-antibiotic-administration'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="Geri Care Hospital" class=""> <a class="dropdown-item"href="{{ url('outpatient-parenteral-antimicrobial-administration') }}">Hypertension Clinic</a>
</li>     
<li class="@if(request()->routeIs(['homecare-services.wound-care-dressing'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="Geri Care Hospital" class=""> <a class="dropdown-item"href="{{ url('wound-care-dressing') }}">Sleep Disorder Clinic</a>
</li>    
  </ul>
</div>
</div>

<div class="col-lg-3 no-at-moble">
<div class="service-lsdtd">
<h4>Select your Service</h4>
<ul class="list-of-services"> 
<li class="@if(request()->routeIs(['homecare-services.geriatric-physiotherapy-at-home'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="Geri Care Hospital" class=""> <a href="{{ url('falls-prevention-clinic') }}">Falls Prevention (Osteoporosis) Clinic</a>
</li> 
<li class="@if(request()->routeIs(['homecare-services.psychiatrist-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="Geri Care Hospital" class=""> <a href="{{ url('memory-clinic') }}">Memory Clinic</a>
</li> 
<li class="@if(request()->routeIs(['homecare-services.orthopedician-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="Geri Care Hospital" class=""> <a href="{{ url('incontinence-clinic') }}">Incontinence Clinic (Urinary)</a>
</li>  
<li class="@if(request()->routeIs(['homecare-services.dentist-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="Geri Care Hospital" class=""> <a href="{{ url('preventive-health-care-clininc') }}">Preventive Health Checks Clinic</a>
</li>   
<li class="@if(request()->routeIs(['homecare-services.iv-fluids-monitoring'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="Geri Care Hospital" class=""> <a href="{{ url('adult-vaccination-clinic') }}">Adult Vaccination Clinic</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.urinary-catheterization'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="Geri Care Hospital" class=""> <a href="{{ url('seniors-diabetic-clinic') }}">Seniors Diabetic Clinic</a>
</li>    
<li  class="@if(request()->routeIs(['homecare-services.outpatient-antibiotic-administration'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="Geri Care Hospital" class=""> <a href="{{ url('outpatient-parenteral-antimicrobial-administration') }}">Hypertension Clinic</a>
</li>     
<li class="@if(request()->routeIs(['homecare-services.wound-care-dressing'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="Geri Care Hospital" class=""> <a href="{{ url('wound-care-dressing') }}">Sleep Disorder Clinic</a>
</li>    
</ul>
</div>
</div>
<div class="col-lg-12 no-at-desk">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Select Your Service
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"> 
<li class="@if(request()->routeIs(['homecare-services.geriatric-physiotherapy-at-home'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item" href="{{ url('physio-care') }}">Geriatric Physiotherapy at Home</a>
</li> 
<li class="@if(request()->routeIs(['homecare-services.psychiatrist-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('psychiatrist-for-home-visit') }}">Psychiatrist Home Visit</a>
</li> 
<li class="@if(request()->routeIs(['homecare-services.orthopedician-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('orthopedician-home-visit') }}">Orthopedician Home Visit</a>
</li>  
<li class="@if(request()->routeIs(['homecare-services.dentist-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('dentist-at-home') }}">Dentist Home Visit</a>
</li>   
<li class="@if(request()->routeIs(['homecare-services.iv-fluids-monitoring'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('iv-fluids-monitoring') }}">IV Fluids Monitoring</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.urinary-catheterization'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('urinary-catheterization-at-home') }}">Urinary Catheterization</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.outpatient-antibiotic-administration'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('outpatient-parenteral-antimicrobial-administration') }}">Outpatient Antibiotic Administration</a>
</li>     
<li class="@if(request()->routeIs(['homecare-services.wound-care-dressing'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('wound-care-dressing') }}">Wound Care and Dressing</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.ecg-at-home'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('ecg-test-at-home') }}">ECG at Home</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.skilled-nursing-care'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('nursing-care') }}">Skilled Nursing Care</a>
</li>     
<li class="@if(request()->routeIs(['homecare-services.home-sample-collection'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('home-sample-collection') }}">Home Sample Collection</a>
</li>      
<li class="@if(request()->routeIs(['homecare-services.live-in-care'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('live-in-elderly-care') }}">Live-in Care</a>
</li>       
<li class="@if(request()->routeIs(['homecare-services.care-for-bedridden-patients'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('care-for-bedridden-elderly-at-home') }}">Care for Bedridden Patients</a>
</li> 
  </ul>
</div>
</div>

<div class="col-lg-3 no-at-moble">
<div class="service-lsdtd">
<h4>Select your Service</h4>
<ul class="list-of-services"> 
<li class="@if(request()->routeIs(['homecare-services.geriatric-physiotherapy-at-home'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('physio-care') }}">Geriatric Physiotherapy at Home</a>
</li> 
<li class="@if(request()->routeIs(['homecare-services.psychiatrist-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('psychiatrist-for-home-visit') }}">Psychiatrist Home Visit</a>
</li> 
<li class="@if(request()->routeIs(['homecare-services.orthopedician-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('orthopedician-home-visit') }}">Orthopedician Home Visit</a>
</li>  
<li class="@if(request()->routeIs(['homecare-services.dentist-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('dentist-at-home') }}">Dentist Home Visit</a>
</li>   
<li class="@if(request()->routeIs(['homecare-services.iv-fluids-monitoring'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('iv-fluids-monitoring') }}">IV Fluids Monitoring</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.urinary-catheterization'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('urinary-catheterization-at-home') }}">Urinary Catheterization</a>
</li>    
<li  class="@if(request()->routeIs(['homecare-services.outpatient-antibiotic-administration'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('outpatient-parenteral-antimicrobial-administration') }}">Outpatient Antibiotic Administration</a>
</li>     
<li class="@if(request()->routeIs(['homecare-services.wound-care-dressing'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('wound-care-dressing') }}">Wound Care and Dressing</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.ecg-at-home'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('ecg-test-at-home') }}">ECG at Home</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.skilled-nursing-care'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('nursing-care') }}">Skilled Nursing Care</a>
</li>     
<li class="@if(request()->routeIs(['homecare-services.home-sample-collection'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('home-sample-collection') }}">Home Sample Collection</a>
</li>      
<li class="@if(request()->routeIs(['homecare-services.live-in-care'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('live-in-elderly-care') }}">Live-in Care</a>
</li>       
<li class="@if(request()->routeIs(['homecare-services.care-for-bedridden-patients'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('care-for-bedridden-elderly-at-home') }}">Care for Bedridden Patients</a>
</li> 
</ul>
</div>
</div>
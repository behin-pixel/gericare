<div class="col-lg-12 no-at-desk">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Select Your Service
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"> 
<li class="@if(request()->routeIs(['homecare-services.geriatric-physiotherapy-at-home'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item" href="{{ url('/gericare-homecare/service-we-offer/geriatric-physiotherapy-at-home') }}">Geriatric Physiotherapy at Home</a>
</li> 
<li class="@if(request()->routeIs(['homecare-services.psychiatrist-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('/gericare-homecare/service-we-offer/psychiatrist-home-visit') }}">Psychiatrist Home Visit</a>
</li> 
<li class="@if(request()->routeIs(['homecare-services.orthopedician-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('/gericare-homecare/service-we-offer/orthopedician-home-visit') }}">Orthopedician Home Visit</a>
</li>  
<li class="@if(request()->routeIs(['homecare-services.dentist-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('/gericare-homecare/service-we-offer/dentist-home-visit') }}">Dentist Home Visit</a>
</li>   
<li class="@if(request()->routeIs(['homecare-services.iv-fluids-monitoring'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('/gericare-homecare/service-we-offer/iv-fluids-monitoring') }}">IV Fluids Monitoring</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.urinary-catheterization'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('/gericare-homecare/service-we-offer/urinary-catheterization') }}">Urinary Catheterization</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.outpatient-antibiotic-administration'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('/gericare-homecare/service-we-offer/outpatient-antibiotic-administration') }}">Outpatient Antibiotic Administration</a>
</li>     
<li class="@if(request()->routeIs(['homecare-services.wound-care-dressing'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('/gericare-homecare/service-we-offer/wound-care-dressing') }}">Wound Care and Dressing</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.ecg-at-home'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('/gericare-homecare/service-we-offer/ecg-at-home') }}">ECG at Home</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.skilled-nursing-care'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('/gericare-homecare/service-we-offer/skilled-nursing-care') }}">Skilled Nursing Care</a>
</li>     
<li class="@if(request()->routeIs(['homecare-services.home-sample-collection'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('/gericare-homecare/service-we-offer/home-sample-collection') }}">Home Sample Collection</a>
</li>      
<li class="@if(request()->routeIs(['homecare-services.live-in-care'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('/gericare-homecare/service-we-offer/live-in-care') }}">Live-in Care</a>
</li>       
<li class="@if(request()->routeIs(['homecare-services.care-for-bedridden-patients'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a class="dropdown-item"href="{{ url('/gericare-homecare/service-we-offer/care-for-bedridden-patients') }}">Care for Bedridden Patients</a>
</li> 
  </ul>
</div>
</div>

<div class="col-lg-3 no-at-moble">
<div class="service-lsdtd">
<h4>Select your Service</h4>
<ul class="list-of-services"> 
<li class="@if(request()->routeIs(['homecare-services.geriatric-physiotherapy-at-home'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('/gericare-homecare/service-we-offer/geriatric-physiotherapy-at-home') }}">Geriatric Physiotherapy at Home</a>
</li> 
<li class="@if(request()->routeIs(['homecare-services.psychiatrist-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('/gericare-homecare/service-we-offer/psychiatrist-home-visit') }}">Psychiatrist Home Visit</a>
</li> 
<li class="@if(request()->routeIs(['homecare-services.orthopedician-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('/gericare-homecare/service-we-offer/orthopedician-home-visit') }}">Orthopedician Home Visit</a>
</li>  
<li class="@if(request()->routeIs(['homecare-services.dentist-home-visit'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('/gericare-homecare/service-we-offer/dentist-home-visit') }}">Dentist Home Visit</a>
</li>   
<li class="@if(request()->routeIs(['homecare-services.iv-fluids-monitoring'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('/gericare-homecare/service-we-offer/iv-fluids-monitoring') }}">IV Fluids Monitoring</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.urinary-catheterization'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('/gericare-homecare/service-we-offer/urinary-catheterization') }}">Urinary Catheterization</a>
</li>    
<li  class="@if(request()->routeIs(['homecare-services.outpatient-antibiotic-administration'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('/gericare-homecare/service-we-offer/outpatient-antibiotic-administration') }}">Outpatient Antibiotic Administration</a>
</li>     
<li class="@if(request()->routeIs(['homecare-services.wound-care-dressing'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('/gericare-homecare/service-we-offer/wound-care-dressing') }}">Wound Care and Dressing</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.ecg-at-home'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('/gericare-homecare/service-we-offer/ecg-at-home') }}">ECG at Home</a>
</li>    
<li class="@if(request()->routeIs(['homecare-services.skilled-nursing-care'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('/gericare-homecare/service-we-offer/skilled-nursing-care') }}">Skilled Nursing Care</a>
</li>     
<li class="@if(request()->routeIs(['homecare-services.home-sample-collection'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('/gericare-homecare/service-we-offer/home-sample-collection') }}">Home Sample Collection</a>
</li>      
<li class="@if(request()->routeIs(['homecare-services.live-in-care'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('/gericare-homecare/service-we-offer/live-in-care') }}">Live-in Care</a>
</li>       
<li class="@if(request()->routeIs(['homecare-services.care-for-bedridden-patients'])) active @endif">
<img src="{{ asset('/public/website/assets/images/lim.png') }}" alt="" class=""> <a href="{{ url('/gericare-homecare/service-we-offer/care-for-bedridden-patients') }}">Care for Bedridden Patients</a>
</li> 
</ul>
</div>
</div>
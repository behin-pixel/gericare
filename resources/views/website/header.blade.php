<div class="top-bar">
  <div class="container">
    <div class="row"> 
      
      <div class="col-lg-12">
      <div class="d-flex align-items-center justify-content-center justify-content-sm-end">
      <!-- <nav id='cssmenu' class="m-0 top-icons">
          <div class="button"> 
          </div>
          <ul>
            <li id="corporate-menu" class="@if(request()->routeIs(['about-us.about-gericare','about-us.leadership-team','about-us.awards-achievements'])) active @endif"><a href="{{ url('about-gericare') }}">About Us</a>
              <ul>
                <li class="@if(request()->routeIs(['about-us.about-gericare'])) active @endif">
                  <a href="{{ url('about-gericare') }}">About Geri Care</a>
                </li> 
                <li class="@if(request()->routeIs(['about-us.leadership-team'])) active @endif">
                  <a href="{{ url('leadership') }}">Leadership Team</a>
                </li> 
                {{-- <li class="@if(request()->routeIs(['about-us.awards-achievements'])) active @endif">
                  <a href="#">Download Brochure</a>
                </li>  --}}
              </ul>
            </li>
            <li id="corporate-menu" class="@if(request()->routeIs(['in-news.news-events','in-news.media-gallery'])) active @endif"><a href="{{ url('news-and-events') }}">News Room</a>
              <ul>
              <li class="@if(request()->routeIs(['in-news.news-events'])) active @endif">
                  <a href="{{ url('news-and-events') }}">News & Events</a>
                </li> 
                <li class="@if(request()->routeIs(['in-news.media-gallery'])) active @endif">
                  <a href="{{ url('media-gallery') }}">Media</a>
                </li>
                <li class="@if(request()->routeIs(['in-news.media-tool-kit'])) active @endif">
                  <a href="{{ url('/in-news/media-tool-kit') }}">Media Tool Kit</a>
                </li>
                <li class="@if(request()->routeIs(['in-news.video-gallery'])) active @endif">
                  <a href="{{ url('video-gallery') }}">Videos</a>
                </li>
                <li class="@if(request()->routeIs(['in-news.gallery'])) active @endif">
                  <a href="{{ url('gallery') }}">Gallery</a>
                </li>
                <li class="@if(request()->routeIs(['in-news.blog'])) active @endif">
                  <a href="https://www.gericare.in/blog" target="_blank" >Blog</a>
                </li>
              </ul>
            </li>   
          </ul>
      </nav> -->
        <ul class="top-bar-link d-flex">
          <li><a href="{{ url('about-gericare') }}">About Us</a></li>
          <li><a href="{{ url('news-and-events') }}">News Room</a></li>
        </ul> 
          <ul class="top-socials">
            <li>
              <a href="{{ url('request-an-appointment') }}">
                Request an Appointment
              </a>
            </li> 
             <li class="no-hover">
                <a class="no-border pe-2">
                For 24*7 Assistance
                </a>
            </li> 
            <li>
              
            <a href="tel:+914440614061" target="_blank" class="ps-0"><img src="{{ asset('/public/website/assets/images/calling.png') }}" alt="Geri Care Hospital" />+91 44 4061 4061</a>
            </li>
          </ul>
      </div> 
      </div>
    </div>
  </div>
</div>

<div class="mobile-header">
<a href="tel:+914440614061" target="_blank"><img src="{{ asset('/public/website/assets/images/calling.png') }}" alt="Geri Care Hospital" />+91 44 4061 4061</a>
<a href="{{ url('request-an-appointment') }}"> Request an Appointment </a>
</div>

<header>

  <div class="container">
    <div class="row">
      <div class="col">
        <nav id='cssmenu'>

          <div class="logo">
            <a href="{{ url('/') }}">
              <img src="{{ asset('/public/website/assets/images/logo.png') }}" alt="Gericare Logo" />
            </a>
          </div>

          <div class="button"> 
          </div>
          <ul>
              <li id="corporate-menu" class="@if(request()->routeIs(['gericare-homecare.homecare-doctor-visit','gericare-homecare.about-homecare','gericare-homecare.homecare-nursing-care','gericare-homecare.homecare-geriatri-assessment-counselling','gericare-homecare.homecare-attender-assistance','gericare-homecare.homecare-medical-devices'])) active @endif"><a href="{{ url('homecare') }}">Home Care</a>
                  <ul>
                    <li class="@if(request()->routeIs(['gericare-homecare.about-homecare'])) active @endif">
                      <a href="{{ url('homecare') }}">About Home Care </a>
                    </li>
                    <li class="@if(request()->routeIs(['gericare-assisted-living.assisted-living-service'])) active @endif">
                      <a href="{{ url('physio-care') }}">Services We Offer</a>
                    </li>
                  </ul>
              </li> 
            <li id="corporate-menu" class="@if(request()->routeIs(['gericare-hospital.about-hospital','gericare-hospital.hospital-department','gericare-hospital.hospital-doctors','gericare-hospital.hospital-facilities'])) active @endif"><a href="{{ url('gericare-hospital') }}">Hospital</a>
              <ul>
                <li class="@if(request()->routeIs(['gericare-hospital.about-hospital'])) active @endif">
                  <a href="{{ url('gericare-hospital') }}">About Hospital</a>
                </li>
                <li class="@if(request()->routeIs(['gericare-hospital.hospital-department'])) active @endif">
                  <a href="{{ url('gericare-hospital/#hospital-departments') }}">Departments</a>
                </li>
                <li class="@if(request()->routeIs(['gericare-hospital.hospital-doctors'])) active @endif">
                  <a href="{{ url('geriatric-medicine') }}">Our Doctors</a>
                </li> 
                {{--  <li class="@if(request()->routeIs(['gericare-hospital.hospital-facilities'])) active @endif">
                  <a href="{{ url('gericare-hospital/#hospital-facilities') }}">Facilities</a>
                </li> 
               <li class="@if(request()->routeIs(['gericare-hospital.hospital-facilities'])) active @endif">
                  <a href="{{ url('gericare-hospital/#locations') }}">Locations</a>
                </li>  --}}
              </ul>
            </li>
            <li id="corporate-menu" class="@if(request()->routeIs(['gericare-clinics.about-clinics'])) active @endif">
              <a href="{{ url('about-clinics') }}">Clinics</a>
              <ul>
              <li class="@if(request()->routeIs(['gericare-clinics.about-clinics'])) active @endif">
                  <a href="{{ url('about-clinics') }}">About Clinic</a>
                </li>
                <li class="@if(request()->routeIs(['gericare-clinics.about-clinics#clinic-services'])) active @endif">
                  <a href="{{ url('about-clinics/#clinic-services') }}">Services We Offer</a>
                </li>
                {{-- <li class="@if(request()->routeIs(['gericare-clinics.about-clinics#locations'])) active @endif">
                  <a href="{{ url('about-clinics/#locations') }}">Locations</a>
                </li> --}}
              </ul>
            </li>
            <li id="corporate-menu" class="@if(request()->routeIs(['gericare-assisted-living.about-assisted-living','gericare-assisted-living.assisted-living-service','gericare-assisted-living.assisted-living-facilities'])) active @endif"><a href="{{ url('assisted-living') }}">Assisted Living</a>
              <ul>
                <li class="@if(request()->routeIs(['gericare-assisted-living.about-assisted-living'])) active @endif">
                  <a href="{{ url('assisted-living') }}">About Assisted Living</a>
                </li>
                <li class="@if(request()->routeIs(['gericare-assisted-living.assisted-living-service'])) active @endif">
                  <a href="{{ url('assisted-living/#services-we-offer') }}">Services we Offer</a>
                </li> 
                {{-- <li class="@if(request()->routeIs(['gericare-assisted-living.assisted-living-facilities'])) active @endif">
                  <a href="{{ url('assisted-living/#facilities-amenities') }}">Facilities</a>
                  <li class="@if(request()->routeIs(['gericare-hospital.hospital-facilities'])) active @endif">
                  <a href="{{ url('assisted-living/#locations') }}">Locations</a>
                </li>  --}}
                </li> 
              </ul>  
            </li>
            <li id="corporate-menu" class="@if(request()->routeIs(['about-us.about-gericare','about-us.leadership-team','about-us.awards-achievements'])) active @endif dsk-none"><a href="{{ url('about-gericare') }}">About Us</a>
              <ul>
                <li class="@if(request()->routeIs(['about-us.about-gericare'])) active @endif">
                  <a href="{{ url('about-gericare') }}">About Geri Care</a>
                </li> 
                <li class="@if(request()->routeIs(['about-us.leadership-team'])) active @endif">
                  <a href="{{ url('leadership') }}">Leadership Team</a>
                </li> 
                {{-- <li class="@if(request()->routeIs(['about-us.awards-achievements'])) active @endif">
                  <a href="#">Download Brochure</a>
                </li>  --}}
              </ul>
            </li>
            
           
              <!-- <li id="corporate-menu" class="@if(request()->routeIs(['gericare-clinics.about-clinics','gericare-clinics.clinics-service'])) active @endif"><a href='javascript:void(0)'>Clinics</a>
              <ul>
                <li class="@if(request()->routeIs(['gericare-clinics.about-clinics'])) active @endif">
                  <a href="{{ url('about-clinics') }}">About Clinics </a>
                </li>
                <li class="@if(request()->routeIs(['gericare-clinics.clinics-service'])) active @endif">
                  <a href="{{ url('/gericare-clinics/clinics-service') }}">Service we Offer</a>
                </li>  
              </ul>
            </li>   -->
            
            
           
            <li id="corporate-menu" class="@if(request()->routeIs(['in-news.news-events','in-news.media-gallery'])) active @endif dsk-none"><a href="{{ url('news-and-events') }}">News Room</a>
              <ul>
               <li class="@if(request()->routeIs(['in-news.news-events'])) active @endif">
                  <a href="{{ url('news-and-events') }}">News & Events</a>
                </li> 
                <li class="@if(request()->routeIs(['in-news.media-gallery'])) active @endif">
                  <a href="{{ url('media-gallery') }}">Media</a>
                </li>
                <li class="@if(request()->routeIs(['in-news.media-tool-kit'])) active @endif">
                  <a href="{{ url('/in-news/media-tool-kit') }}">Media Tool Kit</a>
                </li>
                <li class="@if(request()->routeIs(['in-news.video-gallery'])) active @endif">
                  <a href="{{ url('video-gallery') }}">Videos</a>
                </li>
                <li class="@if(request()->routeIs(['in-news.gallery'])) active @endif">
                  <a href="{{ url('gallery') }}">Gallery</a>
                </li>
                <li class="@if(request()->routeIs(['in-news.blog'])) active @endif">
                  <a href="https://www.gericare.in/blog" target="_blank" >Blog</a>
                </li>
              </ul>
            </li>   
            <li id="corporate-menu" class="@if(request()->routeIs(['contact-us'])) active @endif">
              <a href="{{ url('contact-us') }}">Locations</a>
              <!-- <ul>
              <li class="@if(request()->routeIs(['contact-us'])) active @endif">
                  <a href="{{ url('contact-us') }}">Get in Touch</a>
                </li>  
                <li class="@if(request()->routeIs(['careers'])) active @endif">
                  <a href="{{ url('career') }}">Careers</a>
                </li>
                 </ul>  -->
            </li> 
          </ul>
        </nav>
      </div>
    </div>
  </div>

</header>
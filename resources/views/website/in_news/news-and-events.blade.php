@extends("website.layout.welcome")
@section('content')
<section class="inner-banner p-0">
   <div class="">
      <img src="{{ asset('/public/website/assets/images/banners/news.jpg') }}" alt="Geri Care Hospital" class="w-100" />
   </div>
   <div class="banner-liners">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <h1>News & Events
                  <span> </span>
               </h1>
               <ul>
                  <li><a href="../">Home</a></li>
                  <li> > </li>
                  <li>News Room</li>
                  <li> > </li>
                  <li class="active">News & Events</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="news-evnts">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <ul class="press-roomr">
               <li>
                  <div class="pris-imging">
                     <img src="{{ asset('/public/website/assets/images/news-events/inauguration-adambakkam/1.jpg') }}" alt="" class="img-fluid" /> 
                  </div>
                  <div class="">
                     <h3>Multi-Speciality Geriatric Hospital Inaugurated In Adambakkam</h3>
                     <div class="common-button drk">
                        <a href="{{ url('/inauguration-adambakkam') }}">Know More</a>
                     </div>
                  </div>
                  <div class="post-dte">
                     <h5>29<span>Jul</span><span>2023</span></h5>
                  </div>
               </li>
               <li>
                  <div class="pris-imging">
                     <img src="{{ asset('/public/website/assets/images/news-events/ra-puram-launch/1.jpg') }}" alt="" class="img-fluid" /> 
                  </div>
                  <div class="">
                     <h3>RA Puram Assisted Living Launch</h3>
                     <div class="common-button drk">
                        <a href="{{ url('/ra-puram-launch') }}">Know More</a>
                     </div>
                  </div>
                  <div class="post-dte">
                     <h5>24<span>Apr</span><span>2023</span></h5>
                  </div>
               </li>
               <li>
                  <div class="pris-imging">
                     <img src="{{ asset('/public/website/assets/images/news-events/iag-chennai/1.jpg') }}" alt="" class="img-fluid" /> 
                  </div>
                  <div class="">
                     <h3>IAG Chennai Chapter’s 6th Geriatric Conference 2023</h3>
                     <div class="common-button drk">
                        <a href="{{ url('/iag-chennai') }}">Know More</a>
                     </div>
                  </div>
                  <div class="post-dte">
                     <h5>26<span>Mar</span><span>2023</span></h5>
                  </div>
               </li>
               <li>
                  <div class="pris-imging">
                     <img src="{{ asset('/public/website/assets/images/news-events/annanagar-clinic-launch/3.jpg') }}" alt="" class="img-fluid" /> 
                  </div>
                  <div class="">
                     <h3>Anna Nagar Clinic Launch</h3>
                     <div class="common-button drk">
                        <a href="{{ url('/annanagar-clinic-launch') }}">Know More</a>
                     </div>
                  </div>
                  <div class="post-dte">
                     <h5>07<span>Nov</span><span>2022</span></h5>
                  </div>
               </li>
               <li>
                  <div class="pris-imging">
                     <img src="{{ asset('/public/website/assets/images/news-events/gericriticon-conference-2022/1.jpg') }}" alt="" class="img-fluid" /> 
                  </div>
                  <div class="">
                     <h3>Gericriticon Conference 2022</h3>
                     <div class="common-button drk">
                        <a href="{{ url('/gericriticon-conference') }}">Know More</a>
                     </div>
                  </div>
                  <div class="post-dte">
                     <h5>04<span>Jun</span><span>2023</span></h5>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
   </div>
</section>
@endsection
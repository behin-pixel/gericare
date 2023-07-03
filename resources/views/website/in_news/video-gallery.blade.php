@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/inner-banner-6.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>Videos
<span> </span>
</h4>
<ul>
<li><a href="../">Home</a></li>   
<li> > </li>  
<li>Videos</li>   
</ul>
</div>
</div>
</div>
</div>

</section> 

<section class="light-gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 gallery-img mb-3">
				    <a data-fancybox="gallery1" href="https://www.youtube.com/watch?v=Btq81O68dHY" data-caption="Gericare Hospital | Exclusively For Senior Citizens | Multi Speciality Hospital | 24/7 | T.nagar | Chennai.">
						<img src="{{ asset('/public/website/assets/images/video-1.jpg') }}" alt="" class="img-fluid" />
						<span>Gericare Hospital | Exclusively For Senior Citizens | Multi Speciality Hospital | 24/7 | T.nagar | Chennai.</span>
					</a>
					<a class="d-none" data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/gallery/hospital/2.jpg') }}" data-caption="Geri Care Hospital">&nbsp;</a>
					<a class="d-none" data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/gallery/hospital/3.jpg') }}" data-caption="Geri Care Hospital">&nbsp;</a>
					<a class="d-none" data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/gallery/hospital/4.jpg') }}" data-caption="Geri Care Hospital">&nbsp;</a>
				</div>	
				<div class="col-lg-3 gallery-img  mb-3">
				    <a data-fancybox="gallery2" href="https://www.youtube.com/watch?embeds_referring_euri=https%3A%2F%2Fwww.gericare.in%2F&source_ve_path=Mjg2NjQsMTY0NTA2&feature=emb_share&v=UhN18HXWMAY" data-caption="Nalanthana with Geriatrician Dr.Vasanth - Full Show | Sun Life Show">
						<img src="{{ asset('/public/website/assets/images/video-2.jpg') }}" alt="" class="img-fluid" />
						<span>Nalanthana with Geriatrician Dr.Vasanth - Full Show | Sun Life Show</span>
					</a>
					
                </div>	
				<div class="col-lg-3 gallery-img  mb-3">
				    <a data-fancybox="gallery3" href="https://www.youtube.com/watch?v=oegSXzLx54s" data-caption="Nalanthana with Cancer Specialist Dr.Rejiv Rajendranath - Full Show | Sun Life Show">
						<img src="{{ asset('/public/website/assets/images/video3.jpg') }}" alt="" class="img-fluid" />
						<span>Nalanthana with Cancer Specialist Dr.Rejiv Rajendranath - Full Show | Sun Life Show</span>
					</a>
					
                </div>	
				<div class="col-lg-3 gallery-img  mb-3">
				    <a data-fancybox="gallery4" href="https://www.youtube.com/watch?v=R-xASsB7No0" data-caption="Vanakkam Tamizha With Geriatrician Dr N.Lakshmipathy Ramesh | Full Show | 05 Oct 21 | Sun TV">
						<img src="{{ asset('/public/website/assets/images/video4.jpg') }}" alt="" class="img-fluid" />
						<span>Vanakkam Tamizha With Geriatrician Dr N.Lakshmipathy Ramesh | Full Show | 05 Oct 21 | Sun TV</span>
					</a>
					
					
                </div>	
				<div class="col-lg-3 gallery-img  mb-3">
				    <a data-fancybox="gallery5" href="https://www.youtube.com/embed/fT7G1hF3YLU"  data-caption="Nalanthana with Geriatrician Dr. Srinivasan | Sun Life Show">
						<img src="{{ asset('/public/website/assets/images/video5.jpg') }}" alt="" class="img-fluid" />
						<span>Nalanthana with Geriatrician Dr. Srinivasan | Sun Life Show</span>
					</a>
					<a class="d-none" data-fancybox="gallery5" href="https://www.youtube.com/watch?v=R-xASsB7No0" >&nbsp;</a>
					<a class="d-none" data-fancybox="gallery5" href="https://www.youtube.com/watch?v=Btq81O68dHY" >&nbsp;</a>
					
					
                </div>	
				<!-- <div class="col" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<ul class="press-release min-height">						
					   <li>
							<a data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-1.jpg') }}" data-caption="Geri Care Hospital">
								<img src="{{ asset('/public/website/assets/images/news-1.jpg') }}" alt="" class="img-fluid" />
								<span><small class="news-date">Published : 26-Jun-2021</small> <br>Geri Care Hospital.</span>
							</a>
						</li>
						<li>
							<a data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-2.jpg') }}" data-caption=" Geri Care Hospital provides Covid care for elderly">
								<img src="{{ asset('/public/website/assets/images/news-2.jpg') }}" alt="" class="img-fluid" />
								
								<span> <small class="news-date">Published : 27-Jun-2021</small> <br> Geri Care Hospital provides Covid care for elderly</span>
							</a>
						</li>
						<li>
							<a data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-4.jpg') }}" data-caption="India’s first hospital for elders treats 500+ COVID">
								<img src="{{ asset('/public/website/assets/images/news-4.jpg') }}" alt="" class="img-fluid" />
								<span><small class="news-date">Published : 27-Jun-2021</small> <br> India’s first hospital for elders treats 500+ COVID..</span>
							</a>
							<a class="d-none" data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-1.jpg') }}" data-caption="Get Back to Life ! Sparkle your Intimate Beauty">&nbsp;</a>
							<a class="d-none" data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-1.jpg') }}" data-caption="Get Back to Life ! Sparkle your Intimate Beauty">&nbsp;</a>
						</li>
						<li>
							<a data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-5.jpg') }}" data-caption="Geri Care, a specialized and exclusive geriatric">
								<img src="{{ asset('/public/website/assets/images/news-5.jpg') }}" alt="" class="img-fluid" />
								<span><small class="news-date">Published : 20-Nov-2020</small> <br>Geri Care, a specialized and exclusive geriatric....</span>
							</a>
						</li>
						<li>
							<a data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-6.jpg') }}" data-caption="Geri Care Hospital.">
								<img src="{{ asset('/public/website/assets/images/news-6.jpg') }}" alt="" class="img-fluid" />
								<span><small class="news-date">Published : 20-Nov-2020</small> <br>Geri Care Hospital..</span>
							</a>
						</li>
						<li>
							<a data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-7.jpg') }}" data-caption="Geri Care Hospital.">
								<img src="{{ asset('/public/website/assets/images/news-7.jpg') }}" alt="" class="img-fluid" />
								<span><small class="news-date">Published : 20-Nov-2020</small> <br>Geri Care Hospital..</span>
							</a>
							
						</li> 
						<li>
							<a data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-8.jpg') }}" data-caption="Improving quality of life of elders">
								<img src="{{ asset('/public/website/assets/images/news-8.jpg') }}" alt="" class="img-fluid" />
								<span><small class="news-date">Published : 20-Nov-2020</small> <br>Improving quality of life of elders.</span>
							</a>
						</li>
						<li>
							<a data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-9.jpg') }}" data-caption="Geri Care Hospital.">
								<img src="{{ asset('/public/website/assets/images/news-9.jpg') }}" alt="" class="img-fluid" />
								<span><small class="news-date">Published : 20-Nov-2020</small> <br>Geri Care Hospital..</span>
							</a>
						</li>
						<li>
							<a data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-11.jpg') }}" data-caption="Geri Care, ecclusive hospital for senior citizens, launched.">
								<img src="{{ asset('/public/website/assets/images/news-11.jpg') }}" alt="" class="img-fluid" />
								<span><small class="news-date">Published : 20-Nov-2020</small> <br>Geri Care, ecclusive hospital for senior citizens, launched.</span>
							</a>
							
						</li>
						<li>
							<a data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-12.jpg') }}" data-caption="Geri Care Hospital">
								<img src="{{ asset('/public/website/assets/images/news-12.jpg') }}" alt="" class="img-fluid" />
								<span><small class="news-date">Published : 20-Nov-2020</small> <br>Geri Care Hospital..</span>
							</a>
						</li>
						<li>
							<a data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-13.jpg') }}" data-caption="Geri Care Hospital">
								<img src="{{ asset('/public/website/assets/images/news-13.jpg') }}" alt="" class="img-fluid" />
								<span><small class="news-date">Published : 20-Nov-2020</small> <br>Geri Care Hospital..</span>
							</a>
						</li>
						<li>
							<a data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-14.jpg') }}" data-caption="Geri Care Hospital">
								<img src="{{ asset('/public/website/assets/images/news-14.jpg') }}" alt="" class="img-fluid" />
								<span><small class="news-date">Published : 20-Nov-2020</small> <br>Geri Care Hospital..</span>
							</a>
							
						</li> 
					</ul>
				</div> -->
			</div>
		</div>
	</section>

@endsection
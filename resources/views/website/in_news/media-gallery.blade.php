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
<h1>Media
<span> </span>
</h1>
<ul>
<li><a href="../">Home</a></li>   
<li> > </li>  
<li> News Room </li>   
<li> > </li>  
<li class="active"> Media </li>      
</ul>
</div>
</div>
</div>
</div>

</section> 

<section class="pb-0 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-link-design m-none">
                    <ul class="justify-content-around">
                        <li class="pe-3"><a href="{{ url('news-and-events') }}" class="@if(request()->routeIs(['in-news.news-events'])) actives @endif">News & Events</a></li>
                        <li><a href="{{ url('media-gallery') }}" class="@if(request()->routeIs(['in-news.media-gallery'])) actives @endif">Media</a></li>
                        <li class="pe-3"><a href="{{ url('/in-news/media-tool-kit') }}" class="@if(request()->routeIs(['in-news.media-tool-kit'])) actives @endif">Media Tool Kit</a></li>
                        <li><a href="{{ url('video-gallery') }}" class="@if(request()->routeIs(['in-news.video-gallery'])) actives @endif">Videos</a></li>
                        <li><a href="{{ url('gallery') }}" class="@if(request()->routeIs(['in-news.gallery'])) actives @endif">Gallery</a></li>
                        <li><a href="https://www.gericare.in/blog" class="@if(request()->routeIs(['in-news.blog'])) actives @endif">Blogs</a></li>
                    </ul>  
                    <hr> 
                </div>  
				<div class="dropdown mobile-dropdown-menu text-center">
                     <a class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        News Room
                     </a>
                     <ul class="dropdown-menu dropdown-menu-w" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ url('news-and-events') }}">News & Events</a></li>
                        <li><a class="dropdown-item" href="{{ url('media-gallery') }}">Media</a></li>
                        <li><a class="dropdown-item" href="{{ url('/in-news/media-tool-kit') }}">Media Tool Kit</a></li>
                        <li><a class="dropdown-item" href="{{ url('video-gallery') }}">Videos</a></li>
                        <li><a class="dropdown-item" href="{{ url('gallery') }}">Gallery</a></li>
                        <li><a class="dropdown-item" href="https://www.gericare.in/blog">Blogs</a></li>
                     </ul>
                </div>  
            </div>    
        </div>    
    </div>    
</section> 

<section class="light-gray-bg pt-4">
		<div class="container">
			<div class="row">
				<div class="col" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<ul class="press-release min-height">		
						@foreach ($media_release as $media_releases )
						@php 
						$media_releases_date=date('d-m-Y', strtotime($media_releases['date']));
						
						@endphp
						<li>
							@if($media_releases['reference_link']!='')	
							<a  href="{{$media_releases['reference_link']}}" target="_blank">
								<img src="{{asset(Storage::url("app/{$media_releases["featured_image"]}")) }}" alt="Geri Care Hospital" class="img-fluid" />
								<span><small class="news-date">Published : {{$media_releases_date}}</small> <br>{{$media_releases['title']}}</span>
							</a>
							@else
							<a data-fancybox="gallery{{$media_releases['id']}}" href="{{ asset(Storage::url("app/{$media_releases["featured_image"]}")) }}" data-caption="Geri Care Hospital">
								<img src="{{asset(Storage::url("app/{$media_releases["featured_image"]}")) }}" alt="Geri Care Hospital" class="img-fluid" />
								<span><small class="news-date">Published : {{$media_releases_date}}</small> <br>{{$media_releases['title']}}</span>
							</a>
							@endif
							@if($media_releases['featured_image']!='')
							<a class="d-none" data-fancybox="gallery{{$media_releases['id']}}" href="{{ asset(Storage::url("app/{$media_releases["gallery_image"]}")) }}" data-caption="Get Back to Life ! Sparkle your Intimate Beauty">&nbsp;</a>
							@endif
						</li>
						@endforeach				
					 
					</ul>
				</div>
			</div>
		</div>
	</section>

@endsection
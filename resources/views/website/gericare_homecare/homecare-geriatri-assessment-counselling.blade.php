@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/inner-banner-1.jpg') }}" alt="Geri Care Hospital" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h1>Welcome to India's First
<span>Multi-Speciality Hospital <br>
for Senior Citizens</span>
</h1>
<ul>
<li><a href="../">Home</a></li>   
<li>></li>  
<li>Home Care</li>  
<li>></li>  
<li>Service we Offer</li>  
<li>></li>      
<li class="active">Geriatric Assessment Counselling</li>    
</ul>
</div>
</div>
</div>
</div>

</section> 


 

@include('website.mobilebottomform')

@endsection
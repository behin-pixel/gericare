@extends("website.layout.welcome")

@section('content')

<section class="error-site text-center">

<div class="">

<img src="{{ asset('/public/website/assets/images/404.jpg') }}" alt="Geri Care Hospital" class="" /> 

<h4>Error!</h4>
<h4>Sorry! Page not found!</h4>

<h5>The page you're looking for doesn't exist.</h5>

<a href="{{ url('/') }}"> Go Back Home </a>

</div>

</section> 

@endsection
@extends('common')
@section('content')

<center style="margin:5rem 0rem">

<img src="{{asset('front_assets/images/tick.png')}}" alt="Congratulation" >

<h1>Congratulations your property has been submitted</h1>
<h2>You are redirected to main page ....</h2>
<small>Very Soon it will uploaded in the website</small>
</center>
<script>
    setTimeout(redirect,3000);
    function redirect(){
        window.location.href="/";
    }
</script>
@endsection

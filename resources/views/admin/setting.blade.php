@extends('layouts.main')
@section('content')

<style>

body{
    height:100vh;
    background:linear-gradient(135deg,#0d6efd,#6610f2);
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
    font-family:Arial, Helvetica, sans-serif;
}

.coming-box{
    text-align:center;
    background:rgba(255,255,255,0.1);
    backdrop-filter:blur(10px);
    padding:60px;
    border-radius:15px;
    box-shadow:0 20px 40px rgba(0,0,0,0.3);
}

.coming-box h1{
    font-size:60px;
    font-weight:700;
}

</style>

<div class="coming-box">

<h1>🚀 Coming Soon</h1>

<p class="mt-3 fs-5">
We are working hard to launch this feature.
</p>

<p class="text-light opacity-75">
Stay tuned for something amazing!
</p>



</div>
@endsection
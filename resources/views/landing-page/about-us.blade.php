@extends('landing-page.main')

@section('content')

 <main class="bg-about-us m-0">
  <div class="con-img-about fadeIn du3">
   <img src="{{ asset('img/toko2.png') }}" style="width:100%; position: absolute;left:0;top:0;z-index:-99;"/>
   </div>
  <section class="container" style="z-index: 999;">
   <h1 class="text-light fadeIn du4">About us</h1>
   <p class="m-0 text-light fadeIn du4 de1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditateLorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate.</p>
  </section>
 </main>
      
      @include('landing-page.latest-blog')
   
@endsection
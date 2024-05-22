@extends('landing-page.main')

@section('content')

 <main>
  <section class="container py-5 welcoming">
    <img src="{{ asset('img/car2.png') }}" style="width:300px;" class="w-100 justify-content-center align-items-center img-car-welcome slideInLeft du2 fadeIn" />
    <div>
    <div class="d-flex flex-column du4 fadeIn title-w-con text-left">
      <h1 class="fw-bold m-0">Chris <font style="color:#FE3636;">service</font></h1>
      <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate sint voluptates doloremque! Harum neque non temporibus suntLorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate sint voluptates doloremque! Harum neque non temporibus sunt.</p>
    </div>
      <button class="bg-transparent fadeInLeft du2 py-1 px-2" style="border: 1px solid #FE3636; color: #FE3636;" onclick="window.location.href = '#product' ">TAKE OUR SERVICE <i class="bi bi-arrow-right mx-2"></i></button>
      </div>
  </section>
  
  <section class="visi-misi fadeIn du4 gap-3 mt-2 py-5" style="background: rgba(254,54,54,.1);">
    <div class="d-flex container flex-column text-left">
      <h1 class="fw-bold m-0" style="color:#FE3636;">Visi</h1>
       <p class="m-0" style="color:#FE3636;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate sint voluptates doloremque! Harum neque non temporibus sunt.</p>
    </div>
    <div class="d-flex container flex-column text-left">
      <h1 class="fw-bold m-0" style="color:#FE3636;">Misi</h1>
       <p class="m-0" style="color:#FE3636;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate sint voluptates doloremque! Harum neque non temporibus sunt.</p>
    </div>
  </section>
  
   <section id="product" class="d-flex flex-column product-home py-5 mt-2 container">
     <h2 class="fw-bold">Our product</h2>
     <div class="con-slider-product" style="">
      <div class="box-product bg-light d-flex flex-column">
        <img src="{{ asset('img/car2.png') }}" class="img-product" />
         <span class="product-type m-0">prodcut type</span>
          <h5 class="m-0 fw-bold">Title product</h5>
          <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate.</p>
         <span class="price">Rp. 10.000</span>
      </div>
      <div class="box-product bg-light d-flex flex-column">
        <img src="{{ asset('img/car2.png') }}" class="img-product" />
         <span class="product-type m-0">prodcut type</span>
          <h5 class="m-0 fw-bold">Title product</h5>
          <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate.</p>
         <span class="price">Rp. 10.000</span>
      </div>
      <div class="box-product bg-light d-flex flex-column">
        <img src="{{ asset('img/car2.png') }}" class="img-product" />
         <span class="product-type m-0">prodcut type</span>
          <h5 class="m-0 fw-bold">Title product</h5>
          <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate.</p>
         <span class="price">Rp. 10.000</span>
      </div>
      <div class="box-product bg-light d-flex flex-column">
        <img src="{{ asset('img/car2.png') }}" class="img-product" />
         <span class="product-type m-0">prodcut type</span>
          <h5 class="m-0 fw-bold">Title product</h5>
          <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate.</p>
         <span class="price">Rp. 10.000</span>
      </div>
      <div class="box-product bg-light d-flex flex-column">
        <img src="{{ asset('img/car2.png') }}" class="img-product" />
         <span class="product-type m-0">prodcut type</span>
          <h5 class="m-0 fw-bold">Title product</h5>
          <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate.</p>
         <span class="price">Rp. 10.000</span>
      </div>
     </div>
     <div class="d-flex mt-2 gap-4 w-100 justify-content-center align-items-center">
     <button class="bg-light d-flex justify-content-center align-items-center" style="border: 1px solid black; width: 40px;height:40px; border-radius:50%;"><i class="bi bi-arrow-left"></i></button>
     <button class="bg-light d-flex justify-content-center align-items-center" style="border: 1px solid black; width: 40px;height:40px; border-radius:50%;"><i class="bi bi-arrow-right"></i></button>
     </div>
   </section>
   
   @include('landing-page.latest-blog')
 </main>
         
@endsection
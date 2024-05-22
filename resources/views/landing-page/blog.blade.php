@extends('landing-page.main')

@section('content')

 <main class="py-3">
 
  <section class="welcoming-blog container">
    <h1 class="m-0 fw-bold text-center fadeInDown du3">Our blog</h1>
     <div class="mt-2 fadeIn du3 gap-2 d-flex justify-content-center align-items-center">
      <input type="text" style="width:70%; height: 40px;border: 1px solid #FE3636;color:#FE3636;" placeholder="search the blog.." class="form-controll" />
      <select style="width:30%;height:40px;border:1px solid #FE3636;color: #FE3636; border-radius:0;" class="form-select" placeholder="i">     
      <option selected hidden>Filters</option>
      <option value="1">One</option> 
      <option value="2">Two</option> 
      <option value="3">Three</option>
       </select>
     </div>
  </section>
  
  <section class="display-blog bounceIn du2 mt-3 d-flex flex-wrap gap-2 container">
         <div class="box-blog-home">
          <img src="{{ asset('img/car1.png') }}" />
           <h5 class="m-0 fw-bold">title blog</h5>
           <p class="m-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate.</p>
         </div>
         <div class="box-blog-home">
          <img src="{{ asset('img/car1.png') }}" />
           <h5 class="m-0 fw-bold">title blog</h5>
           <p class="m-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate.</p>
         </div>
         <div class="box-blog-home">
          <img src="{{ asset('img/car1.png') }}" />
           <h5 class="m-0 fw-bold">title blog</h5>
           <p class="m-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate.</p>
         </div>
         <div class="box-blog-home">
          <img src="{{ asset('img/car1.png') }}" />
           <h5 class="m-0 fw-bold">title blog</h5>
           <p class="m-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate.</p>
         </div>
         <div class="box-blog-home">
          <img src="{{ asset('img/car1.png') }}" />
           <h5 class="m-0 fw-bold">title blog</h5>
           <p class="m-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate.</p>
         </div>
         <div class="box-blog-home">
          <img src="{{ asset('img/car1.png') }}" />
           <h5 class="m-0 fw-bold">title blog</h5>
           <p class="m-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, fuga animi cupiditate.</p>
         </div>
         
  <nav aria-label="Page navigation" class="w-100 justify-content-center align-items-center mt-3">
  <ul class="pagination w-100 justify-content-center align-items-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>


  </section>
  
 </main>
         
@endsection
@extends('landing-page.main')

@section('content')

 <main>
  <section class="container mt-2 py-5">
   <h2 class="m-0 fw-bold fadeInLeft du3" style="color:#FE3636;">Contact us</h2>
     <div class="mt-2 fadeIn du4" style="width: 100%">
     <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Jl.%20Batutulis%20No.%20131+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps systems</a>
     </iframe>
      <p class="text-center fadeIn du4 m-0">Jl. Batutulis No. 131</p>
       <p class="text-center fadeIn du4 de2">+6281807356179</p>
     </div>
  </section>
  
  <section class="container fadeIn du4 py-5">
   <h4 class="m-0" style="color:#FE3636;">Jam operasional</h4>
   <p class="m-0">- Senin 08.00 - 16.00</p>
   <p class="m-0">- Senin 08.00 - 16.00</p>
   <p class="m-0">- Senin 08.00 - 16.00</p>
   <p class="m-0">- Senin 08.00 - 16.00</p>
   <p class="m-0">- Senin 08.00 - 16.00</p>
   <p class="m-0">- Senin 08.00 - 16.00</p>
   <p class="m-0">- Senin 08.00 - 16.00</p>
   
  <div class="d-flex flex-column mt-5" style="margin-top:150px;">
                <h5 class="text-left fw-bold">Formulir pertanyaan/feedback</h5>
                <form action="" method="POST">
                @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" title="Enter your name" placeholder="Enter your name" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" title="Enter your email address" placeholder="Enter your email address" class="form-control" id="email" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text text-dark">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea title="Enter your message" placeholder="Enter your message" class="form-control" id="message" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn text-white" style="background:#FE3636;">Submit</button>
                </form>
                </div>
  </section>
 </main>
         
@endsection
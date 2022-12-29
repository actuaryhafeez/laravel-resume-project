<x-layout>
  <x-slot name='title'>Contact</x-slot>
    <x-slot name='content'>
<!-- Start Main Content -->
<div class="container mt-5">
  <h1 class="text-warning mb-5 border-bottom">CONTACT US</h1>
  <div class="row text-white mb-5">
   <p class="mx-auto mb-5">
    Do you have any questions? Please do not hesitate to contact. I will come back to you within a matter of hours to
    help you.
   </p>
   <div class="col-sm-9 mb-5">
    <form method="POST">
      @csrf
     <div class="row g-3">
      <div class="col-md-6">
       <label for="name" class="form-label">Name</label>
       <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="col-md-6">
       <label for="email" class="form-label">Your Email *</label>

       <input type="text" class="form-control " id="email" name="email" required/>

      </div>

      <div class="col-md-12">
       <label for="subject" class="form-label">Your Subject</label>

       <input type="text" class="form-control " id="subject" name="subject" required/>

      </div>
      <div class="col-md-12 mb-3">
       <label for="message" class="form-label">Your message *</label>

       <textarea class="form-control" id="message" name="message" required></textarea>
      </div>
     </div>
     <button class="btn btn-primary" type="submit">Send</button>
    </form>
    @if (session()->has('status'))
    <div class="alert alert-success mt-2">
     {{session('status')}}
    </div> 
   @endif
   </div>
   <div class="col-sm-3 text-center">
    <ul class="list-unstyled">
     <li>
      <i class="fas fa-map-marker-alt fa-2x i-color"></i>
      <p>Lahore, Pakistan</p>
     </li>
     <li>
      <i class="fas fa-phone mt-4 fa-2x i-color"></i>
      <p>+92 3003219583</p>
     </li>
     <li>
      <i class="fas fa-envelope mt-4 fa-2x i-color"></i>
      <p>ahdatascientist@gmail.com</p>
     </li>
    </ul>
   </div>
  </div>
 </div>
 <div class="text-center">
  <a href="#" target="_blank"><i class="fab fa-twitter i-color"></i></a>
  <a href="#" target="_blank"><i class="fab fa-facebook-f i-color mx-3"></i></a>
  <a href="#" target="_blank"><i class="fab fa-instagram i-color"></i></a>
  <a href="#" target="_blank"><i class="fab fa-dribbble i-color mx-3"></i></a>
 </div>
 <!-- End Main Content -->


    </x-slot>
</x-layout>
@extends('layouts.app')

@section('content_section')
<div class="container">


<form class="col-md-6 col-12 my-5 m-auto" method="POST"">
    @csrf
    <div class="mb-3">
      <input type="text" class="form-control py-3" id="exampleInputEmail1" name="name" placeholder="Your Name" autocomplete="off">
    </div>

    <div class="mb-3">
        <input type="text" class="form-control py-3" id="exampleInputEmail1" name="surname" placeholder="Your Surname" autocomplete="off">
    </div>

    <div class="mb-3">
        <input type="tel" class="form-control py-3" id="exampleInputEmail1" name="tel" placeholder="Your Phone" autocomplete="off">
    </div>

    <div class="mb-3">
        <input type="email" class="form-control py-3" id="exampleInputEmail1" name="eamil" placeholder="Your Email" autocomplete="off">
    </div>

    <div class="mb-3">
      <input type="password" class="form-control py-3" id="exampleInputPassword1" name="password" placeholder="Your Password" autocomplete="off">
    </div>

    <div class="mb-3">
        <input type="password" class="form-control py-3" id="exampleInputPassword1" name="retypassword" placeholder="Retype Password" autocomplete="off">
      </div>

      <div class="mb-3 form-check d-flex justify-content-between box_form"  >
        <div class="box col-lg-6 col-md-12 col-12">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">I accept the <b> <a href="/faq">Terms of Use </a> & <a href="/privacy-policy">Privacy policy</a></b></label> 
        </div> 
        <a href="/login" class="col-lg-6 col-md-12 col-12">Already have an account <b>Login</b></a>

    </div>

    <button type="submit" style="background: var(--light-blue); color: var(--white);" class="btn w-100 py-3">Registration</button>
  </form>
</div>
  @endsection

  <style>
    @media (max-width: 992px){
    .box_form{
        flex-direction: column !important;
    }
}
  </style>


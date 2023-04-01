@extends('layouts.app')

@section('content_section')
<div class="container">


<form class="w-50 my-5 m-auto ">
  
    @csrf
    <div class="mb-3">
        <input type="email" class="form-control" id="exampleInputEmail1" name="eamil" placeholder="Your Email" autocomplete="off">
    </div>

    <div class="mb-3">
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Your Password" autocomplete="off">
    </div>


    <div class="mb-3 form-check p-0"  >
        
        <a href="/registration" class="col-lg-6 col-md-12 col-12">Don't have an account <b>Register</b></a>

    </div>


    <button type="submit" style="background: var(--light-blue); color: var(--white);" class="btn w-100">Login</button>
  </form>
</div>
  @endsection
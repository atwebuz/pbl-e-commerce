@extends('layouts.app')
@section('content_section')
<div class="container py-3">

{{--  title, name, price, description, file --}}
<form method="POST" action="/products">
  @csrf
        
        <div class="row">
        <h3>Describe in detail</h3>
            <div class="mb-3 col-12">
                <label for="">Please enter a title*</label>
                <input type="tel" class="form-control p-3" id="exampleInputEmail1" name="name" value="{{old('name')}}">

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

{{--             
            <div class=" mb-3col-12">
              <label for="formFileMultiple" class="form-label">Фото</label>
              <div class="center">
                <div class="form-input">
                  <div class="preview">
                    <img id="file-ip-1-preview">
                  </div>
                  <label for="file-ip-1" id="text_foto">Upload Image</label>
                  <input type="file" id="file-ip-1" type="file" id="formFileMultiple" multiple accept="image/*" onchange="showPreview(event);">
                  
                </div>
              </div> 
            </div> --}}

              <div class="mb-3 col-12">
                <label for="">Description</label>
                <div class="form-floating">
                    <textarea class="form-control p-3" name="description"  comment here" id="floatingTextarea2" style="height: 100px"  value="{{old('description')}}"></textarea>
                </div>  
                @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror    
            </div>
                    
              <div class="mb-3 col-6">
                <label for="">Price* </label>
                  <input type="number" name="price" class="form-control p-3" id="exampleInputEmail1" name="price" value="{{old('price')}}">

                  @error('price')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror    
              </div>
          
              <div class="mb-3 col-12">
                <div class="form-check form-switch">
                    <input name="discount" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" >
                    <label class="form-check-label" for="flexSwitchCheckDefault">Discount</label>
                  </div>
              </div>

              <div class="mb-3 col-12">
                <label for="">Choose Category</label>
                <select class="form-select " name="categories_id" aria-label="Default select example"  value="{{old('body_type')}}">
                    <option selected value="3">Car</option>
                    <option value="1">Moto</option>
                    <option value="2">Kamaz</option>
                   
                  </select>


                  @error('body_type')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror    
               </div>
          
          
              <div class="mb-3 col-6">
                <label for="">Model*</label>
                <input type="text" class="form-control" name="model" id="" value="{{old('model')}}">
                
               </div>

               <div class="mb-3 col-6">
                <label for="">Body type**</label>
                <select class="form-select " name="body_type" aria-label="Default select example"  value="{{old('body_type')}}">
                    <option selected value="Sedan">Sedan</option>
                    <option value="Coupe">Coupe</option>
                    <option value="Hatchback">Hatchback</option>
                    <option value="SUV">SUV</option>
                    <option value="Van">Van</option>
                    <option value="Convertible">Convertible</option>
                    <option value="Wagon">Wagon</option>
                    <option value="Truck">Truck</option>
                    <option value="Sports">Sports</option>
                  </select>


                  @error('body_type')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror    
               </div>
          
               <div class="mb-3 col-6">
                <label for="">Year of issue**</label>
                    <input type="month" class="form-control p-3" name="date_of_year"  value="{{old('date_of_year')}}"  id="">
                    @error('date_of_year')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror    
               </div>
               <div class="mb-3 col-6">
                <label for="">Mileage*</label>
                    <input type="text" class="form-control p-3" name="millage"  id="">
                    @error('millage')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror    
               </div>

               <div class="mb-3 col-6">
                <label for="">Transmission*</label>
                <select class="form-select " name="transmission" aria-label="Default select example"  value="{{old('transmission')}}">
                    <option selected value="Manual">Manual</option>
                    <option value="Automatic">Automatic</option>
                    <option value="Electirc">Electirc</option>
                    <option value="Other">Other</option>
                  </select>
                  @error('transmission')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror    
               </div>
               <div class="mb-3 col-6">
                 <label for="">Color*</label>
                 <input type="text" class="form-control p-3" name="color"  value="{{old('color')}}"  id="">

                  @error('color')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror    
               </div>
               <div class="mb-3 col-6">
                <label for="">Oil Type*</label>
                <select class="form-select " name="oil_type" aria-label="Default select example"  value="{{old('oil_type')}}">
                    <option selected value="gasoline">gasoline</option>
                    <option value="gas">gas</option>
                    <option value="methane">methane</option>
                    <option value="diesel">diesel</option>
                    <option value="electron">electron</option>
                  </select>
                  @error('oil')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror    
               </div>

               <div class="mb-3 col-6">
                <label for="">Car condition</label>
                <select class="form-select " name="condition" aria-label="Default select example"  value="{{old('condition')}}">
                    <option selected value="Excellent">Excellent</option>
                    <option selected value="Good">Good</option>
                    <option value="Normal">Normal</option>
                    <option value="Poor">Poor</option>
                  </select>
                  @error('condition')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror    
               </div>
               <div class="mb-3 col-12">
                <label for="">Address</label>
                <input type="text" class="form-control p-3" id="exampleInputPassword1" name="address"  value="{{old('address')}}">
                @error('address')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror    
               </div>
               <h2>Contact Information</h2>
               <hr>
               <div class="mb-3 col-6">
                <label for="">Contact person*</label>
                <input type="text" class="form-control p-3" id="exampleInputPassword1" name="user_name"  value="{{old('user_name')}}">
                @error('user_name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror    
              </div>
          
              <div class="mb-3 col-6">
                <label for="">Phone Number</label>

                  <input type="tel" class="form-control p-3" id="exampleInputPassword1" name="user_number"  value="{{old('user_number')}}">
                  @error('user_number')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror  
                </div>
        </div>
   
        <button type="submit" style="background: var(--light-blue); color: var(--white);" class="btn w-100 p-3 my-3">Create Form</button>
        
      </form>
    </div>
@endsection
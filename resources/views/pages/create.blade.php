@extends('layouts.app')
@section('content_section')
<div class="container">

{{--  title, name, price, description, file --}}
    <form class="col-12 my-5 m-auto" method="POST">
        
        <div class="row">
        <h3>Опишите в подробностях</h3>
            <div class="mb-3 col-12">
                <label for="">Укажите название*</label>
                <input type="tel" class="form-control p-3" id="exampleInputEmail1" name="tel" placeholder="Spark" autocomplete="off">
            </div>

        

         
            
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
            </div>

              <div class="mb-3 col-12">
                <label for="">description</label>
                <div class="form-floating">
                    <textarea class="form-control p-3" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">description</label>
                </div>      
            </div>
                    
              <div class="mb-3 col-6">
                <label for="">Цена* </label>
                  <input type="text" class="form-control p-3" id="exampleInputEmail1" name="price" placeholder="Your price" autocomplete="off">
              </div>
          
              <div class="mb-3 col-12">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">dagavornaya</label>
                  </div>
                </div>
          
              <div class="mb-3 col-6">
                <label for="">Модель*</label>
                <select class="form-select " aria-label="Default select example">
                    <option selected>Asto</option>
                    <option value="1">Bmw</option>
                    <option value="2">Mercedes</option>
                    <option value="3">Three</option>
                  </select>
               </div>

               <div class="mb-3 col-6">
                <label for="">Тип кузова**</label>
                <select class="form-select " aria-label="Default select example">
                    <option selected>pikap</option>
                    <option value="1">kupe</option>
                    <option value="2">hetchbek</option>
                    <option value="3">universal</option>
                  </select>
               </div>
          
               <div class="mb-3 col-6">
                <label for="">Год выпуска*</label>
                    <input type="text" class="form-control p-3" name="" placeholder="2017" id="">
               </div>
               <div class="mb-3 col-6">
                <label for="">Prabeg*</label>
                    <input type="text" class="form-control p-3" name="" placeholder="prabeg" id="">
               </div>

               <div class="mb-3 col-6">
                <label for="">Коробка передач*</label>
                <select class="form-select " aria-label="Default select example">
                    <option selected>Mexanik</option>
                    <option value="2">avtomat</option>
                    <option value="3">boshqacha</option>
                  </select>
               </div>
               <div class="mb-3 col-6">
                <label for="">Цвет*</label>
                <select class="form-select " aria-label="Default select example">
                    <option selected>qora</option>
                    <option value="2">qizil</option>
                    <option value="3">oq</option>
                  </select>
               </div>
               <div class="mb-3 col-6">
                <label for="">Вид топлива*</label>
                <select class="form-select " aria-label="Default select example">
                    <option selected>benzin</option>
                    <option value="2">gaz</option>
                    <option value="3">dizel</option>
                    <option value="4">elektr</option>
                  </select>
               </div>

               <div class="mb-3 col-6">
                <label for="">Moshina xolati</label>
                <select class="form-select " aria-label="Default select example">
                    <option selected>alo</option>
                    <option value="2">yaxshi</option>
                    <option value="3">yomon</option>
                  </select>
               </div>
               <div class="mb-3 col-12">
                <label for="">address</label>
                <input type="text" class="form-control p-3" id="exampleInputPassword1" name="address" placeholder="Your address" autocomplete="off">
               </div>
               <h2>Контактная информация</h2>
               <hr>
               <div class="mb-3 col-6">
                <label for="">Контактное лицо*</label>
                <input type="text" class="form-control p-3" id="exampleInputPassword1" name="name" placeholder="Your name" autocomplete="off">
              </div>
          
              <div class="mb-3 col-6">
                <label for="">Номер телефона</label>

                  <input type="tel" class="form-control p-3" id="exampleInputPassword1" name="retypassword" placeholder="your number" autocomplete="off">
                </div>
        </div>
      
    
       
    
        <button type="submit" style="background: var(--light-blue); color: var(--white);" class="btn w-100 p-3">Create Form</button>
      </form>
    </div>
@endsection
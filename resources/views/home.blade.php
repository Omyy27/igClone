@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">
         <div class="col-md-3 p-5">
            <img src="https://placekitten.com/150/150" class="rounded-circle" alt="">
         </div>
         <div class="col-md-9 pt-5">
            <div>
                <h1>User Name</h1>
            </div>
            <div class="d-flex flex-row flex-wrap">
                <div class="mr-5">
                    <strong>123</strong>
                    posts
                </div>
                <div class="mr-5">
                    <strong>13k</strong> followers
                </div>
                <div class="mr-5">
                    <strong>222</strong> following
                </div>
            </div>
            <div class="pt-4 font-weight-bold">Pageurl.com.co</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id veritatis vel provident tempora, consequuntur accusantium eius ut repellendus quibusdam? Officiis deserunt dicta molestias nesciunt velit adipisci, ad cum beatae quasi?</div>
            <div>
                <a href="#" target="_blank">www.example.com</a>
            </div>
         </div>
     </div>
     <div class="row justify-content-center pt-5">
         <div class="col-md-3">
             <img src="https://placekitten.com/290/290" alt="" class="w-100">
         </div>
         <div class="col-md-3">
             <img src="https://placekitten.com/290/290" alt="" class="w-100">
         </div>
         <div class="col-md-3">
             <img src="https://placekitten.com/290/290" alt="" class="w-100">
         </div>
     </div>
</div>
@endsection

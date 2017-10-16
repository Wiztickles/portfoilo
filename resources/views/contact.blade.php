@extends('layouts.app')
@section('content')
    
    <style>
        #contact  {
            border-bottom: 2px solid #a248d5;
        }

    </style>
    <div class="container">
        <div class="titlecard ">
            <h3><span><</span><span>/</span>Contact<span>></span></h3>        
        </div>
        
        <div class="form bgwhite">
                   <div class="des">
                       <form action="{{ url('contact') }}" method="POST">
                           {{ csrf_field() }}
                           <div class="">
                               <label name="email">Email:</label>
                               <input type='text' id="email" name="email" class="">
                           </div>

                           <div class="">
                               <label name="subject">Subject:</label>
                               <input id="subject" type='text' name="subject" class="">
                           </div>

                           <div class="">
                               <label name="message">Message:</label>
                               <textarea id="message" type='text' name="message" class="" style = "font-size:1em;"></textarea>
                           </div>

                           <input type="submit" value="Get in touch" class="submit" style = "font-size:1.5em; font-family:oswald; padding-top: 0.5em; padding-bottom: 0.5em;" >
                       </form>
                   </div>
               </div>
 
    </div>

@endsection
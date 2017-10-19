@extends('layouts.app')
@section('content')
    
    <style>
        #about  {
            border-bottom: 2px solid #a248d5;
        }

    </style>
    <div class="container">
        <div class="titlecard ">
            <h3><span><</span><span>/</span>About Me<span>></span></h3>        
        </div>
        <div class="bio">
            <div class="bio_des bgwhite">
                <h3>Little Bit About Me</h3>
                <p>Auckland based web developer with a passion for creating eye catching websites.</p>
                <p>An articulate individual that has an excellent ability to communicate with others. I have skills in a range of creative and technical disciplines, combined with the ability to learn rapidly and troubleshoot as I go. I can relate quickly and effectively to a wide range of people and have dealt with major challenges that I believe have shaped me into a strong individual</p>
                <p>Always keen to learn and further my skill set. I started in graphic design but fell in love with coding. My background allows me to approach breifs with the perspective of both Designer and Developer.</p>
            </div>
            <div class="qual bgwhite">
                <h3>Qualifications</h3>
                <div>
                    <h4>Diploma of Graphic Design </h4>
                    <p>- ACG Yoobee School of Design</p>
                    <h4>Diploma of Web Design and Development </h4>
                    <p>- ACG Yoobee School of Design</p>
                    <h4>Countless hours spent watching tutorials </h4>
                    <p>- Got to keep learning some how</p>
                    <div class="flex-row">
                        <a href="{{ url('/cv') }}"" target="_blank">Download C.V.</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="titlecard ">
            <h3><span><</span><span>/</span>Interests<span>></span></h3>        
        </div>

        <div class="interests ">
            <div class="bgwhite hob motorcycle_hob flex-col flex-a-center">
                <object id="motorcycle" onload="onMotorcycle()" type="image/svg+xml" data="img/motorcycle.svg"></object>
                <div class="flex-col flex-a-center">
                    <h3><span><</span><span>/</span>Motorcycles<span>></span></h3>
                    <div class="hobby_des">
                        <p>Nothing comes close to the thrill of riding a motorcycle. I love a good weekend ride. Had a rough crash recently, but that still doesn't put me off. </p>
                    </div>
                </div>
            </div>
            <div class="bgwhite hob music_hob flex-col flex-a-center">
                <object id="music" onload="onMusic()" type="image/svg+xml" data="img/music.svg"></object>
                <h3><span><</span><span>/</span>Music<span>></span></h3> 
                <div class="hobby_des">
                    <p>Been playing guitar for as long as I can remember. I ain't no Jimi Hendrix, but I like to think I can hold my own in a jam.</p>
                </div>
            </div>
            <div class="bgwhite hob tinkerer_hob flex-col flex-a-center">
                <object id="gear" onload="onGear()" type="image/svg+xml" data="img/gear.svg"></object>
                <h3><span><</span><span>/</span>Tinkering<span>></span></h3> 
                <div class="hobby_des">
                    <p>I'm a major tinkerer. I love pulling things apart and learning how they work. Anything from toys, motorcycles, computers to websites.</p>
                </div>
            </div>
        </div>
 
    </div>
    <script src="{{ asset('js/about.js') }}"></script>

@endsection
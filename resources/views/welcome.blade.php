@extends('layouts.app')
@section('content')
    
    <style>
        #work  {
            border-bottom: 2px solid #a248d5;
        }

    </style>
    <div class="container">
        <div class="titlecard">
            <h3><span><</span><span>/</span>Projects<span>></span></h3>        
        </div>

        <div class="project bgwhite">
            <div class="info">
                <div class="des">
                    <h3>Rocket</h3>
                    <h4>A concept website for learning about space</h4>
                    <p>Rocket is a webiste educational website targeted at children. Designed as a tool to be used in the class room or at home.</p>
                    <p>This project focused on responsive design and SVG animation</p>
                    <p>For example the planet selector is an SVG image that has been made interactive. SVGs are great since they can be scaled to any size</p>
                    <p><span>Challenges:</span> Creating animations that work well across mulitple screen sizes.</p>
                    <p><span>Tools:</span> HTML, SCSS, JS, GSAP, GULP, Bootstrap.</p>
                    <div class="flex-row">
                        <a href="http://rocket.christian.sims.yoobee.net.nz/">Vist Rocket</a>
                    </div>
                </div>
                <div class="project_img border_rad_right">
                    <img src="/img/rocket-mockup.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="project bgwhite">
            <div class="info">
                <div class="project_img border_rad_left">
                    <img src="/img/motomeet-mockup1.jpg" alt="">
                </div>
                <div class="des">
                    <h3>MotoMeet</h3>
                    <h4>A site for motorcylist to meet up and ride together</h4>
                    <p>MotoMeet is a site that allows riders to create meet up events and organise rides. Users are able to create, comment and attend meets ups. The map takes an latitude and longitude value which is then put on a google map.</p>
                    <p>This project focused on database interaction</p>
                    <p>Please note that this site is not responsive</p>
                    <p><span>Challenges:</span> Creating a site with user logins and different user levers such as admin. Having to think about what each level of user would need to access on each page.</p>
                    <p><span>Tools:</span> Laravel 5.2, SCSS, JS, GULP, Bootstrap.</p>
                    <div class="flex-row">
                        <a href="#">Vist MotoMeet</a>
                    </div>
                </div>
            </div>
        </div>  

        <div class="project bgwhite">
            <div class="info">
                <div class="des">
                    <h3>BikeMedic</h3>
                    <h4>Website Design : Mobile Bike Repairs</h4>
                    <p>This site is a front end redesign for a mobile bike mechanic. Simple one page responsive design.</p>
                    <p>This project was used to practise responive design, svg animation and learn CSS grids.</p>
                    <p><span>Challenges:</span> Learning how to use CSS grids. Previously been using flexbox and the Bootstrap grid</p>
                    <p><span>Tools:</span> HTML, SCSS, JS, GULP, GSAP.</p>
                    <div class="flex-row">
                        <a href="http://bikemedic.christian.sims.yoobee.net.nz">Vist BikeMedic</a>
                    </div>
                </div>
                <div class="project_img border_rad_right">
                    <img src="/img/bikemedic-mockup.jpg" alt="">
                </div>
            </div>
        </div> 

        <div class="titlecard">
            <h3><span><</span><span>/</span>Process<span>></span></h3>        
        </div>
        <div class="process">
            <div class="bgwhite">
                <div class="des">
                    <h3>Research</h3>
                    <p>First I start by researching the requirements of the breif. Figuring out what tools to use and how best approach the project.</p>
                    <p>Also looking at target market and competing sites to gain insight into what works, what could be done better and styling choices.  </p>
                </div>
            </div>
            <div class="bgwhite">
                <div class="des">
                    <h3>Developing</h3>
                    <p>After using a sketch book to conceptualise my ideas I start coding and creating. Designing as I go to develop the best solution.</p>
                    <p>Having a clear concept is key. I achieve this by using the information gathered in the research phase combined with my design/developer knowledge.</p>
                </div>
            </div>
            <div class="bgwhite">
                <div class="des">
                    <h3>Testing</h3>
                    <p>This is where all the bugs and hiccups are ironed out. Insuring all features work as intended and all the boxes are ticked.</p>
                    <p>Working through a list of things to test, I make sure no bug goes unoticed. This allows to deliver a complete site that meets all the requirements </p>
                </div>
            </div>
        </div> 
    </div>

@endsection
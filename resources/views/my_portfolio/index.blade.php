@include('my_portfolio.nav.navbar')
    
<div class="container ">
    <div data-aos="fade-right" id="home" class="mt-5 animate__animated animate__pulse animate__repeat-2" >
        <h1>My Portfolio</h1>
    </div>
    <div  class="height home d-flex flex-column justify-content-center">
        <div class="m-5 d-flex align-items-start justify-content-around">
            
            <div class="m-5 ">
                <h1>Haii,</h1>
                <h2>I am Chezter Custodio
                    a Web Developer. <br>
                    I created this site for my portfolio. 
                </h2>
                <button class="contact" id="email">
                    <div class="svg-wrapper-1">
                        <div class="svg-wrapper">
                            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <span>Email Me</span>
                </button>
                
                <a href="https://www.linkedin.com/in/chezter-custodio-b02a1b220/" target="_blank" class="linkedin">
                    <img src="{{asset('images/linkedin.svg')}}" alt="" class="img-fluid" width="100" height="100">
                </a>
            </div>
            <div class="circle">
                <img src="{{asset('images/meh.jpg')}}" alt="" class="img-fluid home-img" width="350" height="350"/>
            </div>
        </div>
    </div>
</div>
    {{-- <div class=" spacer layer1">
        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(0, 0, 0, 1)" offset="0%"></stop><stop stop-color="rgba(0, 0, 0, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,30L80,35C160,40,320,50,480,46.7C640,43,800,27,960,26.7C1120,27,1280,43,1440,55C1600,67,1760,73,1920,71.7C2080,70,2240,60,2400,55C2560,50,2720,50,2880,50C3040,50,3200,50,3360,51.7C3520,53,3680,57,3840,48.3C4000,40,4160,20,4320,25C4480,30,4640,60,4800,61.7C4960,63,5120,37,5280,21.7C5440,7,5600,3,5760,13.3C5920,23,6080,47,6240,58.3C6400,70,6560,70,6720,68.3C6880,67,7040,63,7200,55C7360,47,7520,33,7680,33.3C7840,33,8000,47,8160,55C8320,63,8480,67,8640,71.7C8800,77,8960,83,9120,86.7C9280,90,9440,90,9600,83.3C9760,77,9920,63,10080,58.3C10240,53,10400,57,10560,63.3C10720,70,10880,80,11040,83.3C11200,87,11360,83,11440,81.7L11520,80L11520,100L11440,100C11360,100,11200,100,11040,100C10880,100,10720,100,10560,100C10400,100,10240,100,10080,100C9920,100,9760,100,9600,100C9440,100,9280,100,9120,100C8960,100,8800,100,8640,100C8480,100,8320,100,8160,100C8000,100,7840,100,7680,100C7520,100,7360,100,7200,100C7040,100,6880,100,6720,100C6560,100,6400,100,6240,100C6080,100,5920,100,5760,100C5600,100,5440,100,5280,100C5120,100,4960,100,4800,100C4640,100,4480,100,4320,100C4160,100,4000,100,3840,100C3680,100,3520,100,3360,100C3200,100,3040,100,2880,100C2720,100,2560,100,2400,100C2240,100,2080,100,1920,100C1760,100,1600,100,1440,100C1280,100,1120,100,960,100C800,100,640,100,480,100C320,100,160,100,80,100L0,100Z"></path></svg>
        <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(0, 0, 0, 1)" offset="0%"></stop><stop stop-color="rgba(0, 0, 0, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,30L80,35C160,40,320,50,480,46.7C640,43,800,27,960,26.7C1120,27,1280,43,1440,55C1600,67,1760,73,1920,71.7C2080,70,2240,60,2400,55C2560,50,2720,50,2880,50C3040,50,3200,50,3360,51.7C3520,53,3680,57,3840,48.3C4000,40,4160,20,4320,25C4480,30,4640,60,4800,61.7C4960,63,5120,37,5280,21.7C5440,7,5600,3,5760,13.3C5920,23,6080,47,6240,58.3C6400,70,6560,70,6720,68.3C6880,67,7040,63,7200,55C7360,47,7520,33,7680,33.3C7840,33,8000,47,8160,55C8320,63,8480,67,8640,71.7C8800,77,8960,83,9120,86.7C9280,90,9440,90,9600,83.3C9760,77,9920,63,10080,58.3C10240,53,10400,57,10560,63.3C10720,70,10880,80,11040,83.3C11200,87,11360,83,11440,81.7L11520,80L11520,100L11440,100C11360,100,11200,100,11040,100C10880,100,10720,100,10560,100C10400,100,10240,100,10080,100C9920,100,9760,100,9600,100C9440,100,9280,100,9120,100C8960,100,8800,100,8640,100C8480,100,8320,100,8160,100C8000,100,7840,100,7680,100C7520,100,7360,100,7200,100C7040,100,6880,100,6720,100C6560,100,6400,100,6240,100C6080,100,5920,100,5760,100C5600,100,5440,100,5280,100C5120,100,4960,100,4800,100C4640,100,4480,100,4320,100C4160,100,4000,100,3840,100C3680,100,3520,100,3360,100C3200,100,3040,100,2880,100C2720,100,2560,100,2400,100C2240,100,2080,100,1920,100C1760,100,1600,100,1440,100C1280,100,1120,100,960,100C800,100,640,100,480,100C320,100,160,100,80,100L0,100Z"></path></svg>
    </div> --}}
<div class="container">
    <div data-aos="fade-right" id="projects" class="" >
        <h1>Projects</h1>
    </div>
    <div data-aos="fade-up"  class="projects mt-5 height ">
        <div class="swiper mySwiper d-flex">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image"><img src="{{asset('images/AnimeList.png')}}" alt="" class="img-fluid" ></div>
                        <div class="title d-flex justify-content-center"> MY ANIMELIST </div>
                        <div class="category"> Skills used </div>
                        <div class="heading"> Laravel, HTML, CSS, JavaScript, PHP, Bootstrap</div>
                        {{-- <div class="author"> By <span class="name">Abi</span> 4 days ago</div> --}}
                        <div class="d-flex justify-content-center">
                            <button class="btn m-1 preview">
                                <a href="" id="animelistModal" data-bs-toggle="modal" data-bs-target="#animelistModal" > 
                                    Preview</a>
                            </button>
                        </div>
                        
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image d-flex justify-content-center align-items-center"><img src="{{asset('images/BuyNSellLogo.png')}}" alt="" class="img-fluid "></div>
                        <div class="title d-flex justify-content-center"> Buy n' Sell </div>
                        <div class="category"> Skills used </div>
                        <div class="heading"> Laravel, HTML, CSS, JavaScript, Bootstrap, GIT </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn m-1 preview">
                                <a href="" id="buynsellModal" data-bs-toggle="modal" data-bs-target="#buynsellModal" > 
                                    Preview</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image d-flex justify-content-center align-items-center"><img src="{{asset('images/.png')}}" alt="" class="img-fluid"></div>
                        <div class="title d-flex justify-content-center"> Runnit</div>
                        <div class="category"> Skills used </div>
                        <div class="heading"> Laravel, HTML, CSS, JavaScript, Bootstrap, GIT </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn m-1 preview">
                                <a href="" id="peteatModal" data-bs-toggle="modal" data-bs-target="#runnitModal" > 
                                    Preview</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image"><img src="{{asset('images/ral_logo.png')}}" alt="" class="img-fluid"></div>
                        <div class="title d-flex justify-content-center align-items-center"> Rent-a-live </div>
                        <div class="category"> Skills used </div>
                        <div class="heading"> Laravel, HTML, CSS, JavaScript, PHP, Bootstrap </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn m-1 preview">
                                <a href="" id="ralModal" data-bs-toggle="modal" data-bs-target="#ralModal" > 
                                    Preview</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image d-flex justify-content-center align-items-center"><img src="{{asset('images/INVISIBI.png')}}" alt="" class="img-fluid"></div>
                        <div class="title d-flex justify-content-center"> INVISIBLE </div>
                        <div class="category"> Skills used </div>
                        <div class="heading"> CodeIgniter, HTML, CSS, JavaScript, PHP, Bootstrap </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn m-1 preview">
                                <a href="" id="invisibleModal" data-bs-toggle="modal" data-bs-target="#invisibleModal" > 
                                    Preview</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image d-flex justify-content-center align-items-center"><img src="{{asset('images/peteat_logo.png')}}" alt="" class="img-fluid"></div>
                        <div class="title d-flex justify-content-center"> peTEAt: MilkTea Website </div>
                        <div class="category"> Skills used </div>
                        <div class="heading"> HTML, CSS, JavaScript, PHP, Bootstrap </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn m-1 preview">
                                <a href="" id="peteatModal" data-bs-toggle="modal" data-bs-target="#peteatModal" > 
                                    Preview</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image"><img src="{{asset('images/flix_logo.png')}}" alt="" class="img-fluid"></div>
                        <div class="title d-flex justify-content-center"> FLIX </div>
                        <div class="category"> Skills used </div>
                        <div class="heading"> Kotlin, Android Studio, Firebase </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn m-1 preview">
                                <a href="" id="flixModal" data-bs-toggle="modal" data-bs-target="#flixModal" > 
                                    Preview</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div data-aos="fade-right" id="about-me" >
        <h1>About Me</h1>
    </div>
    <div data-aos="fade-up" id="" class="height home ">
        <div class="m-5 d-flex align-items-start justify-content-around">
            <img src="{{asset('images/creative_shot.jpg')}}" alt="" class="img-fluid" width="250" height="250">
            <div class="d-flex flex-column m-5">
                <h3>I am 23 years old fresh graduate from FEU Institute of Technology. I came from Pasig City and moved to Muntinlupa at 2018.
                I started programming on 2017, I just want to explore it and it became my interest and thats how my career started as a Web Developer.
                My hobbies are watching anime, playing online games, drawing.</h3>
            </div>
        </div>
    </div>
    
    <div data-aos="fade-right" id="skills" >
        <h1>Skills</h1>
    </div>
    <div data-aos="fade-up" id="" class=" height skills ">
        <div class="m-5 row grid ">
            <div class="container col-md ">
                <h1>Front End Development</h1>
                <div class="d-flex flex-wrap justify-content-center">
                    <div>
                        <img src="{{asset('images/skills/css3_logo.svg')}}" alt="" class="img-fluid" >
                        <h4>5 yrs</h4>
                    </div>
                    <div>
                        <img src="{{asset('images/skills/html5_logo.svg')}}" alt="" class="img-fluid" >
                        <h4>5yrs</h4>
                    </div>
                    <div>
                        <img src="{{asset('images/skills/javascript_logo.svg')}}" alt="" class="img-fluid" >
                        <h4>3 yrs</h4>
                    </div>
                    <div>
                        <img src="{{asset('images/skills/bootstrap_logo.svg')}}" alt="" class="img-fluid" >
                        <h4>5 yrs</h4>
                    </div>
                    <div>
                        <img src="{{asset('images/skills/kotlin_logo.svg')}}" alt="" class="img-fluid" >
                        <h4>&lt;1 yr</h4>
                    </div>
                    <div>
                        <img src="{{asset('images/skills/swift_logo.svg')}}" alt="" class="img-fluid" >
                        <h4>&lt;1 yr</h4>
                    </div>
                    
                </div>
                
            </div>
            <div class="container col-md">
                <h1>Back End Development</h1>
                <div class="d-flex flex-wrap justify-content-center">
                    <div>
                        <img src="{{asset('images/skills/php_logo.svg')}}" alt="" class="img-fluid" >
                        <h4>2 yrs</h4>
                    </div>
                    <div>
                        <img src="{{asset('images/skills/laravel_logo.svg')}}" alt="" class="img-fluid" >
                        <h4>1 yr</h4>
                    </div>
                    <div>
                        <img src="{{asset('images/skills/codeigniter_logo.svg')}}" alt="" class="img-fluid" >
                        <h4>&lt;1 yr</h4>
                    </div>
                    <div>
                        <img src="{{asset('images/skills/mysql_logo.svg')}}" alt="" class="img-fluid" >
                        <h4>2 yrs</h4>
                    </div>
                    <div>
                        <img src="{{asset('images/skills/firebase_logo.svg')}}" alt="" class="img-fluid" >
                        <h4>&lt;1 yr</h4>
                    </div>
                </div>
            </div>
            <div class="container col-md">
                <h1>Other SKills</h1>
                <div class="d-flex flex-wrap justify-content-center">
                    <div>
                        <img src="{{asset('images/skills/git_logo.svg')}}" alt="" class="img-fluid" >
                        <h4>&lt;1 yr</h4>
                    </div>
                    <div>
                        <img src="{{asset('images/skills/photoshop_logo.svg')}}" alt="" class="img-fluid" >
                        <h4>2 yrs</h4>
                    </div>
                    <div>
                        <img src="{{asset('images/skills/filmora_logo.svg')}}" alt="" class="img-fluid" >
                        <h4>3 yrs</h4>
                    </div>
                    <div>
                        <img src="{{asset('images/skills/figma_logo.svg')}}" alt="" class="img-fluid" >
                        <h4>&lt;1 yr</h4>
                    </div>
                    <div>
                        <img src="{{asset('images/skills/Android_Studio_logo.png')}}" alt="" class="img-fluid" >
                        <h4>1 yr</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-right" id="certifications" >
        <h1>Certifications</h1>
    </div>
    <div data-aos="fade-up" id="certifications" class="height certifications d-flex flex-column justify-content-center">
        <div class="m-5 row grid ">
            <div class="container col-md">
                <div class="">
                    <div>
                        
                        <a href="https://www.credly.com/badges/d12bbe86-ef2f-472b-b371-5d77c3acf68b/linked_in_profile" target="_blank">
                            <img src="{{asset('images/certif/html5_certif.png')}}" alt="" class="img-fluid" >
                        </a>
                    </div>
                </div>
            </div>
            <div class="container col-md">
                <div class="">
                    <div>
                        <a href="https://www.credly.com/badges/3f36792f-9220-4010-8258-0e24eb0f2693/linked_in_profile" target="_blank">
                            <img src="{{asset('images/certif/db_certif.png')}}" alt="" class="img-fluid" >
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div data-aos="fade-right" id="resume" >
            <h1>Resume</h1>
        </div>
        <div data-aos="fade-up" id="" class=" Resume d-flex flex-column justify-content-center height">
            <div class="m-5 d-flex align-items-start ">
                <img src="{{asset('images/grad_pic.jpg')}}" alt="" class="img-fluid" width="250" height="250">
                <div class="ms-5">
                    <h3>Chezter Andrei L. Custodio</h3>
                    <h3>BS Information Technology</h3>
                    <h3>with Specialization in Web and Mobile Application</h3>
                    
                    <div class="button-container" >
                        <div data-tooltip="Download" class="button">
                            <div class="button-wrapper">
                                <a href="docs/Custodio_Chezter_Andrei-Resume.pdf" download>
                                <div class="text">Resume</div>
                                <span class="icon">
                                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" height="1.5em" width="1.5em" role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" fill="none"></path></svg>
                                </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                
            </div>
            <div class="">
            <h1>Objective</h1>
            <ul class="li">
                <h5>To work in an active professional setting as a Web and Mobile programmer for a rising company, utilizing my creativity, cooperating skills, and inventive thinking for the benefit of both the company and myself. </h5>
            </ul>
            
            <h1>Internship</h1>
            <ul class="li">
                <h5><b>IPSUM PH</b> (Front-End Developer) <br>
                April 25 – July 20, 2022 (520hrs)
                </h5>
            </ul>
            <ul class="li">
                <h5><b>Melham Construction Corporation</b> (Front-End Developer) <br>
                September 26 – Nov 16, 2022 (520hrs)
                </h5>
            </ul>

            <h1> Education</h1>
            <ul class="li">
                <h5><b>FEU Institute of Technology</b><br>
                P. Paredes St., Sampaloc, Manila<br>
                2018-2023
                </h5>
            </ul>
            <ul class="li">
                <h5><b>FEU MANILA SHS</b><br>
                Nicanor Reyes St., Sampaloc, Manila<br>
                2016-2018
                </h5>
            </ul>

            <h1>Personal Information </h1>
            <ul class="li">
                <table>
                    <td>
                        <tr>
                            <th> <b>Address </b></th> 
                            <th> &nbsp; : &nbsp; </th>
                            <th> 122 C. F. Natividad Katarungan II Muntilupa City</th> 
                        </tr>
                        <tr>
                            <th> <b>Mobile </b></th>
                            <th> &nbsp; : &nbsp; </th> 
                            <th> 09089349411</th> 
                        </tr>
                        <tr>
                            <th> <b>E-mail </b></th> 
                            <th> &nbsp; : &nbsp; </th>
                            <th> chez.cus@gmail.com</th> 
                        </tr>
                        <tr>
                            <th> <b>Birthday </b></th> 
                            <th> &nbsp; : &nbsp; </th>
                            <th> March 01, 2000</th> 
                        </tr>
                    </td>
                </table>
            </ul>
            
            
        </div>
        </div>
        
    </div>
    
</div>

@include('my_portfolio.nav.footer')


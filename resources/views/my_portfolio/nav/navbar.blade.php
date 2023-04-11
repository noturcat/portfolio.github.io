<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

{{-- jquery --}}
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> --}}

@vite(['resources/css/app.css', 'resources/sass/app.scss' , 'resources/js/app.js'])
@include('my_portfolio.modal.my_animelist_modal')@include('my_portfolio.modal.buynsell_modal')@include('my_portfolio.modal.flix_modal')
@include('my_portfolio.modal.invisible_modal') @include('my_portfolio.modal.peteat_modal') @include('my_portfolio.modal.rent-a-live_modal')
@include('my_portfolio.modal.runnit_modal')

<div class="preloader">
    <svg class="pl" id="preloader" width="128px" height="128px" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
    <circle class="pl__ring1" cx="64" cy="64" r="60" fill="none" stroke="#6C757D" stroke-width="8" transform="rotate(-90,64,64)" stroke-linecap="round" stroke-dasharray="377 377" stroke-dashoffset="-376.4"></circle>
    <circle class="pl__ring2" cx="64" cy="64" r="52.5" fill="none" stroke="#ADB5BD" stroke-width="7" transform="rotate(-90,64,64)" stroke-linecap="round" stroke-dasharray="329.9 329.9" stroke-dashoffset="-329.3"></circle>
    <circle class="pl__ring3" cx="64" cy="64" r="46" fill="none" stroke="#CED4DA" stroke-width="6" transform="rotate(-90,64,64)" stroke-linecap="round" stroke-dasharray="289 289" stroke-dashoffset="-288.6"></circle>
    <circle class="pl__ring4" cx="64" cy="64" r="40.5" fill="none" stroke="#DEE2E6" stroke-width="5" transform="rotate(-90,64,64)" stroke-linecap="round" stroke-dasharray="254.5 254.5" stroke-dashoffset="-254"></circle>
    <circle class="pl__ring5" cx="64" cy="64" r="36" fill="none" stroke="#E9ECEF" stroke-width="4" transform="rotate(-90,64,64)" stroke-linecap="round" stroke-dasharray="226.2 226.2" stroke-dashoffset="-225.8"></circle>
    <circle class="pl__ring6" cx="64" cy="64" r="32.5" fill="none" stroke="#F8F9FA" stroke-width="3" transform="rotate(-90,64,64)" stroke-linecap="round" stroke-dasharray="204.2 204.2" stroke-dashoffset="-203.9"></circle>
    </svg>
</div>


<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #6C757D">
    <div class="container-fluid d-flex flex-column justify-content-center">
        <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <i class="fas fa-bars"></i>
        </button>
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <div class="collapse navbar-collapse d-flex flex-column justify-content-center" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-me">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#certifications">Certifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#resume">Resume</a >
                </li>
            </ul>
        </div>
    </div>
</nav>

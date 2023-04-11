import './bootstrap';

    AOS.init();

    //swiper1
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
        //>=
            800: {
            slidesPerView:2,
            spaceBetween: 20
            },
            1100: {
            slidesPerView:3,
            spaceBetween: 20
            },
            1280: {
            slidesPerView: 4,
            spaceBetween: 10
            },
            1500: {
            slidesPerView: 5,
            spaceBetween: 30
            }
        }
    },);
    
    //swiper2
    var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    },);

    //email
    $("#email").on('click', function() {
        window.location.href = "mailto:chez.cus@gmail.com";
        });


    //preloader
    var loader = document.getElementById("preloader");

    window.addEventListener("load", function(){
    preloader.style.display = "none";
    })
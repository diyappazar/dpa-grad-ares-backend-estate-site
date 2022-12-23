    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/public/js/vue.global.js"></script>
    <script src="/public/js/tw.js"></script>
    <script src="/public/libs/feather-icons/feather.min.js"></script>
    <script src="/public/js/plugins.init.js"></script>
    <script src="/public/libs/tiny-slider/min/tiny-slider.js"></script>
    <script src="/public/libs/tobii/js/tobii.min.js"></script>
    <script src = "/public/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="/public/js/easy_background.js"></script>
    <script src="/public/js/app.js"></script> 
    <script src="/public/js/particles.js"></script>
    <script>
        particlesJS(
        "elements",

        {
        "particles": {
            "number": {
            "value": 70,
            "density": {
                "enable": true,
                "value_area": 1000
            }
            },
            "color": {
            value: ["#fff", "#def9ad", "#333", "#b7d3aa", "#008FFF"]
            },
            "shape": {
            "type": "polygon",
            "stroke": {
                "width": 0,
                "color": "#ffffff"
            },
            "polygon": {
                "nb_sides": 5
            },
            },
            "opacity": {
            "value": .3,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
            },
            "size": {
            "value": 25,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 30,
                "size_min": 2,
                "sync": false
            }
            },
            "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
            },
            "move": {
            "enable": true,
            "speed": 1,
            "direction": "bottom",
            "random": false,
            "straight": true,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": true,
                "rotateX": 600,
                "rotateY": 1200
            }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
            "onhover": {
                "enable": true,
                "mode": "repulse"
            },
            "onclick": {
                "enable": true,
                "mode": "push"
            },
            "resize": true
            },
            "modes": {
            "grab": {
                "distance": 400,
                "line_linked": {
                "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 100,
                "duration": 0.4,
                "speed": 3
            },
            "push": {
                "particles_nb": 6
            },
            "remove": {
                "particles_nb": 2
            }
            }
        },
        "retina_detect": true
        }
        );


        particlesJS(
        "fire",
        {
        "particles": {
            "number": {
            "value": 150,
            "density": {
                "enable": true,
                "value_area": 700
            }
            },
            "color": {
            "value": "#ed6404"
            },
            "shape": {
            "type": "polygon",
            "stroke": {
                "width": 0,
                "color": "#000000"
            },
            "polygon": {
                "nb_sides": 5
            },
            },
            "opacity": {
            "value": 0.75,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 5,
                "opacity_min": 0.1,
                "sync": false
            }
            },
            "size": {
            "value": 2,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 30,
                "size_min": 0.5,
                "sync": false
            }
            },
            "line_linked": {
            "enable": false,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
            },
            "move": {
            "enable": true,
            "speed": 40,
            "direction": "bottom-right",
            "random": true,
            "straight": true,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": true,
                "rotateX": 600,
                "rotateY": 1200
            }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
            "onhover": {
                "enable": true,
                "mode": "repulse"
            },
            "onclick": {
                "enable": true,
                "mode": "push"
            },
            "resize": true
            },
            "modes": {
            "grab": {
                "distance": 400,
                "line_linked": {
                "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 300,
                "duration": 1
            },
            "push": {
                "particles_nb": 4
            },
            "remove": {
                "particles_nb": 2
            }
            }
        },
        "retina_detect": true
        }
        );

        ScrollReveal().reveal('.text');
            </script>
    <script>
            easy_background("#home",
                {
                    slide: ["/public/images/bg/01.jpg", "/public/images/bg/02.jpg", "/public/images/bg/03.jpg"],
                    delay: [4000, 4000, 4000]
                }
            );
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        
    var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });
 </script>
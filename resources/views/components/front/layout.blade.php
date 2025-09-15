<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')


  {{-- font --}}
  <link
    href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Bebas+Neue&family=Dancing+Script:wght@400..700&family=Pacifico&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <title>{{ $title_page }}</title>

  {{-- icon --}}
  <script src="https://unpkg.com/feather-icons"></script>

  {{-- aos --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    html {
      scroll-behavior: smooth;
    }



    .f {
      font-family: "Arimo", sans-serif;
    }


    .link-fixed {
      animation: gerak 2s ease-in-out infinite;
    }

    @keyframes gerak {
      0% {
        transform: translateY(0);
      }

      66% {
        transform: translateY(-1rem);
      }

      90% {
        transform: translateY(-.8rem);
      }

      100% {
        transform: translate(0);
      }
    }


    .font-judul-hero {
      font-family: 'Bebas Neue', sans-serif;
    }

    .linear-hijau {
      background: linear-gradient(180deg, rgba(129, 237, 57, 1) 0%, rgba(108, 196, 49, 1) 50%, rgba(85, 153, 40, 1) 100%);
    }

    .block-abu {
      background: linear-gradient(0deg, rgba(60, 66, 57, 1) 0%, rgba(103, 115, 99, 1) 100%);
    }

    .linkup_muncul {
      transform: translateY(2.6rem);
    }

    .down-link {
      transform: scaleX(1);
      transition: .5s ease-in-out;
    }


    .text-link-navbar-active {
      color: #81ed39;
    }

    .url_active {
      @apply opacity-70
    }

    span.burgerItems:nth-child(1).active {
      transform: rotate(-45deg) translatey(11.5px) translatex(-8px);
    }

    span.burgerItems:nth-child(2).active {
      transform: scale(0);
    }

    span.burgerItems:nth-child(3).active {
      transform: rotate(45deg) translatey(-11.5px)translatex(-8px);
    }

    .navbar-nutup {
      transform: rotatex(90deg);
    }

    .navbar-muncul {
      transform: rotatex(0deg);
    }


    .logo-head.scrolled {
      @apply text-shadow-0;
    }

    .serviceItems.muncul {
      display: flex;
    }



    /* promotion */
    /* .carausel-container:hover, .carausel-content:hover {
      animation-play-state: paused;
    }

    .carausel-content {
      animation: jalan 35s linear infinite;
    }

    @keyframes jalan {
      0%{
        transform: translateX(100%)
      }
      100% {
        transform: translateX(-100%);
      }
    } */


    /* news-home */
    .scrollbar-wadah-news {
      user-select: none;
      /* cegah teks ke-select */
      scroll-behavior: smooth;
    }

    .scrollbar-wadah-news:active {
      cursor: grabbing;
      scroll-behavior: auto;
      user-select: none;
    }

    .scrollbar-wadah-news.hilang-chrome::-webkit-scrollbar {
      /* scrollbar hilang di chrome */
      display: none;
    }

    .scrollbar-wadah-news.hilang-firefox {
      scrollbar-width: none;
    }


    /* news home klik btn geser */

    .wadah-btn-scroll button:disabled {
      opacity: 50%;
    }




    /* menu */
    .link-menu-active {
      background-color: #81ed39;
    }

    /* contact */
    .getar:hover a {
      animation: getar 1s forwards;
      transform-origin: left bottom;
    }

    @keyframes getar {
      0% {
        transform: rotate(-0deg);
      }

      22.02% {
        transform: rotate(-8deg);
      }

      29.09% {
        transform: rotate(-0deg);
      }

      36.16% {
        transform: rotate(-5.12deg);
      }

      41.80% {
        transform: rotate(-0deg);
      }

      47.45% {
        transform: rotate(-4.21deg);
      }

      52.30% {
        transform: rotate(-0deg);
      }

      57.14% {
        transform: rotate(-3.44deg);
      }

      61.45% {
        transform: rotate(-0deg);
      }

      65.76% {
        transform: rotate(-2.74deg);
      }

      69.68% {
        transform: rotate(-0deg);
      }

      73.60% {
        transform: rotate(-2.11deg);
      }

      77.22% {
        transform: rotate(-0deg);
      }

      80.84% {
        transform: rotate(-1.52deg);
      }

      84.22% {
        transform: rotate(-0deg);
      }

      87.60% {
        transform: rotate(-0.99deg);
      }

      90.78% {
        transform: rotate(-0deg);
      }

      93.97% {
        transform: rotate(-0.49deg);
      }

      96.98% {
        transform: rotate(-0deg);
      }

      100% {
        transform: rotate(-0deg);
      }
    }


    /* cek admin */
    .block-cek-admin.muncul {
      display: block;
    }

    .input-password-admin.muncul {
      animation: inputpasswordadmin 1s ease-in forwards;
    }

    .btn-admin.muncul {
      animation: btnadmin 1s ease-in .6s forwards;
    }

    @keyframes inputpasswordadmin {
      0% {
        opacity: 0;
        transform: translateY(-8rem);
      }

      100% {
        opacity: 1;
        transform: translateY(0rem);
      }
    }

    @keyframes btnadmin {
      0% {
        opacity: 0;
        transform: translateY(8rem);
      }

      100% {
        opacity: 1;
        transform: translateY(0rem);
      }
    }
  </style>
</head>

<body class="f" class="overflow-x-hidden">

  <x-front.Navbar></x-front.Navbar>



  <main>
    {{ $slot }}
  </main>


  <x-front.Link></x-front.Link>

  <x-front.cekadmin></x-front.cekadmin>

  <x-front.Footer></x-front.Footer>




  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    // icon
    feather.replace();
    //  aos
    AOS.init()

    // ---------- navbar 
    // munculkan sesuatu diatas nav item
    const navLink = document.querySelectorAll('.navLink');
    navLink.forEach(nav => {
      const target = nav.previousElementSibling;
      nav.addEventListener('mouseenter', () => {
        target.classList.add('linkup_muncul');
      });
      nav.addEventListener('mouseleave', () => {
        target.classList.remove('linkup_muncul');
      });
    });

    // memunculkan dan menghilangkan nav item ketika tombol burger diklik
    const burger = document.getElementsByClassName('burger')[0];
    const burgerItems = document.getElementsByClassName('burgerItems');
    const navAtas = document.getElementsByClassName('nav-atas')[0];
    burger.addEventListener('click', () => {
      for (let i = 0; i < burgerItems.length; i++) {
        burgerItems[i].classList.toggle('active');
      }

      if (!navAtas.classList.contains('navbar-muncul')) {
        navAtas.classList.add('navbar-muncul');
      } else {
        navAtas.classList.remove('navbar-muncul');
      }
    });


    document.body.addEventListener('click', function(e) {
      if (!burger.contains(e.target) && !navAtas.contains(e.target)) {
        if (navAtas.classList.contains('navbar-muncul')) {
          navAtas.classList.remove('navbar-muncul');
          for (i = 0; i < burgerItems.length; i++) {
            burgerItems[i].classList.remove('active');
          }
        }
      }
    });

    // mengubah tampilan navbar ketika discroll ke bawah dan mengembalikannya lagi ketika navbar sudah kembali ke atas
    const navbar = document.getElementById('navbar');
    const logoH = document.getElementsByClassName('logo-head')[0];
    window.addEventListener('scroll', () => {
      const fixnav = navbar.offsetTop;
      if (window.pageYOffset > fixnav) {
        navbar.classList.add('scrolled');
        logoH.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
        logoH.classList.remove('scrolled');
      }
    });

    // memunculkan opsi link pada isi nav service
    const navServices = document.getElementsByClassName('navService');
    for (let i = 0; i < navServices.length; i++) {
      navServices[i].addEventListener('click', (e) => {
        e.preventDefault();
        const serviceItems = navServices[i].nextElementSibling;
        serviceItems.classList.toggle('muncul');

        document.body.addEventListener('click', (e) => {
          if (serviceItems.classList.contains('muncul')) {
            if (!serviceItems.contains(e.target) && !navServices[i].contains(e.target)) {
              serviceItems.classList.remove('muncul');
            }
          }
        });
      });
    }


    // ------------------- contact
    const getar = document.querySelectorAll('.getar');
    getar.forEach(g => {
      const a = g.querySelector('a');
      g.addEventListener('touchstart', () => {
        a.style.animation = 'getar 1s forwards';
        a.style.transformOrigin = 'left bottom';
      });

      g.addEventListener('touchend', () => {
        a.style.animation = '';
        a.style.transformOrigin = '';
      });


    })

    // -------------------- news pada home 
    // menggeser card ketika discroll oleh mouse 
    // const scrollbarNews = document.getElementsByClassName("scrollbar-wadah-news")[0];
    // let isDown = false;
    // let startX;
    // let scrollLeft;

    // console.log(startX);
    // scrollbarNews.addEventListener("mousedown", (e) => {      
    //   isDown = true;
    //   scrollbarNews.classList.add("active");
    //   startX = e.pageX - scrollbarNews.offsetLeft;
    //   scrollLeft = scrollbarNews.scrollLeft;
    // });
    // scrollbarNews.addEventListener("mouseleave", () => {
    //   isDown = false;
    // });
    // scrollbarNews.addEventListener("mouseup", () => {
    //   isDown = false;
    // });
    // scrollbarNews.addEventListener("mousemove", (e) => {
    //   if (!isDown) return;
    //   e.preventDefault();
    //   const x = e.pageX - scrollbarNews.offsetLeft;
    //   const walk = (x - startX) * 2; // multiplier biar geser lebih cepat
    //   scrollbarNews.scrollLeft = scrollLeft - walk;
    // });
  </script>

</body>

</html>

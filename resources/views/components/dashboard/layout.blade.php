<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Bebas+Neue&family=Dancing+Script:wght@400..700&family=Pacifico&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>{{$title_page}}</title>
    {{-- icon --}}
    <script src="https://unpkg.com/feather-icons"></script>

    {{-- trux editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

  <style>
    .f {
      font-family: "Arimo", sans-serif;
    }

    .font-judul-hero {
      font-family: 'Bebas Neue', sans-serif;
    }

    .linear-hijau {
      background: linear-gradient(180deg,rgba(129, 237, 57, 1) 0%, rgba(108, 196, 49, 1) 50%, rgba(85, 153, 40, 1) 100%);
    }

    .block-abu {
      background: linear-gradient(0deg,rgba(60, 66, 57, 1) 0%, rgba(103, 115, 99, 1) 100%);
    }

    /* header */
    .btn-burger span:nth-child(1).clicked {
      transform: translateX(100%);
      opacity: 0;
    }

    .btn-burger span:nth-child(2).clicked {
      transform: translateX(-100%);
      opacity: 0;
    }

    .btn-burger .span-menu.clicked {
      opacity: 1;
      animation: up .5s ease-in-out;
    }
    @keyframes up {
      0% {
        transform: translateY(-6px) rotate(0deg);
      } 40% {
        transform: rotate(45deg) translateY(-4px);
        bottom: 50%
      } 80$ {
        transform: rotate(-30deg);
      } 100% {
        transform: rotate(0deg) translateY(2px);
      }
    }


    /* sidebar */ 
    
    
    /* neew */
    /* biar toolbar tidak maksa lebar */

    /* pastikan hanya toolbar yg bisa scroll */
.trix-toolbar {
  display: flex !important;
  flex-wrap: nowrap !important;   /* biar tetap sejajar */
  gap: 4px !important;
  overflow-x: auto !important;    /* scroll horizontal */
  max-width: 100% !important;
}

/* hilangkan kemungkinan toolbar bikin layar "melebar" */
.trix-toolbar::-webkit-scrollbar {
  height: 6px; /* scrollbar tipis */
}
.trix-toolbar::-webkit-scrollbar-thumb {
  background: #ccc;
  border-radius: 3px;
}

/* editor tetap full width parent */
trix-editor {
  display: block !important;
  width: 100% !important;
  max-width: 100% !important;
  min-width: 0 !important;
  box-sizing: border-box !important;
}
    
      
  </style>
</head>
<body class="f max-w-svw">
  <div class="flex">
    <x-dashboard.sidebar></x-dashboard.sidebar>

    <div class="flex-1 ">
      <x-dashboard.header></x-dashboard.header>

      <main>
        {{$slot}}
      </main>


      <x-dashboard.footer></x-dashboard.footer>
    </div>
    
  </div>




  <script>
    // icon
    feather.replace();


    // header
    const burger = document.querySelector('.btn-burger');
    burger.addEventListener('click', () => {
      // alert('o');
      // const span = burger.querySelectorAll('.span');
      // const menu = burger.querySelector('.menu');
      // span.forEach(s => {
      //   s.classList.toggle('hilang');
      //   menu.classList.toggle('muncul');
      // });
      const span = burger.querySelectorAll('.span');
      const spanMenu = burger.querySelector('.span-menu');
      const span1 = span[0];
      const span2 = span[1];
      const sidebar = document.querySelector('.sidebar');
      span1.classList.toggle('clicked');
      span2.classList.toggle('clicked');
      spanMenu.classList.toggle('clicked');
      sidebar.classList.toggle('active');
    });
  </script>
</body>
</html>
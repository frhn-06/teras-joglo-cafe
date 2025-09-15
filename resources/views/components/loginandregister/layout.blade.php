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

      .btn-masuk-daftar:hover {
        cursor: pointer;
      }

      .ring-error {
        box-shadow: 0px 0px 3px red;
      }



      /* login */
      
    </style>
</head>
<body class="f bg-[#eee]">

  <main>
    {{$slot}}
  </main>
    






  <script>
   feather.replace();
  </script>
</body>
</html>
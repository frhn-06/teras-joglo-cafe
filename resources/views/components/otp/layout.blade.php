<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  @vite('resources/js/anjing.js')

  {{-- font --}}
  <link
    href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Bebas+Neue&family=Dancing+Script:wght@400..700&family=Pacifico&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <title>verifikasi otp</title>

  {{-- icon --}}
  <script src="https://unpkg.com/feather-icons"></script>

  {{-- aos --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>


  <main>
    {{ $slot }}
  </main>


  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    // icon
    feather.replace();
    //  aos
    AOS.init()
  </script>
</body>

</html>

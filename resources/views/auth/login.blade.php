<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style-output.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="font-poppins overflow-x-hidden">
  <!-- Header & Navbar -->
  <header class="w-full flex items-center z-10 py-5 md:py-10 px-10" id="nav">
      <nav class="w-full flex justify-between items-center">
          <a href="index.html">
              <img src="src/img/logo-web.png" alt="Logo" class="max-w-[150px]">
          </a>
          <a href="{{ url('/register') }}" class="text-[#FFCDE8] hover:text-[#AF2654]">Register</a>
      </nav>
  </header>

  <section class="md:px-32 md:pt-32 pt-16">
    <div class="flex justify-center align-middle mx-auto">
      <div class=" w-full md:w-[30rem] px-12">
        <h2 class="text-3xl font-semibold tracking-wide">Selamat Datang!</h2>
        <div class="mt-5">
          <a href="" class="w-full px-5 py-2.5 text-gray-500 flex items-center border rounded-lg hover:border-[#AF2654] hover:cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="20px" height="20px"><path fill="#fbc02d" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#e53935" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4caf50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1565c0" d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
              <p class="mx-auto text-sm text-[#000]">Masuk dengan Google</p>
          </a>
          <div class="relative flex py-5 items-center">
              <div class="flex-grow border-t border-[#AF2654]"></div>
              <span class="flex-shrink mx-4 text-[#AF2654]">atau</span>
              <div class="flex-grow border-t border-[#AF2654]"></div>
          </div>
          <div class="py-4 block">
            <form action="">
              @include('auth.form', ['tombol' => 'Login'])
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
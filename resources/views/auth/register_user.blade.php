<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style-output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="shortcut icon" href="src/img/logo-mobile.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    @vite('resources/css/app.css')

    <title>Register Your Vendor</title>
</head>

<body class="font-poppins">
    <!-- Header & Navbar -->
    <header class="bg-white">
        @include('component.navbar')
    </header>

    <section class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="flex justify-center align-middle mx-auto">
            <div class=" w-full md:w-[30rem] px-12">
                <h2 class="text-3xl font-semibold tracking-widest">Create Account</h2>
                <p class="py-2 text-xs font-semibold text-gray-500 font-lighter tracking-wider">Daftarkan segera akun
                    anda.</p>
                <div class="mt-5">
                    <a href=""
                        class="w-full px-5 py-2.5 text-gray-500 flex items-center border rounded-lg hover:border-[#AF2654] hover:cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="20px" height="20px">
                            <path fill="#fbc02d"
                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                            <path fill="#e53935"
                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                            <path fill="#4caf50"
                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                            <path fill="#1565c0"
                                d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                        </svg>
                        <p class="mx-auto text-sm text-[#000]">Masuk dengan Google</p>
                    </a>
                    <div class="relative flex py-5 items-center">
                        <div class="flex-grow border-t border-[#AF2654]"></div>
                        <span class="flex-shrink mx-4 text-[#AF2654]">atau</span>
                        <div class="flex-grow border-t border-[#AF2654]"></div>
                    </div>
                    <div class="py-4 block">
                        <form action="">
                            @csrf
                            <div class="grid gap-6  md:grid-cols-2">
                                <div>
                                    <label for="first_name"
                                        class="text-sm font-semibold after:content-['*'] after:ml-0.5 after:text-red-400">First
                                        Name</label>
                                    <input type="text" placeholder="First Name"
                                        class="first_name text-sm my-2 p-3 rounded-lg border w-full focus:outline-none focus:border-[#AF2654] bg-gray-50 text-gray-900"
                                        id="first_name">
                                </div>
                                <div>
                                    <label for="last_name"
                                        class="text-sm font-semibold after:content-['*'] after:ml-0.5 after:text-red-400">Last
                                        Name</label>
                                    <input type="text" placeholder="Last Name"
                                        class="last_name text-sm my-2 p-3 rounded-lg border w-full focus:outline-none focus:border-[#AF2654] bg-gray-50 text-gray-900"
                                        id="last_name">
                                </div>
                            </div>
                            <label for="email"
                                class="text-sm font-semibold after:content-['*'] after:ml-0.5 after:text-red-400">Email</label>
                            <input type="email" placeholder="username@gmail.com"
                                class="email text-sm my-2 p-3 rounded-lg border w-full focus:outline-none focus:border-[#AF2654] bg-gray-50 text-gray-900"
                                id="email">
                            <label for="password"
                                class="text-sm font-semibold after:content-['*'] after:ml-0.5 after:text-red-400">Password</label>
                            <input type="password" placeholder="********"
                                class="password text-sm my-2 p-3 rounded-lg border w-full focus:outline-none focus:border-[#AF2654] bg-gray-50 text-gray-900"
                                id="password">
                            <label for="confirm_password"
                                class="text-sm font-semibold after:content-['*'] after:ml-0.5 after:text-red-400">Confirm
                                Password</label>
                            <input type="password" placeholder="********"
                                class="confirm_password text-sm my-2 p-3 rounded-lg border w-full focus:outline-none focus:border-[#AF2654] bg-gray-50 text-gray-900"
                                id="password">
                            <div class="flex items-start mb-5">
                                <div class="flex items-center h-5">
                                    <input id="terms" type="checkbox" value=""
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 accent-[#AF2654]"
                                        required>
                                </div>
                                <label for="terms"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-500">I agree with the
                                    <a href="#" class="text-[#AF2654] hover:underline">terms and
                                        conditions</a></label>
                            </div>
                            <div class=" inline-flex w-full">
                                <button
                                    class="duration-500 inline-flex w-full justify-center text-[#AF2654] text-base py-2 px-10 rounded-lg border border-[#AF2654] hover:bg-[#AF2654] hover:cursor-pointer hover:text-white">
                                    Register
                                </button>
                            </div>
                            <div class="flex justify-center mt-3">
                                <label for="terms" class="text-sm font-medium text-gray-900 dark:text-gray-500">Have
                                    an account? <a href="{{ url('/login_user') }}"
                                        class="text-[#AF2654] hover:underline">Login</a></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

</body>

</html>

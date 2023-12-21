@csrf
<label for="email" class="text-sm font-semibold after:content-['*'] after:ml-0.5 after:text-red-400">Email</label>
<input type="text" placeholder="username@gmail.com"
    class="text-sm my-2 p-3 rounded-lg border w-full focus:outline-none focus:border-[#AF2654] bg-gray-50 text-gray-900">
<div class="flex items-center justify-between ">
    @if ($tombol == 'Login')
        <label for="password"
            class="text-sm font-semibold after:content-['*'] after:ml-0.5 after:text-red-400">Password</label>
        <a href="" class="text-sm hover:text-[#AF2654]">Lupa Password ?</a>
    @endif
</div>
<input type="password" placeholder="********"
    class="text-sm my-2 p-3 rounded-lg border w-full focus:outline-none focus:border-[#AF2654] bg-gray-50 text-gray-900">
<div class="flex items-start mb-5">
    <div class="flex items-center h-5">
        <input id="terms" type="checkbox" value=""
            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 accent-[#AF2654]"
            required>
    </div>
    <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-500">I agree with the <a
            href="#" class="text-[#AF2654] hover:underline">terms and conditions</a></label>
</div>
<div class=" inline-flex w-full">
    <button
        class="duration-500 inline-flex w-full justify-center text-[#AF2654] text-base py-2 px-10 rounded-lg border border-[#AF2654] hover:bg-[#AF2654] hover:cursor-pointer hover:text-white">
        Login
    </button>
</div>
<div class="flex justify-center mt-3">
    <label for="terms" class="text-sm font-medium text-gray-900 dark:text-gray-500">Don't have an account yet? <a
            href="{{ url('/register_user') }}" class="text-[#AF2654] hover:underline">Register</a></label>
</div>
<div class="flex justify-center mt-3">
    <label for="terms" class="text-sm font-medium text-gray-900 dark:text-gray-500">Have a wedding related business?
        <a href="{{ url('/register_vendor') }}" class="text-[#AF2654] hover:underline">Join as a vendor</a></label>
</div>

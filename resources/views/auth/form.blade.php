
@csrf
<label for="email" class="text-sm font-semibold after:content-['*'] after:ml-0.5 after:text-red-400">Email</label>
<input type="text" placeholder="username@gmail.com" class="text-sm my-2 p-3 rounded-lg border w-full focus:outline-none focus:border-[#AF2654] bg-gray-50 text-gray-900">
<label for="password" class="text-sm font-semibold after:content-['*'] after:ml-0.5 after:text-red-400">Password</label>
<input type="password" placeholder="********" class="text-sm my-2 p-3 rounded-lg border w-full focus:outline-none focus:border-[#AF2654] bg-gray-50 text-gray-900">
<div class="flex items-center justify-between mt-8">
  @if ($tombol == 'Login')
    <a href="" class="text-sm hover:font-semibold">Lupa Password ?</a>
  @endif
  <button type="submit" class="text-[#AF2654] text-base py-2 px-10 rounded-lg border border-[#AF2654] hover:bg-[#AF2654] hover:cursor-pointer hover:text-white">{{ $tombol }}</button>
</div>
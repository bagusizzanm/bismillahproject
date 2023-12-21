  <nav
      class="flex-no-wrap relative flex w-full items-center justify-between py-2 shadow-md  lg:flex-wrap lg:justify-start lg:py-4">
      <div class="flex w-full flex-wrap items-center justify-between px-3">
          <!-- Hamburger button for mobile view -->
          <button
              class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
              type="button" data-te-collapse-init data-te-target="#navbarSupportedContent1"
              aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
              <!-- Hamburger icon -->
              <span class="[&>svg]:w-7">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
                      <path fill-rule="evenodd"
                          d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                          clip-rule="evenodd" />
                  </svg>
              </span>
          </button>

          <!-- Collapsible navigation container -->
          <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
              id="navbarSupportedContent1" data-te-collapse-item>
              <!-- Logo -->
              <a class="mb-4 ml-2 mr-5 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
                  href="#">
                  Logo
              </a>
              <!-- Left navigation links -->
              <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>
                  <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                      <!-- Dashboard link -->
                      <a class="transition duration-200 hover:text-[#AF2654] lg:px-2 " href="#"
                          data-te-nav-link-ref>Home</a>

                  </li>
                  <!-- Team link -->
                  <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                      <a class="transition duration-200 hover:text-[#AF2654] lg:px-2 " href="#"
                          data-te-nav-link-ref>Vendor</a>
                  </li>
                  <!-- Projects link -->
                  <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                      <a class="transition duration-200 hover:text-[#AF2654] lg:px-2 " href="#"
                          data-te-nav-link-ref>Blog</a>
                  </li>
                  <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                      <a class="transition duration-200 hover:text-[#AF2654] lg:px-2 " href="#"
                          data-te-nav-link-ref>About Us</a>
                  </li>

              </ul>

              <div class="relative md:mr-3 md:block flex items-center gap-2">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                      <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox="0 0 24 24">
                          <g fill='none' fill-rule='evenodd'>
                              <path
                                  d='M24 0v24H0V0h24ZM12.593 23.258l-.011.002-.071.035-.02.004-.014-.004-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113-.013.002-.185.093-.01.01-.003.011.018.43.005.012.008.007.201.093c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.004-.011.017-.43-.003-.012-.01-.01-.184-.092Z' />
                              <path fill='#8D8D8D'
                                  d='M10.5 2a8.5 8.5 0 1 0 5.262 15.176l3.652 3.652a1 1 0 0 0 1.414-1.414l-3.652-3.652A8.5 8.5 0 0 0 10.5 2ZM4 10.5a6.5 6.5 0 1 1 13 0 6.5 6.5 0 0 1-13 0Z' />
                          </g>
                      </svg>
                  </div>
                  <input type="text" id="email-adress-icon"
                      class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:outline-none focus:ring-[#AF2654] focus:border-[#AF2654] block w-auto pl-10 p-2"
                      placeholder="Search...">
              </div>

          </div>

          <!-- Right elements -->
          <div class="relative flex items-center gap-4">

              <a class="text-[#AF2654] text-base py-2 px-3 rounded-lg border border-[#AF2654]
                            hover:cursor-pointer"
                  href="{{ url('/login_user') }}">Login</a>

              <a class=" text-base py-2 px-3 rounded-lg border bg-[#AF2654] hover:cursor-pointer text-white "
                  href="{{ url('/register_user') }}">Register</a>

              <a class="transition duration-200 hover:text-[#AF2654]" href="{{ url('/register_vendor') }}">Register As
                  Vendor</a>

          </div>
      </div>
  </nav>

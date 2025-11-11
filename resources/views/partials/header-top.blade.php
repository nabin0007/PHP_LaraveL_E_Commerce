
        <div class="pt-5">
            <div class="container">
                <div class="flex flex-wrap w-full items-center justify-between">
                    <div class="lg:w-1/6 md:w-1/2 w-2/5">
                        <a class="navbar-brand" href="/index.html">
                            <img src="{{ asset('assets/images/logo/freshcart-logo.svg') }}"
                                alt="TailwindCSS eCommerce HTML Template" />
                        </a>
                    </div>
                    <div class="lg:w-2/5 hidden lg:block">
                        <form action="#">
                            <div class="relative">
                                <label for="searchProducts" class="invisible hidden">Search</label>
                                <input
                                    class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                    type="search" placeholder="Search for products" id="searchProducts" />
                                <button class="absolute right-0 top-0 p-3" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                        width="16" height="16" viewbox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                        <path d="M21 21l-6 -6"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="lg:w-1/7 hidden lg:block">
                        <!-- Button trigger modal -->
                        <button type="button"
                            class="btn inline-flex items-center gap-x-2 bg-transparent text-gray-600 border-gray-300 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
                            data-bs-toggle="modal" data-bs-target="#locationModal">
                            <span class="flex items-center gap-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin"
                                        width="16" height="16" viewbox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                        <path
                                            d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                    </svg>
                                </span>
                                <span>Location</span>
                            </span>
                        </button>
                    </div>
                    <div class="lg:w-1/3 text-end md:w-1/2 w-3/5">
                        <div class="flex gap-7 items-center justify-end">


                            <div>
                              

                                @auth
                                <div class="flex items-center gap-3 text-gray-800 font-semibold">
                                    <!-- Show logged-in user name -->
                                    <span title="{{ Auth::user()->name }}"> {{ Str::limit(Auth::user()->name, 15) }}
                                    </span>

                                    <!-- Logout icon -->
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        class="text-red-600 hover:text-red-700"
                                        title="Logout">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-logout"
                                            width="22" height="22"
                                            viewbox="0 0 24 24"
                                            stroke-width="2"
                                            stroke="currentColor"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                            <path d="M9 12h12l-3 -3"></path>
                                            <path d="M18 15l3 -3"></path>
                                        </svg>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="GET" class="hidden"> @csrf
                                    </form>
                                </div>
                                @else
                                <a href="#!" class="text-gray-600" data-bs-toggle="modal" data-bs-target="#userModal" title="Login / Register">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="22" height="22" viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg>
                                </a>
                                @endauth
                            </div>


                            <div>
                                <a href="#!" class="relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart"
                                        width="24" height="24" viewbox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                                    </svg>
                                    <span
                                        class="absolute top-0 -mt-1 left-full rounded-full h-5 w-5 -ml-2 bg-green-600 text-white text-center font-semibold text-sm">
                                        5
                                        <span class="invisible">unread messages</span>
                                    </span>
                                </a>
                            </div>

                            <div>
                                <button type="button" class="text-gray-600 relative" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasRight" role="button" aria-controls="offcanvasRight">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-shopping-bag" width="24" height="24"
                                        viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z"></path>
                                        <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
                                    </svg>
                                    <span id="cartCount"
                                        class="absolute top-0 -mt-1 left-full rounded-full h-5 w-5 -ml-3 bg-green-600 text-white text-center font-semibold text-sm">
                                        0
                                        <span class="invisible">unread messages</span>
                                    </span>
                                </button>
                            </div>



                            <div class="lg:hidden leading-none">
                                <!-- Button -->
                                <button class="collapsed" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#navbar-default" aria-controls="navbar-default"
                                    aria-label="Toggle navigation">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-menu-2 text-gray-800" width="24" height="24"
                                        viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 6l16 0"></path>
                                        <path d="M4 12l16 0"></path>
                                        <path d="M4 18l16 0"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@php
    $menus = $menus ?? []; 
@endphp


   <nav class="navbar relative navbar-expand-lg lg:flex lg:flex-wrap items-center content-between text-black navbar-default"
            aria-label="Offcanvas navbar large">
            <div class="container max-w-7xl mx-auto w-full xl:px-4 lg:px-0">
                <div class="offcanvas offcanvas-left lg:visible" tabindex="-1" id="navbar-default">
                    <div class="offcanvas-header pb-1">
                        <a href="/index.html">
                            <img src="{{ asset('assets/images/logo/freshcart-logo.svg') }}"
                                alt="TailwindCSS eCommerce HTML Template" />
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x text-gray-700"
                                width="24" height="24" viewbox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M18 6l-12 12"></path>
                                <path d="M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="offcanvas-body lg:flex lg:items-center">
                        <div class="block lg:hidden mb-4">
                            <form action="#">
                                <div class="relative">
                                    <label for="searhNavbar" class="invisible hidden">Search</label>
                                    <input
                                        class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                        type="search" placeholder="Search for products" id="searhNavbar" />
                                    <button class="absolute right-0 top-0 p-3" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-search" width="16" height="16"
                                            viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                            <path d="M21 21l-6 -6"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="block lg:hidden mb-4">
                            <a class="btn inline-flex items-center gap-x-2 bg-green-600 text-white border-green-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 justify-center"
                                data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                aria-controls="collapseExample">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-layout-grid" width="16" height="16"
                                        viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                        <path
                                            d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                        <path
                                            d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                        <path
                                            d="M14 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                    </svg>
                                </span>
                                All Departments
                            </a>
                            <div class="collapse mt-2" id="collapseExample">
                                <div class="card card-body">
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="#!">Dairy, Bread & Eggs</a></li>
                                        <li><a class="dropdown-item" href="#!">Snacks & Munchies</a></li>
                                        <li><a class="dropdown-item" href="#!">Fruits & Vegetables</a></li>
                                        <li><a class="dropdown-item" href="#!">Cold Drinks & Juices</a></li>
                                        <li><a class="dropdown-item" href="#!">Breakfast & Instant Food</a></li>
                                        <li><a class="dropdown-item" href="#!">Bakery & Biscuits</a></li>
                                        <li><a class="dropdown-item" href="#!">Chicken, Meat & Fish</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown hidden lg:block">
                            <button
                                class="mr-4 btn inline-flex items-center gap-x-2 bg-green-600 text-white border-green-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300"
                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-layout-grid" width="16" height="16"
                                        viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                        <path
                                            d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                        <path
                                            d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                        <path
                                            d="M14 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                    </svg>
                                </span>
                                All Departments
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#!">Dairy, Bread & Eggs</a></li>
                                <li><a class="dropdown-item" href="#!">Snacks & Munchies</a></li>
                                <li><a class="dropdown-item" href="#!">Fruits & Vegetables</a></li>
                                <li><a class="dropdown-item" href="#!">Cold Drinks & Juices</a></li>
                                <li><a class="dropdown-item" href="#!">Breakfast & Instant Food</a></li>
                                <li><a class="dropdown-item" href="#!">Bakery & Biscuits</a></li>
                                <li><a class="dropdown-item" href="#!">Chicken, Meat & Fish</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="navbar-nav lg:flex gap-3 lg:items-center">
                                <li class="nav-item dropdown w-full lg:w-auto">
                                    <a class="nav-link " href="/index.html" role="button">Home</a>

                                </li>
                                <li class="nav-item dropdown w-full lg:w-auto">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">Dropdown Menu</a>
                                    <ul class="dropdown-menu">

                                        <li>
                                            <a class="dropdown-item" href="#!"> Dropdown Link
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#!"> Dropdown Link
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#!"> Dropdown Link
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#!"> Dropdown Link
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown w-full lg:w-auto dropdown-fullwidth">
                                    <a class="nav-link " href="#!">Mega
                                        menu
                                    </a>

                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="#!">Dashboard</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>






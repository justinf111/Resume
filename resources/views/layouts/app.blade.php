<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="{{url('/css/app.css')}}">
    </head>
    <body>
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-screen-xl mx-auto ">
            <div class="relative z-10 pb-4 bg-white sm:pb-6 md:pb-10 lg:max-w-2xl lg:w-full lg:pb-12 xl:pb-16">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                    <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
                        <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                            <div class="flex items-center justify-between w-full md:w-auto">
                                <div class="-mr-2 flex items-center md:hidden">
                                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" id="main-menu" aria-label="Main menu" aria-haspopup="true">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block md:ml-10 md:pr-4">
                            <a href="#" class="font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Product</a>
                            <a href="#" class="ml-8 font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Features</a>
                            <a href="#" class="ml-8 font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Marketplace</a>
                            <a href="#" class="ml-8 font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Company</a>
                            <a href="#" class="ml-8 font-medium text-blue-600 hover:text-blue-900 transition duration-150 ease-in-out">Log in</a>
                        </div>
                    </nav>
                </div>

                <!--
                  Mobile menu, show/hide based on menu open state.

                  Entering: "duration-150 ease-out"
                    From: "opacity-0 scale-95"
                    To: "opacity-100 scale-100"
                  Leaving: "duration-100 ease-in"
                    From: "opacity-100 scale-100"
                    To: "opacity-0 scale-95"
                -->
                <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                    <div class="rounded-lg shadow-md">
                        <div class="rounded-lg bg-white shadow-xs overflow-hidden" role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
                            <div class="px-5 pt-4 flex items-center justify-between">
                                <div class="-mr-2">
                                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" aria-label="Close menu">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="px-2 pt-2 pb-3">
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">Product</a>
                                <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">Features</a>
                                <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">Marketplace</a>
                                <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out" role="menuitem">Company</a>
                            </div>
                            <div>
                                <a href="#" class="block w-full px-5 py-3 text-center font-medium text-blue-600 bg-gray-50 hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:bg-gray-100 focus:text-blue-700 transition duration-150 ease-in-out" role="menuitem">
                                    Log in
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <main class="mt-4 mx-auto max-w-screen-xl px-4 sm:mt-6 sm:px-6 md:mt-10 lg:mt-12 lg:px-8 xl:mt-16">
                    <div class="sm:text-center lg:text-left">
                        <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                            Justin Favaloro
                            <br/>
                            <span class="text-blue-600 text-2xl sm:text-3xl">Full Stack Web Developer</span>
                        </h2>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                    Contact
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-blue-700 bg-blue-100 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                    Download Resume
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="/img/justin.jpg" alt="justin"/>
        </div>
    </div>
        <div class="bg-blue-400 py-10">
            <div class="container mx-auto">
                <!-- ... -->
                <div class="md:flex">
                    <div class="bg-white rounded-md shadow-lg ml-5 mr-4 mb-4 md:w-1/3">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xs uppercase text-gray-700">Senior Web Developer</div>
                            <div class="font-bold text-gray-900 text-xl tracking-wide">Magicdust</div>
                            <div class="text-gray-700 text-base mt-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies leo vel erat auctor vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris posuere egestas dolor ac facilisis.
                            </div>
                            <div class="text-blue-700 mt-3 text-sm font-semibold">Mar 2018 - Dec 2018</div>

                        </div>
                    </div>
                    <div class="bg-white rounded-md shadow-lg ml-5 mr-4 mb-4 md:w-1/3">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xs uppercase text-gray-700">Full Stack Web Developer</div>
                            <div class="font-bold text-gray-900 text-xl tracking-wide">Chocolate Coded</div>
                            <div class="text-gray-700 text-base mt-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies leo vel erat auctor vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris posuere egestas dolor ac facilisis.
                            </div>
                            <div class="text-blue-700 mt-3 text-sm font-semibold">Jun 2015 - Dec 2016</div>
                        </div>
                    </div>
                    <div class="bg-white rounded-md shadow-lg ml-5 mr-4 mb-4 md:w-1/3">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xs uppercase text-gray-700">Wordpress/PHP Developer</div>
                            <div class="font-bold text-gray-900 text-xl tracking-wide">The Intermedia Group</div>
                            <div class="text-gray-700 text-base mt-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies leo vel erat auctor vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris posuere egestas dolor ac facilisis.
                            </div>
                            <div class="text-blue-700 mt-3 text-sm font-semibold">Sep 2013 - Mar 2015</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-100 py-10">
            <div class="container mx-auto">
                <div class="md:flex">
                        <div class="bg-white rounded-md shadow-lg ml-5 mr-4 mb-4 md:w-1/3">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xs uppercase text-gray-700">Certificate 3 & 4 in Fitness</div>
                                <div class="font-bold text-gray-900 text-xl tracking-wide">Australian Institute of Fitness</div>
                                <div class="text-blue-700 mt-3 text-sm font-semibold">Nov 2016 - Feb 2017</div>
                            </div>
                        </div>
                        <div class="bg-white rounded-md shadow-lg ml-5 mr-4 mb-4 md:w-1/3">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xs uppercase text-gray-700"> Bachelor of Science in Information Technology</div>
                                <div class="font-bold text-gray-900 text-xl tracking-wide">University of Technology Sydney</div>
                                <div class="text-blue-700 mt-3 text-sm font-semibold">2011 - 2013</div>
                            </div>
                        </div>
                        <div class="bg-white rounded-md shadow-lg ml-5 mr-4 mb-4 md:w-1/3">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xs uppercase text-gray-700">Diploma of Information Technology</div>
                                <div class="font-bold text-gray-900 text-xl tracking-wide">UTS:Insearch</div>
                                <div class="text-blue-700 mt-3 text-sm font-semibold">2010 - 2011</div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-gray-100 py-10">
            <div class="container mx-auto">
                <div class="flex-wrap flex">
                    <div class="w-1/2 mb-4 p-2">
                        <div class="font-bold text-l">PHP</div>
                        <div class="shadow w-full bg-gray-200">
                            <div class="bg-blue-600 text-xs leading-none py-1 text-center text-white" style="width: 45%">45%</div>
                        </div>
                    </div>
                    <div class="w-1/2 mb-4 p-2">
                        <div class="font-bold text-l">Laravel</div>
                        <div class="shadow w-full bg-gray-200">
                            <div class="bg-blue-600 text-xs leading-none py-1 text-center text-white" style="width: 45%">45%</div>
                        </div>
                    </div>
                    <div class="w-1/2 mb-4 p-2">
                        <div class="font-bold text-l">VueJs</div>
                        <div class="shadow w-full bg-gray-200">
                            <div class="bg-blue-600 text-xs leading-none py-1 text-center text-white" style="width: 45%">45%</div>
                        </div>
                    </div>
                    <div class="w-1/2 mb-4 p-2">
                        <div class="font-bold text-l">Tailwind</div>
                        <div class="shadow w-full bg-gray-200">
                            <div class="bg-blue-600 text-xs leading-none py-1 text-center text-white" style="width: 45%">45%</div>
                        </div>
                    </div>
                    <div class="w-1/2 mb-4 p-2">
                        <div class="font-bold text-l">SASS</div>
                        <div class="shadow w-full bg-gray-200">
                            <div class="bg-blue-600 text-xs leading-none py-1 text-center text-white" style="width: 45%">45%</div>
                        </div>
                    </div>
                    <div class="w-1/2 mb-4 p-2">
                        <div class="font-bold text-l">HTML/CSS</div>
                        <div class="shadow w-full bg-gray-200">
                            <div class="bg-blue-600 text-xs leading-none py-1 text-center text-white w-2/3">45%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="bg-gray-100 py-10">
        <div class="container mx-auto">
        </div>
    </div>
    </body>
    <script src="{{ url('/js/app.js') }}"></script>
</html>


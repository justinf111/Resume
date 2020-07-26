<html>
    <head>
        <title>Justin Favaloro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('/css/app.css')}}">
    </head>
    <body>
    <div id="app">
        <navbar></navbar>
        <div class="relative overflow-hidden">
            <div class="max-w-screen-xl mx-auto ">
                <div class="relative z-10 p-16">
                    <div class="text-center">
                        <span class="text-blue-700 text-2xl sm:text-3xl font-semibold">Hello, my name is</span>
                        <h2 class="tracking-tight leading-10 font-extrabold text-gray-900 text-5xl sm:text-6xl">Justin Favaloro</h2>
                        <span class="text-blue-700 text-2xl sm:text-3xl font-semibold">I'm a Full Stack Web Developer</span>

                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">

                        </p>
                        <div class="mt-5 sm:mt-8 flex justify-center">
                            <div class="rounded-md shadow">
                                <a href="#contact" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500  transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                    <svg class="mr-2 w-4 h-4 flex-shrink-0 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 18.35V19a1 1 0 0 1-1 1h-2A17 17 0 0 1 0 3V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4c0 .56-.31 1.31-.7 1.7L3.16 8.84c1.52 3.6 4.4 6.48 8 8l2.12-2.12c.4-.4 1.15-.71 1.7-.71H19a1 1 0 0 1 .99 1v3.35z"/>
                                    </svg>
                                    Contact
                                </a>
                            </div>
                            <div class="mt-0 ml-3">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-blue-700 bg-gray-100 hover:text-blue-600 hover:bg-blue-100 focus:outline-none transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                    <svg class="mr-2 w-5 h-5 flex-shrink-0 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/>
                                    </svg>
                                    Resume
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="/img/banner.jpg" class="w-full h-full inset-0 object-bottom object-cover opacity-50 absolute"  alt="">
            <div class="inset-0 absolute bg-blue-900 opacity-50"></div>
        </div>
        <div class="bg-gray-200 py-10" id="experience">
            <div class="container mx-auto px-4">
                <div class="text-2xl text-blue-600 font-bold mb-3 tracking-wide justify-center items-center flex">
                    <svg class="w-8 h-8 flex-shrink-0 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M14 5h2v14H4V5h2V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1zm3 0h1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1V5zM3 5v14H2a2 2 0 0 1-2-2V7c0-1.1.9-2 2-2h1zm5-1v1h4V4H8z"/>
                    </svg>
                    Experience
                </div>
                <div class="md:flex md:flex-wrap -mx-2">
                    @foreach($experiences as $experience)
                        <div class="md:w-1/2 p-2 md:flex">
                            <div class="px-6 py-4 p-2 bg-white rounded-md shadow-lg md:flex-1">
                                <div class="font-bold text-xs uppercase text-gray-700">{{$experience['title']}}</div>
                                <div class="font-bold text-gray-900 text-xl tracking-wide">{{$experience['company']}}</div>
                                <div class="text-gray-700 text-base mt-2">
                                    <ul>
                                        @foreach($experience['description'] as $item)
                                        <li class="flex">
                                            <svg class="w-6 h-6 flex-shrink-0 text-blue-900 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/>
                                            </svg>
                                            {{ $item }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="text-blue-700 mt-3 text-sm font-semibold uppercase">{{$experience['time_period']}}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="bg-gray-100 py-10" id="skills">
            <div class="container mx-auto px-4">
                <div class="text-2xl text-blue-600 font-bold mb-3 tracking-wide justify-center items-center flex">
                    <svg class="w-6 h-6 flex-shrink-0 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M6.47 9.8A5 5 0 0 1 .2 3.22l3.95 3.95 2.82-2.83L3.03.41a5 5 0 0 1 6.4 6.68l10 10-2.83 2.83L6.47 9.8z"/>
                    </svg>
                    Skills
                </div>
                <div class="sm:flex sm:flex-wrap -mx-4">
                    @foreach($skills as $skill => $percent)
                        <div class="w-full md:w-1/2">
                            <div class="py-2 px-4">
                                <div class="text-sm uppercase text-gray-900 font-semibold">{{$skill}}</div>
                                <div class="flex items-center">
                                    <div class="shadow w-full h-2 bg-gray-200 mr-3 rounded-r">
                                        <div class="bg-blue-700 text-xs leading-none py-1 text-center rounded-l text-white h-1" style="width: {{$percent}}%"></div>
                                    </div>
                                    <div class="text-blue-700 text-sm font-bold">
                                        {{$percent}}%
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="bg-gray-200 py-10" id="education">
            <div class="container mx-auto px-4">
                <div class="text-2xl text-blue-600 font-bold mb-3 tracking-wide justify-center items-center flex">
                    <svg class="w-8 h-8 flex-shrink-0 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M3.33 8L10 12l10-6-10-6L0 6h10v2H3.33zM0 8v8l2-2.22V9.2L0 8zm10 12l-5-3-2-1.2v-6l7 4.2 7-4.2v6L10 20z"/>
                    </svg>
                    Eduction
                </div>
                <div class="sm:flex sm:flex-wrap -mx-2">
                    @foreach($educations as $education)
                        <div class="sm:w-1/2  sm:flex lg:w-1/3 p-2">
                            <div class="bg-white rounded-md shadow-lg px-6 py-4 sm:flex-1">
                                <div class="font-bold text-xs uppercase text-gray-700">{{$education['course_name']}}</div>
                                <div class="font-bold text-gray-900 text-xl tracking-wide">{{$education['company']}}</div>
                                <div class="text-blue-700 mt-3 text-sm font-semibold uppercase">{{$education['time_period']}}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="bg-gray-900 py-10" id="contact">
            <div class="container mx-auto">
                <div class="md:w-11/12 mx-auto">
                    <div class="text-2xl text-blue-300 font-bold mb-3 tracking-wide justify-center items-center flex">
                        <svg class="w-8 h-8 flex-shrink-0 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M20 18.35V19a1 1 0 0 1-1 1h-2A17 17 0 0 1 0 3V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4c0 .56-.31 1.31-.7 1.7L3.16 8.84c1.52 3.6 4.4 6.48 8 8l2.12-2.12c.4-.4 1.15-.71 1.7-.71H19a1 1 0 0 1 .99 1v3.35z"/>
                        </svg>
                        Contact
                    </div>
                    <div class="md:flex md:flex-row-reverse">
                        <div class="md:w-1/2 py-2 px-4">
                            <div class="text-gray-100 mb-4">
                                If you'd like to hire me or want to hear more about my experience and knowledge you can contact me via email or phone.
                            </div>
                            <div class="text-gray-100 flex items-center text-md mb-4">
                                <svg class="w-5 h-5 flex-shrink-0 text-blue-300 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M20 18.35V19a1 1 0 0 1-1 1h-2A17 17 0 0 1 0 3V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4c0 .56-.31 1.31-.7 1.7L3.16 8.84c1.52 3.6 4.4 6.48 8 8l2.12-2.12c.4-.4 1.15-.71 1.7-.71H19a1 1 0 0 1 .99 1v3.35z"/>
                                </svg>
                                0425455602
                            </div>
                            <div class="text-gray-100 flex items-center text-md mb-4">
                                <svg class="w-5 h-5 flex-shrink-0 text-blue-300 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/>
                                </svg>
                                justin_f_111@hotmail.com
                            </div>
                            <div class="text-gray-100 flex items-center text-md">
                                <svg class="w-5 h-5 flex-shrink-0 text-blue-300 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M0 0l6 4 8-4 6 4v16l-6-4-8 4-6-4V0zm7 6v11l6-3V3L7 6z"/>
                                </svg>
                                Cherrybrook, NSW, Australia
                            </div>
                        </div>
                        <div class="md:w-1/2 px-4 py-2">
                            <form action="/contact" method="post">
                                @csrf
                                <div class="mb-2">
                                    <input type="text" placeholder="Name" name="name" class="rounded-md {{$errors->has('name') ? 'border-red-600' : 'border-gray-100'}} border shadow-sm w-full py-3 px-4 focus:outline-none ">
                                    <div class="text-red-600">{{ $errors->first('name') }}</div>
                                </div>
                                <div class="sm:flex">
                                    <div class="mb-2 sm:mr-3 sm:w-1/2">
                                        <input type="email" placeholder="Email" name="email" class="rounded-md {{$errors->has('email') ? 'border-red-600' : 'border-gray-100'}} border shadow-sm w-full py-3 px-4 focus:outline-none">
                                        <div class="text-red-600">{{ $errors->first('email') }}</div>
                                    </div>
                                    <div class="mb-2 sm:w-1/2">
                                        <input type="text" placeholder="Phone" name="phone" class="rounded-md {{$errors->has('phone') ? 'border-red-600' : 'border-gray-100'}} border shadow-sm w-full py-3 px-4 focus:outline-none">
                                        <div class="text-red-600">{{ $errors->first('phone') }}</div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <textarea name="message" placeholder="Message" rows="5" class="rounded-md {{$errors->has('message') ? 'border-red-600' : 'border-gray-100'}} border shadow-sm w-full py-3 px-4 focus:outline-none"></textarea>
                                    <div class="text-red-600">{{ $errors->first('message') }}</div>
                                </div>
                                <div class="mb-2">
                                    <input type="submit" class="px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500  transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10 focus:outline-none">
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    </body>
    <script src="{{ url('/js/app.js') }}"></script>
</html>


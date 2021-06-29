<!DOCTYPE HTML>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body>
    <section class="bg-purple" id="hero">
        <div class="relative w-full h-full pb-10 top-100">
            <div class="md:block">
                <img class="absolute bg-cover bg-center w-full h-full inset-0" src="{{ asset('img/background.png') }}"
                    alt="" />
            </div>
            <nav class="lg:hidden relative z-50">
                <div class="flex py-2 justify-between items-center px-4">
                    <div>
                        <svg role="img" aria-label="Prodify. Logo" xmlns="http://www.w3.org/2000/svg" width="79"
                            height="92" viewBox="0 0 79 92" fill="none">
                            <rect width="79" height="92" fill="#1A202C"></rect>
                            <path
                                d="M18.284 34.952L15.584 34.484V32.252H21.02C21.524 32.252 22.304 32.228 23.36 32.18C24.752 32.084 26.012 32.036 27.14 32.036C29.636 32.036 31.604 32.348 33.044 32.972C34.508 33.572 35.54 34.448 36.14 35.6C36.764 36.728 37.076 38.168 37.076 39.92C37.076 42.944 36.128 45.296 34.232 46.976C32.36 48.656 29.756 49.496 26.42 49.496C25.1 49.496 24.152 49.46 23.576 49.388V56.48L28.4 56.84V59H15.44V56.84L18.284 56.48V34.952ZM23.54 47.084C24.092 47.204 25.028 47.264 26.348 47.264C27.956 47.264 29.24 46.712 30.2 45.608C31.184 44.48 31.676 42.62 31.676 40.028C31.676 38.012 31.232 36.548 30.344 35.636C29.48 34.7 28.148 34.232 26.348 34.232C25.676 34.232 24.98 34.28 24.26 34.376C23.924 34.424 23.684 34.448 23.54 34.448V47.084ZM39.5648 56.84L42.4088 56.48V34.952L39.7088 34.448V32.252H44.9288C45.3848 32.252 45.8888 32.24 46.4408 32.216C46.9928 32.192 47.4128 32.168 47.7008 32.144C48.9488 32.048 49.9808 32 50.7968 32C53.2688 32 55.2488 32.252 56.7368 32.756C58.2248 33.26 59.3048 34.028 59.9768 35.06C60.6488 36.092 60.9848 37.448 60.9848 39.128C60.9848 40.784 60.5408 42.32 59.6528 43.736C58.7648 45.152 57.4808 46.124 55.8008 46.652C56.7608 47.06 57.6128 47.804 58.3568 48.884C59.1008 49.964 59.8928 51.368 60.7328 53.096C61.3328 54.272 61.7888 55.124 62.1008 55.652C62.4368 56.156 62.7608 56.444 63.0728 56.516L64.2608 56.876V59H58.1408C57.7568 59 57.3488 58.616 56.9168 57.848C56.5088 57.056 55.9688 55.82 55.2968 54.14C54.5048 52.172 53.8208 50.636 53.2448 49.532C52.6688 48.428 52.0568 47.744 51.4088 47.48H47.7008V56.48L51.0128 56.84V59H39.5648V56.84ZM51.0128 45.284C52.3808 45.284 53.4488 44.792 54.2168 43.808C54.9848 42.824 55.3688 41.348 55.3688 39.38C55.3688 37.628 54.9848 36.332 54.2168 35.492C53.4728 34.652 52.1768 34.232 50.3288 34.232C49.6568 34.232 49.0808 34.268 48.6008 34.34C48.1448 34.388 47.8448 34.412 47.7008 34.412V45.212C47.9888 45.26 48.6848 45.284 49.7888 45.284H51.0128Z"
                                fill="white"></path>
                        </svg>
                    </div>
                    <div class="visible flex items-center">
                        <button id="open" onclick="MenuHandler(true)"
                            class="focus:outline-none focus:ring-2 focus:ring-black">
                            <svg aria-haspopup="true" aria-label="open Main Menu" xmlns="http://www.w3.org/2000/svg"
                                class="show-m-menu icon icon-tabler icon-tabler-menu" width="28" height="28"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <line x1="4" y1="8" x2="20" y2="8"></line>
                                <line x1="4" y1="16" x2="20" y2="16"></line>
                            </svg>
                        </button>
                        <ul id="list"
                            class="hidden p-2 border-r bg-white absolute rounded top-0 left-0 right-0 shadow mt-24">
                            <li
                                class="flex cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                <a href="javascript: void(0)"
                                    class="ml-2 focus:outline-none focus:ring-2 focus:ring-black">
                                    <span class="font-bold">Início</span>
                                </a>
                            </li>
                            <li class="flex cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none"
                                onclick="dropdownHandler(this)">
                                <a href="javascript: void(0)"
                                    class="ml-2 focus:outline-none focus:ring-2 focus:ring-black">
                                    <span class="font-bold">Portfólio</span>
                                </a>
                            </li>
                            <li
                                class="flex cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                <a href="javascript: void(0)"
                                    class="ml-2 focus:outline-none focus:ring-2 focus:ring-black">
                                    <span class="font-bold">Clientes</span>
                                </a>
                            </li>
                            <li class="flex cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none"
                                onclick="dropdownHandler(this)">
                                <a href="javascript: void(0)"
                                    class="ml-2 focus:outline-none focus:ring-2 focus:ring-black">
                                    <span class="font-bold">Resources</span>
                                </a>
                            </li>
                            <li class="flex cursor-pointer text-gray-600 text-sm leading-3 tracking-normal pt-2 pb-4 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none"
                                onclick="dropdownHandler(this)">
                                <a href="javascript: void(0)"
                                    class="ml-2 focus:outline-none focus:ring-2 focus:ring-black">
                                    <span class="font-bold">Baixar CV</span>
                                </a>
                            </li>
                        </ul>
                        <div class="xl:hidden">
                            <button id="close"
                                class="hidden close-m-menu focus:ring-2 focus:ring-black focus:outline-none"
                                onclick="MenuHandler(false)">
                                <svg aria-label="Close menu" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
            <nav class="f-f-l relative z-10">
                <div
                    class="relative z-10 mx-auto container hidden w-full px-4 xl:px-0 lg:flex justify-between items-center py-11">
                    <div>
                        <svg role="img" aria-label="prodify. logo" xmlns="http://www.w3.org/2000/svg" width="79"
                            height="92" viewBox="0 0 79 92" fill="none">
                            <rect width="79" height="92" fill="#1A202C"></rect>
                            <path
                                d="M18.284 34.952L15.584 34.484V32.252H21.02C21.524 32.252 22.304 32.228 23.36 32.18C24.752 32.084 26.012 32.036 27.14 32.036C29.636 32.036 31.604 32.348 33.044 32.972C34.508 33.572 35.54 34.448 36.14 35.6C36.764 36.728 37.076 38.168 37.076 39.92C37.076 42.944 36.128 45.296 34.232 46.976C32.36 48.656 29.756 49.496 26.42 49.496C25.1 49.496 24.152 49.46 23.576 49.388V56.48L28.4 56.84V59H15.44V56.84L18.284 56.48V34.952ZM23.54 47.084C24.092 47.204 25.028 47.264 26.348 47.264C27.956 47.264 29.24 46.712 30.2 45.608C31.184 44.48 31.676 42.62 31.676 40.028C31.676 38.012 31.232 36.548 30.344 35.636C29.48 34.7 28.148 34.232 26.348 34.232C25.676 34.232 24.98 34.28 24.26 34.376C23.924 34.424 23.684 34.448 23.54 34.448V47.084ZM39.5648 56.84L42.4088 56.48V34.952L39.7088 34.448V32.252H44.9288C45.3848 32.252 45.8888 32.24 46.4408 32.216C46.9928 32.192 47.4128 32.168 47.7008 32.144C48.9488 32.048 49.9808 32 50.7968 32C53.2688 32 55.2488 32.252 56.7368 32.756C58.2248 33.26 59.3048 34.028 59.9768 35.06C60.6488 36.092 60.9848 37.448 60.9848 39.128C60.9848 40.784 60.5408 42.32 59.6528 43.736C58.7648 45.152 57.4808 46.124 55.8008 46.652C56.7608 47.06 57.6128 47.804 58.3568 48.884C59.1008 49.964 59.8928 51.368 60.7328 53.096C61.3328 54.272 61.7888 55.124 62.1008 55.652C62.4368 56.156 62.7608 56.444 63.0728 56.516L64.2608 56.876V59H58.1408C57.7568 59 57.3488 58.616 56.9168 57.848C56.5088 57.056 55.9688 55.82 55.2968 54.14C54.5048 52.172 53.8208 50.636 53.2448 49.532C52.6688 48.428 52.0568 47.744 51.4088 47.48H47.7008V56.48L51.0128 56.84V59H39.5648V56.84ZM51.0128 45.284C52.3808 45.284 53.4488 44.792 54.2168 43.808C54.9848 42.824 55.3688 41.348 55.3688 39.38C55.3688 37.628 54.9848 36.332 54.2168 35.492C53.4728 34.652 52.1768 34.232 50.3288 34.232C49.6568 34.232 49.0808 34.268 48.6008 34.34C48.1448 34.388 47.8448 34.412 47.7008 34.412V45.212C47.9888 45.26 48.6848 45.284 49.7888 45.284H51.0128Z"
                                fill="white"></path>
                        </svg>
                    </div>
                    <div class="flex items-center text-white text-lg font-bold">
                        <ul class="flex items-center pr-3 xl:pr-12">
                            <li class="cursor-pointer hover:text-gray-300 ease-in">
                                <a href="javascript:void(0)"
                                    class="focus:outline-none focus:ring-2 focus:ring-white">Início</a>
                            </li>
                            <li class="pl-3 lg:pl-5 xl:pl-8 cursor-pointer hover:text-gray-300 ease-in">
                                <a href="javascript:void(0)"
                                    class="focus:outline-none focus:ring-2 focus:ring-white">Portfólio</a>
                            </li>
                            <li class="pl-3 lg:pl-5 xl:pl-8 cursor-pointer hover:text-gray-300 ease-in">
                                <a href="javascript:void(0)"
                                    class="focus:outline-none focus:ring-2 focus:ring-white">Clientes</a>
                            </li>
                            <li class="pl-3 lg:pl-5 xl:pl-8 cursor-pointer hover:text-gray-300 ease-in">
                                <a href="javascript:void(0)"
                                    class="focus:outline-none focus:ring-2 focus:ring-white">Resources</a>
                            </li>
                        </ul>
                        <button
                            class="px-6 py-3 bg-white bg-indigo-700 text-white text-lg font-bold flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700">
                            Baixar CV
                        </button>
                    </div>
                </div>
            </nav>
            <div class="relative mx-auto md:flex items-center gap-8">
                <div class="text-color w-full md:w-2/3 mx-12 -mt-40">
                    <h1 class="text-7xl w-1/2 xl:w-full xl:text-8xl gradient-text font-black f-f-l"
                        style="line-height: 1.15">Planejar. Desenvolver. Entregar.</h1>
                    <div class="f-f-r text-xl lg:text-3xl pb-20 sm:pb-0 pt-10 xl:pt-20 text-white">
                        <h2>As três palavras-chave para excelência em Software.</h2>
                    </div>
                    <button
                        class="hover:opacity-90 text-xl w-full xl:text-3xl xl:w-11/12 mt-4 xl:mt-11 f-f-r py-6 bg-indigo-700 text-white font-bold focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700">Vamos
                        lá!</button>
                </div>
                <div class="w-5/6 overflow-hidden">
                    <img class="invisible md:visible absolute w-32 right-80 mix-blend-screen" id="pink-triangle"
                        src="{{ asset('img/triangle.png')}}" />
                    <img class="w-full md:mt-0 object-cover object-right ml-20 hero-img-2 mb-3"
                        src="{{ asset('img/hero-art-alt-5.png') }}" id="main-image" alt="sample page" role="img" />
                    <img class="invisible md:visible absolute w-48 right-1/3 bottom-1/3 mix-blend-screen"
                        id="bigger-pink-triangle" src="{{ asset('img/triangle.png')}}" />
                    <img class="invisible md:visible absolute w-28 right-96 bottom-1/4 mix-blend-screen"
                        id="yellow-triangle" src="{{ asset('img/yellow-triangle.png')}}" />
                    <img class="invisible md:visible absolute w-28 right-10 bottom-64 mix-blend-screen"
                        id="blue-triangle" src="{{ asset('img/blue-triangle.png')}}" />
                </div>
            </div>
        </div>
    </section>
    <section class="text-white body-font bg-purple" id="portfolio">
        <div class="container py-12 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h2 class="text-xl w-full xl:w-full smaller-gradient-text font-black f-f-l mb-3">Conheça meu trabalho
                </h2>
                <h1 class="text-5xl font-medium title-font mb-12 text-white poppin-font font-medium">Portfólio</h1>
                <p class="lg:w-1/3 mx-auto leading-relaxed text-base poppin-font font-normal">Conheça alguns dos
                    trabalhos que orgulhosamente desenvolvi durante minha carreira.</p>
            </div>
            <div class="flex flex-wrap">
                <div class="xl:w-1/4 lg:w-1/2 w-full py-6">
                    <a href="/app/1">
                        <div class="card-zoom" style="height: 31rem;">
                            <div class="card-zoom-image"
                                style="background-image: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.5)), url('img/sisos.jpg');">
                                <div class="card-zoom-parent">
                                    <div class="card-zoom-flex">
                                        <div class="card-zoom-container">
                                            <div class="w-full">
                                                <p
                                                    class="align-bottom mx-auto leading-relaxed text-base poppin-font font-normal">
                                                    Prefeitura de Sorocaba</p>
                                                <h1
                                                    class="align-bottom text-3xl font-medium title-font mb-6 text-white poppin-font font-medium">
                                                    SISOS</h1>
                                                <p class="card-zoom-resume">
                                                    Sistema desenvolvido para a prefeitura municipal de sorocaba para obtenção de até três linhas de descrição nesse texto</p>
                                                {{-- <div
                                        class="duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                        Dwayne</div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="xl:w-1/4 lg:w-1/2 w-full py-6">
                    <a href="#">
                        <div class="card-zoom" style="height: 31rem;">
                            <div class="card-zoom-image "
                                style="background-image: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.5)), url('img/alimenta.jpg');">
                                <div class="card-zoom-parent">
                                    <div class="card-zoom-flex">
                                        <div class="card-zoom-container">
                                            <div class="w-full">
                                                <p
                                                    class="align-bottom mx-auto leading-relaxed text-base poppin-font font-normal">
                                                    Prefeitura de Sorocaba</p>
                                                <h1
                                                    class="align-bottom text-3xl font-medium title-font mb-6 text-white poppin-font font-medium">
                                                    Alimenta Sorocaba</h1>
                                                <p class="card-zoom-resume">
                                                    Sistema desenvolvido para a prefeitura municipal de sorocaba para obtenção de até três linhas de descrição nesse texto</p>
                                                {{-- <div
                                        class="duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                        Dwayne</div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="xl:w-1/4 lg:w-1/2 w-full py-6">
                    <a href="#">
                        <div class="card-zoom" style="height: 31rem;">
                            <div class="card-zoom-image "
                                style="background-image: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.2)), url('img/apl.jpg');">
                                <div class="card-zoom-parent">
                                    <div class="card-zoom-flex">
                                        <div class="card-zoom-container">
                                            <div class="w-full">
                                                <p
                                                    class="align-bottom mx-auto leading-relaxed text-base poppin-font font-normal">
                                                    APL Metalmecânico</p>
                                                <h1
                                                    class="align-bottom text-3xl font-medium title-font mb-6 text-white poppin-font font-medium">
                                                    Plataforma APL</h1>
                                                <p class="card-zoom-resume">
                                                    Sistema desenvolvido para a prefeitura municipal de sorocaba para obtenção de até três linhas de descrição nesse texto</p>
                                                {{-- <div
                                        class="duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                        Dwayne</div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="xl:w-1/4 lg:w-1/2 w-full py-6">
                    <a href="#">
                        <div class="card-zoom" style="height: 31rem;">
                            <div class="card-zoom-image "
                                style="background-image: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.5)), url('img/rh.jpg');">
                                <div class="card-zoom-parent">
                                    <div class="card-zoom-flex">
                                        <div class="card-zoom-container">
                                            <div class="w-full">
                                                <p
                                                    class="align-bottom mx-auto leading-relaxed text-base poppin-font font-normal">
                                                    Prefeitura de Sorocaba</p>
                                                <h1
                                                    class="align-bottom text-3xl font-medium title-font mb-6 text-white poppin-font font-medium">
                                                    Aplicativo do Servidor</h1>
                                                <p class="card-zoom-resume">
                                                    Sistema desenvolvido para a prefeitura municipal de sorocaba para obtenção de até três linhas de descrição nesse texto</p>
                                                {{-- <div
                                        class="duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                        Dwayne</div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="xl:w-1/4 lg:w-1/2 w-full py-6">
                    <a href="#">
                        <div class="card-zoom" style="height: 31rem;">
                            <div class="card-zoom-image "
                                style="background-image: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.2)), url('img/carretel.jpg');">
                                <div class="card-zoom-parent">
                                    <div class="card-zoom-flex">
                                        <div class="card-zoom-container">
                                            <div class="w-full">
                                                <p
                                                    class="align-bottom mx-auto leading-relaxed text-base poppin-font font-normal">
                                                    Projeto de Estudo</p>
                                                <h1
                                                    class="align-bottom text-3xl font-medium title-font mb-6 text-white poppin-font font-medium">
                                                    Carretel</h1>
                                                <p class="card-zoom-resume">
                                                    Sistema desenvolvido para a prefeitura municipal de sorocaba para obtenção de até três linhas de descrição nesse texto</p>
                                                {{-- <div
                                        class="duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                        Dwayne</div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="xl:w-1/4 lg:w-1/2 w-full py-6">
                    <a href="#">
                        <div class="card-zoom" style="height: 31rem;">
                            <div class="card-zoom-image "
                                style="background-image: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.5)), url('img/mapa.jpg');">
                                <div class="card-zoom-parent">
                                    <div class="card-zoom-flex">
                                        <div class="card-zoom-container">
                                            <div class="w-full">
                                                <p
                                                    class="align-bottom mx-auto leading-relaxed text-base poppin-font font-normal">
                                                    Parque Tecnológico de Sorocaba</p>
                                                <h1
                                                    class="align-bottom text-3xl font-medium title-font mb-6 text-white poppin-font font-medium">
                                                    Mapa da Inovação</h1>
                                                <p class="card-zoom-resume">
                                                    Sistema desenvolvido para a prefeitura municipal de sorocaba para obtenção de até três linhas de descrição nesse texto</p>
                                                {{-- <div
                                        class="duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                        Dwayne</div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="xl:w-1/4 lg:w-1/2 w-full py-6">
                    <a href="#">
                        <div class="card-zoom" style="height: 31rem;">
                            <div class="card-zoom-image "
                                style="background-image: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.5)), url('img/rh.jpg');">
                                <div class="card-zoom-parent">
                                    <div class="card-zoom-flex">
                                        <div class="card-zoom-container">
                                            <div class="w-full">
                                                <p
                                                    class="align-bottom mx-auto leading-relaxed text-base poppin-font font-normal">
                                                    Prefeitura de Sorocaba</p>
                                                <h1
                                                    class="align-bottom text-3xl font-medium title-font mb-6 text-white poppin-font font-medium">
                                                    Aplicativo do Servidor</h1>
                                                <p class="card-zoom-resume">
                                                    Sistema desenvolvido para a prefeitura municipal de sorocaba para obtenção de até três linhas de descrição nesse texto</p>
                                                {{-- <div
                                        class="duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                        Dwayne</div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="xl:w-1/4 lg:w-1/2 w-full py-6">
                    <a href="#">
                        <div class="card-zoom" style="height: 31rem;">
                            <div class="card-zoom-image "
                                style="background-image: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.5)), url('img/rh.jpg');">
                                <div class="card-zoom-parent">
                                    <div class="card-zoom-flex">
                                        <div class="card-zoom-container">
                                            <div class="w-full">
                                                <p
                                                    class="align-bottom mx-auto leading-relaxed text-base poppin-font font-normal">
                                                    Prefeitura de Sorocaba</p>
                                                <h1
                                                    class="align-bottom text-3xl font-medium title-font mb-6 text-white poppin-font font-medium">
                                                    Aplicativo do Servidor</h1>
                                                <p class="card-zoom-resume">
                                                    Sistema desenvolvido para a prefeitura municipal de sorocaba para obtenção de até três linhas de descrição nesse texto</p>
                                                {{-- <div
                                        class="duration-300 absolute inset-0 z-10 flex justify-center items-center text-6xl text-white font-semibold">
                                        Dwayne</div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
    </section>
</body>
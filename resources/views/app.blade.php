<!DOCTYPE HTML>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body>
    <section class="bg-purple" id="hero">
        <div class="relative w-full h-full top-100 bg-cover bg-center"
            style="background-image: url({{asset('img/sisos-1.jpg')}})">
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
                                <a href="{{route('index')}}" class="ml-2 focus:outline-none focus:ring-2 focus:ring-black">
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
                                <a href="{{route('index')}}"
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
            <nav class="f-f-l relative z-10">
                <div class="w-full flex flex-row flex-wrap px-10 pt-10 pb-32 justify-center" z-index="1">
                    <div class="w-full text-center">
                        <h1 class="text-6xl xl:text-6xl great-gradient-text font-black" style="line-height: 1.15">
                            Sistema de Teleatendimento Odontológico</h1>
                        <p class="text-xl pt-4 px-16 text-center poppin-font font-normal text-white antialiased">Saiba
                            mais sobre o sistema desenvolvido para a Secretaria da Saúde de Sorocaba para o
                            teleacompanhamento odontológico de gestantes.
                        </p>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-10 mx-auto flex flex-col">
            <div class="lg:w-5/6 mx-auto">
                <div class="flex flex-col sm:flex-row mt-10">
                    <div class="sm:w-full sm:pl-8 sm:py-8 mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                        <p class="leading-relaxed text-lg mb-4">O Sistema de Teleatendimento Odontológico de Sorocaba
                            (SISOS) é um sistema desenvolvido para a Secretaria da Saúde (SES) da Prefeitura de
                            Sorocaba, com o objetivo de centralizar as informações sobre a saúde odontológica de
                            gestantes e puérperas. Assim, através do preenchimento de um formulário, a gestante
                            recebe orientações para agendamento de consultas odontológicas e médicas. Além disso,
                            com o SISOS, a Secretaria da Saúde consegue obter diversos tipos de indicadores, tais como
                            total de atendimentos realizados no mês, a quantidade gestantes sendo acompanhadas por UBS e
                            diversos outros.
                        </p>
                        <img src="{{asset('img/sisos-3.jpg')}}" onmousedown="return false" draggable="false">
                        <img src="{{asset('img/sisos-4.png')}}" onmousedown="return false" draggable="false">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div aria-label="group of cards" class="focus:outline-none mx-auto container py-12 px-24">
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:pb-10">
            <div aria-label="card 1" class="focus:outline-none bg-white px-6 py-6 text-color f-f-l shadow-lg">
                <h1 class="focus:outline-none text-3xl font-bold w-1/2">Construído com Laravel</h1>
                <div aria-label="download icon" role="img" class="focus:outline-none flex justify-end w-full items-end">
                    <svg viewBox="0 -.11376601 49.74245785 51.31690859" width="48" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1 -.402.694l-9.209 5.302v10.509c0 .286-.152.55-.4.694l-19.223 11.066c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1 -.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054l-19.219-11.066a.801.801 0 0 1 -.402-.694v-32.916c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zm-36.84-31.068v31.068l17.618 10.143v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483l-4.645-2.676-3.363-1.934zm8.81-5.994-8.007 4.609 8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764 4.645-2.674v-20.096l-3.363 1.936-4.646 2.675v20.096zm24.667-23.325-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zm-18.422 20.561 11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z"
                            fill="url(#paint0_linear)">
                        </path>
                        <defs>
                            <linearGradient id="paint0_linear" x1="24" y1="2.70325" x2="24" y2="42"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F56565"></stop>
                                <stop offset="1" stop-color="#D53F8C"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            <div aria-label="card 1" class="focus:outline-none bg-white px-6 py-6 text-color f-f-l shadow-lg">
                <h1 class="focus:outline-none text-3xl font-bold w-1/2">Construído com PHP</h1>
                <div aria-label="download icon" role="img" class="focus:outline-none flex justify-end w-full items-end">
                    <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -1 100 50">
                        <path
                            d="m7.579 10.123 14.204 0c4.169 0.035 7.19 1.237 9.063 3.604 1.873 2.367 2.491 5.6 1.855 9.699-0.247 1.873-0.795 3.71-1.643 5.512-0.813 1.802-1.943 3.427-3.392 4.876-1.767 1.837-3.657 3.003-5.671 3.498-2.014 0.495-4.099 0.742-6.254 0.742l-6.36 0-2.014 10.07-7.367 0 7.579-38.001 0 0m6.201 6.042-3.18 15.9c0.212 0.035 0.424 0.053 0.636 0.053 0.247 0 0.495 0 0.742 0 3.392 0.035 6.219-0.3 8.48-1.007 2.261-0.742 3.781-3.321 4.558-7.738 0.636-3.71 0-5.848-1.908-6.413-1.873-0.565-4.222-0.83-7.049-0.795-0.424 0.035-0.83 0.053-1.219 0.053-0.353 0-0.724 0-1.113 0l0.053-0.053"
                            fill="url(#paint0_linear)" />
                        <path
                            d="m41.093 0 7.314 0-2.067 10.123 6.572 0c3.604 0.071 6.289 0.813 8.056 2.226 1.802 1.413 2.332 4.099 1.59 8.056l-3.551 17.649-7.42 0 3.392-16.854c0.353-1.767 0.247-3.021-0.318-3.763-0.565-0.742-1.784-1.113-3.657-1.113l-5.883-0.053-4.346 21.783-7.314 0 7.632-38.054 0 0"
                            fill="url(#paint0_linear)" />
                        <path
                            d="m70.412 10.123 14.204 0c4.169 0.035 7.19 1.237 9.063 3.604 1.873 2.367 2.491 5.6 1.855 9.699-0.247 1.873-0.795 3.71-1.643 5.512-0.813 1.802-1.943 3.427-3.392 4.876-1.767 1.837-3.657 3.003-5.671 3.498-2.014 0.495-4.099 0.742-6.254 0.742l-6.36 0-2.014 10.07-7.367 0 7.579-38.001 0 0m6.201 6.042-3.18 15.9c0.212 0.035 0.424 0.053 0.636 0.053 0.247 0 0.495 0 0.742 0 3.392 0.035 6.219-0.3 8.48-1.007 2.261-0.742 3.781-3.321 4.558-7.738 0.636-3.71 0-5.848-1.908-6.413-1.873-0.565-4.222-0.83-7.049-0.795-0.424 0.035-0.83 0.053-1.219 0.053-0.353 0-0.724 0-1.113 0l0.053-0.053"
                            fill="url(#paint0_linear)" />
                        <defs>
                            <linearGradient id="paint0_linear" x1="24" y1="2.70325" x2="24" y2="42"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F56565"></stop>
                                <stop offset="1" stop-color="#D53F8C"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            <div aria-label="card 1" class="focus:outline-none bg-white px-6 py-6 text-color f-f-l shadow-lg">
                <h1 class="focus:outline-none text-3xl font-bold w-1/2">Tailwind CSS</h1>
                <div aria-label="download icon" role="img" class="focus:outline-none flex justify-end w-full items-end">
                    <svg height="48" preserveAspectRatio="xMidYMid" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 256 153.6">
                        <linearGradient id="a" x1="24" y1="2.70325" x2="24" y2="42" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F56565"></stop>
                            <stop offset="1" stop-color="#D53F8C"></stop>
                        </linearGradient>
                        <path
                            d="M128 0C93.867 0 72.533 17.067 64 51.2 76.8 34.133 91.733 27.733 108.8 32c9.737 2.434 16.697 9.499 24.401 17.318C145.751 62.057 160.275 76.8 192 76.8c34.133 0 55.467-17.067 64-51.2-12.8 17.067-27.733 23.467-44.8 19.2-9.737-2.434-16.697-9.499-24.401-17.318C174.249 14.743 159.725 0 128 0zM64 76.8C29.867 76.8 8.533 93.867 0 128c12.8-17.067 27.733-23.467 44.8-19.2 9.737 2.434 16.697 9.499 24.401 17.318C81.751 138.857 96.275 153.6 128 153.6c34.133 0 55.467-17.067 64-51.2-12.8 17.067-27.733 23.467-44.8 19.2-9.737-2.434-16.697-9.499-24.401-17.318C110.249 91.543 95.725 76.8 64 76.8z"
                            fill="url(#a)" />
                    </svg>
                </div>
            </div>
            <div aria-label="card 1" class="focus:outline-none bg-white px-6 py-6 text-color f-f-l shadow-lg">
                <h1 class="focus:outline-none text-3xl font-bold w-1/2">Construído Bootstrap</h1>
                <div aria-label="download icon" role="img" class="focus:outline-none flex justify-end w-full items-end">
                    <svg height="48" viewBox="0 0 512 407.864" xmlns="http://www.w3.org/2000/svg">
                        <linearGradient id="a" x1="24" y1="40.70325" x2="24" y2="360" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F56565"></stop>
                            <stop offset="1" stop-color="#D53F8C"></stop>
                        </linearGradient>
                        <path
                            d="m106.344 0c-29.214 0-50.831 25.57-49.863 53.3.929 26.641-.278 61.145-8.964 89.283-8.717 28.217-23.449 46.098-47.517 48.393v25.912c24.068 2.3 38.8 20.172 47.516 48.393 8.687 28.138 9.893 62.642 8.964 89.283-.968 27.726 20.649 53.3 49.868 53.3h299.347c29.214 0 50.827-25.57 49.859-53.3-.929-26.641.278-61.145 8.964-89.283 8.717-28.221 23.413-46.1 47.482-48.393v-25.912c-24.068-2.3-38.764-20.172-47.482-48.393-8.687-28.134-9.893-62.642-8.964-89.283.968-27.726-20.645-53.3-49.859-53.3h-299.355zm240.775 251.067c0 38.183-28.481 61.34-75.746 61.34h-80.458a8.678 8.678 0 0 1 -8.678-8.678v-199.593a8.678 8.678 0 0 1 8.678-8.678h80c39.411 0 65.276 21.348 65.276 54.124 0 23.005-17.4 43.6-39.567 47.208v1.2c30.176 3.31 50.495 24.21 50.495 53.077zm-84.519-128.1h-45.876v64.8h38.639c29.87 0 46.34-12.028 46.34-33.527-.003-20.148-14.163-31.273-39.103-31.273zm-45.876 90.511v71.411h47.564c31.1 0 47.573-12.479 47.573-35.931s-16.935-35.484-49.573-35.484h-45.564z"
                            fill="url(#a)" fill-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div aria-label="card 1" class="focus:outline-none bg-white px-6 py-6 text-color f-f-l shadow-lg">
                <h1 class="focus:outline-none text-3xl font-bold w-1/2">Construído com Lumen</h1>
                <div aria-label="download icon" role="img" class="focus:outline-none flex justify-end w-full items-end">
                    <svg height="48" viewBox="0 0 256 515" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                        <linearGradient id="a" x1="24" y1="40.70325" x2="24" y2="360" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F56565"></stop>
                            <stop offset="1" stop-color="#D53F8C"></stop>
                        </linearGradient>
                        <g>
                            <path
                                d="M15.1140942,142.743291 C17.2460942,142.743291 19.4120942,142.290291 21.4710942,141.332291 L247.262094,36.3472911 C254.825094,32.8302911 258.105094,23.8492911 254.588094,16.2872911 C251.073094,8.72529107 242.089094,5.44529107 234.529094,8.96129107 L8.73809423,113.947291 C1.17509423,117.463291 -2.10490577,126.444291 1.41209423,134.006291 C3.97009423,139.508291 9.42109423,142.743291 15.1140942,142.743291 Z M234.529394,73.1394911 L8.73839423,178.125491 C1.17539423,181.641491 -2.10460577,190.621491 1.41239423,198.183491 C3.96939423,203.686491 9.42039423,206.921491 15.1143942,206.921491 C17.2463942,206.921491 19.4113942,206.468491 21.4713942,205.509491 L247.262394,100.525491 C254.825394,97.0084911 258.105394,88.0274911 254.588394,80.4654911 C251.073394,72.9034911 242.089394,69.6234911 234.529394,73.1394911 Z M234.529394,137.856791 L8.73839423,242.842791 C1.17539423,246.358791 -2.10460577,255.338791 1.41239423,262.900791 C3.96939423,268.403791 9.42039423,271.638791 15.1143942,271.638791 C17.2463942,271.638791 19.4113942,271.185791 21.4713942,270.226791 L247.262394,165.242791 C254.825394,161.725791 258.105394,152.744791 254.588394,145.182791 C251.073394,137.620791 242.089394,134.340791 234.529394,137.856791 Z M15.1140942,78.7453911 C17.2510942,78.7453911 19.4220942,78.2893911 21.4870942,77.3273911 L125.574094,28.7893911 C133.133094,25.2653911 136.402094,16.2803911 132.878094,8.72139107 C129.352094,1.16239107 120.367094,-2.10460893 112.809094,1.41739107 L8.72209423,49.9553911 C1.16409423,53.4803911 -2.10590577,62.4653911 1.41809423,70.0233911 C3.98109423,75.5183911 9.42709423,78.7453911 15.1140942,78.7453911 Z M234.471594,202.061191 L154.653594,239.583191 C149.358594,242.072191 145.977594,247.398191 145.977594,253.249191 L145.977594,328.623191 L111.101594,328.623191 L111.101594,272.355191 C111.101594,264.014191 104.341594,257.254191 96.0015942,257.254191 C87.6605942,257.254191 80.9005942,264.014191 80.9005942,272.355191 L80.9005942,328.623191 L59.2585942,328.623191 C52.8325942,328.623191 47.9715942,334.437191 49.1105942,340.762191 L54.2045942,369.037191 C55.0885942,373.948191 59.3625942,377.520191 64.3525942,377.520191 L117.334594,377.520191 L61.2145942,387.710191 C57.1115942,388.454191 54.3895942,392.385191 55.1345942,396.487191 C55.7975942,400.133191 58.9755942,402.691191 62.5555942,402.691191 C63.0035942,402.691191 63.4575942,402.651191 63.9135942,402.567191 L192.628594,379.195191 C194.632594,378.832191 196.297594,377.701191 197.400594,376.168191 C200.066594,374.656191 202.020594,371.995191 202.515594,368.783191 L206.882594,340.507191 C207.846594,334.260191 203.013594,328.623191 196.691594,328.623191 L176.178594,328.623191 L176.178594,262.837191 L247.320594,229.393191 C254.867594,225.845191 258.109594,216.850191 254.561594,209.303191 C251.014594,201.759191 242.022594,198.513191 234.471594,202.061191 Z M189.930894,402.811191 L61.2158942,426.180191 C57.1118942,426.924191 54.3898942,430.855191 55.1348942,434.957191 C55.7968942,438.604191 58.9748942,441.161191 62.5558942,441.161191 C63.0018942,441.161191 63.4568942,441.121191 63.9118942,441.037191 L192.627894,417.667191 C196.730894,416.924191 199.452894,412.993191 198.707894,408.891191 C197.962894,404.789191 194.036894,402.053191 189.930894,402.811191 Z M189.930894,442.720191 L61.2158942,466.089191 C57.1118942,466.833191 54.3898942,470.764191 55.1348942,474.866191 C55.7968942,478.513191 58.9748942,481.070191 62.5558942,481.070191 C63.0018942,481.070191 63.4568942,481.030191 63.9118942,480.946191 L192.627894,457.576191 C196.730894,456.833191 199.452894,452.902191 198.707894,448.800191 C197.962894,444.698191 194.036894,441.962191 189.930894,442.720191 Z M174.537394,482.974791 L78.5403942,499.514791 C74.4313942,500.221791 71.6733942,504.127791 72.3813942,508.237791 C73.0143942,511.911791 76.2053942,514.507791 79.8133942,514.507791 C80.2393942,514.507791 80.6703942,514.469791 81.1033942,514.395791 L177.101394,497.856791 C181.210394,497.148791 183.968394,493.242791 183.260394,489.132791 C182.553394,485.026791 178.655394,482.281791 174.537394,482.974791 Z"
                                fill="url(#a)"></path>
                        </g>
                    </svg>

                </div>
            </div>
            <div aria-label="card 2" class="focus:outline-none bg-white px-6 py-6 text-color f-f-l shadow-lg">
                <h1 class="focus:outline-none text-3xl font-bold w-1/2">Construído com Flutter</h1>
                <div aria-label="onboarding icon " role="img"
                    class="focus:outline-none flex justify-end w-full items-end">
                    <svg enable-background="new 0 0 1999 2474.2" viewBox="0 0 1999 2474.2"
                        xmlns="http://www.w3.org/2000/svg" height="48" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <linearGradient id="paint0_linear" x1="24" y1="2.70325" x2="24" y2="42"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F56565"></stop>
                            <stop offset="1" stop-color="#D53F8C"></stop>
                        </linearGradient>
                        <path d="m381 1618-381-381 1237.1-1237h761.9m0 1141.5h-761.9l-285.4 285.4 381 381"
                            fill="url(#paint0_linear)" fill-opacity=".8" />
                        <path d="m951.7 2188.8 285.4 285.4h761.9l-666.3-666.3" fill="url(#paint0_linear)" />
                        <path d="m571.6 1808.1 380.4-380.5 380.4 380.4-380.4 380.5z" fill="url(#paint0_linear)" />
                        <path d="m952 2188.5 380.4-380.4 53.1 53.1-380.4 380.4z" fill="url(#paint0_linear)" />
                        <path d="m951.7 2188.8 565.3-195.3-184.3-185.7" fill="url(#paint0_linear)" />
                    </svg>
                </div>
            </div>
            <div aria-label="card 3" class="focus:outline-none bg-white px-6 py-6 text-color f-f-l shadow-lg">
                <h1 class="focus:outline-none text-3xl font-bold w-10/12">Aplicação Responsiva</h1>
                <div aria-label="responsive icon" role="img"
                    class="focus:outline-none flex justify-end w-full items-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                        <path
                            d="M38 12H22C21.4696 12 20.9609 12.2107 20.5858 12.5858C20.2107 12.9609 20 13.4696 20 14V40H8C7.46957 40 6.96086 39.7893 6.58579 39.4142C6.21071 39.0391 6 38.5304 6 38V6C6 5.46957 6.21071 4.96086 6.58579 4.58579C6.96086 4.21071 7.46957 4 8 4H36C36.5304 4 37.0391 4.21071 37.4142 4.58579C37.7893 4.96086 38 5.46957 38 6V12ZM26 16H42C42.5304 16 43.0391 16.2107 43.4142 16.5858C43.7893 16.9609 44 17.4696 44 18V42C44 42.5304 43.7893 43.0391 43.4142 43.4142C43.0391 43.7893 42.5304 44 42 44H26C25.4696 44 24.9609 43.7893 24.5858 43.4142C24.2107 43.0391 24 42.5304 24 42V18C24 17.4696 24.2107 16.9609 24.5858 16.5858C24.9609 16.2107 25.4696 16 26 16Z"
                            fill="url(#paint0_linear)"></path>
                        <defs>
                            <linearGradient id="paint0_linear" x1="25" y1="4" x2="25" y2="44"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F56565"></stop>
                                <stop offset="1" stop-color="#D53F8C"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            <div aria-label="card 4" class="focus:outline-none bg-white px-6 py-6 text-color f-f-l shadow-lg">
                <h1 class="focus:outline-none text-3xl font-bold w-9/12">Utilização de metodologia ágil</h1>
                <div aria-label="success icon" role="img" class="focus:outline-none flex justify-end w-full items-end">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        height="54" viewBox="0 0 128 160" style="enable-background:new 0 0 128 128;"
                        xml:space="preserve">
                        <g>
                            <path d="M100.319,110.342c-4.845,5.604-10.843,10.16-17.625,13.338H128v-13.338H100.319z"
                                fill="url(#paint0_linear)" />
                            <path fill="url(#paint0_linear)"
                                d="M108.192,75.902c0-26.345-21.435-47.779-47.779-47.779c-14.874,0-28.178,6.837-36.943,17.527   c-1.667-0.469-3.17-1.306-4.402-2.455c-2.104-1.957-3.441-4.725-3.441-7.818c0-5.91,4.806-10.716,10.716-10.716   c0.915,0,1.801,0.137,2.663,0.355l-4.129,8.365l9.095-3.087l12.604-4.275l-0.313-0.915l-7.04-20.784l-4.259,8.622   c-2.742-1.058-5.627-1.618-8.622-1.618c-13.264,0-24.053,10.791-24.053,24.053c0,7.932,3.876,14.958,9.816,19.341   c1.342,0.99,2.784,1.846,4.319,2.543c-2.438,5.73-3.79,12.031-3.79,18.641c0,5.848,1.1,11.52,3.152,16.926l-8.891,3.848   l21.308,8.428l8.434-21.301l-8.609,3.725c-1.339-3.715-2.058-7.609-2.058-11.625c0-18.993,15.453-34.442,34.442-34.442   s34.442,15.45,34.442,34.442c0,18.99-15.453,34.439-34.442,34.439H0v13.338h60.413C86.758,123.68,108.192,102.248,108.192,75.902z" />
                        </g>
                        <linearGradient id="paint0_linear" x1="25" y1="4" x2="25" y2="44"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F56565"></stop>
                            <stop offset="1" stop-color="#D53F8C"></stop>
                        </linearGradient>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</body>
<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gladlio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <script defer data-domain="gladlio.com"
            src="https://plausible.io/js/script.pageview-props.tagged-events.js"></script>
    <script>window.plausible = window.plausible || function () {
            (window.plausible.q = window.plausible.q || []).push(arguments)
        }</script>


    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">

    <!-- Hero -->
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto"
                             src="{{asset('storage/gladlio-logo.svg')}}" alt="">
                    </a>
                </div>
                @if (Route::has('login'))
                    <livewire:welcome.navigation/>
                @endif
            </nav>
        </header>
        <main>
            <div class="relative isolate">
                <svg
                    class="absolute inset-x-0 top-0 -z-10 h-[64rem] w-full stroke-gray-200 [mask-image:radial-gradient(32rem_32rem_at_center,white,transparent)]"
                    aria-hidden="true">
                    <defs>
                        <pattern id="1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84" width="200" height="200" x="50%" y="-1"
                                 patternUnits="userSpaceOnUse">
                            <path d="M.5 200V.5H200" fill="none"/>
                        </pattern>
                    </defs>
                    <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                        <path
                            d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                            stroke-width="0"/>
                    </svg>
                    <rect width="100%" height="100%" stroke-width="0"
                          fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84)"/>
                </svg>
                <div
                    class="absolute left-1/2 right-0 top-0 -z-10 -ml-24 transform-gpu overflow-hidden blur-3xl lg:ml-24 xl:ml-48"
                    aria-hidden="true">
                    <div
                        class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                        style="clip-path: polygon(63.1% 29.5%, 100% 17.1%, 76.6% 3%, 48.4% 0%, 44.6% 4.7%, 54.5% 25.3%, 59.8% 49%, 55.2% 57.8%, 44.4% 57.2%, 27.8% 47.9%, 35.1% 81.5%, 0% 97.7%, 39.2% 100%, 35.2% 81.4%, 97.2% 52.8%, 63.1% 29.5%)"></div>
                </div>
                <div class="overflow-hidden">
                    <div class="mx-auto max-w-7xl px-6 pb-32 pt-36 sm:pt-60 lg:px-8 lg:pt-32">
                        <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
                            <div class="relative w-full max-w-xl lg:shrink-0 xl:max-w-2xl">
                                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                                    Your one and only German exam preparation app
                                </h1>
                                <p class="mt-6 text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none">
                                    Are you struggling to prepare for your Goethe or TELC exams? Say "Auf Wiedersehen"
                                    to stress and
                                    "Hallo" to success!
                                </p>
                                <div class="mt-10 flex items-center gap-x-6">
                                    <a href="#faq"
                                       class="rounded-md bg-emerald-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">
                                        Get early access
                                    </a>

                                </div>
                            </div>
                            <div
                                class="mt-14 flex justify-end gap-8 sm:-mt-44 sm:justify-start sm:pl-20 lg:mt-0 lg:pl-0">
                                <div
                                    class="ml-auto w-44 flex-none space-y-8 pt-32 sm:ml-0 sm:pt-80 lg:order-last lg:pt-36 xl:order-none xl:pt-80">
                                    <div class="relative">
                                        <img
                                            src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80"
                                            alt=""
                                            class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                        <div
                                            class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                                    </div>
                                </div>
                                <div class="mr-auto w-44 flex-none space-y-8 sm:mr-0 sm:pt-52 lg:pt-36">
                                    <div class="relative">
                                        <img
                                            src="https://images.unsplash.com/photo-1485217988980-11786ced9454?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80"
                                            alt=""
                                            class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                        <div
                                            class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                                    </div>
                                    <div class="relative">
                                        <img
                                            src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-x=.4&w=396&h=528&q=80"
                                            alt=""
                                            class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                        <div
                                            class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                                    </div>
                                </div>
                                <div class="w-44 flex-none space-y-8 pt-32 sm:pt-0">
                                    <div class="relative">
                                        <img
                                            src="https://images.unsplash.com/photo-1670272504528-790c24957dda?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=left&w=400&h=528&q=80"
                                            alt=""
                                            class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                        <div
                                            class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                                    </div>
                                    <div class="relative">
                                        <img
                                            src="https://images.unsplash.com/photo-1670272505284-8faba1c31f7d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80"
                                            alt=""
                                            class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                        <div
                                            class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Feature -->
    <div class="bg-white py-24 sm:py-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-emerald-600">Master German from A1 to C1</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Unlock your potential with expert-crafted preparation tailored for Goethe and telc exams
                </p>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Whether you're just starting or looking to refine your skills, Gladlio offers comprehensive
                    resources to guide you every step of the way.
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-600">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="-3.54 -3.54 170 170"
                                     id="Book-Cog-2--Streamline-Ultimate" height="170" width="170">
                                    <desc>Book Cog 2 Streamline Icon: https://streamlinehq.com</desc>
                                    <path stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M146.96741666666665 157.48933333333332H30.208151216666664c-8.145999999999999 0 -14.934401216666664 -6.788333333333333 -14.934401216666664 -14.934333333333335 0 -8.145999999999999 6.788401216666667 -14.934333333333335 14.934401216666664 -14.934333333333335H137.46375m0 0c5.430666666666667 0 10.1825 -4.751833333333333 10.1825 -10.1825v-101.825c0 -5.430666666666667 -4.751833333333333 -10.182533941666666 -10.1825 -10.182533941666666h-108.61333333333333c-7.467166666666667 0 -13.576666666666666 6.109533941666667 -13.576666666666666 13.576700608333331v126.263m122.19 -17.64966666666667v29.86866666666667"
                                          stroke-width="7.08"></path>
                                    <path stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M81.12058333333333 75.94447916666667c5.623455333333333 0 10.1825 -4.559044666666666 10.1825 -10.182364233333333 0 -5.623658983333333 -4.559044666666666 -10.1825 -10.1825 -10.1825 -5.624134166666667 0 -10.1825 4.558841016666666 -10.1825 10.1825 0 5.623319566666667 4.558365833333333 10.182364233333333 10.1825 10.182364233333333Z"
                                          stroke-width="7.08"></path>
                                    <path stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="m89.26658333333333 29.18990121666667 2.7153333333333336 8.824901216666667c0.6788333333333334 3.3941666666666666 4.0729999999999995 4.751833333333333 7.467166666666667 4.0729999999999995l9.503666666666666 -2.0364999999999998c8.145999999999999 -2.0364999999999998 13.576666666666666 8.145932116666666 8.145999999999999 14.255432116666666l-6.788333333333333 6.788333333333333c-2.0364999999999998 2.7153333333333336 -2.0364999999999998 6.1095 0 8.82476545l6.788333333333333 6.788333333333333c5.430666666666667 6.1095 0 15.613166666666665 -8.145999999999999 14.2555l-9.503666666666666 -2.0364999999999998c-3.3941666666666666 -0.6788333333333334 -6.1095 1.3576666666666668 -7.467166666666667 4.0729999999999995l-2.7153333333333336 8.824833333333334c-2.7153333333333336 8.145999999999999 -13.576666666666666 8.145999999999999 -16.291999999999998 0l-2.7153333333333336 -8.824833333333334c-0.6788333333333334 -3.3941666666666666 -4.07279635 -4.751833333333333 -7.466963016666666 -4.0729999999999995l-9.503598783333333 2.0364999999999998c-8.145999999999999 2.0364999999999998 -13.57673455 -8.145999999999999 -8.146067883333334 -14.2555l6.788333333333333 -6.788333333333333c2.0364999999999998 -2.71526545 2.0364999999999998 -6.1094321166666665 0 -8.82476545l-6.788333333333333 -6.788333333333333c-5.430666666666667 -6.1095 0.00006788333333333333 -15.613098783333335 8.146067883333334 -14.255432116666666l9.503598783333333 2.0364999999999998c3.3941666666666666 0.6788333333333334 6.10929635 -1.3576666666666668 7.466963016666666 -4.0729999999999995l2.7153333333333336 -8.824901216666667c2.7153333333333336 -7.467166666666667 14.2555 -7.467166666666667 16.291999999999998 0Z"
                                          stroke-width="7.08"></path>
                                </svg>
                            </div>
                            Expert Guidance
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            Our materials are designed by experienced educators who understand the exam formats and
                            requirements.
                        </dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-600">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="-3.54 -3.54 170 170"
                                     id="Smart-Light-Bulb--Streamline-Ultimate" height="170" width="170">
                                    <desc>Smart Light Bulb Streamline Icon: https://streamlinehq.com</desc>
                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M106.91624999999999 76.36874999999999c0 -20.365 -16.97083333333333 -37.33583333333333 -37.33583333333333 -37.33583333333333s-37.33583333333333 16.97083333333333 -37.33583333333333 37.33583333333333c0 10.1825 4.0729999999999995 19.686166666666665 10.861333333333334 25.795666666666666 6.1095 6.1095 9.503666666666666 14.934333333333335 9.503666666666666 23.759166666666665v11.540166666666666c0 7.467166666666667 6.1095 13.576666666666666 13.576666666666666 13.576666666666666h6.788333333333333c7.467166666666667 0 13.576666666666666 -6.1095 13.576666666666666 -13.576666666666666v-11.540166666666666c0 -8.824833333333334 3.3941666666666666 -17.64966666666667 9.503666666666666 -23.759166666666665 6.788333333333333 -6.788333333333333 10.861333333333334 -15.613166666666665 10.861333333333334 -25.795666666666666Z"
                                          stroke-width="7.08"></path>
                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M69.58041666666666 151.04041666666666v6.788333333333333"
                                          stroke-width="7.08"></path>
                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M52.60958333333333 123.88708333333332h33.94166666666666"
                                          stroke-width="7.08"></path>
                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10" d="M127.28125 76.36874999999999h6.788333333333333"
                                          stroke-width="7.08"></path>
                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M69.58041666666666 18.667916666666667v-6.788333333333333"
                                          stroke-width="7.08"></path>
                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="m28.850348783333335 34.95998455 -4.751833333333333 -4.751833333333333"
                                          stroke-width="7.08"></path>
                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M11.879583333333333 76.36874999999999h-6.788333333333333"
                                          stroke-width="7.08"></path>
                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M128.97901216666665 45.312464416666664c-1.3576666666666668 0 -2.716012166666667 1.3576666666666668 -2.716012166666667 2.7153333333333336s1.3583455 2.7153333333333336 2.716012166666667 2.7153333333333336"
                                          stroke-width="7.08"></path>
                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M128.97833333333332 45.312464416666664c1.3576666666666668 0 2.7153333333333336 1.3576666666666668 2.7153333333333336 2.7153333333333336s-1.3576666666666668 2.7153333333333336 -2.7153333333333336 2.7153333333333336"
                                          stroke-width="7.08"></path>
                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M114.72283333333333 31.056964416666666c8.145999999999999 -8.145999999999999 21.043833333333332 -8.145999999999999 28.511 0"
                                          stroke-width="7.08"></path>
                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M100.12859549999999 16.801125c15.613166666666665 -15.613166666666665 41.40883333333333 -15.613166666666665 57.70083333333333 0"
                                          stroke-width="7.08"></path>
                                </svg>
                            </div>
                            Tailored Learning Paths
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            Progress from A1 to C1 at your own pace with structured lessons that adapt to your learning
                            style
                        </dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-600">
                                <svg class="w-6 h-6" viewBox="-3.54 -3.54 170 170" xmlns="http://www.w3.org/2000/svg"
                                     id="House-Heart--Streamline-Ultimate" height="170" width="170">
                                    <desc>House Heart Streamline Icon: https://streamlinehq.com</desc>
                                    <path
                                        d="M23.759166666666665 88.24833333333333v61.095a6.788333333333333 6.788333333333333 0 0 0 6.788333333333333 6.788333333333333h101.825a6.788333333333333 6.788333333333333 0 0 0 6.788333333333333 -6.788333333333333v-57.70083333333333"
                                        fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="7.08"></path>
                                    <path
                                        d="M3.3941666666666666 84.85416666666666 81.46 6.788333333333333l78.06583333333333 78.06583333333333"
                                        fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="7.08"></path>
                                    <path
                                        d="M108.61333333333333 13.576666666666666h20.365a3.3941666666666666 3.3941666666666666 0 0 1 3.3941666666666666 3.3941666666666666v20.365"
                                        fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="7.08"></path>
                                    <path
                                        d="M115.40166666666666 92.38921666666666c0 17.58178333333333 -28.110488333333333 38.625616666666666 -31.871225000000003 41.34095l-0.16292 0.12897833333333333a3.224458333333333 3.224458333333333 0 0 1 -3.8150433333333336 0L79.42349999999999 133.73016666666666c-3.7946783333333336 -2.7153333333333336 -31.905166666666666 -23.759166666666665 -31.905166666666666 -41.34095a19.238136666666666 19.238136666666666 0 0 1 18.532149999999998 -20.229233333333333A18.036601666666666 18.036601666666666 0 0 1 81.46 81.46a18.036601666666666 18.036601666666666 0 0 1 15.409516666666667 -9.300016666666668A19.238136666666666 19.238136666666666 0 0 1 115.40166666666666 92.38921666666666Z"
                                        fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="7.08"></path>
                                </svg>
                            </div>
                            Engaging Content
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            Enjoy interactive exercises, quizzes, and real-life scenarios that make learning enjoyable
                        </dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-600">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="-3.54 -3.54 170 170"
                                     id="Sport-Runner--Streamline-Ultimate" height="170" width="170">
                                    <desc>Sport Runner Streamline Icon: https://streamlinehq.com</desc>
                                    <defs></defs>
                                    <path
                                        d="M76.36874999999999 22.062083333333334a18.667916666666667 18.667916666666667 0 1 0 37.33583333333333 0 18.667916666666667 18.667916666666667 0 1 0 -37.33583333333333 0"
                                        fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="7.08"></path>
                                    <path
                                        d="M132.97666166666664 33.94166666666666a8.397168333333333 8.397168333333333 0 0 0 -8.913081666666667 7.908408333333333c0 0.13576666666666667 -1.160805 14.045061666666665 -11.024253333333334 16.21732833333333A57.327475 57.327475 0 0 1 89.219065 54.306666666666665a67.05515666666666 67.05515666666666 0 0 0 -32.05451 -4.011905A32.237795 32.237795 0 0 0 31.905166666666666 75.64239833333333a8.458263333333333 8.458263333333333 0 0 0 6.9241 9.727681666666667 8.750161666666665 8.750161666666665 0 0 0 1.3916083333333331 0.11540166666666667 8.424321666666668 8.424321666666668 0 0 0 8.281766666666666 -7.066654999999999 15.429881666666667 15.429881666666667 0 0 1 12.25973 -11.601261666666666 37.451235000000004 37.451235000000004 0 0 1 15.755721666666668 1.5748933333333333l-10.114616666666667 25.435885a6.469281666666666 6.469281666666666 0 0 0 -0.29868666666666666 0.8621183333333333l-4.914753333333333 17.826163333333334c-2.151901666666667 10.861333333333334 -5.844755 12.829949999999998 -22.096024999999997 17.289885l-10.861333333333334 2.959713333333333a8.458263333333333 8.458263333333333 0 0 0 2.19942 16.61105166666667 8.227459999999999 8.227459999999999 0 0 0 2.2129966666666667 -0.2918983333333333l10.861333333333334 -2.9665016666666664c15.314479999999998 -4.201978333333333 29.77363 -8.145999999999999 34.02312666666666 -29.671805000000003l1.4459149999999998 -5.220228333333333a39.284085 39.284085 0 0 1 7.467166666666667 37.172913333333334 8.458263333333333 8.458263333333333 0 0 0 5.315265 10.691625 8.274978333333333 8.274978333333333 0 0 0 2.661026666666667 0.4344533333333333 8.424321666666668 8.424321666666668 0 0 0 7.976291666666667 -5.776871666666667 54.985499999999995 54.985499999999995 0 0 0 -17.74470333333333 -60.19894l8.220671666666666 -20.677263333333332a51.414836666666666 51.414836666666666 0 0 0 23.799896666666665 1.7242366666666666c17.785433333333334 -3.91008 23.575881666666664 -21.72266666666667 24.19362 -31.667575A8.43111 8.43111 0 0 0 132.97666166666664 33.94166666666666Z"
                                        fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="7.08"></path>
                                </svg>
                            </div>
                            Smart suggestions
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            Receive recommendations that adapt as you progress, keeping your learning relevant and
                            engaging.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <!-- Testamonial
    <section class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="flex flex-col pb-10 sm:pb-16 lg:pb-0 lg:pr-8 xl:pr-20">

                    <figure class="mt-10 flex flex-auto flex-col justify-between">
                        <blockquote class="text-lg leading-8 text-gray-900">
                            <p>“My students always ask me where they can train outside their classroom for standardized
                                german exams. I now forward them to XXXX. ”</p>
                        </blockquote>
                        <figcaption class="mt-10 flex items-center gap-x-6">
                            <img class="h-14 w-14 rounded-full bg-gray-50"
                                 src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt="">
                            <div class="text-base">
                                <div class="font-semibold text-gray-900">Gladiola</div>
                                <div class="mt-1 text-gray-500">German tutor</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div
                    class="flex flex-col border-t border-gray-900/10 pt-10 sm:pt-16 lg:border-l lg:border-t-0 lg:pl-8 lg:pt-0 xl:pl-20">

                    <figure class="mt-10 flex flex-auto flex-col justify-between">
                        <blockquote class="text-lg leading-8 text-gray-900">
                            <p>“XXX gives me the confidence I needed to schedule my standardized german exam. The tests
                                I did where all successful. I would recommend it to everybody who ....”</p>
                        </blockquote>
                        <figcaption class="mt-10 flex items-center gap-x-6">
                            <img class="h-14 w-14 rounded-full bg-gray-50"
                                 src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt="">
                            <div class="text-base">
                                <div class="font-semibold text-gray-900">Anastasiia</div>
                                <div class="mt-1 text-gray-500">German student</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    -->

    <!-- Signup -->
    <div class="bg-white py-16 sm:py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div
                class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 shadow-2xl sm:rounded-3xl sm:px-24 xl:py-32">
                <h2 class="mx-auto max-w-2xl text-center text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Stay Informed About Our Launch!
                </h2>
                <p class="mx-auto mt-2 max-w-xl text-center text-lg leading-8 text-gray-300">
                    We're actively working on bringing our vision to life, and we want you to be part of it! Sign up now
                    to be among the first to know when we launch. You'll also get exclusive early access to test the app
                    before anyone else. Don’t miss out on this opportunity to shape your German learning journey!

                </p>
                <div class="mx-auto mt-10 flex max-w-md gap-x-4">
                    <a target="_blank"
                       href="https://79c1bbec.sibforms.com/serve/MUIFAGXNTnag10px-f98SbXA1u2x71pD5q0rXY7M9z_jVcmSPfnZMhywzvX24FgDUjqzaxkAPGKEyzgArLuOtmIvJ02FAnSo3c1c_0jdYxk2TnkdWkyCZIqAoy5aN16PFtoSg-AiPveuLb5f2oJmsochVEpKelOzxFdOzNRO9DdxYRBMqiQeHmBiGuxoqsmyhurnSGXmOGs0QRDn"
                       class="block mx-auto rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        Notify me
                    </a>
                </div>
                <svg viewBox="0 0 1024 1024"
                     class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2" aria-hidden="true">
                    <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)"
                            fill-opacity="0.7"/>
                    <defs>
                        <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(512 512) rotate(90) scale(512)">
                            <stop stop-color="#7775D6"/>
                            <stop offset="1" stop-color="#E935C1" stop-opacity="0"/>
                        </radialGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>


    <!-- FAQ -->
    <div id="faq" class="bg-white">
        <div class="mx-auto max-w-7xl divide-y divide-gray-900/10 px-6 py-24 sm:py-32 lg:px-8 lg:py-40">
            <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Frequently asked questions</h2>
            <dl class="mt-10 space-y-8 divide-y divide-gray-900/10">
                <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5">
                        When can I see and try out the app?
                    </dt>
                    <dd class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-gray-600">
                            We're currently developing our core platform and aim to launch a public Beta in Q1 2025.
                            Sign up for our beta program to be among the first to experience Gladlio and receive updates
                            on our progress. Early adopters will have the opportunity to shape the future of German
                            language learning!

                        </p>
                    </dd>
                </div>

                <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5">
                        How much will it cost?
                    </dt>
                    <dd class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-gray-600">
                            During the Beta phase, Gladlio will be completely free to use. This gives you full access to
                            our features and content while we refine the app based on user feedback. We'll announce our
                            pricing structure closer to the official launch, ensuring transparent and competitive
                            options for all learners.
                        </p>
                    </dd>
                </div>

                <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5">
                        What about the quality of the content?
                    </dt>
                    <dd class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-gray-600">
                            Quality is our top priority. We collaborate with certified German examiners and native
                            speakers to create and curate the best possible learning content. Our team of experts
                            ensures that all materials are accurate, up-to-date, and aligned with official Goethe and
                            telc exam standards.

                        </p>
                    </dd>
                </div>

                <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5">
                        Are you associated with Goethe or telc?
                    </dt>
                    <dd class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-gray-600">
                            While Gladlio is an independent platform, our content creators and teachers are certified by
                            Goethe and telc as expert examiners. This ensures that our materials and methodologies are
                            in line with the latest examination standards and requirements set by these respected
                            institutions.
                        </p>
                    </dd>
                </div>

                <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5">
                        How does Gladlio differ from other language learning apps?
                    </dt>
                    <dd class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base leading-7 text-gray-600">
                            Gladlio specializes in preparing learners for Goethe and telc exams, offering a focused
                            approach to German language mastery. Our adaptive learning technology, combined with
                            expert-crafted content, provides a unique, efficient, and enjoyable path to exam success.
                        </p>
                    </dd>
                </div>
            </dl>
        </div>
    </div>

    <!-- footer -->
    <footer class="bg-white">
        <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8 sm:pt-0">
            <nav class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12" aria-label="Footer">
                <div class="pb-6">
                    <a href="/imprint"
                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">Imprint</a>
                </div>
                <div class="pb-6">
                    <a href="/privacy" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Privacy</a>
                </div>
            </nav>
            <!--
            <div class="mt-10 flex justify-center space-x-10">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">X</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">YouTube</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
            -->
            <p class="mt-10 text-center text-xs leading-5 text-gray-500">&copy; <?= date("Y") ?> Gladlio</p>
        </div>
    </footer>

</div>
</body>
</html>




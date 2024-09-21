@extends('layouts.app-home')

@section('title', 'Minha casa na Internet • Mikael Oliveira')

@section('description', 'Descrição personalizada para a página inicial.')

@section('content')
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50">
            <div class="mx-auto max-w-7xl">
                <div class="px-6 pt-6 lg:max-w-2xl lg:pl-8 lg:pr-0">
                    <nav class="flex items-center justify-between lg:justify-start" aria-label="Global">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img alt="Your Company" class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 lg:hidden">
                            <span class="sr-only">Open main menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                        <div class="hidden lg:ml-12 lg:flex lg:gap-x-14">
                            <a href="{{ route('home') }}" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
                            <a href="{{ route('about') }}" class="text-sm font-semibold leading-6 text-gray-900">Sobre</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Projetos</a>
                            <a href="{{ route('blog') }}" class="text-sm font-semibold leading-6 text-gray-900">Blog</a>
                            <a href="{{ route('contact') }}"
                                class="text-sm font-semibold leading-6 text-gray-900">Contato</a>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="lg:hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                alt="">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="{{ route('home') }}"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Home</a>
                                <a href="{{ route('about') }}"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Sobre</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Projetos</a>
                                <a href="{{ route('blog') }}"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Blog</a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="relative">
            <div class="mx-auto max-w-7xl">
                <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl">
                    <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block"
                        viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                        <polygon points="0,0 90,0 50,100 0,100" />
                    </svg>

                    <div class="relative px-6 py-32 sm:py-40 lg:px-8 lg:py-56 lg:pr-0">
                        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
                            <div class="hidden sm:mb-10 sm:flex">
                                <div
                                    class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-500 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                                    Se quiser você pode dar uma olhada no meu . <a href="#"
                                        class="whitespace-nowrap font-semibold text-indigo-600"><span
                                            class="absolute inset-0" aria-hidden="true"></span>GitHub <span
                                            aria-hidden="true">&rarr;</span></a>
                                </div>
                            </div>
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Seja bem-vindo ao meu
                                cantinho na internet!</h1>
                            <p class="mt-6 text-lg leading-8 text-gray-600">Aqui você vai poder conhecer um pouco mais sobre
                                mim, explorar meus posts, acompanhar os projetos em que estou trabalhando e, quem sabe, até
                                encontrar algo que inspire ou ajude você. 😊</p>
                            <div class="mt-10 flex items-center gap-x-6">
                                <a href="{{ route('contact') }}"
                                    class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Entre
                                    em Contato</a>
                                <a href="{{ route('blog') }}" class="text-sm font-semibold leading-6 text-gray-900">Blog
                                    <span aria-hidden="true">→</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="aspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full"
                    src="https://cdn.discordapp.com/attachments/701489669673844887/1286175349788377128/image.png?ex=66ecf3a3&is=66eba223&hm=ac630e07509a0cb14c84934de176e47227ddf3fb4fe4a10da0b68de9086bc1cc&"
                    alt="">
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('button[aria-label="Open main menu"]');
            const closeButton = document.querySelector('button[aria-label="Close menu"]');
            const mobileMenu = document.querySelector('.lg:hidden[role="dialog"]');

            // Função para abrir o menu mobile
            menuButton.addEventListener('click', function() {
                mobileMenu.style.display = 'block'; // Exibe o menu mobile
            });

            // Função para fechar o menu mobile
            closeButton.addEventListener('click', function() {
                mobileMenu.style.display = 'none'; // Esconde o menu mobile
            });

            // Fecha o menu ao clicar fora dele (opcional)
            mobileMenu.addEventListener('click', function(e) {
                if (e.target === mobileMenu) {
                    mobileMenu.style.display = 'none';
                }
            });
        });
    </script>
@endsection

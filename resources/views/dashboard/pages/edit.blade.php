<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Páginas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-center p-10 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="w-[90%]">
                    <div class="px-4 sm:px-6 lg:px-8">
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-3xl font-semibold leading-6 text-gray-900">Página
                                    {{ ucfirst($page->name) }}</h1>
                                <p class="mt-2 text-base text-gray-700">Aqui você pode editar as meta tags da página
                                    {{ $page->name }}</p>
                            </div>
                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                <a href="{{ route('dashboard.index') }}"
                                    class="block px-3 py-2 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Voltar</a>
                            </div>
                        </div>
                        <div class="flow-root mt-8">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <div class="flex items-center mt-4 mb-4">
                                        <h2 class="mr-4 text-lg text-gray-700">Meta Tags Para o Google </h2>
                                        <hr class="flex-grow border-gray-300">
                                    </div>

                                    <div>
                                        <label for="title"
                                            class="block text-sm font-medium leading-6 text-gray-900">Titulo</label>
                                        <div class="mt-2">
                                            <input type="title" name="title" id="title"
                                                class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                placeholder="Minha casa na Internet • Mikael Oliveira">
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="description"
                                            class="block text-sm font-medium leading-6 text-gray-900">Descrição do
                                            site</label>
                                        <div class="mt-2">
                                            <textarea type="description" name="description" id="description"
                                                class="block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                rows="4" placeholder="Conheça mais sobre mim e leia meus posts sobre desenvolvimento e tecnologia."> </textarea>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="keywords"
                                            class="block text-sm font-medium leading-6 text-gray-900">Palavras
                                            chaves</label>
                                        <div class="mt-2">
                                            <input type="keywords" name="keywords" id="keywords"
                                                class="block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                placeholder="Mikael Oliveira, blog, desenvolvimento, tecnologia, posts, Laravel, Livewire, faculdade">
                                        </div>
                                    </div>

                                    <div class="flex items-center mt-4 mb-4">
                                        <h2 class="mr-4 text-lg text-gray-700">Meta Tags Para o Facebook e Linkedin</h2>
                                        <hr class="flex-grow border-gray-300">
                                    </div>

                                    <div class="mt-2">
                                        <label for="og_title"
                                            class="block text-sm font-medium leading-6 text-gray-900">Og Titulo</label>
                                        <div class="mt-2">
                                            <input type="og_title" name="og_title" id="og_title"
                                                class="block w-full  pl-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                placeholder="Mikael Oliveira">
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="og_description"
                                            class="block text-sm font-medium leading-6 text-gray-900">Og
                                            Descrição</label>
                                        <div class="mt-2">
                                            <textarea name="og_description" id="og_description"
                                                class="block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                placeholder="Mikael Oliveira" rows="4"> </textarea>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="og_image"
                                            class="block text-sm font-medium leading-6 text-gray-900">Og Imagem</label>
                                        <div class="mt-2">
                                            <input type="file" name="og_image" id="og_image"
                                                class="block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="og_url"
                                            class="block text-sm font-medium leading-6 text-gray-900">Og Url</label>
                                        <div class="mt-2">
                                            <input type="og_url" name="og_url" id="og_url"
                                                class="block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                placeholder="mikaeloliveira.com.br">
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="og_type"
                                            class="block text-sm font-medium leading-6 text-gray-900">Og type</label>
                                        <div class="mt-2">
                                            <input type="og_type" name="og_type" id="og_type"
                                                class="block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                placeholder="website">
                                        </div>
                                    </div>


                                    <div class="flex items-center mt-4 mb-4">
                                        <h2 class="mr-4 text-lg text-gray-700">Meta Tags Para o Twitter</h2>
                                        <hr class="flex-grow border-gray-300">
                                    </div>
                                    <div class="mt-2">
                                        <label for="twitter_card"
                                            class="block text-sm font-medium leading-6 text-gray-900">Twitter
                                            Card</label>
                                        <div class="mt-2">
                                            <input type="twitter_card" name="twitter_card" id="twitter_card"
                                                class="block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                placeholder="summary_large_image">
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="twitter_title"
                                            class="block text-sm font-medium leading-6 text-gray-900">Twitter
                                            Titulo</label>
                                        <div class="mt-2">
                                            <input type="twitter_title" name="twitter_title" id="twitter_title"
                                                class="block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                placeholder="Mikael Oliveira">
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="twitter_description"
                                            class="block text-sm font-medium leading-6 text-gray-900">Twitter
                                            Descrição</label>
                                        <div class="mt-2">
                                            <textarea type="twitter_description" name="twitter_description" id="twitter_description"
                                                class="block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                placeholder="you@example.com" rows="4"> </textarea>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="twitter_image"
                                            class="block text-sm font-medium leading-6 text-gray-900">Twitter
                                            Imagem</label>
                                        <div class="mt-2">
                                            <input type="file" name="twitter_image" id="twitter_image"
                                                class="block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="flex items-center mt-4 mb-4">
                                        <h2 class="mr-4 text-lg text-gray-700">Como Vai Aparecer no Google</h2>
                                        <hr class="flex-grow border-gray-300">
                                    </div>

                                    <div class="max-w-3xl p-4 bg-white rounded-lg shadow">
                                        <div class="flex items-center mb-2 space-x-2">
                                            <img src="{{ asset('assets/images/cat.png') }}" width="32px"
                                                height="32px" alt="Site Icon" class="w-8 h-8 rounded-full">
                                            <div class="flex flex-col">
                                                <p id="google_title1"
                                                    class="block text-sm leading-5 text-gray-700 whitespace-nowrap">
                                                    Minha casa na Internet • Mikael Oliveira</p>
                                                <p class="text-xs leading-4 text-gray-700">
                                                    https://mikaeloliveira.com.br</p>
                                            </div>

                                        </div>
                                        <a id="google_title2" href="https://www.akitaonrails.com"
                                            class="text-lg text-indigo-700 hover:underline">
                                            Minha casa na Internet • Mikael Oliveira
                                        </a>
                                        <p id="google_description" class="mt-1 text-gray-700">
                                            Conheça mais sobre mim e leia meus posts sobre desenvolvimento, tecnologia e
                                            algumas histórias que conto sobre o trabalho, faculdade ou algo
                                            interessante."
                                        </p>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <button href="{{ route('dashboard.index') }}"
                                            class="block px-3 py-2 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Salvar</button>
                                        <p class="ml-1 mr-1">ou</p>
                                        <button type="button"
                                            class="px-3 py-2 text-sm font-semibold text-gray-900 bg-white rounded shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('script')
        <script>
            /**
             * Copyright (c) 2024 Mikael OLiveira. All rights reserved.
             * Authors: Mikael Oliveira
             */

            //Card of google
            function updateGoogleDescriptions() {
                const textElement = document.getElementById('google_description');
                const text = textElement.innerText;
                const maxLength = 144;

                if (text.length > maxLength) {
                    textElement.innerText = text.substring(0, maxLength) + ' ...';
                }
            }

            document.addEventListener('DOMContentLoaded', function() {
                updateGoogleDescriptions();

                document.getElementById('title').addEventListener('input', function() {
                    const title = this.value;
                    document.getElementById('google_title1').innerText = title;
                    document.getElementById('google_title2').innerText = title;
                });

                document.getElementById('description').addEventListener('input', function() {
                    const maxLength = 144;
                    const descriptionText = this.value;

                    let limitedText = descriptionText.length > maxLength ? descriptionText.substring(0,
                        maxLength) + ' ...' : descriptionText;

                    document.getElementById('google_description').innerText = limitedText;

                    updateGoogleDescriptions();
                });
            });
        </script>
    @endsection
</x-app-layout>

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
                                <h1 class="text-base font-semibold leading-6 text-gray-900">Páginas do site</h1>
                                <p class="mt-2 text-sm text-gray-700">Aqui você pode gerenciar todas as páginas do seu
                                    site</p>
                            </div>
                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                <button type="button"
                                    class="block px-3 py-2 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cadastrar
                                    nova página</button>
                            </div>
                        </div>
                        <div class="flow-root mt-8">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead>
                                            <tr>
                                                <th scope="col"
                                                    class="py-3 pl-4 pr-3 text-xs font-medium tracking-wide text-left text-gray-500 uppercase sm:pl-0">
                                                    Titulo</th>
                                                <th scope="col"
                                                    class="px-3 py-3 text-xs font-medium tracking-wide text-left text-gray-500 uppercase">
                                                    Link da página</th>

                                                <th scope="col"
                                                    class="px-3 py-3 text-xs font-medium tracking-wide text-left text-gray-500 uppercase">
                                                    Acessos</th>
                                                <th scope="col" class="relative py-3 pl-3 pr-4 sm:pr-0">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr>
                                                <td
                                                    class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-0">
                                                    home</td>
                                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">https://localhost/home</td>

                                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">0
                                                </td>
                                                <td
                                                    class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-0">
                                                    <a href="#"
                                                        class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

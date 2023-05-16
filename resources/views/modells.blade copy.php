<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modellek') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Név
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tervező
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Leírás
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kép
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Szezon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kategória
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ár
                            </th>
                            <th scope="col" class="px-6 py-3">
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody class="modell_body">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
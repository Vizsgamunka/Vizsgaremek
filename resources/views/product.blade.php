<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Termékek') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Termék Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Modell Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Méret
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Készlet
                            </th>
                            <th scope="col" class="px-6 py-3">
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody class="product_body">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
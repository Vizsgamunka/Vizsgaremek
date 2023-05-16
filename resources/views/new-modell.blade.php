<x-app-layout>
    <div class="mt-10 sm:mt-0" style="margin:auto;">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form action="#" method="POST">
                    <div class="overflow-hidden shadow sm:rounded-md">
                        <div class="bg-white px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nev" class="block text-sm font-medium leading-6 text-gray-900">Név</label>
                                    <input type="text" name="nev" id="nev" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tervezo" class="block text-sm font-medium leading-6 text-gray-900">Tervező</label>
                                    <select id="tervezo" name="tervezo" autocomplete="tervezo-name" class="mt-2 block w-full rounded-md border-0 bg-white py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option>Példa</option>
                                    </select>
                                </div>

                                
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="kep" class="block text-sm font-medium leading-6 text-gray-900">Kép</label>
                                    <textarea name="kep" rows="1" cols="30"></textarea>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="szezon" class="block text-sm font-medium leading-6 text-gray-900">Szezon</label>
                                    <select id="szezon" name="szezon" autocomplete="szezon-name" class="mt-2 block w-full rounded-md border-0 bg-white py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option>Példa</option>
                                    </select>
                                </div>
                                
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="kategoria" class="block text-sm font-medium leading-6 text-gray-900">Kategória</label>
                                    <select id="kategoria" name="kategoria" class="mt-2 block w-full rounded-md border-0 bg-white py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option>Példa</option>
                                    </select>
                                </div>
                                
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="ar" class="block text-sm font-medium leading-6 text-gray-900">Ár</label>
                                    <input type="number" name="ar" id="ar" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>


                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="button" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Felvisz</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
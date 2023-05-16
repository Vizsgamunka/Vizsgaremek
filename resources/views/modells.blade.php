@section('head')
<style>
    .modell_body{
        display:flex;
        justify-content:space-between;
    }
    .modell_elem{
        margin:3px;
    }
</style>
@endsection
<x-app-layout>
    <div class="bg-white">
        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <button type="button" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" id="ujModellForm">Új modell</button>
        </div>
        <div class="modell_body">

        </div>
    </div>
</x-app-layout>
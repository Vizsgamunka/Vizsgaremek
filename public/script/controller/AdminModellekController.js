import AdatModel from "../model/AdatModel.js";
import AdminModellekView from "../view/AdminModellekView.js";

class AdminModellekController{
    constructor(){
        const token = $(`meta[name="csrf-token"]`).attr("conent");
        const adminmodellekmodel = new AdatModel(token);
        adminmodellekmodel.adatBe('/api/modellek', this.megjelenit);
        

        $(window).on('modellPopUp', (event)=>{
            $(".modell_body").append(`
                <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

                    <div class="fixed inset-0 bg-gray-500 bg-opacity-25 transition-opacity"></div>
                
                        <div class="fixed inset-0 z-10 overflow-y-auto">
                        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <h2 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Új modell felvitele</h2>
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="nev" class="block text-sm font-medium leading-6 text-gray-900">Név</label>
                                            <input type="text" name="nev" id="nev" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="tervezo" class="block text-sm font-medium leading-6 text-gray-900">Tervező</label>
                                            <select id="tervezo" name="tervezo" autocomplete="tervezo-name" class="mt-2 block w-full rounded-md border-0 bg-white py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="leiras" class="block text-sm font-medium leading-6 text-gray-900">Leírás</label>
                                            <textarea rows="7" cols="50" name="leiras" id="leiras" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                        </div>

                                        <div class="col-span-6 sm:col-span-4">
                                        
                                            <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label class="form-label block text-sm font-medium leading-6 text-gray-900" for="inputFile">Kép</label>
                                                    <input type="file" name="file id="inputFile">
                                                </div>
                                            </form>

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="szezon" class="block text-sm font-medium leading-6 text-gray-900">Szezon</label>
                                            <select id="szezon" name="szezon" autocomplete="szezon-name" class="mt-2 block w-full rounded-md border-0 bg-white py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <option>NYA</option>
                                                <option>TAV</option>
                                                <option>OSZ</option>
                                                <option>TEL</option>
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
                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                    <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto" id="ujModellFelvisz">Felvisz</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            `)
        });

        $(window).on('ujModell', (event)=>{
            console.log(event.detail);
            adminmodellekmodel.adatUj('/api/modell_tarol', event.detail);
        });
    }


    
    megjelenit(tomb){
        let szuloElem = $(".modell_body");
        tomb.forEach(termek => {
            new AdminModellekView(termek, szuloElem);
        });
    }

    /*ujModellTervezoFeltolt(tomb){
        let szuloElem = $("#tervezo");
        tomb.forEach(tervezo => {
            const amv = new AdminModellekView();
            amv.ujModellTervezok(tervezo, szuloElem);
        });
    }*/
}

export default AdminModellekController;
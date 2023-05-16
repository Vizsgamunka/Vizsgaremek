class PublicTermekekView {
    #elem;
    constructor(elem, szuloElem) {
        this.#elem = elem;
        szuloElem.append(`
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            <div class="group relative">
                <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                    <img src="${elem.kep}" alt="..." class="h-full w-full object-cover object-center lg:h-full lg:w-full" id="kep_elem">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="/termekek/${elem.modell_id}">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                ${elem.nev}
                            </a>
                        </h3>
                    </div>
                    <p class="text-sm font-medium text-gray-900">${elem.ar}  Ft</p>
                </div>
            </div>
        </div>
        `);



        this.modellMegjelenit = $(`#termekId${elem.modell_id}`);

        this.modellMegjelenit.on("click", () => {
            this.kattintasTrigger('modellMegjelenit')
        });




    }

    kattintasTrigger(esemenyneve) {
        const esemeny = new CustomEvent(esemenyneve, {detail: this.#elem.modell_id});
        window.dispatchEvent(esemeny);
    }

}

export default PublicTermekekView;

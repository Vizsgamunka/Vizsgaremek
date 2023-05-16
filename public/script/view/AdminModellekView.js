class AdminModellekView{
    #elem;
    #szuloElem
    constructor(elem, szuloElem){
        this.#elem = elem;
        this.#szuloElem = szuloElem;
        szuloElem.append(`
            <div class="modell_elem">
                <a href="#">${elem.nev}</a>
                <p class="mt-1 text-sm text-gray-500">${elem.tervezo}</p>
                <p class="text-sm font-medium text-gray-900">${elem.ar} Ft</p>
            </div>
        `);

        this.ujModell = $(`#ujModellForm`);
        this.ujModell.on("click", ()=>{
            this.kattintasTrigger("modellPopUp");
        });

        this.ujModell = $(`#ujModellFelvisz`);
        this.ujModell.on("click", ()=>{
            this.kattintasTrigger("ujModell");
        });
    } 

    

    kattintasTrigger(esemenyNeve){
        const esemeny = new CustomEvent(esemenyNeve, {detail:this.#elem});
        window.dispatchEvent(esemeny);
    }
}

export default AdminModellekView;
import AdatModel from "../model/AdatModel.js";
import AdminFelhasznalokView from "../view/AdminFelhasznalokView.js";

class AdminFelhasznaloController{
    constructor(){
        const token = $(`meta[name="csrf-token"]`).attr("conent");
        const felhasznalomodel = new AdatModel(token);
        felhasznalomodel.adatBe('/api/felhasznalok', this.megjelenit);

        $(window).on('torol', (event)=>{
            console.log(event.detail);
            felhasznalomodel.adatTorol('api/felhasznalo_torol/', event.detail);
            $(".felhasznalo_body").empty();
            felhasznalomodel.adatBe('/api/felhasznalok', this.megjelenit);
        });
    }

    megjelenit(tomb){
        let szuloElem = $(".felhasznalo_body");
        tomb.forEach(felhasznalo => {
            new AdminFelhasznalokView(felhasznalo, szuloElem);
        });
    }
}

export default AdminFelhasznaloController;
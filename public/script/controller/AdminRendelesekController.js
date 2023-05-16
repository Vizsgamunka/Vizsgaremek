import AdatModel from "../model/AdatModel.js";
import AdminRendelesekView from "../view/AdminRendelesekView.js";

class AdminRendelesekController{
    constructor(){
        const token = $(`meta[name="csrf-token"]`).attr("conent");
        const adminrendelesekmodel = new AdatModel(token);
        adminrendelesekmodel.adatBe('/api/rendelesek', this.megjelenit);
    }

    megjelenit(tomb){
        let szuloElem = $(".rendeles_body");
        tomb.forEach(rendeles => {
            new AdminRendelesekView(rendeles, szuloElem);
        });
    }
}

export default AdminRendelesekController;
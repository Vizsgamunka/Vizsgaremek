import AdatModel from "../model/AdatModel.js";
import AdminTermekekView from "../view/AdminTermekekView.js";

class AdminTermekekController{
    constructor(){
        const token = $(`meta[name="csrf-token"]`).attr("conent");
        const admintermekmodel = new AdatModel(token);
        admintermekmodel.adatBe('api/termekek', this.megjelenit);
    }

    megjelenit(tomb){
        let szuloElem = $(".product_body");
        tomb.forEach(termek => {
            new AdminTermekekView(termek, szuloElem);
        });
    }
}

export default AdminTermekekController;
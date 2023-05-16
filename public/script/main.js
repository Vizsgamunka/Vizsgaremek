import TervezoController from "./controller/TervezokController.js";
import TermekekController from "../script/controller/TermekekController.js";
import TermekController from "../script/controller/TermekController.js";
import KategoriaController from "../script/controller/KategoriaController.js";
import AdminFelhasznaloController from "../script/controller/AdminFelhasznaloController.js";
import KosarController from "./controller/KosarController.js";
import AdminRendelesekController from "./controller/AdminRendelesekController.js";
import AdminModellekController from "./controller/AdminModellekController.js";
import AdminTermekekController from "./controller/AdminTermekekController.js";

$(function(){
    new KategoriaController();
    new TervezoController();
    new KosarController();
    new AdminFelhasznaloController();
    new AdminRendelesekController();
    new AdminModellekController();
    new AdminTermekekController();

    window.onscroll = function() {myFunction()};
    
    var nav = document.getElementById("myNav");
    var sticky = nav.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset > sticky) {
        nav.classList.add("sticky");
      } else {
        nav.classList.remove("sticky");
      }
    }

    
});


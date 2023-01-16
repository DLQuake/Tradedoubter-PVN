// import external dependencies
import $ from "jquery";
import "../sass/app.sass";

import Benefits from "./blocks/Benefits.block";
import Features from "./blocks/Features.block";
import References from "./blocks/References.block";

import BurgerMenu from "./modules/BurgerMenu.module";
import HeaderPrimary from "./modules/HeaderPrimary.module";

$(document).ready(() => {
  Benefits.init();
  Features.init();
  References.init();
  BurgerMenu.init();
  HeaderPrimary.init();
})

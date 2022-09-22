// import external dependencies
import $ from "jquery";
import "../sass/app.sass";

import HeroHomepage from "./blocks/HeroHomepage.block";
import Benefits from "./blocks/Benefits.block";
import References from "./blocks/References.block";
import Features from "./blocks/Features.block";

import BurgerMenu from "./modules/BurgerMenu.module";
import ScrollTop from "./modules/ScrollTop.module";
import HeaderPrimary from "./modules/HeaderPrimary.module";
import CarouselProducts from "./modules/CarouselProducts.module";

$(document).ready(() => {
  CarouselProducts.init();
  HeroHomepage.init();
  BurgerMenu.init();
  ScrollTop.init();
  HeaderPrimary.init();
  References.init();
  Benefits.init();
  Features.init();
})

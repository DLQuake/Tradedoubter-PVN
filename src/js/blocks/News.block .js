import $ from 'jquery';
const News = {
  settings: {
    target: '.b-News',
    slider: '.b-News__pages',
  },
  init(args) {
    this.settings = $.extend(true, this.settings, args);
    if ($(this.settings.target).length > 0) {
      this.catchDOM(this.settings, this.afterInit.bind(this));
      this.initSwiper();
    }
  },
  afterInit() {
    this.bindEvents();
  },
  catchDOM(settings, callback) {
    const target = $(settings.target);
    this.$target = {
      root: target,
      slider: target.find(settings.slider),
    };
    callback();
  },
  bindEvents() {
  },
  initSwiper() {
    const swiper = new Swiper(this.$target.slider[0], {
      spaceBetween: 80,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    })
  },
};
export default News;

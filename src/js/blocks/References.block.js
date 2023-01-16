import $ from 'jquery';
const References = {
  settings: {
    target: '.b-References',
    slider: '.b-References__slider',
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
      spaceBetween: 30,
      mousewheel: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
      },
    })
  },
};
export default References;

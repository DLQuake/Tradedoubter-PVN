import $ from 'jquery';
import ActiveMenuLink from "active-menu-link";
const Features = {
    settings: {
        target: '.b-Features',
        stickymenu: '.b-Features__navigation',
    },
    init(args) {
        this.settings = $.extend(true, this.settings, args);
        if ($(this.settings.target).length > 0) {
            this.catchDOM(this.settings, this.afterInit.bind(this));
        }
    },
    afterInit() {
        this.bindEvents();
    },
    catchDOM(settings, callback) {
        const target = $(settings.target);
        this.$target = {
            root: target,
            stickymenu: target.find(settings.stickymenu),
        };
        callback();
    },
    bindEvents() {
        $(window).on("scroll", this.initStickyMenu.bind(this));
    },
    initStickyMenu() {
        new ActiveMenuLink(".b-Features__navigation");
    },
};
export default Features;

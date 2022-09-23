import $ from 'jquery';
const Features = {
    settings: {
        target: '.b-Features',
        stickymenu: 'b-Features__feature-container-list-item',
    },
    init(args) {
        this.settings = $.extend(true, this.settings, args);
        if ($(this.settings.target).length > 0) {
            this.catchDOM(this.settings, this.afterInit.bind(this));
            this.stickyMenu();
        }
    },
    afterInit() {
        this.bindEvents();
    },
    catchDOM(settings, callback) {
        const target = $(settings.target);
        this.$target = {
            root: target,
        };
        callback();
    },
    bindEvents() {
    },
    stickyMenu() {
        window.addEventListener("scroll", event => {
            let fromTop = window.scrollY;

            this.settings.stickymenu.forEach(link => {
                let section = document.querySelector(link.hash);

                if (
                    section.offsetTop <= fromTop &&
                    section.offsetTop + section.offsetHeight > fromTop
                ) {
                    link.classList.add("active");
                } else {
                    link.classList.remove("active");
                }
            });
        });
    }
};
export default Features;
/* Template Name: ARES - Tailwind CSS Real Estate Template
   Author: ares
   Email: support@ares.emu.edu.tr
   Website: https://ares.emu.edu.tr
   Version: 1.1.0
   Created: June 2022
   File Description: Common JS file of the template(plugins.init.js)
*/


/*********************************/
/*         INDEX                 */
/*================================
 *     01.  Tiny Slider          *
 *     02.  Data Counter         *
 *     03.  Tobii lightbox       * (For Portfolio pages)
 *     04.  Back Button          *
 *     05.  Particles            *
 *     06.  Components           *
 *          1. Navtabs           *
 *          2. Modal             *
 *          3. Carousel          *
 *          4. Accordions        *
 *     07.  Brokerage Calculator *
 *     07.  Choices Js           *
 *     07.  Maintenance Js       * (For Maintenance Page)
 *     07.  Countdown Js         * (For Comingsoon Page)
 ================================*/
         
//=========================================//
/*            01) Tiny slider              */
//=========================================//

if(document.getElementsByClassName('tiny-single-item').length > 0) {
    var slider = tns({
        container: '.tiny-single-item',
        items: 1,
        controls: false,
        mouseDrag: true,
        loop: true,
        rewind: true,
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 3000,
        navPosition: "bottom",
        speed: 50,
        gutter: 16,
    });
};

if(document.getElementsByClassName('tiny-three-item').length > 0) {
    var slider = tns({
        container: '.tiny-three-item',
        controls: false,
        mouseDrag: true,
        loop: true,
        rewind: true,
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 3000,
        navPosition: "bottom",
        speed: 400,
        gutter: 12,
        responsive: {
            992: {
                items: 3
            },

            767: {
                items: 2
            },

            320: {
                items: 1
            },
        },
    });
};

if(document.getElementsByClassName('tiny-home-slide-three').length > 0) {
    var slider = tns({
        container: '.tiny-home-slide-three',
        controls: false,
        mouseDrag: true,
        loop: true,
        rewind: true,
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 3000,
        navPosition: "bottom",
        controlsText: ['<i class="mdi mdi-chevron-left"></i>', '<i class="mdi mdi-chevron-right"></i>'],
        nav: false,
        speed: 400,
        gutter: 0,
        responsive: {
            992: {
                items: 3
            },

            767: {
                items: 2
            },

            320: {
                items: 1
            },
            320: {
                items: 4
            },
        },
    });
};

//=========================================//
/*/*            02) Data Counter           */
//=========================================//

try {
    const counter = document.querySelectorAll('.counter-value');
    const speed = 2500; // The lower the slower

    counter.forEach(counter_value => {
        const updateCount = () => {
            const target = +counter_value.getAttribute('data-target');
            const count = +counter_value.innerText;

            // Lower inc to slow and higher to slow
            var inc = target / speed;

            if (inc < 1) {
                inc = 1;
            }

            // Check if target is reached
            if (count < target) {
                // Add inc to count and output in counter_value
                counter_value.innerText = (count + inc).toFixed(0);
                // Call function every ms
                setTimeout(updateCount, 1);
            } else {
                counter_value.innerText = target;
            }
        };

        updateCount();
    });
} catch (err) {

}


//=========================================//
/*/*            03) Tobii lightbox         */
//=========================================//

try {
    const tobii = new Tobii()
} catch (err) {

}

//=========================================//
/*/*            04) Back Button            */
//=========================================//
document.getElementsByClassName("back-button")[0]?.addEventListener("click", (e)=>{
    if (document.referrer !== "") {
        e.preventDefault();
        window.location.href = document.referrer;
      }
})

  
//=========================================//
/*            05) Particles                */
//=========================================//

try {
    particlesJS("particles-snow", {
        "particles": {
            "number": {
                "value": 250,
                "density": {
                    "enable": false,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 36
                },
                "image": {
                    "src": "",
                    "width": 1000,
                    "height": 1000
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 0.5,
                    "opacity_min": 1,
                    "sync": false
                }
            },
            "size": {
                "value": 3.2,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 20,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": false,
                "distance": 100,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 2
            },
            "move": {
                "enable": true,
                "speed": 1,
                "direction": "bottom",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 800,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": false,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 200,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 71,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
} catch (error) {

}

try{
    particlesJS(
        "elements",

        {
        "particles": {
            "number": {
            "value": 70,
            "density": {
                "enable": true,
                "value_area": 1000
            }
            },
            "color": {
            value: ["#fff", "#def9ad", "#333", "#b7d3aa", "#008FFF"]
            },
            "shape": {
            "type": "polygon",
            "stroke": {
                "width": 0,
                "color": "#ffffff"
            },
            "polygon": {
                "nb_sides": 5
            },
            },
            "opacity": {
            "value": .3,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
            },
            "size": {
            "value": 25,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 30,
                "size_min": 2,
                "sync": false
            }
            },
            "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
            },
            "move": {
            "enable": true,
            "speed": 1,
            "direction": "bottom",
            "random": false,
            "straight": true,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": true,
                "rotateX": 600,
                "rotateY": 1200
            }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
            "onhover": {
                "enable": true,
                "mode": "repulse"
            },
            "onclick": {
                "enable": true,
                "mode": "push"
            },
            "resize": true
            },
            "modes": {
            "grab": {
                "distance": 400,
                "line_linked": {
                "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 100,
                "duration": 0.4,
                "speed": 3
            },
            "push": {
                "particles_nb": 6
            },
            "remove": {
                "particles_nb": 2
            }
            }
        },
        "retina_detect": true
        }
        );


        particlesJS(
        "fire",
        {
        "particles": {
            "number": {
            "value": 150,
            "density": {
                "enable": true,
                "value_area": 700
            }
            },
            "color": {
            "value": "#ed6404"
            },
            "shape": {
            "type": "polygon",
            "stroke": {
                "width": 0,
                "color": "#000000"
            },
            "polygon": {
                "nb_sides": 5
            },
            },
            "opacity": {
            "value": 0.75,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 5,
                "opacity_min": 0.1,
                "sync": false
            }
            },
            "size": {
            "value": 2,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 30,
                "size_min": 0.5,
                "sync": false
            }
            },
            "line_linked": {
            "enable": false,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
            },
            "move": {
            "enable": true,
            "speed": 40,
            "direction": "bottom-right",
            "random": true,
            "straight": true,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": true,
                "rotateX": 600,
                "rotateY": 1200
            }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
            "onhover": {
                "enable": true,
                "mode": "repulse"
            },
            "onclick": {
                "enable": true,
                "mode": "push"
            },
            "resize": true
            },
            "modes": {
            "grab": {
                "distance": 400,
                "line_linked": {
                "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 300,
                "duration": 1
            },
            "push": {
                "particles_nb": 4
            },
            "remove": {
                "particles_nb": 2
            }
            }
        },
        "retina_detect": true
        }
        );

        ScrollReveal().reveal('.text');
}catch (error) {

}
//=========================================//
/*            06) Components               */
//=========================================//

//============= 01) Navtabs ===============//
try {
    const Default = {
        defaultTabId: null,
        activeClasses: 'text-white bg-blue-500',
        inactiveClasses: 'hover:text-blue-500 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-slate-800',
        onShow: () => { }
    }
    
    class Tabs {
        constructor(items = [], options = {}) {
            this._items = items
            this._activeTab = options ? this.getTab(options.defaultTabId) : null
            this._options = { ...Default, ...options }
            this._init()
        }
    
        _init() {
            if (this._items.length) {
                // set the first tab as active if not set by explicitly
                if (!this._activeTab) {
                    this._setActiveTab(this._items[0])
                }
    
                // force show the first default tab
                this.show(this._activeTab.id, true)
    
                // show tab content based on click
                this._items.map(tab => {
                    tab.triggerEl.addEventListener('click', () => {
                        this.show(tab.id)
                    })
                })
            }
        }
    
        getActiveTab() {
            return this._activeTab
        }
    
        _setActiveTab(tab) {
            this._activeTab = tab
        }
    
        getTab(id) {
            return this._items.filter(t => t.id === id)[0]
        }
    
        show(id, forceShow = false) {
            const tab = this.getTab(id)
    
            // don't do anything if already active
            if (tab === this._activeTab && !forceShow) {
                return
            }
    
            // hide other tabs
            this._items.map(t => {
                if (t !== tab) {
                    t.triggerEl.classList.remove(...this._options.activeClasses.split(" "));
                    t.triggerEl.classList.add(...this._options.inactiveClasses.split(" "));
                    t.targetEl.classList.add('hidden')
                    t.triggerEl.setAttribute('aria-selected', false)
                }
            })
    
            // show active tab
            tab.triggerEl.classList.add(...this._options.activeClasses.split(" "));
            tab.triggerEl.classList.remove(...this._options.inactiveClasses.split(" "));
            tab.triggerEl.setAttribute('aria-selected', true)
            tab.targetEl.classList.remove('hidden')
    
            this._setActiveTab(tab)
    
            // callback function
            this._options.onShow(this, tab)
        }
    
    }
    
    window.Tabs = Tabs;
    
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-tabs-toggle]').forEach(triggerEl => {
    
            const tabElements = []
            let defaultTabId = null
            triggerEl.querySelectorAll('[role="tab"]').forEach(el => {
                const isActive = el.getAttribute('aria-selected') === 'true'
                const tab = {
                    id: el.getAttribute('data-tabs-target'),
                    triggerEl: el,
                    targetEl: document.querySelector(el.getAttribute('data-tabs-target'))
                }
                tabElements.push(tab)
    
                if (isActive) {
                    defaultTabId = tab.id
                }
            })
            new Tabs(tabElements, {
                defaultTabId: defaultTabId
            })
        })
    })
} catch (error) {
    
}

//********* 2) Modals ********//
try {
    const Default = {
        placement: 'center',
        backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40',
        onHide: () => {},
        onShow: () => {},
        onToggle: () => {}
    }
    class Modal {
        constructor(targetEl = null, options = {}) {
            this._targetEl = targetEl
            this._options = { ...Default, ...options }
            this._isHidden = true
            this._init()
        }
    
        _init() {
            this._getPlacementClasses().map(c => {
                this._targetEl.classList.add(c)
            })
        }
    
        _createBackdrop() {
            if(this._isHidden) {
                const backdropEl = document.createElement('div');
                backdropEl.setAttribute('modal-backdrop', '');
                backdropEl.classList.add(...this._options.backdropClasses.split(" "));
                document.querySelector('body').append(backdropEl);
            }
        }
    
        _destroyBackdropEl() {
            if (!this._isHidden) {
                document.querySelector('[modal-backdrop]').remove();
            }
        }
    
        _getPlacementClasses() {
            switch (this._options.placement) {
    
                // top
                case 'top-left':
                    return ['justify-start', 'items-start']
                case 'top-center':
                    return ['justify-center', 'items-start']
                case 'top-right':
                    return ['justify-end', 'items-start']
    
                // center
                case 'center-left':
                    return ['justify-start', 'items-center']
                case 'center':
                    return ['justify-center', 'items-center']
                case 'center-right':
                    return ['justify-end', 'items-center']
    
                // bottom
                case 'bottom-left':
                    return ['justify-start', 'items-end']
                case 'bottom-center':
                    return ['justify-center', 'items-end']
                case 'bottom-right':
                    return ['justify-end', 'items-end']
    
                default:
                    return ['justify-center', 'items-center']
            }
        }
    
        toggle() {
            if (this._isHidden) {
                this.show()
            } else {
                this.hide()
            }
    
            // callback function
            this._options.onToggle(this)
        }
    
        show() {
            this._targetEl.classList.add('flex')
            this._targetEl.classList.remove('hidden')
            this._targetEl.setAttribute('aria-modal', 'true')
            this._targetEl.setAttribute('role', 'dialog')
            this._targetEl.removeAttribute('aria-hidden')
            this._createBackdrop()
            this._isHidden = false
    
            // callback function
            this._options.onShow(this)
        }
    
        hide() {
            this._targetEl.classList.add('hidden')
            this._targetEl.classList.remove('flex')
            this._targetEl.setAttribute('aria-hidden', 'true')
            this._targetEl.removeAttribute('aria-modal')
            this._targetEl.removeAttribute('role')
            this._destroyBackdropEl()
            this._isHidden = true
    
            // callback function
            this._options.onHide(this)
        }
    
    }
    
    window.Modal = Modal;
    
    const getModalInstance = (id, instances) => {
        if (instances.some(modalInstance => modalInstance.id === id)) {
            return instances.find(modalInstance => modalInstance.id === id)
        }
        return false
    }
    
    document.addEventListener('DOMContentLoaded', () => {
        let modalInstances = []
        document.querySelectorAll('[data-modal-toggle]').forEach(el => {
            const modalId = el.getAttribute('data-modal-toggle');
            const modalEl = document.getElementById(modalId);
            const placement = modalEl.getAttribute('data-modal-placement')
    
            if (modalEl) {
                if (!modalEl.hasAttribute('aria-hidden') && !modalEl.hasAttribute('aria-modal')) {
                    modalEl.setAttribute('aria-hidden', 'true');
                }
            }
    
            let modal = null
            if (getModalInstance(modalId, modalInstances)) {
                modal = getModalInstance(modalId, modalInstances)
                modal = modal.object
            } else {
                modal = new Modal(modalEl, {
                    placement: placement ? placement : Default.placement
                })
                modalInstances.push({
                    id: modalId,
                    object: modal
                })
            }
    
            el.addEventListener('click', () => {
                modal.toggle()
            })
        })
    })
} catch (error) {
    
}

//******** 3) Carousel********//
try {
    const Default = {
        defaultPosition: 0,
        indicators: {
            items: [],
            activeClasses: 'bg-white dark:bg-gray-800',
            inactiveClasses: 'bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800'
        },
        interval: 6000,
        onNext: () => { },
        onPrev: () => { },
        onChange: () => { }
    }
    
    class Carousel {
        constructor(items = [], options = {}) {
            this._items = items
            this._options = { ...Default, ...options, indicators : { ...Default.indicators, ...options.indicators } }
            this._activeItem = this.getItem(this._options.defaultPosition)
            this._indicators = this._options.indicators.items
            this._interval = null
            this._init()
            this.cycle()
    
        }
    
        /**
         * Initialise carousel and items based on active one
         */
        _init() {
            this._items.map(item => {
                item.el.classList.add('absolute', 'inset-0', 'transition-all', 'transform')
            })
    
            // if no active item is set then first position is default
            if (this._getActiveItem()) {
                this.slideTo(this._getActiveItem().position)
            } else {
                this.slideTo(0)
            }
    
            this._indicators.map((indicator, position) => {
                indicator.el.addEventListener('click', () => {
                    this.slideTo(position)
                })
            })
        }
    
        getItem(position) {
            return this._items[position]
        }
    
        /**
         * Slide to the element based on id
         * @param {*} position 
         */
        slideTo(position) {
            const nextItem = this._items[position]
            const rotationItems = {
                'left': nextItem.position === 0 ? this._items[this._items.length - 1] : this._items[nextItem.position - 1],
                'middle': nextItem,
                'right': nextItem.position === this._items.length - 1 ? this._items[0] : this._items[nextItem.position + 1]
            }
            this._rotate(rotationItems)
            this._setActiveItem(nextItem.position)
            if (this._interval) {
                this.pause()
                this.cycle()
            }
    
            this._options.onChange(this)
        }
    
        /**
         * Based on the currently active item it will go to the next position
         */
        next() {
            const activeItem = this._getActiveItem()
            let nextItem = null
    
            // check if last item
            if (activeItem.position === this._items.length - 1) {
                nextItem = this._items[0]
            } else {
                nextItem = this._items[activeItem.position + 1]
            }
    
            this.slideTo(nextItem.position)
    
            // callback function
            this._options.onNext(this)
        }
    
        /**
         * Based on the currently active item it will go to the previous position
         */
        prev() {
            const activeItem = this._getActiveItem()
            let prevItem = null
    
            // check if first item
            if (activeItem.position === 0) {
                prevItem = this._items[this._items.length - 1]
            } else {
                prevItem = this._items[activeItem.position - 1]
            }
    
            this.slideTo(prevItem.position)
    
            // callback function
            this._options.onPrev(this)
        }
    
        /**
         * This method applies the transform classes based on the left, middle, and right rotation carousel items
         * @param {*} rotationItems 
         */
        _rotate(rotationItems) {
            // reset
            this._items.map(item => {
                item.el.classList.add('hidden')
            })
    
            // left item (previously active)
            rotationItems.left.el.classList.remove('-translate-x-full', 'translate-x-full', 'translate-x-0', 'hidden', 'z-20')
            rotationItems.left.el.classList.add('-translate-x-full', 'z-10')
    
            // currently active item
            rotationItems.middle.el.classList.remove('-translate-x-full', 'translate-x-full', 'translate-x-0', 'hidden', 'z-10')
            rotationItems.middle.el.classList.add('translate-x-0', 'z-20')
    
            // right item (upcoming active)
            rotationItems.right.el.classList.remove('-translate-x-full', 'translate-x-full', 'translate-x-0', 'hidden', 'z-20')
            rotationItems.right.el.classList.add('translate-x-full', 'z-10')
        }
    
        /**
         * Set an interval to cycle through the carousel items
         */
        cycle() {
            this._interval = setInterval(() => {
                this.next();
            }, this._options.interval)
        }
    
        /**
         * Clears the cycling interval
         */
        pause() {
            clearInterval(this._interval);
        }
    
        /**
         * Get the currently active item
         */
        _getActiveItem() {
            return this._activeItem
        }
    
        /**
         * Set the currently active item and data attribute
         * @param {*} position 
         */
        _setActiveItem(position) {
            this._activeItem = this._items[position]
    
            // update the indicators if available
            if (this._indicators.length) {
                this._indicators.map(indicator => {
                    indicator.el.setAttribute('aria-current', 'false')
                    indicator.el.classList.remove(...this._options.indicators.activeClasses.split(" "))
                    indicator.el.classList.add(...this._options.indicators.inactiveClasses.split(" "))
                })
                this._indicators[position].el.classList.add(...this._options.indicators.activeClasses.split(" "))
                this._indicators[position].el.classList.remove(...this._options.indicators.inactiveClasses.split(" "))
                this._indicators[position].el.setAttribute('aria-current', 'true')
            }
        }
    
    }
    
    window.Carousel = Carousel;
    
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-carousel]').forEach(carouselEl => {
            const interval = carouselEl.getAttribute('data-carousel-interval')
            const slide = carouselEl.getAttribute('data-carousel') === 'slide' ? true : false
    
            const items = []
            let defaultPosition = 0
            if (carouselEl.querySelectorAll('[data-carousel-item]').length) {
                [...carouselEl.querySelectorAll('[data-carousel-item]')].map((carouselItemEl, position) => {
                    items.push({
                        position: position,
                        el: carouselItemEl
                    })
    
                    if (carouselItemEl.getAttribute('data-carousel-item') === 'active') {
                        defaultPosition = position
                    }
                })
            }
    
            const indicators = [];
            if (carouselEl.querySelectorAll('[data-carousel-slide-to]').length) {
                [...carouselEl.querySelectorAll('[data-carousel-slide-to]')].map((indicatorEl) => {
                    indicators.push({
                        position: indicatorEl.getAttribute('data-carousel-slide-to'),
                        el: indicatorEl
                    })
                })
            }
    
            const carousel = new Carousel(items, {
                defaultPosition: defaultPosition,
                indicators: {
                    items: indicators
                },
                interval: interval ? interval : Default.interval
            })
    
            if (slide) {
                carousel.cycle();
            }
    
            // check for controls
            const carouselNextEl = carouselEl.querySelector('[data-carousel-next]')
            const carouselPrevEl = carouselEl.querySelector('[data-carousel-prev]')
    
            if (carouselNextEl) {
                carouselNextEl.addEventListener('click', () => {
                    carousel.next()
                })
            }
    
            if (carouselPrevEl) {
                carouselPrevEl.addEventListener('click', () => {
                    carousel.prev()
                })
            }
    
        })
    })
    
} catch (error) {
    
}

//********4) Accordions********/
try {
    const Default = {
        alwaysOpen: false,
        activeClasses: 'bg-gray-50 dark:bg-slate-800 text-blue-600',
        inactiveClasses: 'text-dark dark:text-white',
        onOpen: () => { },
        onClose: () => { },
        onToggle: () => { }
    }
    
    class Accordion {
        constructor(items = [], options = {}) {
            this._items = items
            this._options = { ...Default, ...options }
            this._init()
        }
    
        _init() {
            if (this._items.length) {
                // show accordion item based on click
                this._items.map(item => {
    
                    if (item.active) {
                        this.open(item.id)
                    }
    
                    item.triggerEl.addEventListener('click', () => {
                        this.toggle(item.id)
                    })
                })
            }
        }
    
        getItem(id) {
            return this._items.filter(item => item.id === id)[0]
        }
    
        open(id) {
            const item = this.getItem(id)
    
            // don't hide other accordions if always open
            if (!this._options.alwaysOpen) {
                this._items.map(i => {
                    if (i !== item) {
                        i.triggerEl.classList.remove(...this._options.activeClasses.split(" "))
                        i.triggerEl.classList.add(...this._options.inactiveClasses.split(" "))
                        i.targetEl.classList.add('hidden')
                        i.triggerEl.setAttribute('aria-expanded', false)
                        i.active = false
    
                        // rotate icon if set
                        if (i.iconEl) {
                            i.iconEl.classList.remove('rotate-180')
                        }
                    }
                })
            }
    
            // show active item
            item.triggerEl.classList.add(...this._options.activeClasses.split(" "))
            item.triggerEl.classList.remove(...this._options.inactiveClasses.split(" "))
            item.triggerEl.setAttribute('aria-expanded', true)
            item.targetEl.classList.remove('hidden')
            item.active = true
    
            // rotate icon if set
            if (item.iconEl) {
                item.iconEl.classList.add('rotate-180')
            }
    
            // callback function
            this._options.onOpen(this, item)
        }
    
        toggle(id) {
            const item = this.getItem(id)
    
            if (item.active) {
                this.close(id)
            } else {
                this.open(id)
            }
    
            // callback function
            this._options.onToggle(this, item)
        }
    
        close(id) {
            const item = this.getItem(id)
    
            item.triggerEl.classList.remove(...this._options.activeClasses.split(" "))
            item.triggerEl.classList.add(...this._options.inactiveClasses.split(" "))
            item.targetEl.classList.add('hidden')
            item.triggerEl.setAttribute('aria-expanded', false)
            item.active = false
    
            // rotate icon if set
            if (item.iconEl) {
                item.iconEl.classList.remove('rotate-180')
            }
    
            // callback function
            this._options.onClose(this, item)
        }
    
    }
    
    window.Accordion = Accordion;
    
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-accordion]').forEach(accordionEl => {
    
            const alwaysOpen = accordionEl.getAttribute('data-accordion')
            const activeClasses = accordionEl.getAttribute('data-active-classes')
            const inactiveClasses = accordionEl.getAttribute('data-inactive-classes')
    
            const items = []
            accordionEl.querySelectorAll('[data-accordion-target]').forEach(el => {
                const item = {
                    id: el.getAttribute('data-accordion-target'),
                    triggerEl: el,
                    targetEl: document.querySelector(el.getAttribute('data-accordion-target')),
                    iconEl: el.querySelector('[data-accordion-icon]'),
                    active: el.getAttribute('aria-expanded') === 'true' ? true : false
                }
                items.push(item)
            })
    
            new Accordion(items, {
                alwaysOpen: alwaysOpen === 'open' ? true : false,
                activeClasses: activeClasses ? activeClasses : Default.activeClasses,
                inactiveClasses: inactiveClasses ? inactiveClasses : Default.inactiveClasses
            })
        })
    })
} catch (error) {
    
}

//=========================================//
/*      07) Brokerage Calculator           */
//=========================================//

try {
    const rangeSlider = document.getElementById('slider');
    const value  = rangeSlider.value;
        document.getElementById('amount-label').innerHTML = value;
        document.getElementById('saving-label').innerHTML = parseFloat(value *0.01).toFixed(2);
    rangeSlider.addEventListener('input',function(e){
        const value  = rangeSlider.value;
        document.getElementById('amount-label').innerHTML = value;
        document.getElementById('saving-label').innerHTML = parseFloat(value *0.01).toFixed(2);
    });
} catch (error) {
    
}

//=========================================//
/*      08) Choices Js                    */
//=========================================//

try {
    var singleLocation = new Choices('#choices-location');
    var singleCategorie = document.getElementById('choices-type');
    if(singleCategorie){
        var singleCategories = new Choices('#choices-type');
    }
} catch (error) {
    
}
//for buy
try {
    var choicescatagory = new Choices('#choices-catagory-buy');
    var choicesmin = document.getElementById('choices-min-price-buy');
    var choicesmax = document.getElementById('choices-max-price-buy');
    if(choicesmin){
        var choicesmins = new Choices('#choices-min-price-buy');
    }
    if(choicesmax){
        var choicesmaxs = new Choices('#choices-max-price-buy');
    }
} catch (error) {
    
}

//for sell
try {
    var choicescatagory = new Choices('#choices-catagory-sell');
    var choicesmin = document.getElementById('choices-min-price-sell');
    var choicesmax = document.getElementById('choices-max-price-sell');
    if(choicesmin){
        var choicesmins = new Choices('#choices-min-price-sell');
    }
    if(choicesmax){
        var choicesmaxs = new Choices('#choices-max-price-sell');
    }
} catch (error) {
    
}

//for rent
try {
    var choicescatagory = new Choices('#choices-catagory-rent');
    var choicesmin = document.getElementById('choices-min-price-rent');
    var choicesmax = document.getElementById('choices-max-price-rent');
    if(choicesmin){
        var choicesmins = new Choices('#choices-min-price-rent');
    }
    if(choicesmax){
        var choicesmaxs = new Choices('#choices-max-price-rent');
    }
} catch (error) {
    
}




//=========================================//
/*/*            09) Maintenance js         */
//=========================================//

try {
    if(document.getElementById("maintenance")){
        var seconds = 3599;
        function secondPassed() {
            var minutes = Math.round((seconds - 30) / 60);
            var remainingSeconds = seconds % 60;
            if (remainingSeconds < 10) {
                remainingSeconds = "0" + remainingSeconds;
            }
            document.getElementById('maintenance').innerHTML = minutes + ":" + remainingSeconds;
            if (seconds == 0) {
                clearInterval(countdownTimer);
                document.getElementById('maintenance').innerHTML = "Buzz Buzz";
            } else {
                seconds--;
            }
        }
        var countdownTimer = setInterval('secondPassed()', 1000);
    }
} catch (err) {

}


//=========================================//
/*            10) Countdown Js             */
//=========================================//
try {
    if(document.getElementById("days")){
        // The data/time we want to countdown to
        var eventCountDown = new Date("June 25, 2023 16:37:52").getTime();

        // Run myfunc every second
        var myfunc = setInterval(function () {

            var now = new Date().getTime();
            var timeleft = eventCountDown - now;

            // Calculating the days, hours, minutes and seconds left
            var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
            var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

            // Result is output to the specific element
            document.getElementById("days").innerHTML = days + "<p class='count-head'>Days</p> "
            document.getElementById("hours").innerHTML = hours + "<p class='count-head'>Hours</p> "
            document.getElementById("mins").innerHTML = minutes + "<p class='count-head'>Mins</p> "
            document.getElementById("secs").innerHTML = seconds + "<p class='count-head'>Secs</p> "

            // Display the message when countdown is over
            if (timeleft < 0) {
                clearInterval(myfunc);
                document.getElementById("days").innerHTML = ""
                document.getElementById("hours").innerHTML = ""
                document.getElementById("mins").innerHTML = ""
                document.getElementById("secs").innerHTML = ""
                document.getElementById("end").innerHTML = "00:00:00:00";
            }
        }, 1000);
    }
} catch (err) {

}

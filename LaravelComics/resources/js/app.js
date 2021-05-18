require('./bootstrap');

function initVue() {

    new Vue({
        el: '#app',
        data: {
            'logo': 'images/dc-logo.png',
            'linksHeader': [
                'CHARACTERS',
                'COMICS',
                'MOVIES',
                'TV',
                'GAMES',
                'COLLECTIBLES',
                'VIDEOS',
                'FANS',
                'NEWS',
                'SHOP',
            ],
            'activeLinkHeader': 0,
            'linksFooter': [
                'Shop',
                'About',
                'Gallery',
                'Locations',
                'Journal',
                'Contact',
                'Orders',
                '<i class="fas fa-shopping-cart"></i>',
            ],
            'inputEmail': '',
            'socialIcons': [
                'fa-instagram',
                'fa-twitter',
                'fa-facebook-f',
                'fa-pinterest-p',
            ],
            'emails': [],
            'inputEmail': '',
            'activeMap': false,
            'activeLocation': '',
            'scrollToDown': false,

        },
        mounted() {
            
        },
        methods: {
           
        },
        computed: {
           
        },
    });
}

function init() {
    initVue();
}

document.addEventListener('DOMContentLoaded', init);
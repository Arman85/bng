/*---------- Vue.js scripts ----------*/
/* Header components*/
Vue.component('mainmenu', {
    template: '#mainmenu'
});
Vue.component('servicesmenu', {
    template: '#servicesmenu'
});
var headerApp = new Vue({
    el: "#vue-header",
    data: {
        currentSubMenu: '',
        sm1: false,
        sm2: false,
        shadow: true,
        showPhone: false,
        showMsgWindow: false,
        showRecallWindow: false
    },
    methods: {
        chooseMenu: function(view, menu) {
            this.currentSubMenu = view;
            switch(menu) {
                case 'sm1': 
                    this.sm1 = true;
                    this.sm2 = false;
                    this.shadow = false;
                    break;
                case 'sm2': 
                    this.sm1 = false;
                    this.sm2 = true;
                    this.shadow = false;
                    break;
            }
        },
        requestWindow: function() {
            showMsgWindow = !showMsgWindow;
            showRecallWindow = !showRecallWindow;
        }
    }
});

var requestApp = new Vue({
    el: ".rf",
    data: {
        showMsgWindow: false,
        showRecallWindow: false,
        showFirstWindow: true
    },
    methods: {
        changeWindow: function() {
            this.showMsgWindow = !this.showMsgWindow;
            this.showRecallWindow = !this.showRecallWindow;
        },
        hideFirstWindow: function() {
            this.showFirstWindow = !this.showFirstWindow;
            this.showRecallWindow = !this.showRecallWindow;
        }
    }
});

/* Tabs components*/

Vue.component('howToPay', {
    template: '#howToPayTab'
});
Vue.component('news', {
    template: '#newsTab'
});
Vue.component('vacancies', {
    template: '#vacanciesTab',
    methods: {
        showaaa: function(view) {
            $('.showVF1').hide();
            $('.aaa').slideDown();
        },
        showbbb: function(view) {
            $('.showVF2').hide();
            $('.bbb').slideDown();
        },
        showccc: function(view) {
            $('.showVF3').hide();
            $('.ccc').slideDown();
        }
    }
});
Vue.component('actions', {
    template: '#actionsTab'
});
var tabsApp = new Vue({
    el: "#vue-tab",
    data: {
        currentTab: 'actions'
    },
    methods: {
        chooseTab: function(view) {
            this.currentTab = view;
        }
    }
});


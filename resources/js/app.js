require('./bootstrap');
require('jquery');

import Vue from 'vue'
import CharsFilter from './components/CharsComponent'

//console.log(CharsFilter);

window.onload = new Vue({
    //el: '#chars',
    template: '<CharsFilter/>',
    components: {
        props: [
            {
                name: 'chars',
                default:0,
            }
        ]
    }
});

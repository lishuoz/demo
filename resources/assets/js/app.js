
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');


 window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.component('bl-form', require('./components/Form.vue'));
 Vue.component('bl-table', require('./components/Table.vue'));
 Vue.component('bl-menu', require('./components/Menu.vue'));
 Vue.component('bl-map', require('./components/Map.vue'));
 Vue.component('bl-loadlist', require('./components/LoadList.vue'));
 Vue.component('bl-load', require('./components/Load.vue'));
 Vue.component('bl-header', require('./components/Header.vue'));
 Vue.component('bl-calculator', require('./components/Calculator.vue'));
 Vue.component('bl-calculator-chart', require('./components/CalculatorChart.vue'));


 const app = new Vue({
 	el: '#app',
 	data:{
 		origin: 'Canada',
 	},
 	methods:{
 		// changeOrigin(newOrigin){
 		// 	// this.origin = newOrigin
 		// 	console.log(newOrigin)
 		// },
 		// getOrigin(){
 		// 	if(this.firstVisit && this.getParameterByName('origin') != null){
 		// 		this.origin = this.getParameterByName('origin');
 		// 		firstVisit = false;
 		// 	}else if(!this.firstVisit){
 		// 		this.origin = this.origin
 		// 	}else{
 		// 		this.origin = 'Canada'
 		// 	}

 		// },
 		getParameterByName(name, url) {
 			if (!url) url = window.location.href;
 			name = name.replace(/[\[\]]/g, "\\$&");
 			var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
 			results = regex.exec(url);
 			if (!results) return null;
 			if (!results[2]) return '';
 			return decodeURIComponent(results[2].replace(/\+/g, " "));
 		}
 	}

 });

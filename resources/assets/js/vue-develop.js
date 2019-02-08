Vue.component('dynamic-table', require('./components/dynamic-table.vue'));
Vue.component('two-col-table', require('./components/two-col-table.vue'));

import { library } from '@fortawesome/fontawesome-svg-core';
import { faMinusCircle} from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
library.add(faMinusCircle);
Vue.component('font-awesome-icon', FontAwesomeIcon);

import Datepicker from 'vuejs-datepicker';
Vue.component('date-picker', Datepicker);

// window.Vuex = require('vuex');
// Vue.use(Vuex);

const app3 = new Vue({
   el: '#develop',
   data: {
       test_var : false,
        payload: 'Nothing',
        qualification_value: "Graduation",
        qualifications: ["High School", "Intermediate", "Graduation", "Diploma"],
        depts: ["Railway", "Bank", "New"],
        dept_values: [],
        rawhtml: "",
        message:"",
        user_not_genuine:true,
        user_mobile:"",
        user_email:"",
        last_date:new Date(),

        new_dept:false,
        homepage_href:"",
        filename: "test_file",
        modify_db: false,
        ready_to_submit: false,
        n_cols:{
            eligible: 0,
            pattern: 0
        },
        case_headers:{
            eligible: [],
            pattern: []
        },
        eligible_two_table:false,
        pattern_two_table:false,

        pattern_block: false,
        vacancies_block : false,
        centers_block: false,
        selection_block : false,

        departments:[],

        status:[
        "Online-Form",
        "Admit-Card",
        "Form-Correction",
        "Result",
    ],
   },

   created() {
        $.get( '/get-depts',
        function(data) {
            console.log(data);
            for (const key in data) {
                this.departments.push(data[key]);
            }
        }.bind(this));
   },

   methods: {
       fetchdata: function() {
           console.log("filter function ran");
           $.get( '/filter-data?dept[]='+this.dept_values+'&qualification='+this.qualification_value,
           function(data) {
               this.rawhtml = data;
           }.bind(this));
       },

       on_ready_to_submit: function(){
        this.ready_to_submit = (this.ready_to_submit ? false:true);
       },
       ght(){
            this.wid_value = window.innerWidth;
       },

       getDate(){
        var year = String(this.last_date.getFullYear());
        var month = this.last_date.getMonth();
        var date = this.last_date.getDate();
        month +=1;
        if(month < 10) month = "0" + String(month);
        if(date < 10) date = "0" + String(date);
        return (year+'-'+month+'-'+date);
       }
   },
   computed: {
       validate_user_email(){
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var email_correct = re.test(this.user_email);

            if(email_correct)this.user_not_genuine = false;
            else this.user_not_genuine = true;

            return email_correct;
       },
       validate_user_mobile(){
            var re = /^([6-9]{1})([0-9]{9})$/;
            var mobile_correct = re.test(this.user_mobile);

            if(mobile_correct)this.user_not_genuine = false;
            else this.user_not_genuine = true;
            
            return mobile_correct;
   }
   },
});
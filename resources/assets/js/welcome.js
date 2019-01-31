window.Vue = require("vue");
import { library } from '@fortawesome/fontawesome-svg-core';
import { faHeart, faFlag } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
library.add(faHeart, faFlag);
Vue.component('font-awesome-icon', FontAwesomeIcon);

const app= new Vue({
    el: "#client",
    data: {
        suspends:[],

        recents:[

            ["Hotel Management NCHM JEE-2019 Online Form", "/exams/nta-nchm-jee-2019", true, "2019-03-16"],

            ["CISF Head Constable 2019 Job 429 Vacancies", "/exams/mha-cisf-head-constable-2019", true , "2019-02-20"],

            ["Bihar PHED Junior Engineer JOB 214 Posts", "/exams/bihar-phed-junior-engineer-2019", true, "2019-01-31"],

            ["MHA IB Security Assistant Admit Card 2018", "/exams/MHA-IB-Security-Assistant-Online-Form-2018", true, "2019-02-17"],

            ["UPSC CDS Admit Card Download 2019", "/exams/UPSC-CDS-Online-Exam-Form-2019", false, "2019-02-03"],

            ["Bank IBPS CRP S.O VIII 2018", "/exams/IBPS-CRP-SO-VIII-2018", false, "2019-01-27"],

            ["NDA-1 Online Form 2019 392 Vacancies", "/exams/nda-1-2019", true, "2019-02-14"],
        
        
        ],

        most_viewed : [

            ["South-East Railway Apprentice 2018-2019", "/exams/SER-Railway-Apprentice-2018-2019", false, "2018-11-22"],
            
            ["Indian Navy 10+2 (B-tech) 2018", "/exams/Indian-Navy-10+2-B-tech-2018", false, "2018-11-22"],

            ["UPSEE Online Form 2019", "/exams/upsee-2019", true, "2019-03-15"],
            
            ["UPSSSC Junior Engineer (JE) 2018", "/exams/UPSSSC-Junior-Engineer-JE-2018", false, "2018-12-07"],

            ["NTA NEET Form Correction 2019", "/exams/MHRD-NTA-NEET-UG-2019", false, "2019-01-31"],
            
            ["DRDA Technical Associate 2019 Job 13 Vacancies", "/exams/drda-technical-associate-2019", true, "2019-01-28"],
        
    ],

        marquees :[
            ["MHA IB Security Assistant Admit Card 2018","/exams/MHA-IB-Security-Assistant-Online-Form-2018", true, "2019-02-17"],
            ["CISF Head Constable 2019 Job 429 Vacancies", "/exams/mha-cisf-head-constable-2019", false, "2019-02-20"],
            ["UPSEE Online Form 2019", "/exams/upsee-2019", true, "2019-03-15"],

        ],

        
    },

    methods: {
        check_suspensions(){
            this.recents.forEach(this.myFunction);
            this.most_viewed.forEach(this.myFunction);
            this.marquees.forEach(this.myFunction);
        },

        myFunction(value) {
            var present_date = new Date();
            var year = String(present_date.getFullYear());
            var month = present_date.getMonth() + 1;
            var date = String(present_date.getDate());

            if(month < 10) month = "0" + String(month);
            present_date = year+'-'+month+'-'+date;
            if(value[3] < present_date) this.suspends.push([value[0], value[1]]);
        }
    }
});

console.log("This console Welcomes you to ExamDate :-)");
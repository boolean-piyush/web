window.Vue = require('vue');
Vue.component('child-status', require('./components/child-status.vue'));

const app= new Vue({
    el: "#client",
    data: {
        main_headings:[
            ["job_details", "Job Details"],
            ["exam_date", "Exam Date"],
            ["exam_fees", "Exam Fees"],
            ["exam_eligibility", "Exam Eligibility"],
            ["exam_pattern", "Exam Pattern"],
            ["exam_selection", "Exam Selection"],
            ["exam_vacancies", "Exam Vacancies"],
            ["exam_centers", "Exam Centers"],
            ["exam_links", "Exam Links"]
        ],
    },
});

const app1= new Vue({
    el: "#hide_controller_output",
});
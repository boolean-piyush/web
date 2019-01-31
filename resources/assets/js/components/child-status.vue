<template>

   <ul class="list-group">
      <a class="blue list-group_item text-center list-group-item-danger" :href="status_highlights[get_stage_index][2]">{{status_highlights[get_stage_index][0]}}<b> --> [{{status_highlights[get_stage_index][1]}}]</b> </a>
   </ul>

</template>

<script>

export default {
   data() {
      return {
         status_highlights: [
            ["Apply Online", "Coming Soon", this.myhref], //0
            ["Apply Online", "Click Here", this.myhref], //1
            ["Apply Online", "Closed", "javascript:void(0)"], //2
            ["Form Correction", "Click Here", this.myhref], //3
            ["Form Correction", "Closed", "javascript:void(0)"], //4
            ["Admit Card Download", "Click Here", this.myhref], //5
            ["Exam Over", "Result Coming Soon", "javascript:void(0)"], //6
            ["Answer Key Download", "Click Here", this.myhref], //7
            ["See Result", "Click Here", this.myhref] //8
         ]
      }
   },
   props:{
      myhref: String,
      stage: String,
      last_date: String
   },

   computed: {

      set_stage_index(){
         switch (this.stage) {
            case "bao":
               return 0; 
               break;
         
            case "ao":
               return 1;
               break;

            case "fc":
               return 3;
               break;

            case "ac":
               return 5;
               break;

            case "ak":
               return 7;
               break;

            case "rst":
               return 8;
               break;
         }
      },

      get_stage_index(){
         var current_stage = this.set_stage_index;
         if(current_stage < 7 && current_stage %2 != 0){
            if(this.last_date > this.getDate()){
               current_stage +=1;
            }
         }
         return current_stage;
      }
   },

   methods: {
      getDate(){
         var now = new Date();
         var year = String(now.getFullYear());
         var month = now.getMonth() + 1;
         var date = String(now.getDate());
         if(month < 10) month = "0" + String(month);
         console.log((year+'-'+month+'-'+date));
         return (year+'-'+month+'-'+date);
       }
   },
}

</script>
<template>
   <div>
      <h5>Rows-> {{this.sections[this.section].length}}</h5>
      <table class="table table-sm table-striped">
         <tbody>
            <tr v-for="value in sections[section]" :key="value">
                  <th>
                     <button class="btn btn-sm btn-danger" type="button" @click="sections[section].splice(sections[section].indexOf(value), 1)">
                        Remove</button>
                  </th>

                  <th class="row"><input autocomplete="off" class="col-8" type="text" :value="value" :name= "get_name(sections[section].indexOf(value), '1')">
                  </th>

                  <td><input autocomplete="off" class="col-10" type="text" :name= "get_name(sections[section].indexOf(value), '2')">
                  </td>

            </tr>
         </tbody>
      </table>
      <div class="row">
         <input autocomplete="off" type="text" class="form-control col-3 border border-success" v-model="new_row_value">
         <button class="btn btn-sm btn-success" type="button" @click= "on_row_add()">Add row</button>
      </div>
      <input type="hidden" :name="section + '_table_properties'" :value="get_table_properties">
   </div>
</template>

<script>

export default {
   data() {
      return {

         new_row_value: "",

         sections: {

         date:[
            "Exam form filling start date:-",
            "Last Date Apply Online:-",
            "Last Date Fees Payment:-",
            "Admit Card Available:-",
            "Exam Date:-",
            "Result Date:-"
        ],

         links:[
            "Form Correction",
            "Pay Exam Fees",
            "Verify Fees Payment",
            "Candidate Login",
            "How to Apply (Step by Step)",
            "Instructions [English]",
            "Instructions [Hindi]",
            "Official Website",
            "Syllabus",
            
        ]

         }
      }
   },

   props:{
      section: String
   },

   methods: {
      get_name(row, col){
         return this.section + "-cell-" + (row+1) + "-" + col;
      },

      on_row_add(){
         this.sections[this.section].push(this.new_row_value);
         this.new_row_value = "";
      }
   },

     computed: {
      get_table_properties(){
         var obj = {'first_row_bold':false, 'column_bold':[1], 'n_rows':this.sections[this.section].length, 'n_cols':2};

         return JSON.stringify(obj);
      },
   },
}
</script>


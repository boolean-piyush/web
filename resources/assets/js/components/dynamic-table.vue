<template>

      <div id="workspace">

         <div class="row">
            <p class="col-6">Please enter number of rows and columns respectivily --></p>
            <input class="col-2" type="text" v-model= "temp_n_rows">
            <input class="col-2" type="text" v-model= "temp_n_cols">
            <button class="col-2 btn btn-success btn-sm" type="button" v-on:click="update_table(temp_n_cols, temp_n_rows)">Build Table</button>
         </div>

         <h5><b>Total rows- {{n_rows}}</b></h5>

         <label v-if="n_rows > 0"><input type="checkbox" @click="first_row_bold = true">First Row Bold</label>
               <table class="table table-sm table-bordered table-secondary">
                     <tbody>
                        <tr v-if="n_rows > 0">
                              <th></th>
                              <th v-for="col in n_cols" :key= "col">
                                 <label><input type="checkbox" v-model="column_bold" :value="col"> Bold Col-{{col}}</label>
                              </th>
                        </tr>

                           <tr v-for="row in n_rows" :key="row">

                              <th>
                                 <button type="button" class="btn btn-danger btn-sm" @click="n_rows -= 1">
                                 <font-awesome-icon icon="minus-circle"></font-awesome-icon></button>
                              </th>

                              <th v-for="col in n_cols" :key= "col">
                                 <textarea autocomplete="off" type="text" :name="section +'-cell-'+row+'-'+String(col)" :cols="parseInt(160/n_cols)" rows="4"></textarea>
                              </th>

                           </tr>

                     </tbody>
               </table>

                  <button type="button" @click='n_rows +=1' style="float:right" class="btn btn-success btn-sm">Add Row</button>
                  <input type="hidden" :name="section + '_table_properties'" :value="get_table_properties">
                  
      </div>

</template>

<script>

export default {

   data() {
      return {
         temp_n_rows:0,
         temp_n_cols:0,
         n_rows: 0,
         n_cols:0,
         first_row_bold: false,
         column_bold: []
      }
   },

   props:{
      section: String
   },

   methods: {
      update_table(col, row){
         this.n_cols = Number(col);
         this.n_rows = Number(row);
      },

   },

   computed: {
      get_table_properties(){

         var obj = {
            'first_row_bold':this.first_row_bold,
            'column_bold':this.column_bold,
            'n_rows':this.n_rows,
            'n_cols':this.n_cols
            };

         return JSON.stringify(obj);
      },
   },
}

</script>
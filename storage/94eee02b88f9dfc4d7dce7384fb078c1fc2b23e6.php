<!DOCTYPE html>
<html lang="en">
<head>
   <?php echo $__env->make('references', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   <script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
   <title>CAGR</title>
</head>
<body>
<div class="container" id="cagr">
      <div class="border border-success rounded" id="0">
         <h4><b>Calculate Maturity Amount of multiple FD's having decrementing term period by 1 like 15, 14, 13 till 1 year</b></h4><br>
            <div class="input-group">
                  <label>FD Amount <input type="text" class="form-control" v-model="initial[0]"></label>
                  <label>CAGR <input type="text" class="form-control" v-model="cagr[0]"></label>
                  <label>Time Period <input type="text" class="form-control" v-model="time[0]"></label>
               </div>
               <button v-on:click="fd_maturity" class="btn btn-sm btn-success">Calculate</button><br><br>
               <div>
               <h4><b>Final Amount= <span class="green">{{amount[0]}}</span></b></h4>
                  <h4><b>Interest Earned= <span class="green">{{interest[0]}}</span></b></h4>
                  <h4><b>CAGR based on total investment and total return= </b> <span class="green">{{calculate_cagr(initial[0] * time[0], amount[0], time[0])}}</span></h4>
               </div>   
      </div><br><br><br>

         <div class="border border-success rounded" id="1">
            <h4><b>Total rent collected in some years considering inflation rate</b></h4><br>
               <div class="input-group">
                     <label>House Cost <input type="text" class="form-control" v-model="house"></label>
                     <label>Rent Collected in first month &nbsp;&nbsp;<input type="text" class="form-control" v-model="initial[1]"></label>
                     <label>Annual Inflation rate <input type="text" class="form-control" v-model="inflation[1]"></label>
                     <label>Time Period <input type="text" class="form-control" v-model="time[1]"></label>
                  </div>
                  <button v-on:click="calculate_rent" class="btn btn-sm btn-success">Calculate</button><br><br>
                  <div>
                     <h4><b>Total Worth after {{time[1]}} years= <span class="green">{{amount[1]}}</span></b></h4>
                     <h4><b>Total rent collected= <span class="green">{{calculate_rent()}}</span></b></h4>
                     <h4><b>Cost of house after {{time[1]}} years= <span class="green">{{reverse_cagr(house, time[1], inflation[1])}}</span></b></h4>
                     <h4><b>Interest Earned= <span class="green">{{amount[1] - house}}</span></b></h4>
                     <h4><b>CAGR= <span class="green">{{calculate_cagr(house, amount[1], time[1])}}</span></b></h4>
                  </div>
         </div><br><br><br>

         <div class="border border-success rounded" id="2">
               <h4><b>Calculate CAGR</b></h4><br>
                  <div class="input-group">
                        <label>Initial Value <input type="text" class="form-control" v-model="initial[2]"></label>
                        <label>Final Value <input type="text" class="form-control" v-model="amount[2]"></label>
                        <label>Time Period <input type="text" class="form-control" v-model="time[2]"></label>
                     </div>
                     <div>
                        <h4><b>CAGR= <span class="green">{{calculate_cagr(initial[2], amount[2], time[2])}}</span></b></h4>
                     </div>   
            </div><br><br><br>

            <div class="border border-success rounded" id="3">
                  <h4><b>Calculate Maturity value from given CAGR</b></h4><br>
                     <div class="input-group">
                           <label>Initial Value <input type="text" class="form-control" v-model="initial[3]"></label>
                           <label>CAGR <input type="text" class="form-control" v-model="cagr[3]"></label>
                           <label>Time Period <input type="text" class="form-control" v-model="time[3]"></label>
                        </div>
                        <div>
                           <h4><b>Maturity Amount= <span class="green">{{reverse_cagr(initial[3], time[3], cagr[3])}}</span></b></h4>
                        </div>   
               </div><br><br><br>

               <div class="border border-success rounded" id="4">
                     <h4><b>Calculate Time Period</b></h4><br>
                        <div class="input-group">
                              <label>Initial Value <input type="text" class="form-control" v-model="initial[4]"></label>
                              <label>Final Value <input type="text" class="form-control" v-model="amount[4]"></label>
                              <label>CAGR <input type="text" class="form-control" v-model="cagr[4]"></label>
                           </div>
                           <div>
                              <h4><b>Time Period= <span class="green">{{calculate_time(initial[4], amount[4], cagr[4])}}</span></b></h4>
                           </div>   
                  </div><br><br><br>

</div>
</body>
</html>

<script>

const app = new Vue({
   el: '#cagr',
   data: {

         initial:[],
         amount:[],
         interest:[],
         inflation:[],
         time:[],
         cagr:[],
         house:0,
   },
   methods: {
      fd_maturity(){
           principle = Number(this.initial[0]);
           time = Number(this.time[0]);
           cagr = Number(this.cagr[0]);
           var amount = 0;
           var interest = 0;
           for (let i = time ; i>0 ; i--){
               amount += principle * Math.pow((1 + (cagr / 100)), i);
           }
           interest = amount - (principle * time);
           this.interest.splice(0, 1, interest.toFixed(2));
           this.amount.splice(0, 1, amount.toFixed(2));
       },

       calculate_cagr(principle, amount, time){
            time = Math.round(time);
            principle = Number(principle);
            amount = Number(amount);

            return ((Math.pow(amount/principle , 1/time) - 1) * 100).toFixed(2);
    },
      calculate_time(initial, amount, cagr){
            amount = Number(amount);
            initial = Number(initial);
            cagr = Number(cagr);

            var y = (100 + cagr) / 100;
            var x = amount / initial;
            return (Math.log(x)/ Math.log(y)).toFixed(2);
         },

       reverse_cagr(initial, time, cagr){
          initial = Number(initial);
          time = Math.round(time);
          return (initial * Math.pow(1 + (cagr / 100), time)).toFixed(2);
       },

       calculate_rent(){
            var time = Number(this.time[1]);
            var principle = Number(this.initial[1]) * 12;
            var total_rent = principle;
            for(var i = 1; i< time; i++){
               principle = principle * (1 + (this.inflation[1] / 100));
               total_rent += principle;
            }
            var current_house = this.reverse_cagr(Number(this.house), time, this.inflation[1]);
            var total_worth = current_house + total_rent;

            this.interest.splice(1, 1, total_worth - Number(this.house));
            this.amount.splice(1, 1, total_worth);
            return total_rent.toFixed(2);

       },
   },
});
</script>
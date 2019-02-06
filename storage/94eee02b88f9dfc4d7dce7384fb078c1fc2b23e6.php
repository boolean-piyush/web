<?php $__env->startSection('title'); ?>
   CAGR calculator
<?php $__env->stopSection(); ?>

<?php $__env->startSection('develop'); ?>
   
<div class="input-group">
   <label>Initial Value <input type="text" class="form-control" v-model="principle"></label>
   <label>CAGR <input type="text" class="form-control" v-model="cagr"></label>
   <label>Time Period <input type="text" class="form-control" v-model="time"></label>
</div>
<button v-on:click="calculate_cagr" class="btn btn-sm btn-success">Calculate</button><br><br>
<div>
   <h4><b>Final Amount:- {{amount}}</b></h4>
   <h4><b>Interest Earned:- {{interest}}</b></h4>
   <h4><b>CAGR based on total investment and total return:-</b> {{final_cagr()}}</h4>
</div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
   <script src="/js/vue-develop.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title'); ?>
   Suspended Exams
<?php $__env->stopSection(); ?>

<?php $__env->startSection('welcome'); ?>
   <button type="button" v-on:click="check_suspensions">Check</button>
   <h4>Total Rows {{suspends.length}}</h4>
   <ul class="list-group">
   <li class="list-group-item" v-for="exam in suspends"><a :href="exam[1]">{{exam[0]}}</a></li>
   </ul>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
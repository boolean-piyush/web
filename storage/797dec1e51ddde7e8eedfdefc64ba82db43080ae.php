<?php $__env->startSection('title'); ?>
   Sarkari XML Checker
<?php $__env->stopSection(); ?>

<?php $__env->startSection('develop'); ?>
<div class="container">
   <button class="button btn-success" v-on:click="scan" v-if="user_not_genuine">Start Scanning Rival Sites</button>
   <div v-show="ready_to_submit">
         <h4><b>Scanning Rival Sites....</b></h4>
         <img src="images/searching.gif" alt="Scanning" width="500px">
   </div>
   <div v-html="rawhtml"></div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
   <script src="/js/vue-develop.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
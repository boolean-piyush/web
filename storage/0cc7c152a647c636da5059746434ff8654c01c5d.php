<?php $__env->startSection('title'); ?>
   Testing
<?php $__env->stopSection(); ?>

<?php $__env->startSection('develop'); ?>

<form action="/test" method="post">
   <?php echo e(csrf_field()); ?>


   <div class="form-group">
      <label>Example multiple select</label>
      <select multiple class="custom-select" v-model="depts">
        <option>Railway</option>
        <option>Bank</option>
        <option>Defence</option>
        <option>Navy</option>
        <option>MHA</option>
      </select>
    </div>

<h4>{{depts}}</h4>
<input type="hidden"name="jsono" :value="JSON.stringify(depts)">
   <button type="submit">Submit Array</button>
</form>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
   <script src="/js/vue-develop.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
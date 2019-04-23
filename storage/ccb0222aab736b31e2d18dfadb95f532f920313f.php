  
  
  <?php $__env->startSection('title'); ?>
      Filter
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('develop'); ?>

        <h1>Checkboxes and Radio</h1><br>
      
          <label v-for="qualification in qualifications">
              <input type="radio" :value="qualification" v-model="qualification_value">
              {{qualification}}&nbsp;
          </label><br>
          <span>Checked Qualification: <b>{{ qualification_value }}</b></span>
      
          <br><br>
      
          <label v-for="dept in depts">
                  <input type="checkbox" :value="dept" v-model="dept_values">
                  {{dept}}&nbsp;
          </label><br>
          <span>Checked Depts: <b v-for="depto in dept_values">{{ depto }}    </b></span>
          <br><br>
      
        <button type="button" class="btn btn-success" v-on:click="fetchdata" >Submit</button>
      
        <div id="show" v-html="rawhtml"></div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="/js/vue-develop.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
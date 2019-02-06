<?php $__env->startSection('title'); ?>
List all exams in a table
<?php $__env->stopSection(); ?>

<?php $__env->startSection('develop'); ?>
<h3>Total exams = <?php echo e(count($exams)); ?></h3>

<table class="table table-striped table-sm table-bordered">
<thead>
    <tr>
      <th scope="col">Update</th>
      <th scope="col">Exam Name</th>
      <th>Website Link</th>
      <th scope="col">Dept</th>
      <th scope="col">Exam Link</th>
      <th scope="col">Qualification</th>
      <th scope="col">Next Check</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

<?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <th><a target="_blank" href="/edit/<?php echo e($exam->id); ?>">Edit</a></th>
        <th><?php echo e($exam->exam_name); ?></th>
        <th><a target="_blank" href= "/exams/<?php echo e($exam->exam_name); ?>">Website Link</a></th>
        <th><?php echo e($exam->dept); ?></th>
        <td><a target="_blank" href="<?php echo e($exam->exam_link); ?>"><b><?php echo e($exam->exam_link); ?></b></a></td>
        <td><?php echo e($exam->qualification); ?></td>
        <th><?php echo e($exam->next_check); ?></th>
        <td><?php echo e($exam->status); ?></td>
      </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
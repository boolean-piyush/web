<?php $__env->startSection('title'); ?>
<?php echo e($deptName); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h3 class="text-center heading"><?php echo e($deptName); ?> Latest Jobs</h3>
<br>

<ul class="list-group">
    <?php 
    $zebra = "strip-color-dark";
    $i=0;
    $count=0;
    foreach ($exams as $exam) {
        $count++;
        $temp="";
        if($i%2==0)$temp = $zebra;
    
        printf("<a class=\"list-group-item font-weight-bold %s \" href=\"/exams/%s \"> %s </a>", 
        $temp, $exam->exam_name,ucwords(str_replace('-',' ',$exam->exam_name.'-'.$exam->status)));
    
        $i++;
    
    }
    if ($count==0) {
        printf("Sorry Nothing Found");
    }
    
    ?>
    </ul>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
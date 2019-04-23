<!DOCTYPE html>
<html lang="en">
<head>

    <?php echo $__env->make('references', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('head'); ?>

    <title><?php echo $__env->yieldContent('title'); ?></title>
    
    <?php if (! empty(trim($__env->yieldContent('meta-tag')))): ?>
        <meta name="description" content= "<?php echo $__env->yieldContent('meta-tag'); ?>">
    <?php else: ?>
        <meta name="description" content= "<?php echo $__env->yieldContent('title'); ?>">
    <?php endif; ?>

</head>

<body>

    <div class="container" id="client">

        
        <div class="header-bar rounded">
                <?php echo $__env->make('header-bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div><br>


        
        <?php $__env->startSection('welcome'); ?>
        <?php echo $__env->yieldSection(); ?>



        
        <?php if (! empty(trim($__env->yieldContent('content')))): ?>

            <div class="nav" id="heading-scroller" v-show=false>
                <a v-for="heading in main_headings" :href="'#'+ heading[0]">{{heading[1]}}</a>
            </div>
            <div data-spy="scroll" data-target="#heading-scroller">

            <?php $__env->startSection('content'); ?>
            <?php echo $__env->yieldSection(); ?>

            </div>
        <?php else: ?>
        <?php endif; ?>


        
        <br>
        <div class=" rounded footer-bar">
                <?php echo $__env->make('footer-bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

    </div>

    <?php if (! empty(trim($__env->yieldContent('welcome')))): ?>
        <script src="/js/welcome.js"></script>
    <?php else: ?>
        <script src="/js/client.js"></script>
    <?php endif; ?>
    <script src="/js/app.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amita">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quattrocento+Sans">


    
    <div class="container-fluid" id="develop">

        <?php $__env->startSection('develop'); ?>
        <?php echo $__env->yieldSection(); ?>

    </div>
    <?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
<!-- resources/views/welcome.blade.php -->


<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Bem-vindo ao Suporte Emocional</h1>
        <p>Oferecemos recursos para ajudar você a cuidar da sua saúde emocional.</p>
        <p><a href="<?php echo e(url('/artigos')); ?>">Leia nossos artigos</a> ou <a href="<?php echo e(url('/chat')); ?>">converse com um especialista</a>.</p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\suporte-emocional\resources\views/welcome.blade.php ENDPATH**/ ?>
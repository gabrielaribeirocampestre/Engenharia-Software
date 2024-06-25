<!-- resources/views/chat.blade.php -->


<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Chat</h1>
        <p>Converse com um especialista em saúde emocional.</p>
        <form>
            <textarea placeholder="Digite sua mensagem"></textarea><br>
            <button type="submit">Enviar</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\suporte-emocional\resources\views/chat.blade.php ENDPATH**/ ?>
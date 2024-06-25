<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte Emocional</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?php echo e(url('/')); ?>">Página Inicial</a></li>
                <li><a href="<?php echo e(url('/artigos')); ?>">Artigos</a></li>
                <li><a href="<?php echo e(url('/chat')); ?>">Chat</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <p>&copy; <?php echo e(date('Y')); ?> Suporte Emocional. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\suporte-emocional\resources\views/layouts/app.blade.php ENDPATH**/ ?>
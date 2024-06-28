<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praktikum Pemweb 10</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="/register" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="name" placeholder="Name" class="border border-black">
        <input type="email" name="email" placeholder="Email" class="border border-black">
        <input type="password" name="password" placeholder="Password" class="border border-black">
        <button type="submit">register</button>
    </form>
</body>
</html>
<?php /**PATH D:\CODE\NGODING NGODING TIPES\Ngoding Ndes\Web\Pemweb SMT 4\project-1\resources\views/hello.blade.php ENDPATH**/ ?>
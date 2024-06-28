<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Mahasiswa</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="container">
    <div class="flex flex-col justify-center text-center items-center">
        <h2 class="font-bold text-2xl pt-5">Edit Mahasiswa</h2>
    </div>
    
    <div class="flex flex-col justify-center items-center text-center py-10 mt-24">
      <form action="/" method="POST" class="mt-2">
        <?php echo csrf_field(); ?>
        <div class="flex flex-col">
          <label for="nama" class="text-sm font-medium text-gray-900">Nama:</label>
          <input type="text" id="nama" name="nama" class="border border-gray-300 px-2 py-1 rounded-sm mt-1">
        </div>
        <div class="flex flex-col mt-2">
          <label for="nim" class="text-sm font-medium text-gray-900">NIM:</label>
          <input type="text" id="nim" name="nim" class="border border-gray-300 px-2 py-1 rounded-sm mt-1">
        </div>
        <div class="flex flex-col mt-2">
          <label for="ipk" class="text-sm font-medium text-gray-900">IPK:</label>
          <input type="text" id="ipk" name="ipk" class="border border-gray-300 px-2 py-1 rounded-sm mt-1">
        </div>
        <button type="submit" class="bg-blue-500 text-white font-bold px-4 py-2 rounded mt-3">Tambahkan</button>
      </form>
    </div>
  </div>
</body>
</html>
<?php /**PATH D:\CODE\NGODING NGODING TIPES\Ngoding Ndes\Web\Pemweb SMT 4\project-1\resources\views/edit.blade.php ENDPATH**/ ?>
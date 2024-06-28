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
      <h2 class="font-bold text-2xl pt-5">Data Mahasiswa S1 Informatika</h2>
    </div>
    
    <div class="flex flex-col mt-10" data-aos="fade-down">
      <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
        <div class="py-2 inline-block min-w-full px-24">
          <div class="overflow-hidden">
            <table class="min-w-full">
              <thead class="bg-white border-b border-slate-500">
                <tr>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                    ID
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                    Name
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                    NIM
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                    IPK
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="border-b border-slate-300">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center"><?php echo e($mahasiswa->id); ?></td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                    <?php echo e($mahasiswa->nama); ?>

                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                    <?php echo e($mahasiswa->nim); ?>

                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                    <?php echo e($mahasiswa->ipk); ?>

                  </td>
                  <td class="flex flex-row text-center items-center justify-center text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                    <a href="<?php echo e(route('mahasiswa.edit', ['id' => $mahasiswa->id])); ?>" class="bg-blue-500 px-3 py-2 text-white rounded mx-2">Edit</a>
                    <form action="/" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?')">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                      <input type="hidden" name="id" value="<?php echo e($mahasiswa->id); ?>">
                      <button type="submit" class="bg-red-500 px-3 py-2 text-white rounded">Delete</button>
                    </form>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-row justify-center items-center text-center">
        <div class="w-[1000px] min-h-0.5 bg-slate-400 mt-24"></div>
    </div>
    
    <div class="flex flex-col justify-center items-center text-center">
      <h3 class="font-bold text-md">Tambahkan Data Mahasiswa</h3>
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
<?php /**PATH C:\Users\Andy\Downloads\project-1\resources\views/index.blade.php ENDPATH**/ ?>
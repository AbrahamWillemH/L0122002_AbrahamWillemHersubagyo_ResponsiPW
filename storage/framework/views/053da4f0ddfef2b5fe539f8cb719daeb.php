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
                  </tr>
                </thead>
                <tbody>
                  <tr class="border-b border-slate-300">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">1</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                      Abraham Willem Hersubagyo
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                      L0122002
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                      3.57
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
       <div class="flex flex-col justify-center items-center text-center py-10 mt-24">
        <h3 class="font-bold text-md">Tambahkan Data Mahasiswa</h3>
        <form class="mt-2">
          <div class="flex flex-col">
            <label for="id" class="text-sm font-medium text-gray-900">ID:</label>
            <input type="text" id="id" name="id" class="border border-gray-300 px-2 py-1 rounded-sm mt-1">
          </div>
          <div class="flex flex-col mt-2">
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
<?php /**PATH D:\CODE\NGODING NGODING TIPES\Ngoding Ndes\Web\Pemweb SMT 4\project-1\resources\views/register.blade.php ENDPATH**/ ?>
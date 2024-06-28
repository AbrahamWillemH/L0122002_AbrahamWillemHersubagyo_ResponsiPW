<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="container">
    <div class="flex flex-col justify-center text-center items-center min-h-screen">
      <h2 class="font-bold text-2xl pt-5">Login</h2>
      <div class="flex flex-col justify-center items-center text-center mt-10">
        <form action="{{ route('login') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          @csrf
          <div class="flex flex-col mb-4">
            <label for="email" class="text-sm font-medium text-gray-900 mb-2">Email:</label>
            <input type="email" id="email" name="email" class="border border-gray-300 px-4 py-2 rounded-sm" required>
          </div>
          <div class="flex flex-col mb-6">
            <label for="password" class="text-sm font-medium text-gray-900 mb-2">Password:</label>
            <input type="password" id="password" name="password" class="border border-gray-300 px-4 py-2 rounded-sm" required>
          </div>
          <button type="submit" class="bg-blue-500 text-white font-bold px-4 py-2 rounded">Login</button>
        </form>
        <a href="/register" class="text-blue-500 hover:text-blue-700">Register</a>
      </div>
    </div>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech Registration</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @vite('resources/css/app.css')
</head>
<body class="bg-green-100 min-h-screen flex flex-col">
    <div class="flex flex-1">
        <!-- Left Side -->
        <div class="w-2/3 flex items-center justify-center bg-green-200 relative">
            <img src="recycle-symbol.png" alt="Recycle Symbol" class="w-3/4">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="bg-green-300 rounded-full w-16 h-16"></div>
                <div class="bg-green-400 rounded-full w-12 h-12"></div>
                <div class="bg-green-500 rounded-full w-8 h-8"></div>
            </div>
        </div>
        <!-- Right Side -->
        <div class="w-1/3 p-8 flex flex-col justify-center">
            <div class="text-center mb-8">
                <img src="cycle-tech-logo.png" alt="Cycle Tech Logo" class="mx-auto mb-4">
                <h2 class="text-2xl font-bold">Buat Akun</h2>
                <p class="text-gray-600">Ayo bergabung dan jadi bagian dari penyelamatan bumi!</p>
            </div>
            <form>
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700">Nomor Handphone</label>
                    <input type="text" id="phone" name="phone" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600">Daftar</button>
            </form>
            <div class="text-center mt-4">
                <p>Sudah memiliki Akun? <a href="#" class="text-green-500">Masuk</a></p>
            </div>
        </div>
    </div>
</body>
</html>

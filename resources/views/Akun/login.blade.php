<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleForm() {
            const userType = document.getElementById('userType').value;
            const nasabahForm = document.getElementById('nasabahForm');
            const adminForm = document.getElementById('adminForm');

            if (userType === 'nasabah') {
                nasabahForm.style.display = 'block';
                adminForm.style.display = 'none';
            } else {
                nasabahForm.style.display = 'none';
                adminForm.style.display = 'block';
            }
        }
    </script>
</head>
<body class="bg-green-100 flex min-h-screen">
    <!-- Left Side -->
    <div class="w-2/3 flex items-center justify-center bg-green-200 relative p-8">
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
            <h2 class="text-2xl font-bold">Selamat Datang Kembali!</h2>
            <p class="text-gray-600">Silakan masukkan detail Anda</p>
            <div class="mb-4">
            <label for="userType" class="block text-gray-700">Masuk sebagai</label>
            <select id="userType" class="w-1/2 px-4 py-2 border rounded-lg bg-green-500 text-white focus:outline-none focus:ring-2 focus:ring-green-700" onchange="toggleForm()">
                <option value="nasabah">Nasabah</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        </div>
        
        <!-- Nasabah Form -->
        <form id="nasabahForm" style="display: block;">
            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Kata Sandi</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600">Masuk</button>
        </form>
        <!-- Admin Form -->
        <form id="adminForm" style="display: none;">
            <div class="mb-4">
                <label for="admin_id" class="block text-gray-700">Admin ID</label>
                <input type="text" id="admin_id" name="admin_id" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-4">
                <label for="admin_password" class="block text-gray-700">Kata Sandi</label>
                <input type="password" id="admin_password" name="admin_password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600">Masuk</button>
        </form>
        <div class="text-center mt-4">
            <p>Belum memiliki Akun? <a href="#" class="text-green-500">Daftar</a></p>
            
        </div>
    </div>
</body>
</html>

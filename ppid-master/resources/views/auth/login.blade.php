<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="img/logo/logo.png" />
    <style>
        .bg-pattern {
            background-image: url('img/background/background-login.png');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen bg-slate-10s0">
    <div class="flex w-full max-w-4xl bg-white rounded-lg shadow-2xl overflow-hidden">
        <!-- Left side with the background image and text -->
        <div class="w-1/2 bg-pattern flex justify-center pt-10">
            <h1 class="text-3xl font-bold text-center text-black">Sugeng Rawuh.</h1>
        </div>
        <!-- Right side with the login form -->
        <div class="w-1/2 p-8 flex flex-col justify-center">
            <div class="mb-6 flex items-center justify-center">
                <a href="home.html" class="flex items-center">
                    <img src="img/logo/logo.png" alt="Logo" class="h-14 mr-2">
                    <div class="text-left">
                        <h1 class="text-[20px] font-bold">PPID KOTA SURAKARTA</h1>
                        <h1 class="text-[12px] font-thin">Pejabat Pengelola Informasi Dan Dokumentasi</h1>
                    </div>
                </a>
            </div>
            
            <div class="px-10">
                <div>
                    <p class="text-xl font-bold pt-12">Masuk</p>
                    <p class="text-sm text-gray-400">Silahkan masukkan informasi di bawah ini.</p> <br>
                </div>
                <form>
                    <div class="mb-4">
                        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                        <input type="text" id="username"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-[18px] shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-[18px] shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <button type="submit"
                        class="w-full py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-[18px]   focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Document</title>
</head>

<body class="flex items-center justify-center">
    <!-- Login -->
    <div class="container">
        <div class="flex flex-col items-center justify-center min-h-screen py-2 mx-auto">
            <div class="w-full max-w-xs bg-slate-800">
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-2/3 mx-100 my-100" action="src/php/login.php" method="POST">
                    <h1 class="text-center text-2xl font-bold">Login</h1>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="username" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" required>
                    </div>
                    <div class="flex items-start mb-4">
                        <button type="submit" class="py-10 px-10 bg-primary h-11 text-slate-100">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="src/js/script.js"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
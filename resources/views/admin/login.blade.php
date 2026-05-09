<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="/favicon1.png">
    <title>Login Admin</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 flex items-center justify-center h-screen">

    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-white text-2xl font-bold mb-6 text-center">
            Admin Login
        </h2>

        @if(session('error'))
            <p class="text-red-400 mb-4 text-center">
                {{ session('error') }}
            </p>
        @endif

        <form method="POST" action="/admin/login">
            @csrf

            <input type="email" name="email" placeholder="Email"
                class="w-full mb-4 p-2 rounded bg-gray-700 text-white border border-gray-600">

            <input type="password" name="password" placeholder="Password"
                class="w-full mb-6 p-2 rounded bg-gray-700 text-white border border-gray-600">

            <button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded">
                Login
            </button>
        </form>
    </div>

</body>
</html>
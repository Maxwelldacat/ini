<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="/favicon1.png">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <button id="toggleBtn" class="fixed top-4 left-4 z-50 bg-gray-800 text-white px-3 py-2 rounded">
        ☰
    </button>


    <!-- SIDEBAR -->
    <div id="sidebar" class="w-64 h-screen bg-gray-900 text-white p-4 fixed transition-all duration-300 overflow-hidden">
        
        <div id="sidebarContent" class="mt-16">
            <h1 class="text-xl font-bold ">Admin</h1>
            <h1 class="text-xs text-gray-200 mb-6"> taravisual.id</h1>

            
            <ul class="space-y-3">
                <li><a href="/admin">Dashboard</a></li>
                <li><a href="/admin/orders">Kelola Pesanan</a></li>
                <li><a href="/admin/videos">Kelola Portofolio</a></li>
                
                <form action="/admin/logout" method="POST">
                    @csrf
                    <button type="submit" class="text-red-500">
                        Logout
                    </button>
                </form>

            </ul>
        </div>
    </div>

    <!-- Content -->
    <div class="flex-1 ml-64 transition-all duration-300" id="mainContent">
        
        <!-- Topbar -->
        <div class="bg-white shadow p-4">
            <h2 class="font-semibold">@yield('title')</h2>
        </div>

        <!-- Isi halaman -->
        <div class="p-6">
            @yield('content')
        </div>

    </div>


    <script>

        const tombol = document.getElementById('toggleBtn');
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('mainContent');
        const isiSidebar = document.getElementById('sidebarContent');

        tombol.onclick = function () {

            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('w-20');

            content.classList.toggle('ml-64');
            content.classList.toggle('ml-20');

            isiSidebar.classList.toggle('hidden');
        }

    </script>


</body>
</html>
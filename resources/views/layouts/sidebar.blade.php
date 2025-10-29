<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro Card Club Davao</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex h-screen">
    <aside class="w-64 bg-white border-r border-gray-200 flex flex-col">
        <div class="flex items-center justify-center h-32 border-b border-gray-200">
            <img src="{{ asset('CasinoLogo-8.png') }}" alt="Logo" class="w-30 h-30 object-contain">
        </div>
        <nav class="flex-1 p-4 space-y-4">
            <a href="{{ route('members') }}" class="block text-black font-semibold rounded-lg py-3 px-4 hover:bg-gray-200 text-center">MEMBERS</a>
            <a href="{{ route('registration') }}" class="block text-black font-semibold rounded-lg py-3 px-4 hover:bg-gray-200 text-center">REGISTRATION</a>
            <a href="#" class="block text-black font-semibold rounded-lg py-3 px-4 hover:bg-gray-200 text-center">CASHFLOW</a>
            <a href="#" class="block text-black font-semibold rounded-lg py-3 px-4 hover:bg-gray-200 text-center">REPORTS</a>
        </nav>
    </aside>

    <main class="flex-1 p-6">
        @yield('content')
    </main>
</body>

</html>
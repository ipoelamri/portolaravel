<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <title>Portofolio</title>
</head>

<body>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
        });
    </script>
    <header class="bg-gray-900 sticky top-0 z-10">
        <nav class="w-11/12 md:container flex justify-between py-4 px-5 mx-auto">
            <div class="flex">
                <h1 class="text-2xl font-bold text-white mr-2">MY</h1>
                <h1 class="font-bold text-cyan-400 text-2xl">PORTOFOLIO</h1>
                @if (request()->is('admin*'))
                    <span class="text-2xl text-cyan-400 font-semibold">ADMIN</span>
                @endif
            </div>
            <ul class="text-white lg:px-20 flex space-x-8">
                <li class="font-semibold hover:text-gray-300">
                    <a href="index.html">Home</a>
                </li>
                <li class="font-semibold hover:text-gray-300">
                    <a href="#profile">Profile</a>
                </li>
                <li class="font-semibold hover:text-gray-300">
                    <a href="#Portofolio">Portofolio</a>
                </li>
                <li class="font-semibold hover:text-gray-300">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        @if (session()->has('pesan'))
            <div class="w-2/6 border-2 bg-gray-900 rounded-2xl text-white flex justify-center md:container mx-auto">
                <div class="alert alert-success" role="alert">
                    {{ session('pesan') }}
                </div>
            </div>
        @endif
        @yield('content')
    </main>
</body>

</html>

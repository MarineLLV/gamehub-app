<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gamehub</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-00">
        <nav class="container mx-auto flex items-center justify-between px-4 py-6">
            <div class="flex items-center">
                <a href="/">
                    <img src="/laracasts-logo.svg" alt="logo" class="w-32 flex-none">
                </a>
                <ul class="flex ml-16 space-x-8">
                    <li><a href="#" class="hover:text-gray-400">Games</a></li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="#" class="hover:text-gray-400">Coming soon</a></li>
                </ul>
            </div>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 tet-sm rounded-full focus:outline-none focus:shadow-outline w-64 px-3 pl-8 py-1" placeholder="Search ...">
                    <div class="absolute top-0 flex items-center h-full ml-2">
                        <svg class="fill-current text-gray-400 w-4" xmlns="http://www.w3.org/2000/svg" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg>
                    </div>
                </div>
                <div class="ml-6">
                    <a href="#"><img src="/avatar.jpg" alt="avatar" class="rounded-full w-8"></a>
                </div>
            </div>
        </nav>
    </header>
    
    <main class="py-8">
        @yield('content')
    </main>

    <footer class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            Powered by <a href="#" class="underline hover:text-gray-400">IGDB API</a>
        </div>
    </footer>

</body>
</html>
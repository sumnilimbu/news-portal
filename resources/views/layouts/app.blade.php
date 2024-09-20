<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200">
    <nav     class="flex items-center p-6 bg-gray-800 text-white sticky top-0 z-50">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">Home</a>
            </li>
        </ul>

        <ul class="flex space-x-4 ml-auto">
        <li>
        <a href="{{ route('login.create') }}" class="p-3 hover:text-gray-400">Login</a>
        </li>
        <li>
        <a href="{{ route('register.create') }}" class="p-3 hover:text-gray-400">Register</a>
        </li>
        </ul>
    </nav>
    
    <section class="main-content p-4">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <article class="news-item bg-white p-4 rounded-lg shadow-md">
                <img src="/images/news1.jpg" alt="Breaking News 1" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-xl font-semibold mt-2">Greenery restored</h2>
                <p class="mt-2 text-gray-700">The forest of Silyes that was destroyed has been growing again.</p>
                <a href="#" class="text-blue-500 hover:underline mt-2 inline-block">Read more...</a>
            </article>
            <article class="news-item bg-white p-4 rounded-lg shadow-md">
                <img src="/images/news2.jpg" alt="Breaking News 2" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-xl font-semibold mt-2">Lives unnoticed in war</h2>
                <p class="mt-2 text-gray-700">The war of Russia and Ukraine has been going on for months now.</p>
                <a href="#" class="text-blue-500 hover:underline mt-2 inline-block">Read more...</a>
            </article>
            <article class="news-item bg-white p-4 rounded-lg shadow-md">
                <img src="/images/news3.jpg" alt="Breaking News 3" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-xl font-semibold mt-2">Environment Hazard</h2>
                <p class="mt-2 text-gray-700">The uranium exposure in Chernobyl is affecting locals nearby.</p>
                <a href="#" class="text-blue-500 hover:underline mt-2 inline-block">Read more...</a>
            </article>
            <article class="news-item bg-white p-4 rounded-lg shadow-md">
                <img src="/images/news4.jpg" alt="Breaking News 4" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-xl font-semibold mt-2">Deforestation; at alarming rate</h2>
                <p class="mt-2 text-gray-700">The trees cutting rate by locals in Rara is causing serious issues.</p>
                <a href="#" class="text-blue-500 hover:underline mt-2 inline-block">Read more...</a>
            </article>
            <article class="news-item bg-white p-4 rounded-lg shadow-md">
                <img src="/images/news5.jpg" alt="Breaking News 5" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-xl font-semibold mt-2">Earthquake hits Japan</h2>
                <p class="mt-2 text-gray-700">An earthquake of 7.2 magnitude hits Japan causing terror.</p>
                <a href="#" class="text-blue-500 hover:underline mt-2 inline-block">Read more...</a>
            </article>
            <article class="news-item bg-white p-4 rounded-lg shadow-md">
                <img src="/images/news6.jpg" alt="Breaking News 6" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-xl font-semibold mt-2">Inflation; a rising problem</h2>
                <p class="mt-2 text-gray-700">The inflation seen in London is skyrocketing concerning locals.</p>
                <a href="#" class="text-blue-500 hover:underline mt-2 inline-block">Read more...</a>
            </article>
            <article class="news-item bg-white p-4 rounded-lg shadow-md">
                <img src="/images/news7.jpg" alt="Breaking News 7" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-xl font-semibold mt-2">Trump VS Harris</h2>
                <p class="mt-2 text-gray-700">The two presidency candidates Donald and Kamala for debate against each other.</p>
                <a href="#" class="text-blue-500 hover:underline mt-2 inline-block">Read more...</a>
            </article>
            <article class="news-item bg-white p-4 rounded-lg shadow-md">
                <img src="/images/news8.jpg" alt="Breaking News 8" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-xl font-semibold mt-2">Colorado; best place for a get away</h2>
                <p class="mt-2 text-gray-700">The breathtaking mountains and lakes in Colorado makes it a perfect place for a get away.</p>
                <a href="#" class="text-blue-500 hover:underline mt-2 inline-block">Read more...</a>
            </article>
            <article class="news-item bg-white p-4 rounded-lg shadow-md">
                <img src="/images/news9.jpg" alt="Breaking News 9" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-xl font-semibold mt-2">High river currents in countryside</h2>
                <p class="mt-2 text-gray-700">During the monsoon season the water current has been very strong, warns the local sheriff.</p>
                <a href="#" class="text-blue-500 hover:underline mt-2 inline-block">Read more...</a>
            </article>
        </div>
    </section>

    <footer class="bg-gray-800 text-white p-4 text-center">
        <p>&copy; 2024 News Portal</p>
    </footer>
</body>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</html>
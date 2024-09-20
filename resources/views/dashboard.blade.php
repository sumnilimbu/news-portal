<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-zinc-100 to-zinc-200 min-h-screen flex items-center justify-center">
    <div class="container mx-auto p-8 max-w-4xl">
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
            <div class="bg-gradient-to-r from-slate-600 to-slate-800 p-6">
                <h1 class="text-3xl font-bold text-white text-center">Welcome to your Dashboard</h1>
            </div>

            <div class="p-8">
                <p class="text-lg text-gray-700 text-center mb-6">You are logged in!</p>

                <!-- Logout Button -->
                <form method="POST" action="{{ route('logout') }}" class="flex justify-center">
                    @csrf
                    <button type="submit" class="bg-gradient-to-r from-red-500 to-red-700 text-white py-2 px-4 rounded-md hover:from-red-600 hover:to-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition transform hover:scale-105">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

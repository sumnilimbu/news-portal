<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-zinc-100 to-zinc-200 min-h-screen flex items-center justify-center">
    <div class="container mx-auto p-8 max-w-4xl">
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
            <div class="bg-gradient-to-r from-slate-600 to-slate-800 p-6">
            </div>
            
            <div class="p-8">
                <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Login to Your Account</h2>
                
                <!-- Login Form -->
                <form method="POST" action="{{ route('login.submit') }}" class="max-w-md mx-auto">
                    @csrf

                    <div class="mb-4">
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                        <input type="text" id="username" name="username" class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 transition" required autofocus>
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 transition" required>
                    </div>

                    @error('email')
                        <p class="text-red-500 text-xs mb-4">{{ $message }}</p>
                    @enderror

                    <div>
                        <button type="submit" class="w-full bg-gradient-to-r from-slate-600 to-slate-800 text-white py-2 px-4 rounded-md hover:from-blue-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition transform hover:scale-105">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto my-20">
        <h1 class="text-center text-2xl font-bold mb-6">Login</h1>
        <form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto bg-white p-6 rounded shadow">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" name="email" id="email" required 
                    class="w-full mt-1 p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" name="password" id="password" required 
                    class="w-full mt-1 p-2 border border-gray-300 rounded">
            </div>
            <div class="flex items-center justify-between mb-4">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="mr-2">
                    <span>Remember me</span>
                </label>
                <a href="{{ route('password.request') }}" class="text-sm text-blue-500">Forgot Password?</a>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">
                Login
            </button>
        </form>
    </div>
</body>
</html>

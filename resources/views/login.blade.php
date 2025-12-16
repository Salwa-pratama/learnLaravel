<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-br ">
        <div class="grid w-full max-w-4xl grid-cols-1 overflow-hidden bg-white shadow-2xl rounded-2xl md:grid-cols-2">

            <!-- LEFT : IMAGE -->
            <div class="hidden md:block">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f" alt="Login Image"
                    class="object-cover w-full h-full">
            </div>

            <!-- RIGHT : FORM -->
            <div class="flex flex-col justify-center p-10">
                <h2 class="mb-2 text-3xl font-bold text-gray-800">
                    Welcome Back 👋
                </h2>
                <p class="mb-8 text-gray-500">
                    Login to continue to your account
                </p>

                <form action="/login" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">
                            Email
                        </label>
                        <input type="email" name="email"
                            class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                            placeholder="you@example.com" required>
                    </div>

                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">
                            Password
                        </label>
                        <input type="password" name="password"
                            class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                            placeholder="••••••••" required>
                    </div>

                    @if ($errors->any())
                        <div class="p-3 text-sm text-red-600 bg-red-100 rounded-lg">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <button type="submit"
                        class="w-full py-3 font-semibold text-white transition duration-300 bg-indigo-600 rounded-lg hover:bg-indigo-700">
                        Login
                    </button>
                </form>

                <p class="mt-6 text-sm text-center text-gray-600">
                    Belum punya akun?
                    <a href="/register" class="font-semibold text-indigo-600 hover:underline">
                        Register Now
                    </a>
                </p>
            </div>
        </div>
    </div>

</body>

</html>

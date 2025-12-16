<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

<body>

    <div class="flex items-center justify-center min-h-screen bg-gradient-to-br">
        <div
            class="grid w-full max-w-4xl grid-cols-1 overflow-hidden bg-white shadow-2xl h-fit rounded-2xl md:grid-cols-2">

            <!-- LEFT : IMAGE -->
            <div class="hidden bg-center bg-cover md:block"
                style="background-image:url('https://images.unsplash.com/photo-1556761175-4b46a572b786')">
            </div>

            <!-- RIGHT : FORM -->
            <div class="flex flex-col justify-center p-10">
                <h2 class="mb-2 text-3xl font-bold text-gray-800">
                    Create Account 🚀
                </h2>
                <p class="mb-8 text-gray-500">
                    Register to get started
                </p>

                <form action="/register" method="POST" class="space-y-5">
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
                            Name
                        </label>
                        <input type="text" name="name"
                            class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                            placeholder="Your Name" required>
                    </div>

                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">
                            Password
                        </label>
                        <input type="password" name="password"
                            class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                            placeholder="••••••••" required>
                    </div>

                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">
                            Confirm Password
                        </label>
                        <input type="password" name="password_confirmation"
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
                        Register
                    </button>
                </form>

                <p class="mt-6 text-sm text-center text-gray-600">
                    Sudah punya akun?
                    <a href="/" class="font-semibold text-indigo-600 hover:underline">
                        Back to Login
                    </a>
                </p>
            </div>
        </div>
    </div>


</body>

</html>

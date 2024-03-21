<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

    <title>Authorization</title>
</head>

<body class="bg-gray-100 h-screen flex justify-center items-center">

    <div>
        @session('error')
            <div class="bg-pink-100 border border-pink-500 p-8 rounded-lg shadow-lg w-96 mb-4">
                <div class="text-pink-500 font-bold">Error :</div>
                <div class="text-pink-500">{{ $value }}</div>
            </div>
        @endsession

        @session('success')
            <div class="bg-green-100 border border-green-500 p-8 rounded-lg shadow-lg w-96 mb-4">
                <div class="text-green-500 font-bold">Success</div>
                <div class="text-green-500">{{ $value }}</div>
            </div>
        @endsession

        @if ($errors->any())
            <div class="bg-pink-100 border border-pink-500 p-8 rounded-lg shadow-lg w-96 mb-4">
                <div class="text-pink-500 font-bold">Error :</div>
                <div class="text-pink-500">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h1 class="text-3xl text-center font-bold mb-4">Login Page</h1>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email"
                    class="mt-1 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm custom-input px-4 py-2">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password"
                    class="mt-1 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm custom-input px-4 py-2">
            </div>

            <button type="button"
                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login
            </button>

            <div class="text-center mt-4">
                <p class="text-sm text-gray-600">Didn't have account yet? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register now!</a></p>
            </div>
        </div>
    </div>
</body>
</html>

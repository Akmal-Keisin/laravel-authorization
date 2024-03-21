<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')
    <style>
        .custom-input:focus {
            border-width: 2px;
            outline-width: 0.5px;
        }

    </style>
    <title>Authorization</title>
</head>

<body class="bg-gray-100 h-screen flex justify-center items-center">

    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h1 class="text-3xl text-center font-bold mb-4">Register Page</h1>

        <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" id="username" name="username" placeholder="Enter your username"
                class="mt-1 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm custom-input px-4 py-2">
        </div>

        <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username"
                class="mt-1 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm custom-input px-4 py-2">
        </div>

        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password"
                class="mt-1 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm custom-input px-4 py-2">
        </div>

        <button type="button"
            class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Register
        </button>

        <div class="text-center mt-4">
            <p class="text-sm text-gray-600">Already have account? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login now!</a></p>
        </div>
    </div>

</body>
</html>

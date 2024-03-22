<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')
    <style>
        .sidebar {
            width: 240px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }
    </style>
    <title>Authorization</title>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="h-screen sidebar border-r border-gray-200 overflow-y-auto">
            <ul class="mt-8">
                <li class="mb-4"><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Home</a></li>
                <li class="mb-4"><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">About</a></li>
                <li class="mb-4"><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Services</a></li>
                <li class="mb-4"><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Contact</a></li>
                <!-- Add more navigation items as needed -->
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 bg-gray-100 p-8">
            <h1 class="text-2xl font-bold mb-4">Main Content</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <!-- Add more main content here -->
        </div>
    </div>
</body>
</html>

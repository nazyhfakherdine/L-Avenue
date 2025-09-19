<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L’Avenue Hotel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <header class="bg-white shadow-md fixed w-full z-50">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.jpg') }}" alt="L’Avenue Logo" class="h-10">
                <h1 class="text-xl font-bold">L’Avenue Hotel</h1>
            </div>

        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center text-center bg-cover bg-center" style="background-image: url('{{ asset('images/hotel.jpg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 text-white px-4">
            <h2 class="text-5xl font-extrabold mb-4">Welcome to L’Avenue Hotel</h2>
            <p class="text-lg mb-6">Luxury and comfort in the heart of the city.</p>
            <a href="/admin/login" class="bg-orange-600 px-6 py-3 rounded-lg font-semibold hover:bg-orange-700">Lets manage some data :)</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold mb-4">About Us</h3>
            <p class="max-w-2xl mx-auto text-gray-600">
                At L’Avenue Hotel, we combine luxury, comfort, and elegance for an unforgettable stay. 
                Located in the heart of the city, our hotel offers modern rooms, fine dining, and premium services.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-8 text-center">
        <p>&copy; {{ date('Y') }} L’Avenue Hotel. All rights reserved.</p>
    </footer>

</body>
</html>

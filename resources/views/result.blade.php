<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeartGuard - Prediction Result</title>
    <link rel="icon" type="image/png" href="{{ asset('images/heartguard_icon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-blue-50 to-blue-100 min-h-screen flex flex-col justify-between">
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <img src="{{ asset('images/heartguard_logo.png') }}" alt="HeartGuard Logo" class="mx-auto h-24 mb-4">
            <h1 class="text-5xl font-extrabold text-gray-800 mb-2">HeartGuard</h1>
            <p class="text-xl text-blue-600 font-semibold">Care for Every Heartbeat</p>
        </div>

        <!-- Result Section -->
        <div class="max-w-lg mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-6">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Prediction Result</h2>
                    
                    @if (isset($message))
                        @if (str_contains($message, 'No Heart Disease'))
                            <div class="mb-6 p-4 bg-green-100 rounded-lg shadow-sm">
                                <p class="text-green-700 font-medium">{{ $message }}</p>
                            </div>
                        @else
                            <div class="mb-6 p-4 bg-red-100 rounded-lg shadow-sm">
                                <p class="text-red-700 font-medium">{{ $message }}</p>
                            </div>
                        @endif
                    @else
                        <div class="mb-6 p-4 bg-yellow-100 rounded-lg shadow-sm">
                            <p class="text-yellow-700">Prediction result is not available.</p>
                        </div>
                    @endif
                </div>

                <div class="flex justify-center mt-6">
                    <a href="/" 
                       class="px-8 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold rounded-lg shadow-md hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transform transition-all duration-200 hover:scale-105">
                        Make Another Prediction
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="bg-transparent text-gray-700 py-4">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; 2025 <span class="font-semibold">HeartGuard</span>. Developed by <strong>Yudha Jarod Krisnawan</strong>. All rights reserved.</p>
        </div>
    </footer>r>
</body>
</html>

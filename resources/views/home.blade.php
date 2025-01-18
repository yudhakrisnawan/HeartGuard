<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeartGuard - Heart Disease Prediction</title>
    <link rel="icon" type="image/png" href="{{ asset('images/heartguard_icon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-blue-50 to-blue-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <img src="{{ asset('images/heartguard_logo.png') }}" alt="HeartGuard Logo" class="mx-auto h-24 mb-4">
            <h1 class="text-5xl font-extrabold text-gray-800 mb-2">HeartGuard</h1>
            <p class="text-xl text-blue-600 font-semibold mb-4">Care for Every Heartbeat</p>
            <div class="max-w-2xl mx-auto">
                <p class="text-gray-700 text-lg leading-relaxed">
                    HeartGuard is an advanced AI-powered heart disease prediction system that helps identify potential cardiac risks early. 
                    By analyzing various medical parameters, we provide insights about your heart health, enabling proactive healthcare decisions 
                    and timely medical interventions when needed.
                </p>
            </div>
        </div>

        <!-- Form Section -->
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Heart Disease Prediction</h2>
                <p class="text-gray-600">Fill in your medical information to get an accurate prediction of your heart condition</p>
            </div>

            <!-- Your existing form code remains the same -->
            <form action="/predict" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Age Input -->
                    <div>
                        <label for="age" class="block text-sm font-medium text-gray-700 mb-1">Age</label>
                        <input type="number" name="age" id="age" required 
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Sex Input -->
                    <div>
                        <label for="sex" class="block text-sm font-medium text-gray-700 mb-1">Sex</label>
                        <select name="sex" id="sex" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                        </select>
                    </div>

                    <!-- Chest Pain Type -->
                    <div>
                        <label for="cp" class="block text-sm font-medium text-gray-700 mb-1">Chest Pain Type</label>
                        <select name="cp" id="cp" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="0">Typical Angina</option>
                            <option value="1">Atypical Angina</option>
                            <option value="2">Non-anginal Pain</option>
                            <option value="3">Asymptomatic</option>
                        </select>
                    </div>

                    <!-- Resting Blood Pressure -->
                    <div>
                        <label for="trestbps" class="block text-sm font-medium text-gray-700 mb-1">Resting Blood Pressure (mm Hg)</label>
                        <input type="number" name="trestbps" id="trestbps" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Cholesterol -->
                    <div>
                        <label for="chol" class="block text-sm font-medium text-gray-700 mb-1">Cholesterol (mg/dl)</label>
                        <input type="number" name="chol" id="chol" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Fasting Blood Sugar -->
                    <div>
                        <label for="fbs" class="block text-sm font-medium text-gray-700 mb-1">Fasting Blood Sugar > 120 mg/dl</label>
                        <select name="fbs" id="fbs" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                    <!-- Resting ECG -->
                    <div>
                        <label for="restecg" class="block text-sm font-medium text-gray-700 mb-1">Resting ECG Results</label>
                        <select name="restecg" id="restecg" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="0">Normal</option>
                            <option value="1">ST-T Wave Abnormality</option>
                            <option value="2">Left Ventricular Hypertrophy</option>
                        </select>
                    </div>

                    <!-- Max Heart Rate -->
                    <div>
                        <label for="thalach" class="block text-sm font-medium text-gray-700 mb-1">Maximum Heart Rate</label>
                        <input type="number" name="thalach" id="thalach" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Exercise Induced Angina -->
                    <div>
                        <label for="exang" class="block text-sm font-medium text-gray-700 mb-1">Exercise Induced Angina</label>
                        <select name="exang" id="exang" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                    <!-- ST Depression -->
                    <div>
                        <label for="oldpeak" class="block text-sm font-medium text-gray-700 mb-1">ST Depression</label>
                        <input type="number" step="0.1" name="oldpeak" id="oldpeak" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Slope -->
                    <div>
                        <label for="slope" class="block text-sm font-medium text-gray-700 mb-1">Slope of Peak Exercise ST Segment</label>
                        <select name="slope" id="slope" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="0">Upsloping</option>
                            <option value="1">Flat</option>
                            <option value="2">Downsloping</option>
                        </select>
                    </div>

                    <!-- Number of Major Vessels -->
                    <div>
                        <label for="ca" class="block text-sm font-medium text-gray-700 mb-1">Number of Major Vessels</label>
                        <select name="ca" id="ca" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <!-- Thalassemia -->
                    <div>
                        <label for="thal" class="block text-sm font-medium text-gray-700 mb-1">Thalassemia</label>
                        <select name="thal" id="thal" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="1">Normal</option>
                            <option value="2">Fixed Defect</option>
                            <option value="3">Reversible Defect</option>
                        </select>
                    </div>
                </div>

                <div class="flex justify-center mt-8">
                    <button type="submit" 
                            class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transform transition-all duration-200 hover:scale-105">
                        Predict Heart Condition
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Footer Section -->
    <footer class="bg-transparent text-gray-700 py-4">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; 2025 <span class="font-semibold">HeartGuard</span>. Developed by <strong>Yudha Jarod Krisnawan</strong>. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
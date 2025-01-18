<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeartDiseaseController extends Controller
{
    /**
     * Menampilkan form prediksi.
     */
    public function showForm()
    {
        return view('home');
    }

    /**
     * Memproses data dari form dan memanggil script Python untuk prediksi.
     */
    public function predict(Request $request)
    {
        $validatedData = $request->validate([
            'age' => 'required|integer',
            'sex' => 'required|in:0,1',
            'cp' => 'required|integer|between:0,3',
            'trestbps' => 'required|integer',
            'chol' => 'required|integer',
            'fbs' => 'required|in:0,1',
            'restecg' => 'required|integer|between:0,2',
            'thalach' => 'required|integer',
            'exang' => 'required|in:0,1',
            'oldpeak' => 'required|numeric',
            'slope' => 'required|integer|between:0,2',
            'ca' => 'required|integer|between:0,3',
            'thal' => 'required|integer|between:1,3',
        ]);
    
        // Convert data to proper types
        $data = [
            'age' => (int)$validatedData['age'],
            'sex' => (int)$validatedData['sex'],
            'cp' => (int)$validatedData['cp'],
            'trestbps' => (int)$validatedData['trestbps'],
            'chol' => (int)$validatedData['chol'],
            'fbs' => (int)$validatedData['fbs'],
            'restecg' => (int)$validatedData['restecg'],
            'thalach' => (int)$validatedData['thalach'],
            'exang' => (int)$validatedData['exang'],
            'oldpeak' => (float)$validatedData['oldpeak'],
            'slope' => (int)$validatedData['slope'],
            'ca' => (int)$validatedData['ca'],
            'thal' => (int)$validatedData['thal']
        ];
    
        // Convert to JSON
        $jsonString = json_encode($data);
        
        // Create command
        $pythonScript = base_path('python_scripts/predict.py');
        $escapedJson = '"' . addslashes($jsonString) . '"';
        $command = "python \"$pythonScript\" $escapedJson";
    
        // Execute command
        $output = trim(shell_exec($command));
    
        // Directly check if output is '0' or '1'
        if ($output === '0' || $output === '1') {
            $result = (int)$output;
            $message = $result === 1
                ? "Heart Disease Detected. Please consult a doctor for further examination."
                : "No Heart Disease Detected. Keep maintaining a healthy lifestyle.";
    
            return view('result', compact('message'));
        }
    
        // If we get here, something went wrong
        return "Error: Invalid prediction result. Raw output: " . $output;
    }
}

import sys
import json
import pickle
import numpy as np
from sklearn.preprocessing import StandardScaler
import os

try:
    # Get script directory
    script_dir = os.path.dirname(os.path.abspath(__file__))
    
    # Load model and scaler
    model_path = os.path.join(script_dir, 'model.pkl')
    scaler_path = os.path.join(script_dir, 'scaler.pkl')
    
    # Load the model and scaler
    with open(model_path, 'rb') as f:
        model = pickle.load(f)
    with open(scaler_path, 'rb') as f:
        scaler = pickle.load(f)

    # Get and parse input data
    if len(sys.argv) != 2:
        raise ValueError("Expected exactly one argument with JSON data")

    # Get the JSON string and remove any extra quotes
    json_str = sys.argv[1].strip('"\'')
    
    try:
        data = json.loads(json_str)
    except json.JSONDecodeError as e:
        print(f"Error parsing JSON: {e}")
        print(f"Received JSON string: {json_str}")
        sys.exit(1)

    # Create feature array
    features = np.array([[
        data['age'], data['sex'], data['cp'], data['trestbps'],
        data['chol'], data['fbs'], data['restecg'], data['thalach'],
        data['exang'], data['oldpeak'], data['slope'], data['ca'],
        data['thal']
    ]])

    # Scale features
    features_scaled = scaler.transform(features)

    # Make prediction
    prediction = model.predict(features_scaled)

    # Print only the prediction
    print(int(prediction[0]))

except Exception as e:
    print(f"Error: {str(e)}")
    sys.exit(1)
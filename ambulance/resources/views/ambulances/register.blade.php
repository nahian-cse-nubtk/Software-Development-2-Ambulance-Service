<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Register Your Ambulance</title>
</head>
<body>
    

    <h1 class="text-center text-5xl my-10">Register Your Ambulance</h1>
    <form action="{{ route('ambulances.store') }}" method="POST" class="w-1/2 mx-auto py-4 space-y-3">
        @csrf
        <div>
            <label for="provider_name" class="p-2 text-xl">Provider Name:</label>
            <input type="text" name="provider_name" id="provider_name" required class="w-full border border-blue-700 p-2 rounded-md">
        </div>
        <div>
            <label for="ambulance_number" class="p-2 text-xl">Ambulance Number:</label>
            <input type="text" name="ambulance_number" id="ambulance_number" required class="w-full border border-blue-700 p-2 rounded-md">
        </div>
        <div>
            <label for="vehicle_type" class="p-2 text-xl">Vehicle Type:</label>
            <input type="text" name="vehicle_type" id="vehicle_type" required class="w-full border border-blue-700 p-2 rounded-md">

            <label for="contact_number" class="p-2 text-xl">Contact:</label>
            <input type="number" name="contact_number" id="contact_number" required class="w-full border border-blue-700 p-2 rounded-md">
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md">Register Ambulance</button>
        <a href="{{ url('/') }}" class="w-full bg-blue-500 text-white p-2 rounded-md ">Back to Home</a>
    </form>
    
    </body>
    </html>

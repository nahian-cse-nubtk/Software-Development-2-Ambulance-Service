<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Ambulance - Khulna</title>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Ambulance Service Logo">
        </div>
        <h1>Book an Ambulance</h1>
    </header>

    <div class="container">
        <!-- Optional Image for Booking -->
        <img src="{{ asset('images/ambulance-booking.jpg') }}" alt="Booking Ambulance" class="booking-image">

        <form action="{{ route('store.booking') }}" method="POST" class="booking-form" >
    @csrf

    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="phone">Phone Number:</label>
    <input type="text" id="phone" name="phone" required>

    <label for="location">Location:</label>
    <input type="text" id="location" name="location" required>

    <label for="emergency">Type of Emergency:</label>
    <textarea id="emergency" name="emergency" required></textarea>

   
   
    <button type="submit" class="btn">Submit Booking</button>
     </form>

        <a href="{{ url('/') }}" class="btn">Back to Home</a>
    </div>

    <footer>
        <p>&copy; 2025 Ambulance Service System Khulna</p>
    </footer>
</body>
</html>

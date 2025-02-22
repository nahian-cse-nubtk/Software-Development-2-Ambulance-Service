<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambulance Service System Khulna</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>
        @if(session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div>
        @endif

    <header>
        <!-- Logo Image -->
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Ambulance Service Logo">
        </div>
        <h1 class="font-bold text-2xl p-2">Ambulance Service System Khulna</h1>
    </header>

    <div class="container">
        <p>Welcome to the Ambulance Service of Khulna. We provide fast and reliable ambulance services to help you in medical emergencies.</p>
        <div class="nav-links">
            <a href="{{ url('/booking') }}" class="btn">Book an Ambulance</a>
            
            <a href="{{ url('/register-ambulance') }}" class="btn">Service Provider Registration</a>
            <a href="{{ url('/ambulances') }}" class="btn">Available Ambulance</a>
            <a href="{{ url('/bookings') }}" class="btn">Booking Details</a>
            <a href="{{ url('/contact') }}" class="btn">Contact Us</a>
        </div>
        <!-- Optional Image -->
        <img src="{{ asset('images/ambulance.jpg') }}" alt="Ambulance" class="hero-image">

        
    </div>
     <br>
     <br>
     <br>
    <div class="feedback-form-container">
        <h2>We Value Your Feedback</h2>
        <form action="{{ route('feedback.store') }}" method="POST">
            @csrf  <!-- CSRF Token for security -->
            <div class="form-group">
                <!-- <label for="name">Your Name:</label> -->
                <input type="text" id="name" name="name" required placeholder="Enter your name" />
            </div>
            
            <div class="form-group">
                <!-- <label for="email">Your Email:</label> -->
                <input type="email" id="email" name="email" required placeholder="Enter your email" />
            </div>
            
            <div class="form-group">
                <!-- <label for="message">Your Feedback:</label> -->
                <textarea id="message" name="message" required placeholder="Enter your feedback"></textarea>
            </div>
            
            <button type="submit" class="btn">Submit Feedback</button>
        </form>
    </div>
    
    <div class="feedback-section">
    <h2>Customer Feedback</h2>
    <ul>
    
        @foreach ($feedbacks as $feedback)
            <li>
                <strong>{{ $feedback->name }}</strong> ({{ $feedback->email }}) says:
                <p>{{ $feedback->message }}</p>
            </li>
        @endforeach
        
    </ul>
</div>

    <footer class="footer">
    <div class="footer-content">
        <!-- Short About Us -->
        <div class="about-us">
            <p>We provide reliable ambulance services to help in emergencies, ensuring the safety and comfort of our patients.</p>
        </div>
        </div>
        <!-- Links Section -->
        <div >
            <p><a href="{{ route('terms') }}" class="font-bold hover:text-white hover:underline">Terms and Conditions</a></li> 
            <div class="flex justify-center py-4 space-x-2">
            <p class="w-10 h-10"><a href="https://www.facebook.com/yourpage" target="_blank"><i class="fa-brands fa-square-facebook" ></i></a></p>
            <P class="w-10"><a href="https://wa.link/tj8zp8" target="_blank"><i class="fa-brands fa-square-whatsapp"></i></a></p>
            <P class="w-10"><a href="https://sheikhalnahian@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a></p>
         </div>
        </div>
    

        <p>&copy; 2025 Ambulance Service System Khulna</p>
    </footer>
</body>
</html>

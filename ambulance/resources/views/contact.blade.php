<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Ambulance Service Khulna</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="m-y-5">
    <header>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Ambulance Service Logo">
        </div>
        <h1 class="text-4xl">Contact Us</h1>
    </header>

    <div class="container">
        <!-- Optional Image for Contact Us -->
        <img src="{{ asset('images/contact-us.jpg') }}" alt="Contact Us" class="contact-image">

        <h2>If you need immediate assistance, contact us via:</h2>

        <ul class="contact-info">
            <li><strong>Phone:</strong> +8801754081112</li>
            <li><strong>Email:</strong> sheikhalnahian@gamil.com</li>
            <li><strong>Address:</strong> Khulna, Bangladesh</li>
            <li>Google Map Location: <a href="https://yt.vu/cNH3E" class="font-bold">Click Here</a></li>
        </ul>
        
       <br>
       <br>
        <a href="{{ url('/') }}"  class="w-full bg-blue-500 text-white p-2 rounded-md">Back to Home</a>
      <br>
      <br>
    </div>

    <footer>
        <p>&copy; 2025 Ambulance Service System Khulna</p>
    </footer>
</body>
</html>

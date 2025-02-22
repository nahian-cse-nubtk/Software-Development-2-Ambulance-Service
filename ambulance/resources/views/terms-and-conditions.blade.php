<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Terms and Conditions</title>
</head>
<body>
   <!-- resources/views/terms-and-conditions.blade.php -->

<div class="terms-container">
    <h2>Terms and Conditions</h2>
    <p><strong>Last Updated:</strong> February 19, 2025</p>

    <div class="terms-content">
        <h3>1. Introduction</h3>
        <p>Welcome to our Ambulance Services website. By using our services, you agree to the following Terms and Conditions. Please read them carefully before using the services.</p>

        <h3>2. Service Availability</h3>
        <p>Our ambulance services are available in select regions and are subject to availability. We make every effort to provide timely services, but we cannot guarantee availability in all situations.</p>

        <h3>3. Booking and Payment</h3>
        <p>When you book an ambulance, we may collect your personal details, including your name, phone number, and emergency information. Payments, if applicable, will be processed at the time of booking.</p>

        <h3>4. User Responsibilities</h3>
        <p>You are responsible for providing accurate and truthful information when booking an ambulance. Inaccurate or incomplete information may result in delays or failure to provide the service.</p>

        <h3>5. Limitation of Liability</h3>
        <p>We are not liable for any direct, indirect, incidental, or consequential damages arising from the use of our services. This includes any delays or failure to provide services due to uncontrollable circumstances.</p>

        <h3>6. Changes to Terms</h3>
        <p>We reserve the right to modify or update these Terms and Conditions at any time. The updated terms will be posted on this page, and your continued use of the services will signify your acceptance of the revised terms.</p>

        <h3>7. Contact Information</h3>
        <p>If you have any questions about these Terms and Conditions, please contact us at <strong>support@example.com</strong>.</p>
    </div>
    <a href="{{ url('/') }}" class="bg-blue-500 text-white px-3 py-1 rounded-md inline-block text-center">Back to Home</a>
</div>
 
 
 
</body>
</html>
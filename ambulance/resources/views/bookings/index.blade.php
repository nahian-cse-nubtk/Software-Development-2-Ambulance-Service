<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booked Ambulances</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        th,td{
            border: 5px solid black;
            padding: 12px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div>
        <h1 class="text-center text-4xl my-5">List Who Booked Ambulances</h1>
        <table class="mx-auto border-10x">
            <thead class="py-2 bg-blue-500 ">
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Emergency</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->phone }}</td>
                        <td>{{ $booking->location }}</td>
                        <td>{{ $booking->emergency }}</td>
                        <td>{{ $booking->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="text-center">
    <br><br>
    <a href="{{ url('/') }}" class="bg-blue-500 text-white px-3 py-1 rounded-md inline-block text-center">Back to Home</a>
    </div>
</body>
</html>

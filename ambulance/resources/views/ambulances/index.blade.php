<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Document</title>

    <style>
        th,td{
            border: 5px solid black;
            padding: 12px;
            font-size: 20px;
        }
    </style>

</head>
<body>
    
        <header>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Ambulance Service Logo">
        </div>
    </header>
    

    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="space-between-2">
    <div>
    <h1 class="text-center text-4xl my-5">Available Ambulances</h1>
        <div class="flex justify-center py-4">
        <form method="GET" action="{{ route('ambulances.search') }}" class="flex space-x-3 w-1/2">
        <input type="text" name="search" placeholder="Search for ambulances..." value="{{ request()->query('search') }}" required class="w-full border border-blue-700 p-2 rounded-md">
        <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded-md hover:bg-blue-800"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        </div>
        <table class="mx-auto border-10x">
        <thead class="py-2 bg-blue-500 ">
            <tr>
                <th>Provider Name</th>
                <th>Ambulance Number</th>
                <th>Vehicle Type</th>
                <th>Contact Number</th>
                <th>Availability</th>
                <th>Mark as Unavailable</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ambulances as $ambulance)
                <tr>
                    <td>{{ $ambulance->provider_name }}</td>
                    <td>{{ $ambulance->ambulance_number }}</td>
                    <td>{{ $ambulance->vehicle_type }}</td>
                    <td>{{ $ambulance->contact_number }}</td>
                    <td>{{ $ambulance->is_available ? 'Available' : 'Not Available' }} </td>
                    <td>
                    <form action="{{ route('ambulances.update_availability', $ambulance->id) }}" method="POST">
                      @csrf
                      @method('PATCH') <!-- Specify PATCH request -->
                    <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded-md inline-block text-center">
                    <i class="fa-solid fa-check"></i>
                    </button>
                    </td>
            </button>
        </form>
                </tr>
            @endforeach
        </tbody>
        
    </body>
    
    
   
    </table>
    </div>
    <div class="text-center">
        <br><br>
    <a href="{{ url('/') }}" class="bg-blue-500 text-white px-3 py-1 rounded-md inline-block text-center">Back to Home</a>
    <br>
    <br>
    <a href="{{ url('/register-ambulance') }}" class="bg-blue-500 text-white px-3 py-1 rounded-md inline-block text-center">Register Again as Available</a>
    </div>
   </div>
   </body>
    </html>

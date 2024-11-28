<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: green; /* Light greenish background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .dashboard-container {
            background: white;
            width: 400px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .dashboard-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #4B8B3B;
        }

        .profile-picture {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 20px auto;
            border: 4px solid #4B8B3B;
            object-fit: cover;
        }

        .details {
            text-align: left;
            font-size: 14px;
            line-height: 1.6;
            color: #333;
        }

        .details p {
            margin: 8px 0;
        }

        .logout-button {
            background-color: #4B8B3B;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 20px;
        }

        .logout-button:hover {
            background-color: #3A6E2F;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1 class="dashboard-header">Welcome, {{ $user->name }}!</h1>

        <!-- Display the profile picture -->
        <img src="{{ $user->avatar }}" alt="Profile Picture" class="profile-picture">

        <!-- Display user details -->
        <div class="details">
            <p><strong>Google ID:</strong> {{ $user->id }}</p>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
        </div>

        <!-- Logout button -->
        <a href="{{ route('google.logout') }}">
            <button class="logout-button">Logout</button>
        </a>
    </div>
</body>
</html>

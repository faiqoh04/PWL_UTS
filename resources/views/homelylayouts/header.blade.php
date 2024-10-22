<!-- resources/views/homelylayouts/header.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"> <!-- Tambahkan link font -->
    <title>Homely Decor</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Homely Decor</h1>
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('landing.index') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('menu') }}">Menu</a></li>
                <li><a href="{{ route('review') }}">Review</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <!-- Tambahkan Login dan Register -->
                <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                
            </ul>
        </nav>
    </header>

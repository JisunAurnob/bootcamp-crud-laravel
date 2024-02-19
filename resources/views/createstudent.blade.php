<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create Student</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body class="antialiased">
      <h1>This is create student page</h1>
      {{-- name
student_id
address
date_of_birth --}}
        <form method="POST" action="/store-student">
            @csrf
            <label for="name">Student Name</label><br>
            <input type="text" id="name" name="name" placeholder="Student Name">
            <br><br>
            <label for="student_id">Student Id</label><br>
            <input type="text" id="student_id" name="student_id" placeholder="Student ID">
            <br><br>
            <label for="address">Address</label><br>
            <input type="text" id="address" name="address" placeholder="Address">
            <br><br>
            <label for="date_of_birth">Birthdate</label><br>
            <input type="date" id="date_of_birth" name="date_of_birth" placeholder="DOB">
            <br>
            <br>
            <button type="submit">Create Student</button>
        </form>
    </body>
</html>

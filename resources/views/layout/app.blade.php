<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f8f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            font-size: 2em;
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 0;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .notes-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .note-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 250px;
            padding: 20px;
            text-align: left;
            transition: transform 0.2s;
        }

        .note-card:hover {
            transform: translateY(-5px);
        }

        .note-card h3 {
            font-size: 1.2em;
            color: #333;
            margin-bottom: 10px;
        }

        .note-card p {
            font-size: 0.9em;
            color: #666;
            margin-bottom: 15px;
        }

        .note-card a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .note-card a:hover {
            text-decoration: underline;
        }
    </style>

</head>
<body>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"crossorigin="anonymous" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
</head>
<body>
    <style>
        body {
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            background-color: #fdfdfd;
        }

        .shadow {
            box-shadow: 0 4px 2px -1px rgba(0, 0, 0, 0.1);
        }

        .masthead {
            background: #3398E1;
            height: auto;
            padding-bottom: 8px;
            box-shadow: 0 16px 48px #E3E7EB;
            padding-top: 10px;
        }
        .card{
            box-shadow: 0 16px 48px #E3E7EB;
        }
    </style>

        
    @yield('navbar')

    @yield('content')

    
</body>
</html>
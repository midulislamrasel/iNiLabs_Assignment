<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="mx-auto">
        <div class="row">
            <div class="col-12 bg-success text-center py-2">
                <h2>CRUD</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-warning-subtle mb-3 mt-3">
                <h4> @yield('title') </h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>

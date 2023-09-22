<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body class="bear-bg bg">
    <div id="app">
        <div class="bg-opacity pt-3 pb-5">
            <h1 class="text-center display-1 fw-bold text-success pb-2">Welcome to the world of bears </h1>
            <div class="d-flex justify-content-center">
                <a href="/Spider-Man" type="button" class="btn btn-success justify-content-center btn-lg">Vai
                    Avanti</a>
            </div>
        </div>
        <div style="padding-top: 250px" class="container pb-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach ($listInfoBear as $item)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $item['img'] }}" class="card-img-top" alt="...">
                            <div style="height:260px" class="card-body ">
                                <h5 class="card-title fw-bold">Nome: {{ $item['nome'] }}</h5>
                                <ul class="list-group">
                                    <li class="list-group-item">Specie: {{ $item['specie'] }}</li>
                                    <li class="list-group-item">Habitat: {{ $item['habitat'] }}</li>
                                    <li class="list-group-item">Dimensioni: {{ $item['dimensioni'] }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>

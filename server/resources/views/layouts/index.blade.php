<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet"/>
</head>
<body>
    <section>
        <div class="main-header">
            <img src="{{ asset('images/logo.png') }}">
            <form action="" method="POST">
            @csrf
            <div class="input-field">
            <i class="bi bi-search"></i>
            </div>
            <input type="text" name="search" placeholder="Search Products..." required/>
            </form>
            <div class="main-icons gap-5">
                <i class="bi bi-cart-fill"></i>
                <i class="bi bi-star-fill"></i>
            </div>
                    <div class="main-profile">
                        <img src="{{ asset('images/profile.png') }}" class="second-profile" >
                         <span> jckyrvn </span>
                    </div>
</div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>
</html>
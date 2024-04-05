<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primi Passi</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #f4e1ea;
            overflow: hidden;
        }

        nav {
            width: 100%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: black;
            height: 27%;
        }

        ul {
            z-index: 10;
        }

        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        img {
            position: absolute;
            top: -25%;
            left: 0;
            right: 0;
            width: 100vw;
        }

        .reverse {
            transform: scaleY(-1);
            position: absolute;
            top: 38%;
            left: 0;
            right: 0;
            width: 100vw;
            z-index: -1;
        }
    </style>
</head>

<body>
    <div>
        <img src="/img/maschera-tokyo.svg" alt="">
    </div>
    <nav>
        <div class="container">
            <h1 class="d-flex justify-content-center display-5 text-white mt-2">PRIMI PASSI</h1>
            <ul class="d-flex list-unstyled justify-content-center gap-5">
                <li><a href="{{route('home')}}"> HOME</a></li>
                <li><a href="{{route('about')}}"> ABOUT</a></li>
                <li><a href="{{route('blog')}}"> BLOG</a></li>
                <li><a href="{{route('videos')}}"> VIDEOS</a></li>
            </ul>

            <div class="text-center text-white">BOOKS: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aspernatur similique voluptates. Eligendi hic provident quae fugiat, alias, temporibus ad magni obcaecati voluptas eveniet nesciunt, earum neque beatae facilis rerum?</div>
        </div>

    </nav>

    <div>
        <img class="reverse" src="/img/maschera-tokyo.svg" alt="">
    </div>




    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- Styles -->
    <style>
        /* Agrega tus estilos personalizados aquí */

        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f7fafc;
            color: #1a202c;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .product-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-details {
            margin-top: 2rem;
        }

        .product-title {
            font-size: 2rem;
            font-weight: 600;
            color: #2d3748;
        }

        .product-description {
            margin-top: 1rem;
            font-size: 1.2rem;
            color: #4a5568;
        }

        .product-price {
            margin-top: 1rem;
            font-size: 1.5rem;
            font-weight: 600;
            color: #e53e3e;
        }

        /* Puedes seguir agregando estilos según sea necesario */
    </style>
</head>

<body>

    <x-header />

   <section class="container mx-auto mt-8">
    @if (!empty($merchandiseProduct->images))
        <div class="slick-slider">
            @foreach ($merchandiseProduct->images as $image)
                <div>
                    <img src="{{ asset('storage/' . $image) }}" alt="{{ $merchandiseProduct->title }}" class="w-full h-auto">
                </div>
            @endforeach
        </div>
    @else
        <p>No hay imágenes disponibles para este producto.</p>
    @endif

    <div class="product-details mt-8">
        <h1 class="product-title text-3xl font-bold">{{ $merchandiseProduct->title }}</h1>
        <p class="product-description text-lg text-gray-700">{{ $merchandiseProduct->description }}</p>
        <p class="product-price text-2xl font-bold text-red-500">${{ $merchandiseProduct->price }}</p>
        <!-- Agrega más detalles según sea necesario -->
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.slick-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });
    });
</script>

</body>

</html>

    
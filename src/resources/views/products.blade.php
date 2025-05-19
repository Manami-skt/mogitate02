<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
</head>
<body>
    <header>
        <h2>mogitate</h2>
    </header>
    <main>
        <div class="flex__item wrap">
            @foreach ($products as $product)
            <div class="product__card">
                <div class="card__img">
                    <img src="{{$product->image}}" alt="{{$product->name}}">
                </div>
                <div class="card__content">
                    <div class="card__tag">
                        <p class="card__tag">{{$product->name}}</p>
                        <p class="card__price">¥{{$product->price}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</body>
</html>

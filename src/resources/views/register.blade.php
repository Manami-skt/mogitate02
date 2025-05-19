<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            mogitate
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>商品登録</h2>
            </div>
            <form action="" class="form">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品名</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="商品名を入力" >
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">値段</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="number" name="price" placeholder="値段を入力" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品画像</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="image" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">季節</span>
                        <span class="form__label--required">必須</span>
                        <span class="form__label">複数選択可</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--gender">
                            <label>春<input type="radio" name="season" value="spring" /></label>
                            <label>夏<input type="radio" name="season" value="summer" /></label>
                            <label>秋<input type="radio" name="season" value="fall" /></label>
                            <label>冬<input type="radio" name="season" value="winter" /></label>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品説明</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form group-content">
                        <div class="form__input--text">
                            <textarea name="content" id="" placeholder="商品説明を入力"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-back">戻る</button>
                    <button class="form__button-submit" type="submit">登録</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
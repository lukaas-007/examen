<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __("add_wolf.title") }}</title>
    
    @vite(['resources/css/app.css', 'resources/css/add_wolf.css', 'resources/js/add_wolf.js'])
</head>
<body>
    <h1 class="title">{{ __('add_wolf.title') }}</h1>

    <main>
        <div class="map">
            <img src="/images/1A.jpg" class="selected" alt="">
            <img src="/images/1B.jpg" class="selected" alt="">
            <img src="/images/1C.jpg" class="selected" alt="">
            <img src="/images/1D.jpg" class="selected" alt="">
            <img src="/images/1E.jpg" class="selected" alt="">

            <img src="/images/2A.jpg" class="selected" alt="">
            <img src="/images/2B.jpg" class="selected" alt="">
            <img src="/images/2C.jpg" class="selected" alt="">
            <img src="/images/2D.jpg" class="selected" alt="">
            <img src="/images/2E.jpg" class="selected" alt="">

            <img src="/images/3A.jpg" class="selected" alt="">
            <img src="/images/3B.jpg" class="selected" alt="">
            <img src="/images/3C.jpg" class="selected" alt="">
            <img src="/images/3D.jpg" class="selected" alt="">
            <img src="/images/3E.jpg" class="selected" alt="">

            <img src="/images/4A.jpg" class="selected" alt="">
            <img src="/images/4B.jpg" class="selected" alt="">   
            <img src="/images/4C.jpg" class="selected" alt="">
            <img src="/images/4D.jpg" class="selected" alt="">
            <img src="/images/4E.jpg" class="selected" alt="">

            <img src="/images/5A.jpg" class="selected" alt="">
            <img src="/images/5B.jpg" class="selected" alt="">
            <img src="/images/5C.jpg" class="selected" alt="">
            <img src="/images/5D.jpg" class="selected" alt="">
            <img src="/images/5E.jpg" class="selected" alt="">

            <img src="/images/6A.jpg" class="selected" alt="">
            <img src="/images/6B.jpg" class="selected" alt="">
            <img src="/images/6C.jpg" class="selected" alt="">
            <img src="/images/6D.jpg" class="selected" alt="">
            <img src="/images/6E.jpg" class="selected" alt="">
        </div>

        <form action="{{ route('add') }}" method="POST">
            @csrf

            <input type="hiden" id="area" name="area" value="??" hidden> 

            <input type="number" id="amount" name="amount" placeholder="{{ __('add_wolf.amount') }}" required>

            <button type="submit">{{ __('add_wolf.submit') }}</button>

            <a href="{{ route('overview') }}" class="link">
                {{ __('overview.title') }}
            </a>
        </form> 
    </main>

    
</body>
</html>
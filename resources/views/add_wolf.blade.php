<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __("add_wolf.title") }}</title>
    
    @vite(['resources/css/app.css', 'resources/css/add_wolf.css', 'resources/js/add_wolf.js'])
</head>
<body>
    {{ __('add_wolf.title') }}

    <br>
    <br>

    <div class="map">
        <img src="/images/1A.jpg" alt="">
        <img src="/images/1B.jpg" alt="">
        <img src="/images/1C.jpg" alt="">
        <img src="/images/1D.jpg" alt="">
        <img src="/images/1E.jpg" alt="">

        <img src="/images/2A.jpg" alt="">
        <img src="/images/2B.jpg" alt="">
        <img src="/images/2C.jpg" alt="">
        <img src="/images/2D.jpg" alt="">
        <img src="/images/2E.jpg" alt="">

        <img src="/images/3A.jpg" alt="">
        <img src="/images/3B.jpg" alt="">
        <img src="/images/3C.jpg" alt="">
        <img src="/images/3D.jpg" alt="">
        <img src="/images/3E.jpg" alt="">

        <img src="/images/4A.jpg" alt="">
        <img src="/images/4B.jpg" alt="">   
        <img src="/images/4C.jpg" alt="">
        <img src="/images/4D.jpg" alt="">
        <img src="/images/4E.jpg" alt="">

        <img src="/images/5A.jpg" alt="">
        <img src="/images/5B.jpg" alt="">
        <img src="/images/5C.jpg" alt="">
        <img src="/images/5D.jpg" alt="">
        <img src="/images/5E.jpg" alt="">

        <img src="/images/6A.jpg" alt="">
        <img src="/images/6B.jpg" alt="">
        <img src="/images/6C.jpg" alt="">
        <img src="/images/6D.jpg" alt="">
        <img src="/images/6E.jpg" alt="">
    </div>

    <form action="{{ route('add_wolf') }}" method="POST">
        @csrf

        <input type="hiden" id="area" name="area" hidden> 

        <label for="count">{{ __('add_wolf.count') }}</label>
        <input type="number" id="count" name="count" required>

        <button type="submit">{{ __('add_wolf.submit') }}</button>
    </form> 

    <a href="{{ route('overview') }}">
        {{ __('overview.title') }}
    </a>
</body>
</html>
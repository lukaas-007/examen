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
            @include('nl_map')
        </div>


        <form action="{{ route('add') }}" method="POST">
            @csrf

            <input type="hiden" id="area" name="area" value="onbekent" hidden> 

            <input type="number" id="amount" name="amount" placeholder="{{ __('add_wolf.amount') }}" required>

            <button type="submit">{{ __('add_wolf.submit') }}</button>

            <a href="{{ route('overview') }}" class="link">
                {{ __('overview.title') }}
            </a>
        </form> 
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('overview.overview') }}</title>
</head>
<body>
    @vite(['resources/css/app.css', 'resources/css/overview.css'])
    <h1 class="title">{{ __('overview.overview') }}</h1>

    <table>
        <thead>
            <tr>
                <th>{{ __('overview.date_spotted') }}</th>
                <th>{{ __('overview.area_spotted') }}</th>
                <th>{{ __('overview.spotted_amount') }}</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($wolves as $wolf)
                <tr>
                    <td>{{ $wolf->created_at }}</td>
                    <td>{{ $wolf->area }}</td>
                    <td>{{ $wolf->amount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('add_wolf') }}" class="link">
        {{ __('add_wolf.title') }}
    </a>
</body>
</html>
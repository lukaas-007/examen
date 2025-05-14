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

    @if(session('success'))
        <div class="alert alert-success">
            {{ __('overview.added_wolf') }}
        </div>
    @endif  

    <table>
        <thead>
            <tr>
                <th>{{ __('overview.area_spotted') }}</th>
                <th>{{ __('overview.spotted_amount') }}</th>
                <th>{{ __('overview.date_spotted') }}</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($wolfPerArea as $wolfList)
                <tr>
                    <td>{{ $wolfList['area'] }}</td>
                    <td>{{ $wolfList['amount'] }}</td>
                    <td>
                        @foreach($wolfList['spotted_dates'] as $date)
                            {{ $date }}<br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('add_wolf') }}" class="link">
        {{ __('add_wolf.title') }}
    </a>
</body>
</html>
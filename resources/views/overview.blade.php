<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @vite(['resources/css/app.css', 'resources/css/add_wolf.css'])
    {{ __('overview.overview') }}

    <table>
        <thead>
            <tr>
                <th>{{ __('overview.date_spotted') }}</th>
                <th>{{ __('overview.area_spotted') }}</th>
                <th>{{ __('overview.spotted_amount') }}</th>
            </tr>
        </thead>
        <tbody>
            @php $wolfs = [
                (object) ['date_spotted' => '2023-10-01', 'area_spotted' => 'Area 1', 'spotted_amount' => 5],
                (object) ['date_spotted' => '2023-10-02', 'area_spotted' => 'Area 2', 'spotted_amount' => 3],
                (object) ['date_spotted' => '2023-10-03', 'area_spotted' => 'Area 3', 'spotted_amount' => 7],
            ]; @endphp

            @foreach ($wolfs as $wolf)
                <tr>
                    <td>{{ $wolf->date_spotted }}</td>
                    <td>{{ $wolf->area_spotted }}</td>
                    <td>{{ $wolf->spotted_amount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('add_wolf') }}">
        {{ __('add_wolf.title') }}
    </a>
</body>
</html>
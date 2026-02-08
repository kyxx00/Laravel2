<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $planet->name }}</title>
</head>
<body>
    <h1>{{ $planet->name }}</h1>
    <p><strong>Description:</strong> {{ $planet->description }}</p>
    <p><strong>Size:</strong> {{ number_format($planet->size_in_km) }} km</p>
    <p><strong>Solar System:</strong> 
        <a href="{{ route('solarsystems.show', $planet->solar_system_id) }}">
            {{ $planet->solarSystem->name ?? 'Unknown' }}
        </a>
    </p>

    <br>
    <a href="{{ route('planets.index') }}">← Back to all planets</a> |
    <a href="{{ route('solarsystems.index') }}">View All Solar Systems</a>
</body>
</html>
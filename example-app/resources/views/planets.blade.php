<!DOCTYPE html>
<html>
<head>
    <title>Planeten</title>
</head>
<body>
    <h1>Alle Planeten</h1>
    
    <ul>
        @foreach($planets as $planet)
            <li>
                <a href="{{ route('planets.show', $planet->id) }}">
                    {{ $planet->name }}
                </a>
                - {{ $planet->description }}
                <br>
                <small>Solar System: {{ $planet->solarSystem->name ?? 'Unknown' }}</small>
            </li>
        @endforeach
    </ul>
    
    <br>
    <a href="{{ route('solarsystems.index') }}">← View Solar Systems</a>
</body>
</html>
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
                <a href="/planets/{{ $planet->id }}">
                    {{ $planet->name }}
                </a>
                - {{ $planet->description }}
                <br>
                <small>Solar System: {{ $planet->solar_system_id ? 'Milky Way' : 'Unknown' }}</small>
            </li>
        @endforeach
    </ul>
</body>
</html>
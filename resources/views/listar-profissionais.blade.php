<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Profissionais</title>
</head>
<body>
    <h1>Lista de Profissionais</h1>
    @if($profissionais && count($profissionais) > 0)
        <ul>
            @foreach($profissionais as $profissional)
                <li>
                    <p>{{ $profissional->nome }}</p>
                    <a href="{{ $profissional->link }}">Visitar o perfil</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Nenhum profissional cadastrado.</p>
    @endif
</body>
</html>

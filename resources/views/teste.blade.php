<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Importando os estilos do calendário -->
<link rel="stylesheet" href="https://unpkg.com/@fullcalendar/core/main.css" />
<link rel="stylesheet" href="https://unpkg.com/@fullcalendar/daygrid/main.css" />
<link rel="stylesheet" href="https://unpkg.com/@fullcalendar/timegrid/main.css" />

<!-- Importando as bibliotecas do calendário -->
<script src="https://unpkg.com/@fullcalendar/core/main.js"></script>
<script src="https://unpkg.com/@fullcalendar/daygrid/main.js"></script>
<script src="https://unpkg.com/@fullcalendar/timegrid/main.js"></script>

</head>
<body>


    


<Script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new Calendar(calendarEl, {
        plugins: [dayGridPlugin, timeGridPlugin],
        initialView: 'dayGridMonth',
        events: [
            @foreach ($events as $event)
                {
                    title: '{{ $event->title }}',
                    start: '{{ $event->start_date }}',
                    end: '{{ $event->end_date }}',
                    // ... outras propriedades do evento
                },
            @endforeach
        ],
        // ... outras configurações do calendário
    });

    calendar.render();
});




</script>
</body>
</html>
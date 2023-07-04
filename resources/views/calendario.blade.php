<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <!-- Importando os estilos do calendário -->
<link rel="stylesheet" href="https://unpkg.com/@fullcalendar/common/main.css" />
<link rel="stylesheet" href="https://unpkg.com/@fullcalendar/daygrid/main.css" />
<link rel="stylesheet" href="https://unpkg.com/@fullcalendar/timegrid/main.css" />

<!-- Importando as bibliotecas do calendário -->
<script src="https://unpkg.com/@fullcalendar/common/main.js"></script>
<script src="https://unpkg.com/@fullcalendar/daygrid/main.js"></script>
<script src="https://unpkg.com/@fullcalendar/timegrid/main.js"></script>



</head>
<body>
    <div id="calendar">nao carregou o calendario</div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [FullCalendar.dayGridPlugin, FullCalendar.timeGridPlugin],
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

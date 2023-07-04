import './bootstrap';
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';

// Use os plugins necessários
Calendar.use([dayGridPlugin, timeGridPlugin]);

// Inicialize o calendário em algum elemento da sua página
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new Calendar(calendarEl, {
        // Configurações e opções do calendário
        plugins: [dayGridPlugin, timeGridPlugin],
        initialView: 'dayGridMonth',
        // ... outras configurações do calendário
    });

    calendar.render();
});
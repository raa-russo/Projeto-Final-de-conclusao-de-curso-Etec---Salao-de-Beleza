<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event; // Importe o modelo de evento

class CalendarController extends Controller
{
    public function index()
    {
        // Recupere os eventos do banco de dados ou qualquer outra fonte de dados
        $events = Event::all(); // Exemplo: recuperando todos os eventos do modelo Event

        return view('calendario', compact('events'));
    }


    public function store(Request $request)
    {
        // Valide e processe os dados recebidos do formulário de criação de eventos
        $validatedData = $request->validate([
            'title' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            // Outras regras de validação, se necessário
        ]);

        // Crie um novo evento usando o modelo Event e atribua os valores
        $event = new Event;
        $event->title = $validatedData['title'];
        $event->start_date = $validatedData['start_date'];
        $event->end_date = $validatedData['end_date'];
        // Outros atributos do evento

        // Salve o evento no banco de dados
        $event->save();

        // Redirecione ou faça qualquer ação necessária após salvar o evento

        // Exemplo de redirecionamento para a página de exibição de eventos
        return redirect()->route('calendario')->with('success', 'Evento criado com sucesso!');

    }
}

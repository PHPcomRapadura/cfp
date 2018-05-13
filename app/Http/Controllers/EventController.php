<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests\EventFormRequest;
use App\Talk;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->all();
        if (isset($data['dtinicial']) && isset($data['dtfinal'])) {

            $dataInicialNotEmpty = !empty($data['dtinicial']);
            $dtinicial = ($dataInicialNotEmpty) ? \Carbon\Carbon::createFromFormat('d/m/Y',
                $data['dtinicial']) : \Carbon\Carbon::now();


            $events = Event::where('datainicial', '>=', $dtinicial->toDateString());

            if(!empty($data['dtfinal'])){
                $dtfinal = \Carbon\Carbon::createFromFormat('d/m/Y', $data['dtfinal']);

                 $events->where('datafinal', '<=', $dtfinal->toDateString());

            }

            $events->orderBy('datainicial', 'ASC');

            $events = $events->paginate(2);

            return view('event.list',  compact('events')) ;

        } else {

            return view('event.list');

        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventFormRequest $request)
    {
        $request['datainicial'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request['datainicial']);
        $request['datafinal'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request['datafinal']);
        $request['datafimdocfp'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request['datafimdocfp']);

        Event::create($request->only('name', 'datainicial', 'datafinal', 'datafimdocfp', 'detalhes'));

        return redirect()
            ->route('event.create')
            ->with(['success' => 'Salvo com sucesso!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);

        return view('event.edit')
            ->with(compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventFormRequest $request, $id)
    {
        $request['datainicial'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request['datainicial']);
        $request['datafinal'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request['datafinal']);
        $request['datafimdocfp'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request['datafimdocfp']);

        $event = Event::find($id);

        $event->fill($request->all())->save();

        return redirect()
            ->route('event.edit', $id)
            ->with(['success' => 'Dados alterados com sucesso!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $talks = Talk::where('event_id', $id)->get();

        if (count($talks) > 0) {

            return redirect()
                ->route('event.index')
                ->with(['danger' => 'Evento com palestras já submetidas!']);
        }

        $event->delete();

        return redirect()
            ->route('event.index')
            ->with(['success' => 'Registro excluido com sucesso!']);


    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TalkFormRequest;
use App\Talk;
use App\User;
use App\Event;
use App\Nivel;
use App\Trilha;
use Auth;

class TalkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = Auth::user()->id;

        $talks = Talk::where('user_id', $id)
                   ->orderBy('id')
                  ->paginate(10);
                  
            return view('talk.list',compact('talks'))
                 ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all()->pluck('name','id');
        $niveis = Nivel::all()->pluck('descricao','id');
        $trilhas = Trilha::all()->pluck('descricao','id');

        return view('talk.create',compact('events','niveis','trilhas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TalkFormRequest $request)
    {
        $fimcfp = Event::where('id',$request['event_id'])->select('datafimdocfp')->first();
    
        if(strtotime($fimcfp->datafimdocfp) >= strtotime(date('Y-m-d')))
        {
            $request['user_id'] = $id = Auth::user()->id;
            Talk::create($request->only('titulo','event_id','descricao','user_id','nivel_id','trilha'));
            
            return redirect()
                    ->route('talk.create')
                     ->with(['success'=> 'Salvo com sucesso!']);
        }else{

            return redirect()->back()->withErrors(['CFP Fechado para envio de palestras!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $talk = Talk::find($id);
         $user = User::where('id',$talk->user_id)->first();
         $niveis = Nivel::all()->pluck('descricao','id');
         $trilhas = Trilha::all()->pluck('descricao','id');

        return view('talk.show')
             ->with(compact('talk','user','niveis','trilhas'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all(Request $request)
    {
        $data = $request->all();

        $events = Event::all()->pluck('name','id');

        if(isset($data['event_id']))
        {   
            $talks = Talk::where('event_id', $data['event_id'])
                       ->orderBy('id')
                       ->get();

            return view('talk.listall',compact('talks','events'))
                 ->with('i', ($request->input('page', 1) - 1) * 10);   
        }else{

            $talks = Talk::all();

            return view('talk.listall',compact('talks','events'))
                 ->with('i', ($request->input('page', 1) - 1) * 10);   
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $talk = Talk::find($id);

         $events = Event::all()->pluck('name','id');
         $niveis = Nivel::all()->pluck('descricao','id');
         $trilhas = Trilha::all()->pluck('descricao','id');

        return view('talk.edit')
             ->with(compact('talk','events','niveis','trilhas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $talk = Talk::find($id);
        
        $talk->fill($request->all())->save();
    
        return redirect()
               ->route('talk.edit', $id)
               ->with(['success'=> 'Dados alterados com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $talk = Talk::find($id);
            
            $talk->delete();
              return redirect()
                        ->route('talk.index')
                        ->with(['success'=> 'Registro excluido com sucesso!']);
    }
}
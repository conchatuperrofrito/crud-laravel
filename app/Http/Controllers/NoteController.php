<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// importamos el modelo 
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        //la funcion de indice
        return view('note.index', compact('notes'));
    }
    public function create()
    {
        return view('note.create');
    }
    public function store(Request $request)
    {
        Note::create($request->all());
        // despues que hace el proceso redirige al inicia 
        return redirect()->route('note.index');
    }
    public function edit(Note $note)
    {
        // se puede poner asi 
        // $myNote = Note::find($note);
        return view('note.edit', compact('note'));
    }
    public function update(Request $request, Note $note)
    {
        //  opcional no estaria parametro Note 
        $note->update($request->all());
        // $note = Note::find($note);
        // $note->title = $request->title;
        // $note->description = $request->description;
        return redirect()->route('note.index');
    }
    public function show(Note $note)
    {
        return view('note.show', compact('note'));
    }
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('note.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    //
    public function index(){
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create(){
        return view('note/add-note');
    }

    public function edit($id){ 
        $note = Note::findOrFail($id);
        return view('note/edit-note', compact('note'));
    }

    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Note::create($data);
        return redirect()->route('note.index')->with('success', 'Note created successfully');
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $note = Note::find($id);
        $note->update($data);
        return redirect()->route('note.index')->with('success', 'Note updated successfully');
        
    }

    public function destroy($id){
        $note = Note::find($id);
        $note->delete();
        return redirect()->route('note.index')->with('success', 'Note deleted successfully');
    }
    
}

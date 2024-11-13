<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Remark;

class RemarkController extends Controller
{
    //
    public function store(Request $request, $noteId)
    {
        $request->validate([
            'remark' => 'required|string',
        ]);
    
        $note = Note::findOrFail($noteId);
    
        $remark = new Remark();
        $remark->remark = $request->remark;
        $remark->user_id = auth()->id();  // Assuming the user is logged in
        $note->remarks()->save($remark);
    
        return back()->with('success', 'Remark added successfully!');
    }
}

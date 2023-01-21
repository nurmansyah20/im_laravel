<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kritik;
use Illuminate\Support\Facades\Auth;

class KritikController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'point' => 'required',
            'content' => 'required',
        ]);

        Kritik::create([
            'point' => $request['point'],
            'content' => $request['content'],
            'film_id' => $id,
            'user_id' => Auth::id(),
        ]);

        return redirect('/film/'. $id);

    }
}

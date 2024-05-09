<?php

namespace App\Http\Controllers;

use App\Models\Duty;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Do_;

class DutyController extends Controller
{
    public function index() {
        $character = Duty::all();
        return view('index', compact('character'));
    }

    public function viewcharacter($id)
    {
        $character = Duty::where('id', $id)->get();
        if ($character->isEmpty()) {
            $character = Duty::where('id', $id)->get();
            return view('viewdetails', compact('character'));
        } else {
            return view('viewdetails', compact('character'));
        }
    }

    public function addcharacter()
    {
        return view("addchar");
    }

    public function insertcharacter(Request $request)
    {
        Duty::create($request->all());
        return redirect()->route("character");
    }

    public function editcharacter($id)
    {
        $data = Duty::find($id);
        return view("editchar", compact("data"));
    }

    public function updatecharacter(Request $request, $id)
    {
        $data = Duty::find($id);
        $data->update($request->all());
        return redirect()->route("character");
    }

    public function deletecharacter($id)
    {
        $data = Duty::find($id);
        $data->delete();
        return redirect()->route("character");
    }
}

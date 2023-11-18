<?php

namespace App\Http\Controllers;

use App\Models\dpo;
use Illuminate\Http\Request;

class Controllerdpo extends Controller
{
    public function index()
    {
        $dpos = dpo::paginate(10);
        return view('dpo', compact('dpos'));
    }

    public function show($id)
    {
        $dpos = dpo::where('id', $id)->get();
        if($dpos -> isEmpty()) {
            $dpos = dpo::where('id', $id)->paginate(10);
            return view('dpo', compact('dpos'));
        } else {
            return view('details', compact('dpos'));
        }
    }
    public function adddpo()
    {
        return view("adddpo");
    }

    public function insertdpo(Request $request)
    {
        dpo::create($request->all());
        return redirect()->route("dpo");
    }

    public function editdpo($id)
    {
        $data = dpo::find($id);
        return view("editdpo", compact("data"));
    }

    public function updatedpo(Request $request, $id)
    {
        $data = dpo::find($id);
        $data->update($request->all());
        return redirect()->route("dpo");
    }

    public function deletedpo($id)
    {
        $data = dpo::find($id);
        $data->delete();
        return redirect()->route("dpo");
    }
}



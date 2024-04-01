<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $players= Player::all();
        return view('player.index', compact('players'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'position' => 'required|string',
        ]);

        $player = new Player();
        $player->name = $request->name;
        $player->age = $request->age;
        $player->position = $request->position;
        $player->save();

        return redirect()->route('player_index')->with('success', 'Player created successfully.');
    }

    
    public function destroy($id)
    {
        $player = Player::find($id);

        if ($player) {
            $player->delete();
            return redirect(url('/'))->with('success', 'Record deleted successfully!')->with('showSuccess', true);
        } else {
            return redirect(url('/'))->withErrors('Record not found...');
        }
    }


    public function edit($id)
    {
        $player = Player::find($id);

        if (!$player) {
            return redirect(url('/'))->withErrors('Record not found.');
        }
        return view('edit', compact('player'));
    }


    public function update(Request $request, $id)
    {
        $player = Player::find($id);
        
        if (!$player) {
            return redirect(url('/'))->withErrors('Record not found...');
        }

        $player->name = $request->input('name');
        $player->age = $request->input('age');
        $player->position = $request->input('position');
        $player->save();
     

        return redirect(url('/'))->with('success', 'Record updated successfully!')->with('showSuccess', true);
    }
}

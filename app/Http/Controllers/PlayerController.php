<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Http\Requests\StoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('player.index', compact('players'));
    }


    public function store(StoreRequest $request)
    {
        Player::savePlayerData($request);
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
        Player::updatePlayerData($request, $id);
        
        return redirect(url('/'))->with('success', 'Record updated successfully!')->with('showSuccess', true);
    }



    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
}

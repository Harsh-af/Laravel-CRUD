<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use SoftDeletes;

    protected $table = 'player';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'age', 'position'];

    public static function savePlayerData($request)
    {
        $player = new Player();
        $player->name = $request->name;
        $player->age = $request->age;
        $player->position = $request->position;
        $player->save();
    }

    public static function updatePlayerData($request, $id)
    {
        $player = Player::find($id);
        
        if (!$player) {
            return redirect(url('/'))->withErrors('Record not found...');
        }

        $player->name = $request->input('name');
        $player->age = $request->input('age');
        $player->position = $request->input('position');
        $player->save();
    }
}
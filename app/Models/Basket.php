<?php

namespace App\Models;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;
    private static $instance;
    public $game;

    public static function getInstance()
    {

        if (!session('basket')) {
            self::$instance = new self();
            session(['basket' => self::$instance]);
        }

        return session('basket');
    }

    public function buyGame(Game $game, User $user)
    {

        $user->removeMoneyAmount($game);
        return 0;
    }
}

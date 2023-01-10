<?php

namespace App\Models;

use App\Models\Game;
use Illuminate\Support\Facades\Auth;
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

    public function buyGame($amount)
    {
        $user = Auth::user();
        $user->removeMoneyAmount($amount);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Game;


class BasketController extends Controller
{

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $game = Game::where('id', $id)->first();
        return view('basket.index', ['game' => $game]);
    }
}

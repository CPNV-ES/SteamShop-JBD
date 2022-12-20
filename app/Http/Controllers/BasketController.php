<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Game;


class BasketController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::where('id', $id)->first();
        return view('basket.index', ['game' => $game]);
    }


    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validateBasket(Request $request, Game $game)
    {
        $game = Game::where('id', $id)->first();
        return view('basket.index', ['game' => $game]);
    }
}

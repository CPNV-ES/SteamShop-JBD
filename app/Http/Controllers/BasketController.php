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
    public function show()
    {

        $basket = Basket::getInstance();
        $game = $basket->game;

        return view('basket.index', ['game' => $game]);
    }


    public function update(Request $request)
    {
        $basket = Basket::getInstance();

        $game = new game($request->all());

        $basket->game = $game;



        return redirect('/basket');
    }


    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function buyGame(Request $request, Game $game)
    {

        $game = new game($request->all());
        $basket = Basket::getInstance();
        $basket->buyGame($game->price);
        return view('basket.index', ['game' => $game]);
    }
}

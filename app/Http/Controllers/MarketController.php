<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Http\Requests\StoreMarketRequest;
use App\Http\Requests\UpdateMarketRequest;

class MarketController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreMarketRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMarketRequest $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Market $market
     * @return \Illuminate\Http\Response
     */
    public function show(Market $market) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Market $market
     * @return \Illuminate\Http\Response
     */
    public function edit(Market $market) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateMarketRequest $request
     * @param \App\Models\Market $market
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMarketRequest $request, Market $market) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Market $market
     * @return \Illuminate\Http\Response
     */
    public function destroy(Market $market) {
        //
    }
}

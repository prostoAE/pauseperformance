<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Market;
use App\Models\Organisation;
use App\Http\Requests\StoreOrganisationRequest;
use App\Http\Requests\UpdateOrganisationRequest;
use Doctrine\DBAL\Schema\View;
use Illuminate\Support\Facades\Auth;

class OrganisationController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user = Auth::user();
        $organisation = $user->organisation()->where('active', '=', true)->first();
        $groups = $user->groups;
        $currencies = $organisation::getCurrencyList();
        $activeMarkets = $organisation->markets;
        return view('app.pages.settings.roles_permissions', compact('organisation', 'groups', 'user', 'activeMarkets', 'currencies'));
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
     * @param \App\Http\Requests\StoreOrganisationRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrganisationRequest $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Organisation $organisation
     * @return \Illuminate\Http\Response
     */
    public function show(Organisation $organisation) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Organisation $organisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Organisation $organisation) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateOrganisationRequest $request
     * @param $id
     * @return void
     */
    public function update(UpdateOrganisationRequest $request, $id) {
        $org = Organisation::find($id);
        $org->update($request->except([
            '_method',
            '_token'
        ]));
        $markets = $request->has('markets') ? $request->get('markets') : [];
        $col = $org->markets()->get()->diff(Market::whereIn('name', $markets)->get());
        Market::destroy($col);

        if (count($markets) > 0) {
            foreach ($markets as $market) {
                $cMarket = Market::whereIn('name', [$market])->first();

                if (is_null($cMarket)) {
                    Market::create([
                        'name' => $market,
                        'organisation_id' => $org->id
                    ]);
                }
            }
        }

        return redirect()->back()->with(['success' => 'Organisation updated', 'form' => 'organisation']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Organisation $organisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisation $organisation) {
        //
    }
}

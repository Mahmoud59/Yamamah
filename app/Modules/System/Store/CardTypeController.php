<?php

namespace App\Modules\System\Store;

use App\Modules\System\SystemController;
use Illuminate\Http\Request;
use App\Http\Requests\Store\StoreCardTypeRequest;
use App\Http\Requests\Store\UpdateCardTypeRequest;

use App\Models\Store\CardType;

class CardTypeController extends SystemController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
	{
		$this->viewData['card_types'] = CardType::paginate(20);
		return $this->view('store.card_types.index',$this->viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return route('system.store.card_types.store');
		return $this->view('store.card_types.create',$this->viewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCardTypeRequest $request)
    {
        $card_type = new CardType;
		$card_type->company = $request->company;
		$card_type->name = $request->name;
		$card_type->value = $request->value;
		$card_type->save();
		$request->session()->flash('alert-success', __('Card type add success'));
		return redirect()->route('system.store.card_types.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    public function show($id){
		//dd($id);
    }
	
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $card_type = CardType::whereId($id)->first();
		if(!$card_type){
			request()->session()->flash('alert-danger', __('Request not found'));
			return redirect(route('system.store.404'));
		}
		$this->viewData['card_type'] = $card_type;
		return $this->view('store.card_types.edit', $this->viewData);
    }
	
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCardTypeRequest $request)
	{
		$card_type = CardType::whereId($request->id)->first();
		$card_type->company = $request->company;
		$card_type->name = $request->name;
		$card_type->value = $request->value;
		$card_type->save();
		$request->session()->flash('alert-success', __('Card type updated success'));
		return redirect()->route('system.store.card_types.edit', $card_type->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
	{
		
    }
	
	
    public function error404(Request $request)
	{
		return $this->view('store.404',$this->viewData);
    }


}










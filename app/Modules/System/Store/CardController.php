<?php
namespace App\Modules\System\Store;

use App\Modules\System\SystemController;
use Illuminate\Http\Request;
use App\Http\Requests\Store\StoreCardRequest;
use App\Http\Requests\Store\UpdateCardRequest;

use App\Models\Store\CardType;
use App\Models\Store\Card;

class CardController extends SystemController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
	{
		$this->viewData['cards'] = Card::paginate(20);
		return $this->view('store.cards.index',$this->viewData);
	}
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
		foreach(config('enums.companies') as $company){
			$card_types[$company] = CardType::where('company', $company)->get()->toArray();
		}
		$this->viewData['card_types'] = $card_types;
		return $this->view('store.cards.create',$this->viewData);
    }
	
    public function store(StoreCardRequest $request)
    {
		$card = new Card;
		$card->card_type_id = $request->card_type_id;
		$card->provider = $request->provider;
		$card->serial_number = $request->serial_number;
		$card->secret_code = $request->secret_code;
		$card->operation_provider_id = $request->operation_provider_id;
		$card->save();
		$request->session()->flash('alert-success', __('Card add success'));
		return redirect()->route('system.store.cards.create');
    }
	
    public function edit($id)
    {
		foreach(config('enums.companies') as $company){
			$card_types[$company] = CardType::where('company', $company)->get()->toArray();
		}
		$this->viewData['card_types'] = $card_types;
		$card = Card::whereId($id)->first();
		if(!$card){
			request()->session()->flash('alert-danger', __('Request not found'));
			return redirect(route('system.store.404'));
		}
		$this->viewData['card'] = $card;
		return $this->view('store.cards.edit', $this->viewData);
    }
	
    public function update(UpdateCardRequest $request)
	{
		$card = Card::whereId($request->id)->first();
		$card->card_type_id = $request->card_type_id;
		$card->provider = $request->provider;
		$card->serial_number = $request->serial_number;
		$card->secret_code = $request->secret_code;
		$card->operation_provider_id = $request->operation_provider_id;
		$card->save();
		$request->session()->flash('alert-success', __('Card updated success'));
		return redirect()->route('system.store.cards.edit', $card->id);
    }
	
    public function destroy($id)
	{
		Card::whereId(request()->card_id)->delete();
		return 'done';
    }
}










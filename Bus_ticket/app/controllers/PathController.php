<?php
	class PathController extends BaseController{
		

		public function add(){
			$sourceInput = Input::get('source'); 
			$destinationInput = Input::get('des');
			$timegoInput = Input::get('timego');
			$timetoInput = Input::get('timeto');
			$moneyInput = Input::get('money');
			$maxseatInput = Input::get('maxSeat');

			$newPath = new Path();
			$newPath->source = $sourceInput;
			$newPath->destination = $destinationInput;
			$newPath->timego = $timegoInput;
			$newPath->timeto = $timetoInput;  
			$newPath->money = $moneyInput;   
			$newPath->maxseat = $maxseatInput;
			$newPath->seat = $maxseatInput;
			$newPath->save();
			return Redirect::to('addPath');

			//return View::make('hello');

		}
		public function search(){
			$sourceInput = Input::get('source'); 
			$destinationInput = Input::get('des');
			//$username = Auth::User()->username;

			$trips = DB::table('paths')->where('source', $sourceInput)->Where('destination',$destinationInput)->get();
			//$reserves =DB::table('reserves')->where('username',$username)->get();
			if(empty($trips))
				return View::make('searchMember');
			else 
				return View::make('booking')->with('trips',$trips);

	}

}

?>
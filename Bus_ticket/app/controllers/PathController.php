<?php
	class PathController extends BaseController{
		

		public function add(){
			$sourceInput = Input::get('source'); 
			$destinationInput = Input::get('des');
			$timegoInput = Input::get('timego');
			$timetoInput = Input::get('timeto');
			$moneyInput = Input::get('money');

			$newPath = new Path();
			$newPath->source = $sourceInput;
			$newPath->destination = $destinationInput;
			$newPath->timego = $timegoInput;
			$newPath->timeto = $timetoInput;  
			$newPath->money = $moneyInput;   

			$newPath->save();
			return View::make('addadmin'); //add path  

			//return View::make('hello');

		}
		public function search(){
			$sourceInput = Input::get('source'); 
			$destinationInput = Input::get('des');


			$trips = DB::table('paths')->where('source', $sourceInput)->Where('destination',$destinationInput)->get(); //get data form table path

			if(empty($trips)) //empty return searchMember page
				return View::make('searchMember');
			else 
				return View::make('booking')->with('trips',$trips); //have path return bookking page

	}

}

?>
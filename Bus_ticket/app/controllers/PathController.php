<?php
	class PathController extends BaseController{
		

		public function add(){
			$sourceInput = Input::get('source'); 
			$destinationInput = Input::get('des');
			$timegoInput = Input::get('timego');
			$timetoInput = Input::get('timeto');

			$newPath = new Path();
			$newPath->source = $sourceInput;
			$newPath->destination = $destinationInput;
			$newPath->timego = $timegoInput;
			$newPath->timeto = $timetoInput;             
			$newPath->save();
			return View::make('addTrip');

			//return View::make('hello');

	}
}

?>
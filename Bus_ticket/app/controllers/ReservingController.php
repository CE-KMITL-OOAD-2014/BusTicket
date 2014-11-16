<?php
	class ReservingController extends BaseController{
		

		public function reserving(){

			//date_default_timezone_set('Australia/Melbourne');
			$date = date('m/d/Y h:i:s a', time());

				   	$dateInput = Input::get('bday');

				$seatInput =  Input::get('seat'); 
				$usernameInput = Auth::User()->username;
				$statusInput = 0;

				

				$trip = Path::find(Input::get('id'));

				$sourceInput = $trip->source;
				$destinationInput = $trip->destination;
				$timegoInput = $trip->timego;
				$timetoInput = $trip->timeto;
				$moneyInput = $trip->money;

				$reserves=DB::table('reserves')->where('source',$sourceInput)->where('destination',$destinationInput)->where('date',$dateInput)->get();

				//$trips = DB::table('paths')->where('source', $sourceInput)->Where('destination',$destinationInput)->get();

	$temp=0;
       foreach($reserves as $reserve){

   
          //echo" $path->source  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  $path->destination $path->timego  $path->timeto <br>\n";
     		$temp=$temp+$reserve->seat;
		
       }
       $temp=$temp+$seatInput;

			
				

					

	    if(strtotime($dateInput) > strtotime($date)&& $temp<=$trip->maxseat){


				$newReserve = new Reserve();
				$newReserve->seat = $seatInput;
				$newReserve->username = $usernameInput;
				$newReserve->status = $statusInput;
				$newReserve->source = $sourceInput;
				$newReserve->destination = $destinationInput;
				$newReserve->timego = $timegoInput;
				$newReserve->timeto = $timetoInput;  
				$newReserve->money = $moneyInput;
				$newReserve->date = $dateInput;  

				

				$newReserve->save();
			return View::make('finreserv');
			}else {
				$trips = DB::table('paths')->where('source', $sourceInput)->Where('destination',$destinationInput)->get();
				return View::make('booking')->with('trips',$trips);
			}//return View::make('hello');

		}

		public function update(){
			$reserve = Reserve::find(Input::get('id'));

			if($reserve){
				$reserve->status = "1";
				$reserve->save(); 
			}
			return View::make('updateStatus');
		}

		public function cancel(){
			$reserve = Reserve::find(Input::get('id'));

			if(empty($reserve)){
				return View::make('cancelBooking');
			}
			else{

				$reserve->delete();
				//$reserve->save();
				return View::make('fincancel');
			}
		}

		public function show(){
			       $user = Auth::User();
			       $username=$user->username;

			$reserves= DB::table('reserves')->where('username', $username)->get();

			return View::make('checkMember')->with('reserves',$reserves);

		}


}

?>
<?php
class ReservingController extends BaseController{

	//reserve path for each user with differrent or same date
	public function reserving(){
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
		$temp=0;
		foreach($reserves as $reserve){
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

		//update reservation for each user
		public function update(){
			$reserve = Reserve::find(Input::get('id'));
			if($reserve){
				$reserve->status = "1";
				$reserve->save(); 
			}
			return View::make('updateStatus');
		}

		//delete reservation which user don't want
		public function cancel(){
			$reserve = Reserve::find(Input::get('id'));

			if(empty($reserve)){
				return View::make('cancelBooking');
			}
			else{

				$reserve->delete();
		
				return View::make('fincancel');
			}
		}

		//show reservation for each user
		public function show(){
			$user = Auth::User();
			$username=$user->username;

			$reserves= DB::table('reserves')->where('username', $username)->get();
			return View::make('checkMember')->with('reserves',$reserves);
		}
	}

?>
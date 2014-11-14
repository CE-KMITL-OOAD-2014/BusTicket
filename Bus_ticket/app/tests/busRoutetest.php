<?php


	class busRoute{
		public $source; 
		public $destination;
		public $date;
		public $time;

		public function __construct($src,$dst,$d,$t){
			$this->source=$src;
			$this->destination=$dst;
			$this->date=$d;
			$this->time=$t;
		}
		public function getRoute_source(){
			return $this->source;
		}
		public function getRoute_destination(){
			return $this->destination;
		}
		public function getRoute_date(){
			return $this->date;
		}

		public function getRoute_time(){
			return $this->time;
		}
		public function getRoute(){
			echo "{$this->source}";
			echo "{$this->destination}";
			echo "{$this->date}";
			echo "{$this->time}";
		}
	}

	class testBusRoute extends PHPUnit_Framework_TestCase{
		public $testSource; 
		public $testDestination;
		public $testDate;
		public $testTime;

		public function setUp(){
			$this->testSource=new busRoute("Bangkok","Chonburi","13/10/2557","13.00");
		}
		public function test_source(){
			$bangkok = $this->testSource->getRoute_source();
			$this->assertTrue($bangkok=="Bangkok");
		}
		public function test_destination(){
			$chonburi = $this->testDestination->getRoute_destination();
			$this->assertTrue($chonburi=="Chonburi");
		}
		public function test_date(){
			$tdate = $this->testDate->getRoute_date();
			$this->assertTrue($tdate=="13/10/2557");
		}
		public function test_time(){
			$ttime = $this->testTime->getRoute_time();
			$this->assertTrue($ttime=="13.00");
		}
	}

?>
<?php


	class member{
		public $name;
		public $surname;
		public $sex;
		public $phone;
		public $address;

		public function __construct($n,$s,$sx,$ph,$addr){
			$this->name=$n;
			$this->surname=$s;
			$this->sex=$sx;
			$this->phone=$ph;
			$this->address=$addr;
		}
		public function editName($n){
			$this->name=$n;
		}
		public function editSurname($s){
			$this->surname=$s;
		}
		public function editSex($sx){
			$this->sex=$sx;
		}
		public function editPhone($ph){
			$this->phone=$ph;
		}
		public function editAddress($addr){
			$this->address=$addr;
		}


		public function getName(){
			return $this->name;
		}
		public function getSurname(){
			return $this->surname;
		}
		public function getSex(){
			return $this->sex;
		}
		public function getPhone(){
			return $this->phone;
		}
		public function getAddress(){
			return $this->address;
		}

		public function getInfo(){
			echo "name : {$this->name}";
			echo "surname : {$this->surname}";
			echo "sex : {$this->sex}";
			echo "phone number : {$this->phone}";
			echo "address : {$this->address}";
		}
	}


	class testMember extends PHPUnit_Framework_TestCase{
		public $testName;
		public $testSurname;
		public $testSex;
		public $testPhone;
		public $testAddress;

		public function setUp(){
			$this->test=new member("Jason","Mar","male","xxx-yyy","London");
		}
		public function test_name(){
			$jason = $this->test->getName();
			$this->assertTrue($jason=="Jason");
		}
		public function test_surname(){
			$mar = $this->test->getSurname();
			$this->assertTrue($mar=="Mar");
		}
		public function test_sex(){
			$male = $this->test->getSex();
			$this->assertTrue($male=="male");
		}
		public function test_phone(){
			$phone = $this->test->getPhone();
			$this->assertTrue($phone=="xxx-yyy");
		}
		public function test_address(){
			$london = $this->test->getAddress();
			$this->assertTrue($london=="London");
		}


		public function test_editname(){
			$this->test->editName("Thomson");
			$thomson = $this->test->getName();
			$this->assertTrue($thomson=="Thomson");
		}
		public function test_editsurname(){
			$this->test->editSurname("Rex");
			$rex = $this->test->getSurname();
			$this->assertTrue($rex=="Rex");
		}
		public function test_editsex(){
			$this->test->editSex("Female");
			$female = $this->test->getSex();
			$this->assertTrue($female=="Female");
		}
		public function test_editphone(){
			$this->test->editPhone("aaa-bbb");
			$phone = $this->test->getPhone();
			$this->assertTrue($phone=="aaa-bbb");
		}
		public function test_editaddress(){
			$this->test->editAddress("Newyork");
			$Newyork = $this->test->getAddress();
			$this->assertTrue($Newyork=="Newyork");
		}
		

	}

?>
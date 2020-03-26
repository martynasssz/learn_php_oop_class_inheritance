<?php
	class User {
		//protected $name = 'Martin';
		protected $name;
		protected $age;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age= $age;
	}	

	}

	class Customer extends User {
		private $balance;

		public function __construct($name, $age, $balance){
			parent::__construct($name, $age); //tam, kad nereiketu is naujo uzsetinti $name ir $age iskvieciam tevini construct
			$this->balance = $balance;
		}

		public function pay($amount){
			return $this->name. ' paid $' . $amount;
		}

		public function getBalance(){
			return $this->balance;
		}

	}

	$customer1 = new Customer('Martin', 56, 500); //kadangi user turi protected matomuma, galime pasiekti si parametra //analiskai jeu uzsetinam kurdami objekta
	
	//echo $customer1->pay(500); //gausime Martin paid $500. 
	echo $customer1->getBalance(); //gausime 500;



<?php
	class Fruit {
		private $name;
		private $weight;

		function __construct($name, $weight) {
			$this->name = $name;
			$this->weight = $weight;
		}

		public function getName() {
			return $this->name;
		}

		public function getWeight() {
			return $this->weight;
		}
	}

	$fruit = new Fruit("Apel", 100);

	echo "Nama buah: ".$fruit->getName()."<br>";
	echo "Berat buah: ".$fruit->getWeight()."<br>";

?>
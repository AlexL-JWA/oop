<?php

namespace Online\HomeWork;

class Bait {
	private $isEaten = false;

	public function checkState() {
		return $this->isEaten ? 'Наживка съедена' : 'Наживка на месте';
	}

	public function eat() {
		$this->isEaten = true;
	}
}
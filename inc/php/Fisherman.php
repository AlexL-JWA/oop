<?php

namespace Online\HomeWork;

class Fisherman {
	private $rod;

	public function assembleRod( Reel $reel, Line $line, Bait $bait ) {
		$this->rod = new FishingRod( $reel, $line, $bait );
	}

	public function checkRod() {
		return $this->rod->check();
	}

	public function castRod() {
		return $this->rod->cast();
	}

	public function retrieveRod() {
		return $this->rod->retrieve();
	}
}
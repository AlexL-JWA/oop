<?php

namespace Online\HomeWork;

class Bait extends Elements {
	public function __construct() {
		if ( $this->error() ) {
			$this->eat();
		}
	}

	public function eat() {
		$this->isBroken = false;
	}
}
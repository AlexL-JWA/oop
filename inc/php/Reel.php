<?php

namespace Online\HomeWork;

class Reel extends Elements {
	public function __construct() {
		if ( $this->error() ) {
			$this->break();
		}
	}

	public function break() {
		$this->isBroken = false;
	}
}
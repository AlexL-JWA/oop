<?php

namespace Online\HomeWork;

class Line extends Elements {
	public function __construct() {
		if ( $this->error() ) {
			$this->tangle();
		}
	}

	public function tangle() {
		$this->isBroken = false;
	}
}
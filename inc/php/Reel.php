<?php

namespace Online\HomeWork;

class Reel {
	private $isBroken = false;

	public function checkState() {
		return $this->isBroken ? 'Катушка сломана' : 'Катушка в порядке';
	}

	public function break() {
		$this->isBroken = true;
	}
}
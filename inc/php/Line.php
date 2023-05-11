<?php

namespace Online\HomeWork;

class Line {
	private $isTangled = false;

	public function checkState() {
		return $this->isTangled ? 'Леска запуталась' : 'Леска не запуталась';
	}

	public function tangle() {
		$this->isTangled = true;
	}
}
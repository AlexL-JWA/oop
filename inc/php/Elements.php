<?php

namespace Online\HomeWork;

abstract class Elements {
	protected $isBroken = true;

	public function error() {
		return rand( 1, 0 );
	}

	public function checkState() {
		return $this->isBroken;
		#? 'Леска запуталась' : 'Леска не запуталась';
		#'Катушка сломана' : 'Катушка в порядке';
		#'Наживка съедена' : 'Наживка на месте';
	}
}
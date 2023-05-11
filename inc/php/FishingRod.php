<?php

namespace Online\HomeWork;

class FishingRod {

	private $elements;

	public function __construct( Reel $reel, Line $line, Bait $bait ) {

		$this->elements = [
			'reel' => $reel,
			'line' => $line,
			'bait' => $bait,
		];
	}

	public function cast() {

		$check = $this->check();

		if ( empty( $check ) ) {
			return true;
		}

		foreach ( $check as $key => $value ) {
			switch ( $key ) {
				case 'reel':
					if ( ! $value ) {
						echo 'Леска запуталась';
					}
					break;
				case 'line':
					if ( ! $value ) {
						echo 'Катушка сломана';
					}
					break;
				case 'bait':
					if ( ! $value ) {
						echo 'Наживка съедена';
					}
					break;
			}
		}

		return false;
	}

	public function check() {
		$results = [];

		foreach ( $this->elements as $key => $element ) {
			if ( ! $element->checkState() ) {
				$results[ $key ] = $element->checkState();
			}
		}

		return $results;
	}

	public function retrieve() {
		return 'Удочка успешно вытащена';
	}
}
<?php

namespace Online\HomeWork;

class FishingRod {
	private $reel;
	private $line;
	private $bait;

	public function __construct( Reel $reel, Line $line, Bait $bait ) {
		$this->reel = $reel;
		$this->line = $line;
		$this->bait = $bait;
	}

	public function check() {
		$results   = [];
		$results[] = $this->reel->checkState();
		$results[] = $this->line->checkState();
		$results[] = $this->bait->checkState();

		return $results;
	}

	public function cast() {
		if ( $this->line->checkState() === 'Леска не запуталась' && $this->bait->checkState() === 'Наживка на месте' ) {
			$this->line->tangle();
			$this->bait->eat();

			return 'Удочка успешно закинута';
		} else {
			return 'Не удалось закинуть удочку';
		}
	}

	public function retrieve() {
		return 'Удочка успешно вытащена';
	}
}
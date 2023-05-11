<?php

namespace Online\HomeWork;

class Fisherman {
	public const STATUS_ASSEMBLED = 'assembled';
	public const STATUS_CASTED    = 'casted';
	public const STATUS_PARTED    = 'parted';

	private $rod;
	private $fishingRodStatus;

	public function assembleRod( Reel $reel, Line $line, Bait $bait ) {
		$this->rod              = new FishingRod( $reel, $line, $bait );
		$this->fishingRodStatus = self::STATUS_ASSEMBLED;
	}

	public function checkRod() {

		return $this->rod->check();
	}

	public function castRod() {
		$res = $this->rod->cast();
		if ( $res ) {
			$this->fishingRodStatus = self::STATUS_CASTED;
		} else {
			$this->fishingRodStatus = self::STATUS_PARTED;
		}

		return $this;
	}

	public function retrieveRod() {
		if ( self::STATUS_CASTED === $this->fishingRodStatus ) {
			$this->fishingRodStatus = self::STATUS_ASSEMBLED;
			echo 'Все норм !';

			return $this->rod->retrieve();
		} else {
			$this->fishingRodStatus = self::STATUS_PARTED;
		}

		return $this;
	}
}
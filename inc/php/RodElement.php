<?php

namespace Online\HomeWork;

abstract class RodElement implements Replaceable {

	/**
	 * replace.
	 *
	 * @return void
	 */
	public function replace(): void {
		if ( $this->checkState() ) {
			echo get_class( $this ) . ' updated';
		} else {
			echo get_class( $this ) . ' state is new';
		}
	}

	abstract function checkState();
}
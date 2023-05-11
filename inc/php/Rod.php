<?php

namespace Online\HomeWork;

class Rod extends RodElement {
	public string $title;
	public string $sku;
	public string $description;
	public float $rating;
	public float $price;
	public string $category;
	public string $subCategory;
	public string $type;

	/**
	 * Rod construct.
	 *
	 * @param array $info Info.
	 */
	public function __construct( array $info ) {
		$vars = get_class_vars( get_class( $this ) );
		foreach ( $vars as $prop => $value ) {
			$this->$prop = $info[ $prop ];
		}
	}

	/**
	 * Check State.
	 *
	 * @return bool
	 */
	public function checkState(): bool {
		return (bool) ( ( rand( 1, 2 ) % 2 ) );
	}
}

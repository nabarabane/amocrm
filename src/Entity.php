<?php

namespace AmoCRM;

class Entity {
	public $id;
	public $last_modified;
	public $key_name;
	public $url_name;

	/**
	 * @param int $id
	 * @param int $last_modified
	 *
	 * @return $this
	 */
	public function setUpdate( $id, $last_modified ) {
		$this->id            = $id;
		$this->last_modified = $last_modified;

		return $this;
	}
}

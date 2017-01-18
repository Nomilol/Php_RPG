<?php
class User {
	private $email;
	private $id;
	private $createdAt;

	public function __construct($email, $id, $createdAt) {
	$this->setEmail($email);
	$this->setId($id);
	$this->setcreatedAt($createdAt);
}

	public function getEmail() {
		return $this->email;
	}
	public function setEmail($value) {
		$this->email = $value;
	}
	public function getId() {
		return $this->id;
	}
	public function setId($value) {
		$this->id = $value;
	}
	public function getCreatdAt() {
		return $this->createdAt;
	}
	public function setCreatedAt($value) {
		$this->createdAt = $value;
	}
}


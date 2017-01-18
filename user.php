<?php
class User {
	private $email;
	private $id;
	private $createdAt;

	public function __construct($id, $email, $createdAt) {
		$this->setId($id);
		$this->setEmail($email);
		$this->setcreatedAt($createdAt);
	}
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function getCreatedAt() {
		return $this->createdAt;
	}
	public function setCreatedAt($createdAt) {
		$this->createdAt = $createdAt;
	}
}

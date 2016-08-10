<?php
// Doubly Linked List

class ListNode {
	public $data;
	public $prev;
	public $next;

	function __construct($data) {
		$this->data = $data;
	}
}

class DoublyLinkedList {
	public  $_curr;
	public  $_head;
	public  $_tail;
	private $_count;

	function __construct() {
		$this->_head = NULL;
		$this->_tail = NULL;
		$this->_curr = NULL;
		$this->_count = 0;
	}

	public function isEmpty() {
		return ($this->_head == NULL);
	}

	public function insertHead($data) {
		$newLink = new ListNode($data);
		if($this->isEmpty()) {
			$this->_tail = $newLink;
		} else {
			$this->_head->prev = $newLink;
		}
		$newLink->next = $this->_head;
		$this->_head = $newLink;
		$this->_count++;
	}

	public function insertTail($data) {
		$newLink = new ListNode($data);
		if($this->isEmpty()) {
			$this->_head = $newLink;
		} else {
			$this->_tail->next = $newLink;
		}
		$newLink->prev = $this->_tail;
		$this->_tail = $newLink;
		$this->_count++;
	}

	public function insertAfter($data) {
		$newLink = new ListNode($data);
		if($this->_curr == $this->_tail) {
			$newLink->next = NULL;
			$this->_tail = $newLink;
		} else {
			$newLink->next = $this->_curr->next;
			$this->_curr->next->prev = $newLink;
		}
		$newLink->prev = $this->_curr;
		$this->_curr->next = $newLink;
		$this->_count++;
		return true;
	}

	public function insertBefore($data) {
		$newLink = new ListNode($data);
		if($this->_curr == $this->_head) {
			$newLink->prev = NULL;
			$this->_head = $newLink;
		} else {
			$newLink->prev = $this->_curr->prev;
			$this->_curr->prev->next = $newLink;
		}
		$newLink->next = $this->_curr;
		$this->_curr->prev = $newLink;
		$this->_count++;
		return true;
	}

	public function removeHead() {
		$temp = $this->_head;
		if($this->_head->next == NULL) {
			$this->_tail = NULL;
		} else {
			$this->_head->next->prev = NULL;
		}
		$this->_head = $this->_head->next;
		$this->_count--;
		return $temp;
	}

	public function removeTail() {
		$temp = $this->_tail;
		if($this->_head->next == NULL) {
			$this->_head = NULL;
		} else {
			$this->_tail->prev->next = NULL;
		}
		$this->_tail = $this->_tail->prev;
		$this->_count--;
		return $temp;
	}

	public function deleteNode() {
		$temp = $this->_curr;
		if($temp == $this->_head) {
			$this->_head = $temp->next;
		} else {
			$temp->prev->next = $temp->next;
		}
		if($temp == $this->_tail) {
			$this->_tail = $temp->prev;
		} else {
			$temp->next->prev = $temp->prev;
		}
		$this->_count--;
		return $temp;
	}

	public function displayForward() {
		$temp = $this->_head;
		while($temp != NULL) {
			echo $temp->readNode() . " ";
			$temp = $temp->next;
		}
	}

	public function displayBackward() {
		$temp = $this->_tail;
		while($temp != NULL) {
			echo $temp->readNode() . " ";
			$temp = $temp->prev;
		}
	}

	public function size() {
		return $this->_count;
	}

	public function movetoHead() {
		$this->_curr = $this->_head;
	}

	public function movetoTail() {
		$this->_curr = $this->_tail;
	}

	public function next() {
		$this->_curr = $this->_curr->next;
	}

	public function prev() {
		$this->_curr = $this->_curr->prev;
	}

	public function valid() {
		if($this->_curr == NULL) return FALSE;
		return TRUE;
	}

	public function curr() {
		return $this->_curr;
	}
}

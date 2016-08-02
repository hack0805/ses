<?php

class UsersController extends AppController {

	public function index() {
		$this->set('users', $this->User->find('all'));
	}

	public function add_step1() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->validates()) {
				// 正しい場合のロジック
				return $this->redirect(['action' => 'add_step3']);
			}
		}
	}

	public function add_step2() {

	}

	public function add_step3() {

	}

}
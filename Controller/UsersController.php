<?php

class UsersController extends AppController {

	public function index() {
		//usersテーブルから全てのデータをさらってUserモデルを経由してビューに表示する
		$this->set('users', $this->User->find('all'));
	}

	public function add_step1() {
		//フォームが送信されたら
		if ($this->request->is('post')) {
			//Userモデルクラスから新規
			$this->User->create();
			//Userモデルからバリデーションをチェックしにいく
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
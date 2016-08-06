<?php

class UsersController extends AppController {

	public $paginate = array(
		'limit'         => 1,
		'order'         => array(
			'User.created' => 'DESC',
		)
	);

	public function index() {
		//から全てのデータをさらってUserモデルのfindメソッドをビューに表示する
		//フォームの内容を取得してUserモデルで処理
		$this->set('users', $this->User->find('all'));
	}

	public function add_step1() {
		//フォームが送信されたら
		if ($this->request->is('post')) {
			//Userコントローラに対応するモデルの中身を空にする｡DBからデフォルトの値をもってくる
			$this->User->create();
			//Userモデルからバリデーションをチェックしにいく
			if ($this->User->validates()) {
				// 正しい場合のロジック 正しくない場合はif文を抜けてファイルの先頭に戻る
				return $this->redirect(['action' => 'add_fin']);
			}
		}
	}

	public function add_step2() {

	}

	public function add_step3() {

	}

	public function add_fin() {

	}
	public function login() {

		if ($this->request->is('post')) {
			$this->Flash->success('ログインしました');
			return $this->redirect(['action' => 'index']);
		}

	}

}
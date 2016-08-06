<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
		'email'     => [
			'required' => [
				'rule'    => 'notBlank',
				'message' => 'メールアドレスを入力してください'
			],
			'validEmail' => [
				'rule'      => 'email',
				'message'   => '正しいメールアドレスを入力してください'
			],
			'emailExists' => [
				'rule'       => ['isUnique', 'email'],
				'message'    => '入力されたメールアドレスは既に登録されています'
			],
			//'allowEmpty' => false,
			//'required' => false,
			//'last' => false, // Stop validation after this rule
			//'on' => 'create', // Limit validation to 'create' or 'update' operations
		],

		'first_name' => array(
			'notBlank'  => array(
				'rule'     => array('notBlank'),
				'message'  => 'お名前(姓)を入力してください',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'last_name' => array(
			'notBlank' => array(
				'rule'    => array('notBlank'),
				'message' => 'お名前(名)を入力してください',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'first_name_kana' => array(
			'notBlank'       => array(
				'rule'          => array('notBlank'),
				'message'       => '姓(フリガナ)を入力してください'
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'last_name_kana' => array(
			'notBlank'      => array(
				'rule'         => array('notBlank'),
				'message'      => '(名)フリガナを入力してください',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'born'      => array(
			'notBlank' => array(
				'rule'    => array('notBlank'),
				'message' => '生年月日を入力してください',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'phone'     => array(
			'notBlank' => array(
				'rule'    => array('notBlank'),
				// 'rule' => array( 'custom', '/^(0\d{1,4}-\d{1,4}-\d{4})$/'),
				'message' => '電話番号を入力してください',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password'  => [
			'required' => [
				'rule'    => 'notBlank',
				'message' => 'パスワードを入力してください'
			],
			// バリデーションにメソッドを指定
			'match'    => [
				'rule'    => 'passwordConfirm',
				'message' => 'パスワードが一致していません'
			],
		],
		'password_confirm' => [
			'required'        => [
				'rule'           => 'notBlank',
				'message'        => 'パスワード(確認)を入力してください'
			],
		],

		'closest_line' => array(
			'notBlank'    => array(
				'rule'       => array('notBlank'),
				'message'    => '最寄り駅(路線)を入力してください',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'closest_sta' => array(
			'notBlank'   => array(
				'rule'      => array('notBlank'),
				'message'   => '最寄り駅(駅)を入力してください',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'profile_skill' => array(
			'notBlank'     => array(
				'rule'        => array('notBlank'),
				'message'     => 'スキルPRを入力してください',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'profile'   => array(
			'notBlank' => array(
				'rule'    => array('notBlank'),
				'message' => '自己PRを入力してください',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

	);
}

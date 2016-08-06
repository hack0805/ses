 <div class="container">

<div class="users form">
<?php echo $this->Form->create('User', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control',
	),
	'novalidate' => true,
));?>
	<fieldset>
		<legend><?php echo '基本情報の登録'; ?></legend>
	<?php
		echo $this->Form->input('email', array(
			'label' => array(
				'text' => 'メールアドレス'
				),
			'placeholder' => 'メールアドレスを入力してください'
			));
		echo $this->Form->input('email_confirm', array(
			'label' => array(
				'text' => 'メールアドレスの確認'
				),
			'placeholder' => 'メールアドレスを再度入力してください'
			));
		echo $this->Form->input('password', array(
			'label' => array(
				'text' => 'パスワード'
				),
			'placeholder' => 'パスワードを入力してください'
			));
		echo $this->Form->input('password_confirm', array(
			'label' => array(
				'text' => 'パスワードの確認'
				),
			'placeholder' => 'パスワードを再度入力してください'
			));
		echo $this->Form->input('first_name', array(
			'label' => array(
				'text' => 'お名前(姓)'
				),
			'placeholder' => '(例) 山田'
			));
		echo $this->Form->input('last_name', array(
			'label' => array(
				'text' => 'お名前(名)'
				),
			'placeholder' => '(例)太郎'
			)) ;
		echo $this->Form->input('first_name_kana', array(
			'label' => array(
				'text' => 'お名前(セイ)'
				),
			'placeholder' => '(例) ヤマダ'
			));
		echo $this->Form->input('last_name_kana', array(
			'label' => array(
				'text' => 'お名前(メイ)'
				),
			'placeholder' => '(例)タロウ'
			)) ;
		echo $this->Form->input('telephone', array(
			'label' => array(
				'text' => '電話番号'
				),
			'placeholder' => '(例)080-7777-7777'
			)) ;

        echo $this->Form->input('born', array(
        	'label' => array(
        		'text' =>'生年月日',
        		'style' =>'display:block;'
	        ),
	        'type' => 'date',
	        'dateFormat' => 'YMD',
	        'monthNames' => false,
	        'style' => 'width: 100px; display: inline-block;',
        ));

		echo $this->Form->input('postal', array(
			'label' => array(
				'text' => '郵便番号'
				),
			'placeholder' => '(例)1690001'
		)) ;
		echo $this->Form->input('address', array(
			'label' => array(
				'text' => '住所'
				),
			'placeholder' => '(例)東京都新宿区西新宿1'
		)) ;
		echo $this->Form->input('closest_line', array(
			'label' => array(
				'text' => '最寄り路線',
				'style' =>'display:block;'
				),
			'placeholder' => '(例)山手',
			'style'=> 'width:200px; display:inline-block;'
		)) ;?> 線
		<?php
		echo $this->Form->input('closest_sta', array(
			'label' => array(
				'text' => '最寄り駅',
				'style' =>'display:block;'
				),
			'placeholder' => '(例)渋谷',
			'style'=> 'width:200px; display:inline-block;'
		)) ;?>駅
		<?php
		echo $this->Form->input('profile_skill', array(
			'label' => array(
				'text' => 'スキルPR'
				),
			'placeholder' => '(例)',
		)) ;
		echo $this->Form->input('profile', array(
			'label' => array(
				'text' => '自己PR'
				),
			'placeholder' => '(例)'
		)) ;
?>
<!-- <b>プロフィール画像</b><br> -->
<?php
		echo $this->Form->input('profile', array(
			'label' => array(

				'text' => 'プロフィール画像',
				'style' => 'display:block;'
				),
			'type' => 'file',
			'style' => 'width: 100px; display: inline-block;',
			'div' => false,
			'class'=> ''
			// 'class' => 'btn btn-default'

	    )) ;
	    ?>

<!-- <button type="button" class="btn btn-default">ファイルを選択</button>
 -->

	</fieldset>
	<br>
<?php echo $this->Form->submit('Submit', array(
			'div' => 'form-group',
			'class' => 'btn btn-primary'
		)); ?>
		<?php echo $this->Form->end(); ?>

</div>
<hr>
<div class="actions">

	<?php echo $this->Html->link('一覧に戻る', array('action' => 'index'), array('class' => 'btn btn-default')); ?>
</div>
</div>
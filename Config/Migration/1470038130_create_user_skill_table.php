<?php
class CreateUserSkillTable extends CakeMigration {

	/**
	 * Migration description
	 *
	 * @var string
	 */
	public $description = 'create_user_skill_table';

	/**
	 * Actions to be performed
	 *
	 * @var array $migration
	 */
	public $migration = array(
		'up'            => array(
			'create_table' => array(
				'user_skills' => array(
					'id'         => array(
						'type'      => 'integer',
						'null'      => false,
						'default'   => null,
						'key'       => 'primary',
					),
					'user_id'  => array(
						'type'    => 'integer',
						'null'    => false,
						'default' => null,
						//'unique'  => 1,
					),
					'skill_id' => array(
						'type'    => 'integer',
						'null'    => false,
						'default' => null
					),

					'updated'  => array(
						'type'    => 'datetime',
						'null'    => false,
						'default' => null
					),
					'created'  => array(
						'type'    => 'datetime',
						'null'    => false,
						'default' => null
					),
					'indexes'  => array(
						'PRIMARY' => array(
							'column' => 'id',
							'unique' => 1,
						),
					),
				),
			),
		),

		'down'        => array(
			'drop_table' => array(
				'user_skills',
			)
		),
	);

	/**
	 * Before migration callback
	 *
	 * @param string $direction Direction of migration process (up or down)
	 * @return bool Should process continue
	 */
	public function before($direction) {
		return true;
	}

	/**
	 * After migration callback
	 *
	 * @param string $direction Direction of migration process (up or down)
	 * @return bool Should process continue
	 */
	public function after($direction) {
		return true;
	}
}

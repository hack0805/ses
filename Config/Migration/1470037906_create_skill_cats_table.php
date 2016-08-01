<?php
class CreateSkillCatsTable extends CakeMigration {

	/**
	 * Migration description
	 *
	 * @var string
	 */
	public $description = 'create_skill_cats_table';

	/**
	 * Actions to be performed
	 *
	 * @var array $migration
	 */
	public $migration = array(
		'up'            => array(
			'create_table' => array(
				'skill_cats'  => array(
					'id'         => array(
						'type'      => 'integer',
						'null'      => false,
						'default'   => null,
						'key'       => 'primary',
					),
					'skill_cat' => array(
						'type'     => 'string',
						'null'     => false,
						'default'  => null,
						//'unique'  => 1,
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
				'skill_cats',
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

<?php
class Skills extends CakeMigration {

	/**
	 * Migration description
	 *
	 * @var string
	 */
	public $description = 'skills';

	/**
	 * Actions to be performed
	 *
	 * @var array $migration
	 */
	public $migration = array(
		'up'            => array(
			'create_table' => array(
				'skills'      => array(
					'id'         => array(
						'type'      => 'integer',
						'null'      => false,
						'default'   => null,
						'key'       => 'primary',
					),
					'skill'    => array(
						'type'    => 'string',
						'null'    => false,
						'default' => null,
						//'unique'  => 1,
					),
					'cat_id'   => array(
						'type'    => 'integer',
						'null'    => false,
						'default' => null,
					),
					'years_exp' => array(
						'type'     => 'integer',
						'null'     => false,
						'default'  => null,
						'length'   => 2,
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
				'skills',
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

<?php
class CreateJobsTable extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'create_jobs_table';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'jobs' => array(
					'id' => array(
						'type' => 'integer',
						'null' => false, 'default' => null,
						'unsigned' => false,
						'key' => 'primary'
					),
					'job_name' => array(
						'type' =>'string',
						'null' => false,
						'default' => null,
						'length' => 100,
					),
					'salary' => array(
						'type' => 'integer',
						'null' => false,
						'dedault' => null,
						'length' => 9
					),
					// 'job_category' => array(
					// 	'type' => 'integer',
					// 	'null' => false,
					// 	'default' => null,
					// ),
					'job_detail' => array(
						'type' => 'string',
						'null' => false,
						'default' => null,
						'length' => 1000,
					),
					// 'location_id' => array(
					// 	'type' => 'integer',
					// 	'null' => false,
					// 	'default' => null,
					// 	'length' => 4,
					// ),
					// 'employ_type' => array(
					// 	'type' => 'integer',
					// 	'null' => false,
					// 	'default' => null,
					// 	'length' => 1,
					// ),
					// 'chara_id' => array(
					// 	'type' => 'integer',
					// 	'null' => false,
					// 	'default' => null,
					// 	'length' => 2,
					// ),
					'close_flag' => array(
						'type' => 'boolean',
						'null' => false,
						'default' => 0
					),
					'created_user_id' => array(
						'type' => 'string',
						'null' => false,
						'default' => 'null',
						'length' => 256
					),
					'created' => array(
						'type' => 'datetime',
						'null' => false,
						'default' => null
					),
					'updated_user_id' => array(
						'type' => 'string',
						'null' => false,
						'default' => null,
						'length' => 256
					),
					'updated' => array(
						'type' => 'datetime',
						'null' => false,
						'default' => null
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'jobs'
			),
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

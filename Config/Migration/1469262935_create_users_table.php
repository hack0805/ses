<?php
class CreateUsersTable extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'create_users_table';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
    			'users' => array(
        			'id' => array(
            			'type'    =>'string',
            			'null'    => false,
            			'default' => null,
            			'key'     => 'primary'
        			),
        			'email' => array(
            			'type'    =>'string',
            			'null'    => false,
            			'default' => null
        			),
        			'first_name' => array(
            			'type'    =>'string',
            			'null'    => false,
            			'default' => null
        			),
        			'last_name' => array(
            			'type'    =>'string',
            			'null'    => false,
            			'default' => null
        			),
        			'updated' => array(
            			'type'    =>'datetime',
            			'null'    => false,
            			'default' => null
        			),
        			'created' => array(
            			'type'    =>'datetime',
            			'null'    => false,
            			'default' => null
        			),
        			'index' => array(
            			'PRIMARY' => array(
        	        		'column' => 'id',
            	    		'unique' => 1
            			),
        			),
    			),
			),
		),

		'down' => array(
			'drop_table' => array(
 		 	   'users'
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

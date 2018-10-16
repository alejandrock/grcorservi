<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder{
	
    public function run() {
    	$permissions=[

	    	[
	    		'name' => 'role-read',
	    		'display_name' => 'Display Role Listing',
	    		'description' => 'see only Listening of Role'
	    	],
	    	[
				'name' => 'role-create',
	    		'display_name' => 'Create Role',
	    		'description' => 'Create New Role'

	    	],
	    	[

	    		'name' => 'role-edit',
	    		'display_name' => 'Edit Role',
	    		'description' => 'Edit Role'

	    	],
	    	[
				'name' => 'role-delete',
	    		'display_name' => 'Delete Role',
	    		'description' => 'Delete Role'
			],
			[
				'name' => 'role-export',
	    		'display_name' => 'Export Role',
	    		'description' => 'Export Role'
			],
			[
				'name' => 'role-import',
	    		'display_name' => 'Import Role',
	    		'description' => 'Import Role'
			]
		];
		foreach ($permissions as $key => $value) {

			App\Permission::create($value);
		}

	}
}

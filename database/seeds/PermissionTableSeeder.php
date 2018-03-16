<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
        	[
        		'name' => 'role-list',
        		'display_name' => 'Display Role Listing',
        		'description' => 'See only Listing Of Role'
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
        		'name' => 'project-list',
        		'display_name' => 'Display Project Listing',
        		'description' => 'See only Listing Of Project'
        	],
        	[
        		'name' => 'project-create',
        		'display_name' => 'Create Project',
        		'description' => 'Create New Project'
        	],
        	[
        		'name' => 'project-edit',
        		'display_name' => 'Edit Project',
        		'description' => 'Edit Project'
        	],
        	[
        		'name' => 'project-delete',
        		'display_name' => 'Delete Project',
        		'description' => 'Delete Project'
        	],
			[
        		'name' => 'compound-list',
        		'display_name' => 'Display Compound Listing',
        		'description' => 'See only Listing Of Compound'
        	],
        	[
        		'name' => 'compound-create',
        		'display_name' => 'Create Compound',
        		'description' => 'Create New Compound'
        	],
        	[
        		'name' => 'compound-edit',
        		'display_name' => 'Edit Compound',
        		'description' => 'Edit Compound'
        	],
        	[
        		'name' => 'compound-delete',
        		'display_name' => 'Delete Compound',
        		'description' => 'Delete Compound'
        	],
			[
        		'name' => 'building-list',
        		'display_name' => 'Display Building Listing',
        		'description' => 'See only Listing Of Building'
        	],
        	[
        		'name' => 'building-create',
        		'display_name' => 'Create Building',
        		'description' => 'Create New Building'
        	],
        	[
        		'name' => 'building-edit',
        		'display_name' => 'Edit Building',
        		'description' => 'Edit Building'
        	],
        	[
        		'name' => 'building-delete',
        		'display_name' => 'Delete Building',
        		'description' => 'Delete Building'
        	],
			[
        		'name' => 'unit-list',
        		'display_name' => 'Display Unit Listing',
        		'description' => 'See only Listing Of Unit'
        	],
        	[
        		'name' => 'uint-create',
        		'display_name' => 'Create Unit',
        		'description' => 'Create New Unit'
        	],
        	[
        		'name' => 'unit-edit',
        		'display_name' => 'Edit Unit',
        		'description' => 'Edit Unit'
        	],
        	[
        		'name' => 'unit-delete',
        		'display_name' => 'Delete Unit',
        		'description' => 'Delete Unit'
        	],
			[
        		'name' => 'contact-list',
        		'display_name' => 'Display Contact Listing',
        		'description' => 'See only Listing Of Contact'
        	],
        	[
        		'name' => 'contact-create',
        		'display_name' => 'Create Contact',
        		'description' => 'Create New Contact'
        	],
        	[
        		'name' => 'contact-edit',
        		'display_name' => 'Edit Contact',
        		'description' => 'Edit Contact'
        	],
        	[
        		'name' => 'contact-delete',
        		'display_name' => 'Delete Contact',
                'description' => 'Delete Contact'
            ]
     ];
            foreach ($permission as $key => $value) {
                Permission::create($value);
            }	
    }
}

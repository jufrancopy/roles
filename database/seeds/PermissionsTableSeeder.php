<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Users
        Permission::create([
        	'name' =>'Navegar Usuarios',
        	'slug' => 'users.index',
        	'description' => 'Lista y Navega todos los usuarios',
        ]);

        Permission::create([
        	'name' =>'Ver Detalles de Usuarios',
        	'slug' =>'users.show',
        	'description' =>'Ver en detalle cada usuario del Sistem',
        ]);

         Permission::create([
        	'name' =>'Creación de Usuarios',
        	'slug' =>'users.create',
        	'description' =>'Creación de un usuario',
        ]);

        Permission::create([
        	'name' =>'Edición de Usuarios',
        	'slug' =>'users.edit',
        	'description' =>'Editar cualquier dato de un usuario del Sistem',
        ]);

        Permission::create([
        	'name' =>'Eliminar Usuarios',
        	'slug' =>'users.destroy',
        	'description' =>'Eliminar cualquier dato de un usuario del Sistem',
        ]);//Fin de Users

        //Roles
        Permission::create([
        	'name' =>'Navegar Roles',
        	'slug' =>'roles.index',
        	'description' =>'Lista y Navega todos los roles',
        ]);

        Permission::create([
        	'name' =>'Ver Detalles de Rol',
        	'slug' =>'roles.show',
        	'description' =>'Ver en detalle cada rol del Sistem',
        ]);

         Permission::create([
        	'name' =>'Creación de Roles',
        	'slug' =>'roles.create',
        	'description' =>'Creación de un usuario',
        ]);

        Permission::create([
        	'name' =>'Edición de Roles',
        	'slug' =>'roles.edit',
        	'description' =>'Editar cualquier dato de un usuario del Sistem',
        ]);

        Permission::create([
        	'name' =>'Eliminar Roles',
        	'slug' =>'roles.destroy',
        	'description' =>'Eliminar cualquier dato de un usuario del Sistem',
        ]);//Fin de Roles
		

		//Products
        Permission::create([
        	'name' =>'Navegar Producto',
        	'slug' =>'products.index',
        	'description' =>'Lista y Navega todos los Producto',
        ]);

        Permission::create([
        	'name' =>'Ver Detalles de Producto',
        	'slug' =>'products.show',
        	'description' =>'Ver en detalle cada Producto del Sistem',
        ]);

         Permission::create([
        	'name' =>'Creación de Productos',
        	'slug' => 'products.create',
        	'description' =>'Creación de un Producto',
        ]);

        Permission::create([
        	'name' =>'Edición de Productos',
        	'slug' =>'products.edit',
        	'description' =>'Editar cualquier dato de un Producto del Sistem',
        ]);

        Permission::create([
        	'name' =>'Eliminar Productos',
        	'slug' =>'products.destroy',
        	'description' =>'Eliminar cualquier dato de un Producto del Sistem',
        ]);//Fin de Products
	}
}

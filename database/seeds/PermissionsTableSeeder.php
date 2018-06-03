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
         //Users, aqui creamos el seeder para los usuarios
         Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema'   
        ]);

        
         Permission::create([
            'name'          => 'Ver detalle del usuarios',
            'slug'          => 'users.show',
            'description'   => 'Ver en detalle cada usuario del sistema'   
        ]);

         
         Permission::create([
            'name'          => 'Edicion de usuario',
            'slug'          => 'users.edit',
            'description'   => 'Editar cualquier dato de un usuario del sistema'   
        ]);

        
         Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Eliminar cualquier usuario del sistema'   
        ]);

         //Roles, aqui creamos el seeder para los roles de usuario
         Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema'   
        ]);

        
         Permission::create([
            'name'          => 'Ver detalle del roles',
            'slug'          => 'roles.show',
            'description'   => 'Ver en detalle cada rol del sistema'   
        ]);

        Permission::create([
            'name'          => 'Creacion de roles',
            'slug'          => 'roles.create',
            'description'   => 'Editar cualquier dato de un rol del sistema'   
        ]);
         
         Permission::create([
            'name'          => 'Edicion de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Editar cualquier dato de un rol del sistema'   
        ]);

        
         Permission::create([
            'name'          => 'Eliminar rol',
            'slug'          => 'roles.destroy',
            'description'   => 'Eliminar cualquier rol del sistema'   
        ]);

        
    }
    
}

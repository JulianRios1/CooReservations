<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Permission Types
         *
         */
        $Permissionitems = [
            [
                'name'        => 'Modulo Usuario',
                'slug'        => 'users.module',
                'description' => 'Modulo de usuario',
                'model'       => 'menu',
            ],
            [
                'name'        => 'Creación de usuarios',
                'slug'        => 'create.users',
                'description' => 'Creación de usuarios',
                'model'       => 'Permission',
            ],
            [
                'name'        => 'Modificar usuarios',
                'slug'        => 'edit.users',
                'description' => 'Modificar usuarios',
                'model'       => 'Permission',
            ],
            [
                'name'        => 'Eliminar usarios',
                'slug'        => 'delete.users',
                'description' => 'Eliminar usarios',
                'model'       => 'Permission',
            ],
            [
                'name'        => 'Modulo Roles',
                'slug'        => 'module.roles',
                'description' => 'Modulo de Roles',
                'model'       => 'menu',
            ],
            [
                'name'        => 'Creación de Roles',
                'slug'        => 'create.roles',
                'description' => 'Creación de Roles',
                'model'       => 'Permission',
            ],
            [
                'name'        => 'Modificar Roles',
                'slug'        => 'edit.roles',
                'description' => 'Modificar Roles',
                'model'       => 'Permission',
            ],
            [
                'name'        => 'Eliminar Roles',
                'slug'        => 'delete.roles',
                'description' => 'Eliminar Roles',
                'model'       => 'Permission',
            ],
            [
                'name'        => 'Modulo Roles',
                'slug'        => 'module.permissions',
                'description' => 'Modulo de Roles',
                'model'       => 'menu',
            ],
            [
                'name'        => 'Creación de Roles',
                'slug'        => 'create.permissions',
                'description' => 'Creación de Roles',
                'model'       => 'Permission',
            ],
            [
                'name'        => 'Modificar Roles',
                'slug'        => 'edit.permissions',
                'description' => 'Modificar Roles',
                'model'       => 'Permission',
            ],
            [
                'name'        => 'Eliminar Roles',
                'slug'        => 'delete.permissions',
                'description' => 'Eliminar Roles',
                'model'       => 'Permission',
            ],
            [
                'name'        => 'Modulo Permisos',
                'slug'        => 'module.permissions',
                'description' => 'Modulo de Permisos',
                'model'       => 'menu',
            ],
            [
                'name'        => 'Creación de Permisos',
                'slug'        => 'create.permissions',
                'description' => 'Creación de Permisos',
                'model'       => 'Permission',
            ],
            [
                'name'        => 'Modificar Permisos',
                'slug'        => 'edit.permissions',
                'description' => 'Modificar Permisos',
                'model'       => 'Permission',
            ],
            [
                'name'        => 'Eliminar Permisos',
                'slug'        => 'delete.permissions',
                'description' => 'Eliminar Permisos',
                'model'       => 'Permission',
            ],
        ];

        /*
         * Add Permission Items
         *
         */
        foreach ($Permissionitems as $Permissionitem) {
            $newPermissionitem = config('roles.models.permission')::where('slug', '=', $Permissionitem['slug'])->first();
            if ($newPermissionitem === null) {
                $newPermissionitem = config('roles.models.permission')::create([
                    'name'          => $Permissionitem['name'],
                    'slug'          => $Permissionitem['slug'],
                    'description'   => $Permissionitem['description'],
                    'model'         => $Permissionitem['model'],
                ]);
            }
        }
    }
}

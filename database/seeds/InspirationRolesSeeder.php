<?php
namespace Inspiration\Seeds;
use Illuminate\Database\Seeder;
use Inspiration\Models\Role;

class InspirationRolesSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run() : void
    {

        $this->isValue('administrator', function(){
            Role::firstOrCreate(['name' => 'administrator', 'display_name' => 'Administrator'] );
        });

        $this->isValue('user', function(){
            Role::firstOrCreate(['name' => 'user', 'display_name' => 'User'] );
        });
    }

    /**
     * Based on the existence of the table we fill or not
     * @param string $name
     * @param callable $callback
     */
    private function isValue(string $name, callable $callback) : void
    {
        if ( Role::where('name', $name)->get()->isEmpty() )
        {
            call_user_func($callback);
        }
    }
}

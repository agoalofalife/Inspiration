<?php
namespace Inspiration\Seeds;
use Illuminate\Database\Seeder;

class InspirationRolesSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run() : void
    {

        $this->isValue('administrator', function(){
            \DB::table('roles')->insert(
                ['name' => 'administrator', 'display_name' => 'Administrator']
            );
        });

        $this->isValue('user', function(){
            \DB::table('roles')->insert(
                ['name' => 'user', 'display_name' => 'User']
            );
        });

    }

    /**
     * Based on the existence of the table we fill or not
     * @param string $name
     * @param callable $callback
     */
    private function isValue(string $name, callable $callback) : void
    {
        if ( \DB::table('roles')->where('name', '=' , $name)->get()->isEmpty() )
        {
            call_user_func($callback);
        }
    }
}

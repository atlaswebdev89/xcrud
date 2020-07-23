<?php


use Phinx\Seed\AbstractSeed;

class UsersSeeds extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'name' => 'sergei',

            ],
            [
                'name' => 'ivan',

            ],
            [
                'name' => 'ivan',

            ]
        ];

        $user = $this->table('users');
        $user->insert($data)->save();
    }
}

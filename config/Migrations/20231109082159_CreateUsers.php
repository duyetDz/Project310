<?php

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table
            ->addColumn('full_name', 'string')
            ->addColumn('username', 'string')
            ->addColumn('password', 'string')
            ->addColumn('email', 'string')
            ->addColumn('phoneNumber', 'integer')
            ->addColumn('verificationCode', 'string', [
                'default' => null,
                'null' => true,
            ])
            ->addColumn('created_at', 'timestamp')
            ->create();
    }
}

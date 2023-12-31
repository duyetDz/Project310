<?php

use Migrations\AbstractMigration;

class CreatePosts extends AbstractMigration
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
        $table = $this->table('posts');
        $table
            ->addColumn('title', 'string')
            ->addColumn('content', 'string')
            ->addColumn('user_id', 'integer')
            ->addColumn('category_id', 'integer')
            ->addColumn('created_at', 'timestamp')
            ->create();
    }
}

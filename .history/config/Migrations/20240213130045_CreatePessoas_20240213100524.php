<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePessoas extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('pessoas');
        $table->addColumn('id','integer', [''=> false]);
        $table->addColumn('nome_completo','integer', [''=> false]);
        $table->addColumn('id','integer', [''=> false]);
        $table->create();
    }
}

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
    public function up(): void
    {
        $table = $this->table('pessoas');
        $table
            ->addColumn('id', 'integer', ['autoIncrement' => true,])->addPrimaryKey('id')
            ->addColumn('nome_completo', 'string', ['limit'=>100])
            ->addColumn('cpf', 'string', ['limit'=>11])
            ->create();
    }
    public function down(): void
    {
        $table = $this->table('pessoas');
        $table
            ->addColumn('id', 'integer', ['autoIncrement' => true,])->addPrimaryKey('id')
            ->addColumn('nome_completo', 'string', ['limit'=>100])
            ->addColumn('cpf', 'string', ['limit'=>11])
            ->create();
    }
}

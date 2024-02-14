<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTelefones extends AbstractMigration
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
        $table = $this->table('telefones');
        $table
            ->addColumn('pessoa_id', 'integer',['limit'=>2])
            ->addColumn('ddd', 'string',['limit'=>2])
            ->addColumn('ddi', 'string',['limit'=>4])
            ->addColumn('numero', 'string')
            ->addColumn('ativo', 'boolean')
            ->create();
    }
}

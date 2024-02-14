<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TelefonesFixture
 */
class TelefonesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'pessoa_id' => 'Lorem ipsum dolor sit amet',
                'ddd' => 'Lo',
                'ddi' => 'Lo',
                'numero' => 'Lorem ipsum dolor sit amet',
                'ativo' => 1,
            ],
        ];
        parent::init();
    }
}

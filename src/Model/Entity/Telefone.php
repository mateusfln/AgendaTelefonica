<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Telefone Entity
 *
 * @property int $id
 * @property string|null $pessoa_id
 * @property string|null $ddd
 * @property string|null $ddi
 * @property string|null $numero
 * @property bool|null $ativo
 *
 * @property \App\Model\Entity\Pessoa $pessoa
 */
class Telefone extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'pessoa_id' => true,
        'ddd' => true,
        'ddi' => true,
        'numero' => true,
        'ativo' => true,
        'pessoa' => true,
    ];
}

<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\ORM\TableRegistry;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    /**
     * Displays a view
     *
     * @param string ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\View\Exception\MissingTemplateException When the view file could not
     *   be found and in debug mode.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found and not in debug mode.
     * @throws \Cake\View\Exception\MissingTemplateException In debug mode.
     */
    public function display(string ...$path): ?Response
    {
        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        /* Filtros das colunas (consulta no banco de dados) */
        $tablePessoas = TableRegistry::getTableLocator()->get('Pessoas');
        $query = $tablePessoas->find('all');

        if($this->request->getQuery('nome_completo')){
            $query->where(['nome_completo like'=>'%'.$this->request->getQuery('nome_completo').'%']);
        }
        if($this->request->getQuery('cpf')){
            $query->where(['cpf like'=>'%'.$this->request->getQuery('cpf').'%']);
        }
        if($this->request->getQuery('id')){
            $query->where(['{intval(Pessoas.id)} like'=>'%'.$this->request->getQuery('id').'%']);
        }
        if($this->request->getQuery('numero')){
            $query->matching('Telefones', function ($q) {
                return $q->where(['numero like'=>'%'.$this->request->getQuery('numero').'%']);
            });
        }

        $filtros = $this->request->getQueryParams();
        if(isset($filtros['ativo']) && in_array($filtros['ativo'], [0, 1])){
            $query->matching('Telefones', function ($q) {
                return $q->where(['ativo'=>$this->request->getQuery('ativo')]);
            });
            $qury->contain(['Telefones'], function($q) use (){
                return $q->where(['Telefones.ativo' => 1]);
            });
        } else {
            $query->contain(['Telefones']);
        }

        /* END Filtros das colunas (consulta no banco de dados) */

        $pessoas = $this->paginate($query,[
            'limit' => 10,
        ] );
         $this->set(compact('page', 'subpage','pessoas'));

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

}

<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Aluno{

  /**
   * Identificador único da aluno
   * @var integer
   */
  public $id;

  /**
   * Título da aluno
   * @var string
   */
  public $nome;

  /**
   * Descrição da aluno (pode conter html)
   * @var string
   */
  public $endereco;

  /**
   * Nota de publicação da aluno
   * @var string
   */
  public $nota;

  /**
   * Método responsável por cadastrar uma nova aluno no banco
   * @return boolean
   */
  public function cadastrar(){
    
    //INSERIR A ALUNO NO BANCO
    $obDatabase = new Database('aluno');
    $this->id = $obDatabase->insert([
                                      'nome'    => $this->nome,
                                      'endereco' => $this->endereco,
                                      'nota'      => $this->nota
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar a aluno no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('aluno'))->update('id = '.$this->id,[
                                                                'nome'    => $this->nome,
                                                                'endereco' => $this->endereco,
                                                                'nota'      => $this->nota
                                                              ]);
  }

  /**
   * Método responsável por excluir a aluno do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('aluno'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por obter as alunos do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getAlunos($where = null, $order = null, $limit = null){
    return (new Database('aluno'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar uma aluno com base em seu ID
   * @param  integer $id
   * @return Aluno
   */
  public static function getAluno($id){
    return (new Database('aluno'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}
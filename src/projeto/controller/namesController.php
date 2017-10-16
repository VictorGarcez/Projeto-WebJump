<?php 
namespace projeto\controller;

use projeto\persistences\NamesDAO;
use projeto\entities\Names;

class namesController{
    private $dao;

    public function __construct(){
        $this->setDao (new NamesDAO());
    }
    
    public function getDao(){
        return $this->dao;
    }
    public function setDao($dao){
        $this->dao = $dao;
    }

    public function getALL(){
        $data = array();
        $result = $this->getDao()->findALL();
        foreach ($result as $obj){
            $data[] = $obj->toArray();
        }
        return $data;
    }

    public function insert($json){
        $name = new Names($json->id, $json->name);
        $this->getDao()->insert($name);
        return ["mensagem"=>"Usuario inserido com sucesso"];
    }
}
?>
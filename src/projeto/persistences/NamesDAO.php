<?php
namespace projeto\persistences;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

use projeto\persistences\AbstractDAO;
use projeto\entities\Names;

class NamesDAO extends AbstractDAO{
    public function __construct(){
        parent:: __construct('projeto\entities\Names');
    }
}

?>
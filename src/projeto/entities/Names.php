<?php
namespace projeto\entities;

/**
* @Entity
* @Table(name="names")
*/

class Names extends entity {

    /**
    * @var integer @Id
    *       @Column(name="id", type="integer")
    *       @GeneratedValue(strategy="AUTO")
    */    
    private $id;

    /**
    * @var string @Column(type="string", length=100)
    */
    private $name;

    public function __construct($id = 0,$name= "" ){
        $this->id = $id;
        $this->name = $name;    
    }
    
    public static function construct($array){
        $obj = new Names();
        $obj->setId( $array['id']);
        $obj->setName( $array['name']);
        
        return $obj;    
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id=$id;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function setName($name){
        $this->name=$name;
    }
    public function equals($object){
        if($object instanceof Names){    
            if($this->id!=$object->id){
                return false;
            }
    
            if($this->name!=$object->name){
                return false;
            }
    
            return true;
        }
        else{
            return false;
        }
    }
    public function toString(){
        return "  [id:" .$this->id. "]  [name:" .$this->name. "]  " ;
    } 

    public function toArray(){
        return [
            "id"=>$this->id,
            "name"=>$this->name];
    }
}
?>
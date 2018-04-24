<?php 


/**
*   
*/
class apiController extends CONTROLLER
{

    public $res = array(
    'D'=>array(
    [ 'id'=> 11, 'title'=> 'Mr. Nice','content'=>"this is a sentence" ],
    [ 'id'=> 12, 'title'=> 'Narco','content'=>"this is a sentence" ],
    [ 'id'=> 13, 'title'=> 'Bombasto' ,'content'=>"this is a sentence"],
    [ 'id'=> 14, 'title'=> 'Celeritas' ,'content'=>"this is a sentence"],
    [ 'id'=> 15, 'title'=> 'Magneta' ,'content'=>"this is a sentence"],
    [ 'id'=> 16, 'title'=> 'RubberMan','content'=>"this is a sentence" ],
    [ 'id'=> 17, 'title'=> 'Dynama' ,'content'=>"this is a sentence"],
    [ 'id'=> 18, 'title'=> 'Dr IQ' ,'content'=>"this is a sentence"],
    [ 'id'=> 19, 'title'=> 'Magma' ,'content'=>"this is a sentence"],
    [ 'id'=> 20, 'title'=> 'Tornado','content'=>"this is a sentence"],)
        );
    public function index()
    { 
        
        echo json_encode($this->res);
        return json_encode($this->res);
    }


}

 ?>
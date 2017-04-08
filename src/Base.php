<?php namespace DiegoDevGroup\Rotating;

/**
*  A sample class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author John Congdon
*/
class Base{

    protected $count = 0;

    public function __construct($count){
        $this->count = $count;
    }
}

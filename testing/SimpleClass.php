<?php
class SimpleClass
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }

    public function udpadeVar($newvar){
        $this->var = $newvar;
    }
}

$sc = new SimpleClass();
$sc->udpadeVar('jsdklfjl');
$sc->displayVar();
?>
<?php
    //persones

    class Persona {
        public $nom;
        public $cognom;
        public $telf;

        function __construct($n,$c,$t) {
            $this->nom = $n;
            $this->cognom = $c;
            $this->telf = $t;
        }
    }

?>
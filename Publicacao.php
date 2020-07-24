<?php
    interface Publicacao 
    {
        public function abrir();
        public function fechar();
        public function folhear($p);    // Dizer para qual página eu vou
        public function avancarPag();
        public function voltarPag();
    }
?>
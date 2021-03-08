<?php

interface Publicacao {
    
    public function voltarPagina();
    public function avancarPagina();
    public function folhear($folha);
    public function abrir();
    public function fechar();
}
?>

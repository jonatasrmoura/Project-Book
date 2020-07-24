<?php
    require_once "Pessoa.php";
    require_once "Publicacao.php";
    class Livro implements Publicacao {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $PagAtual;
        private $aberto;
        private $leitor;

        public function detalhes() 
        {
            echo "<hr><p>Livro " .$this->titulo ." escrito por " .$this->autor ."</p>";
            echo "<br><p>O livro possue " .$this->totPaginas ." páginas</p>";
            echo  "<br><p>Sendo lido por " .$this->leitor->getNome() ."</p>";
            echo "<br><p>Atualmente " .$this->leitor->getNome() ." está na página " .$this->pagAtual ."</p>";
        }

        public function __construct($ti, $au, $tp, $le)
        {
            $this->titulo = $ti;
            $this->autor = $au;
            $this->totPaginas = $tp;
            $this->aberto = false;
            $this->PagAtual = 0;
            $this->leitor = $le;
        }

        // Métodos Espéciais

        public function getTitulo() {
            return $this->titulo;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function getTotPaginas() {
            return $this->totPaginas;
        }

        public function getPagAtual() {
            return $this->PagAtual;
        }

        public function getAberto() {
            return $this->aberto;
        }

        public function getLeitor() {
            return $this->leitor;
        }

        public function setTitulo($t) {
            $this->titulo = $t;
        }

        public function setAutor($a) {
            $this->autor = $a;
        }

        public function setTotPaginas($t) {
            $this->totPaginas = $t;
        }

        public function setPagAtual($p) {
            $this->pagAtual = $p;
        }

        public function setAberto($ab) {
            $this->aberto = $ab;
        }

        public function setLeitor($l) {
            $this->leitor = $l;
        }

        // Publicação << interface >>
        public function abrir()
        {
            $this->aberto = true;
        }

        public function fechar() 
        {
            $this->aberto = false;
        }

        public function folhear($p) // dizer para qual página eu vou
        {
            if ($p > $this->totPaginas) 
            {
                $this->pagAtual = 0;
            }
            else 
            {
                $this->pagAtual = $p;
            }
        }

        public function avancarPag()
        {
            $this->pagAtual ++; // pag autal, ++ Próxima página
        }

        public function voltarPag()
        {
            $this->pagAtual --; // -- Voltar uma página.
        }
    }
?>
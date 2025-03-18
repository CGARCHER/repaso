<?php

class Libro{
    private $titulo;
    private $autor;
    private $isbn;
    private $numPaginas;
    private $fechaPublicacion;
    private $numEjemplares;
    private $numEjemplaresPrestados;

    public function __construct($titulo="", $autor="", $isbn="",
        $numPaginas=0, $fechaPublicacion="", $numEjemplares=0, $numEjemplaresPrestados=0)
    {
        
    }

    

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of isbn
     */ 
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @return  self
     */ 
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get the value of numPaginas
     */ 
    public function getNumPaginas()
    {
        return $this->numPaginas;
    }

    /**
     * Set the value of numPaginas
     *
     * @return  self
     */ 
    public function setNumPaginas($numPaginas)
    {
        $this->numPaginas = $numPaginas;

        return $this;
    }

    /**
     * Get the value of fechaPublicacion
     */ 
    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }

    /**
     * Set the value of fechaPublicacion
     *
     * @return  self
     */ 
    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->fechaPublicacion = $fechaPublicacion;

        return $this;
    }

    /**
     * Get the value of numEjemplares
     */ 
    public function getNumEjemplares()
    {
        return $this->numEjemplares;
    }

    /**
     * Set the value of numEjemplares
     *
     * @return  self
     */ 
    public function setNumEjemplares($numEjemplares)
    {
        $this->numEjemplares = $numEjemplares;

        return $this;
    }

    /**
     * Get the value of numEjemplaresPrestados
     */ 
    public function getNumEjemplaresPrestados()
    {
        return $this->numEjemplaresPrestados;
    }

    /**
     * Set the value of numEjemplaresPrestados
     *
     * @return  self
     */ 
    public function setNumEjemplaresPrestados($numEjemplaresPrestados)
    {
        $this->numEjemplaresPrestados = $numEjemplaresPrestados;

        return $this;
    }

    public function prestamo($cantidad=1){

        $value = false;
        if($this->numEjemplaresPrestados + $cantidad <= $this->numEjemplares){
            $this->numEjemplaresPrestados += $cantidad;
            $value = true;
        }
        return $value;
    }

    public function devolucion(){
        $value = false;
        if($this->numEjemplaresPrestados > 0){
            $this->numEjemplaresPrestados--;
            $value = true;
        }
        return $value;
    }
    public function __toString()
    {
       return "Titulo: ". $this->titulo
        . " Libros prestados: ". $this->numEjemplaresPrestados
        . " Libros disponibles: ". $this->numEjemplares . "<br>";
    }
}

?>
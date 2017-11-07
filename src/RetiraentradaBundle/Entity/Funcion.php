<?php

namespace RetiraentradaBundle\Entity;

/**
 * Funcion
 */
class Funcion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $precio;

    /**
     * @var string
     */
    private $hora;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var integer
     */
    private $disponibles;

    /**
     * @var \RetiraentradaBundle\Entity\Pelicopia
     */
    private $idPeliCopia;

    /**
     * @var \RetiraentradaBundle\Entity\Sala
     */
    private $idSala;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     *
     * @return Funcion
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set hora
     *
     * @param string $hora
     *
     * @return Funcion
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return string
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Funcion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Funcion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set disponibles
     *
     * @param integer $disponibles
     *
     * @return Funcion
     */
    public function setDisponibles($disponibles)
    {
        $this->disponibles = $disponibles;

        return $this;
    }

    /**
     * Get disponibles
     *
     * @return integer
     */
    public function getDisponibles()
    {
        return $this->disponibles;
    }

    /**
     * Set idPeliCopia
     *
     * @param \RetiraentradaBundle\Entity\Pelicopia $idPeliCopia
     *
     * @return Funcion
     */
    public function setIdPeliCopia(\RetiraentradaBundle\Entity\Pelicopia $idPeliCopia = null)
    {
        $this->idPeliCopia = $idPeliCopia;

        return $this;
    }

    /**
     * Get idPeliCopia
     *
     * @return \RetiraentradaBundle\Entity\Pelicopia
     */
    public function getIdPeliCopia()
    {
        return $this->idPeliCopia;
    }

    /**
     * Set idSala
     *
     * @param \RetiraentradaBundle\Entity\Sala $idSala
     *
     * @return Funcion
     */
    public function setIdSala(\RetiraentradaBundle\Entity\Sala $idSala = null)
    {
        $this->idSala = $idSala;

        return $this;
    }

    /**
     * Get idSala
     *
     * @return \RetiraentradaBundle\Entity\Sala
     */
    public function getIdSala()
    {
        return $this->idSala;
    }
}


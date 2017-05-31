<?php

namespace CineBundle\Entity;

/**
 * Cine
 */
class Cine
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $ubicacion;

    /**
     * @var integer
     */
    private $cantSalas;

    /**
     * @var string
     */
    private $estado;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cine
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     *
     * @return Cine
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set cantSalas
     *
     * @param integer $cantSalas
     *
     * @return Cine
     */
    public function setCantSalas($cantSalas)
    {
        $this->cantSalas = $cantSalas;

        return $this;
    }

    /**
     * Get cantSalas
     *
     * @return integer
     */
    public function getCantSalas()
    {
        return $this->cantSalas;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Cine
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
}

<?php

namespace CineBundle\Entity;

/**
 * Pelicula
 */
class Pelicula
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
    private $duracion;

    /**
     * @var \DateTime
     */
    private $fechaEstreno;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var \CineBundle\Entity\Genero
     */
    private $idGenero;


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
     * @return Pelicula
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
     * Set duracion
     *
     * @param string $duracion
     *
     * @return Pelicula
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return string
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set fechaEstreno
     *
     * @param \DateTime $fechaEstreno
     *
     * @return Pelicula
     */
    public function setFechaEstreno($fechaEstreno)
    {
        $this->fechaEstreno = $fechaEstreno;

        return $this;
    }

    /**
     * Get fechaEstreno
     *
     * @return \DateTime
     */
    public function getFechaEstreno()
    {
        return $this->fechaEstreno;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Pelicula
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
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Pelicula
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set idGenero
     *
     * @param \CineBundle\Entity\Genero $idGenero
     *
     * @return Pelicula
     */
    public function setIdGenero(\CineBundle\Entity\Genero $idGenero = null)
    {
        $this->idGenero = $idGenero;

        return $this;
    }

    /**
     * Get idGenero
     *
     * @return \CineBundle\Entity\Genero
     */
    public function getIdGenero()
    {
        return $this->idGenero;
    }
    public function __toString()
    {
        return (string) $this->duracion;
    }
    /**
     * @var string
     */
    private $sinopsis;


    /**
     * Set sinopsis
     *
     * @param string $sinopsis
     *
     * @return Pelicula
     */
    public function setSinopsis($sinopsis)
    {
        $this->sinopsis = $sinopsis;

        return $this;
    }

    /**
     * Get sinopsis
     *
     * @return string
     */
    public function getSinopsis()
    {
        return $this->sinopsis;
    }
}

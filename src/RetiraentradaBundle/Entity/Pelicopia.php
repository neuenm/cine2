<?php

namespace RetiraentradaBundle\Entity;

/**
 * Pelicopia
 */
class Pelicopia
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var \RetiraentradaBundle\Entity\Formato
     */
    private $idFormato;

    /**
     * @var \RetiraentradaBundle\Entity\Idioma
     */
    private $idioma;

    /**
     * @var \RetiraentradaBundle\Entity\Pelicula
     */
    private $idPeli;


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
     * Set estado
     *
     * @param string $estado
     *
     * @return Pelicopia
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
     * Set idFormato
     *
     * @param \RetiraentradaBundle\Entity\Formato $idFormato
     *
     * @return Pelicopia
     */
    public function setIdFormato(\RetiraentradaBundle\Entity\Formato $idFormato = null)
    {
        $this->idFormato = $idFormato;

        return $this;
    }

    /**
     * Get idFormato
     *
     * @return \RetiraentradaBundle\Entity\Formato
     */
    public function getIdFormato()
    {
        return $this->idFormato;
    }

    /**
     * Set idioma
     *
     * @param \RetiraentradaBundle\Entity\Idioma $idioma
     *
     * @return Pelicopia
     */
    public function setIdioma(\RetiraentradaBundle\Entity\Idioma $idioma = null)
    {
        $this->idioma = $idioma;

        return $this;
    }

    /**
     * Get idioma
     *
     * @return \RetiraentradaBundle\Entity\Idioma
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * Set idPeli
     *
     * @param \RetiraentradaBundle\Entity\Pelicula $idPeli
     *
     * @return Pelicopia
     */
    public function setIdPeli(\RetiraentradaBundle\Entity\Pelicula $idPeli = null)
    {
        $this->idPeli = $idPeli;

        return $this;
    }

    /**
     * Get idPeli
     *
     * @return \RetiraentradaBundle\Entity\Pelicula
     */
    public function getIdPeli()
    {
        return $this->idPeli;
    }
}


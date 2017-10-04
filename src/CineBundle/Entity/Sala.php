<?php

namespace CineBundle\Entity;

/**
 * Sala
 */
class Sala
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $cantButacas;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var \CineBundle\Entity\Cine
     */
    private $cine;

    /**
     * @var \CineBundle\Entity\Formato
     */
    private $formato;


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
     * Set cantButacas
     *
     * @param integer $cantButacas
     *
     * @return Sala
     */
    public function setCantButacas($cantButacas)
    {
        $this->cantButacas = $cantButacas;

        return $this;
    }

    /**
     * Get cantButacas
     *
     * @return integer
     */
    public function getCantButacas()
    {
        return $this->cantButacas;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Sala
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
     * Set cine
     *
     * @param \CineBundle\Entity\Cine $cine
     *
     * @return Sala
     */
    public function setCine(\CineBundle\Entity\Cine $cine = null)
    {
        $this->cine = $cine;

        return $this;
    }

    /**
     * Get cine
     *
     * @return \CineBundle\Entity\Cine
     */
    public function getCine()
    {
        return $this->cine;
    }

    /**
     * Set formato
     *
     * @param \CineBundle\Entity\Formato $formato
     *
     * @return Sala
     */
    public function setFormato(\CineBundle\Entity\Formato $formato = null)
    {
        $this->formato = $formato;

        return $this;
    }

    /**
     * Get formato
     *
     * @return \CineBundle\Entity\Formato
     */
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * @var string
     */
    private $letra;


    /**
     * Set letra
     *
     * @param string $letra
     *
     * @return Sala
     */
    public function setLetra($letra)
    {
        $this->letra = $letra;

        return $this;
    }

    /**
     * Get letra
     *
     * @return string
     */
    public function getLetra()
    {
        return $this->letra;
    }
}

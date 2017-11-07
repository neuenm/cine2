<?php

namespace RetiraentradaBundle\Entity;

/**
 * Pago
 */
class Pago
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $monto;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var \RetiraentradaBundle\Entity\Formapago
     */
    private $idFormaPago;


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
     * Set monto
     *
     * @param integer $monto
     *
     * @return Pago
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return integer
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Pago
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
     * Set idFormaPago
     *
     * @param \RetiraentradaBundle\Entity\Formapago $idFormaPago
     *
     * @return Pago
     */
    public function setIdFormaPago(\RetiraentradaBundle\Entity\Formapago $idFormaPago = null)
    {
        $this->idFormaPago = $idFormaPago;

        return $this;
    }

    /**
     * Get idFormaPago
     *
     * @return \RetiraentradaBundle\Entity\Formapago
     */
    public function getIdFormaPago()
    {
        return $this->idFormaPago;
    }
}


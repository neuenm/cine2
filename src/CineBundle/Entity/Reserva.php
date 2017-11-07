<?php

namespace CineBundle\Entity;

/**
 * Reserva
 */
class Reserva
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $cantidad;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var \CineBundle\Entity\Funcion
     */
    private $idFuncion;

    /**
     * @var \CineBundle\Entity\Pago
     */
    private $idPago;

    /**
     * @var \CineBundle\Entity\User
     */
    private $idUser;


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
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Reserva
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Reserva
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
     * Set idFuncion
     *
     * @param \CineBundle\Entity\Funcion $idFuncion
     *
     * @return Reserva
     */
    public function setIdFuncion(\CineBundle\Entity\Funcion $idFuncion = null)
    {
        $this->idFuncion = $idFuncion;

        return $this;
    }

    /**
     * Get idFuncion
     *
     * @return \CineBundle\Entity\Funcion
     */
    public function getIdFuncion()
    {
        return $this->idFuncion;
    }

    /**
     * Set idPago
     *
     * @param \CineBundle\Entity\Pago $idPago
     *
     * @return Reserva
     */
    public function setIdPago(\CineBundle\Entity\Pago $idPago = null)
    {
        $this->idPago = $idPago;

        return $this;
    }

    /**
     * Get idPago
     *
     * @return \CineBundle\Entity\Pago
     */
    public function getIdPago()
    {
        return $this->idPago;
    }

    /**
     * Set idUser
     *
     * @param \CineBundle\Entity\User $idUser
     *
     * @return Reserva
     */
    public function setIdUser(\CineBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \CineBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
    /**
     * @var string
     */
    private $codigo;


    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Reserva
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}
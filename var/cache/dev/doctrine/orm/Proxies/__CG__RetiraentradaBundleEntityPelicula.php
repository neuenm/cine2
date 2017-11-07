<?php

namespace Proxies\__CG__\RetiraentradaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Pelicula extends \RetiraentradaBundle\Entity\Pelicula implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'RetiraentradaBundle\\Entity\\Pelicula' . "\0" . 'id', '' . "\0" . 'RetiraentradaBundle\\Entity\\Pelicula' . "\0" . 'nombre', '' . "\0" . 'RetiraentradaBundle\\Entity\\Pelicula' . "\0" . 'duracion', '' . "\0" . 'RetiraentradaBundle\\Entity\\Pelicula' . "\0" . 'fechaEstreno', '' . "\0" . 'RetiraentradaBundle\\Entity\\Pelicula' . "\0" . 'estado', '' . "\0" . 'RetiraentradaBundle\\Entity\\Pelicula' . "\0" . 'imagen', '' . "\0" . 'RetiraentradaBundle\\Entity\\Pelicula' . "\0" . 'sinopsis', '' . "\0" . 'RetiraentradaBundle\\Entity\\Pelicula' . "\0" . 'idGenero'];
        }

        return ['__isInitialized__', '' . "\0" . 'RetiraentradaBundle\\Entity\\Pelicula' . "\0" . 'id', '' . "\0" . 'RetiraentradaBundle\\Entity\\Pelicula' . "\0" . 'nombre', '' . "\0" . 'RetiraentradaBundle\\Entity\\Pelicula' . "\0" . 'duracion', '' . "\0" . 'RetiraentradaBundle\\Entity\\Pelicula' . "\0" . 'fechaEstreno', '' . "\0" . 'RetiraentradaBundle\\Entity\\Pelicula' . "\0" . 'estado', '' . "\0" . 'RetiraentradaBundle\\Entity\\Pelicula' . "\0" . 'imagen', '' . "\0" . 'RetiraentradaBundle\\Entity\\Pelicula' . "\0" . 'sinopsis', '' . "\0" . 'RetiraentradaBundle\\Entity\\Pelicula' . "\0" . 'idGenero'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Pelicula $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuracion($duracion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuracion', [$duracion]);

        return parent::setDuracion($duracion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuracion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuracion', []);

        return parent::getDuracion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaEstreno($fechaEstreno)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaEstreno', [$fechaEstreno]);

        return parent::setFechaEstreno($fechaEstreno);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaEstreno()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaEstreno', []);

        return parent::getFechaEstreno();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', [$estado]);

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', []);

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setImagen($imagen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagen', [$imagen]);

        return parent::setImagen($imagen);
    }

    /**
     * {@inheritDoc}
     */
    public function getImagen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagen', []);

        return parent::getImagen();
    }

    /**
     * {@inheritDoc}
     */
    public function setSinopsis($sinopsis)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSinopsis', [$sinopsis]);

        return parent::setSinopsis($sinopsis);
    }

    /**
     * {@inheritDoc}
     */
    public function getSinopsis()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSinopsis', []);

        return parent::getSinopsis();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdGenero(\RetiraentradaBundle\Entity\Genero $idGenero = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdGenero', [$idGenero]);

        return parent::setIdGenero($idGenero);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdGenero()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdGenero', []);

        return parent::getIdGenero();
    }

}
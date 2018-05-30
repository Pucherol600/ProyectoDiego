<?php

class Viaje{
	private $id;
	private $titulo;
	private $provincia;
	private $lugar;
	private $vehiculo;
	private $resumen;
	private $historia;
	private $fecha;







// GETTERS Y SETTERS 
	
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     *
     * @return self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * @param mixed $provincia
     *
     * @return self
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * @param mixed $lugar
     *
     * @return self
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVehiculo()
    {
        return $this->vehiculo;
    }

    /**
     * @param mixed $vehiculo
     *
     * @return self
     */
    public function setVehiculo($vehiculo)
    {
        $this->vehiculo = $vehiculo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * @param mixed $resumen
     *
     * @return self
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHistoria()
    {
        return $this->historia;
    }

    /**
     * @param mixed $historia
     *
     * @return self
     */
    public function setHistoria($historia)
    {
        $this->historia = $historia;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     *
     * @return self
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }
}

?>
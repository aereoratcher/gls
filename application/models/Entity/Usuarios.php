<?php

namespace Entity;

#use Doctrine\Mapping as ORM;

/**
 * Usuarios
 *
 * @Table(name="usuarios")
 * @Entity
 */
class Usuarios
{
    /**
     * @var integer
     *
     * @Column(name="id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;





  



    /**
     * Gets the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param integer $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Sets the value of nombre.
     *
     * @param string $nombre the nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
}


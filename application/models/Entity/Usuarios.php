<?php
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
     * @Column(name="id", type="integer", nullable=false)
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


}


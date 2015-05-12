<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Loader extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->library('doctrine');
        $em = $this->doctrine->em;

        #$user = new Entity\Usuarios;
        #$user->setNombre('Matías');
        #$em->persist($user);
        #$em->flush();

        #echo "<pre>";
        #print_r( $em->getConnection()->getSchemaManager()->listTables() );

        $rec = $em->getRepository("Entity\Usuarios")->findAll();
        $rec2 = $em->getRepository("Entity\Usuarios")->findByNombre('camila');
        echo "<pre>"; print_r($rec2);
        echo "<pre>";print_r(get_class_methods($em->getRepository("Entity\Usuarios")));

        $this->layout->view('index');
    }
}
        
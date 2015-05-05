<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Loader extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $em = $this->doctrine->getEntityManager();


        /*$this->load->model('usuarios');
        $this->usuarios->setNombre('tara');

        $em->persist($this->usuarios);
        $em->flush();

        echo "creado usuario con id ".$this->usuarios->getId();
    */
        $this->layout->view('index');
    }
}
        
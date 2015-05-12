<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Loader extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->library('doctrine');
        $this->layout->view('index');
        $em = $this->doctrine->em;

        $user = new Entity\Usuarios;

        $user->setNombre('Rodrigo');
        $em->persist($user);
        $em->flush();
    }
}
        
<?php
namespace ism\controllers;

use ism\lib\Request;
use ism\lib\Response;
use ism\models\AnnuaireModel;
use ism\lib\AbstractModel;
use ism\lib\AbstractController;

class HomeController extends AbstractController {

    // private AbstractModel $model;
    public function __construct(){
        parent::__construct();
        // $this->model= new AnnuaireModel();
    }

    public function accueil(){
        // $data= $this->model->selectAll();
        $this->render("home/index");
    }

    public function listercomptes(){
        $this->render("home/show-compte");
    }

    public function ajoutercompte(){
        $this->render("home/add-compte");
    }

    public function fairedepot(){
        $this->render("home/depot");
    }
    public function faireretrait(){
        $this->render("home/retrait");
    }
    public function faireconsultation(){
        $this->render("home/consultation");
    }
    public function fairevirement(){
        $this->render("home/virement");
    }
    public function listeroperationcompte(){
        $this->render("home/show-operations-compte");
    }
}

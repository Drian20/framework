<?php

class Dashboard extends Controller {

    protected $model;
    protected $view;

    function __construct($params) {
        parent::__construct($params);
        $this->model = new mDashboard();
        $this->view = new vDashboard();
    }

    function home() {
        
    }

    function insert_user() {

        if (!empty($_POST['username'])) {
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
            $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING);
            $rol = filter_input(INPUT_POST, 'rol', FILTER_SANITIZE_STRING);
            $user = $this->model->insert_user($username, $name, $lastname, $password, $email, $country, $rol);
        }
    }

    function update_user() {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING);
        $rol = filter_input(INPUT_POST, 'rol', FILTER_SANITIZE_STRING);
        $user = $this->model->update_user($username, $name, $lastname, $password, $email, $country, $rol);
    }

    function delete_user() {

        if (!empty($_POST['username'])) {
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $user = $this->model->delete_user($username);
        }
    }

    function logout() {
        Session::destroy();
        $this->json_out(array('redirect' => APP_W . 'login'));
    }

}

<?php
  /*
   * This is the base controller. This loads the models and views
   */
  class Controller {
    // Load Model
    public function model($model){
      // Require model file
      require_once '../app/models/' . $model . '.php';

      //Instantiate model

      return new $model();
    }

    // Load View
    public function view($view, $data = []) {

      //Check for view file
      if(file_exists('../app/views/' . $view . '.php')){
        //Require View file
          require_once '../app/views/' . $view . '.php';
      } else {
        // View Does not exist
         die('View Does not Exist');
      }

    }
  }
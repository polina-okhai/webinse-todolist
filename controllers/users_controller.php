<?php


  class UsersController
  {
    public function index()
    {
      echo file_get_contents('views/index.html');
      // echo 'index';
    }
    public function show()
    {
      echo 'show';
    }
    public function new()
    {
      echo file_get_contents('views/new.html');
    }
    public function create()
    {
      echo 'create';
    }
    public function edit()
    {
      echo file_get_contents('views/edit.html');
    }
    public function update()
    {
      echo 'update';
    }
    public function destroy()
    {
      echo 'destroy';
    }
  }
 ?>

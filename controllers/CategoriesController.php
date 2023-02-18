<?php

include_once('./models/modelCategories.php');

class CategoriesController
{
    private $model;

    public function __construct()
    {
        $this->model = new CategoriesModel;
    }

    public function getCategories()
    {
        return $this->model->getCategories();
    }
}

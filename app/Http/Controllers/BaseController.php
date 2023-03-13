<?php

namespace App\Http\Controllers;


class BaseController extends Controller {
    public $data;

    public function __construct() {
        $this->data = $this->getData();
    }
    private function getData(array $result = []) {
        $result = [];
        return $result;
    }
}

<?php
App::uses('AppController', 'Controller');

class SamplesController extends AppController {
  public function index() {
    $this->autoLayout = false;  // レイアウトをOFFにする
    $this->set("sampleText","サンプルページです。");
  }

  public function sampleLayout() {
        $this->layout='sampleLayout';
  }
}
?>
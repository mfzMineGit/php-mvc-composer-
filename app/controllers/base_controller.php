<?php
// controller/democontroller.php
 //class DemoController
 //{
//     public function index()
//     {
//     echo 'hello world';
//     }
// }// End of the class DemoController
 // End of file democontroller.php
// controller/democontroller.php
namespace app\controllers;
use Pheasant;
use Latte\Engine;

class base_controller
{
    private $latte;
    public function __construct()
    {
        $this->initdb();
        $this->initTpl();
    }
    public function initdb(){
        Pheasant::setup('mysql://root:123456@localhost:3306/mvc');
    }
    public function initTpl()
    {
        $this->latte = new Engine();
        $this->latte->setTempDirectory(APP_ROOT . '/storage/views');
        $set = new \Latte\Macros\MacroSet($this->latte->getCompiler());
        $set->addMacro('url', function ($node, $writer) {
            return $writer->write('echo "' . SITE_URL . '%node.args' . '"');
        });
    }
    public function render($name, array $params = [], $block = NULL)
    {
        $tplFile = APP_ROOT . '/views/' . $name . '.latte';
        $this->latte->render($tplFile, $params, $block);
    }

    public function redirect($name)
    {
        header('Location:' . SITE_URL . '/' . $name);
        exit;
    }

}// End of the class DemoController
 // End of file democontroller.php


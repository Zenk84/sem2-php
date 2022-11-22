<?php

class Demo
{
    public function getName()
    {
        $this->checkName();
        echo 'Demo 1', PHP_EOL;
    }

    public function checkName() {
        echo 'Check 1', PHP_EOL;
    }
}

class DemoA extends Demo
{
    public function getName() {
        self::checkName();
        echo 'Demo A', PHP_EOL;
    }

    public function checkName() {
        echo 'Check A', PHP_EOL;
    }

    public function showName() {
        $this->checkName();
        echo 'Show Name DemoA';
    }
}

class DemoB extends DemoA
{
    public function getName() {
        $this->checkName();
        echo 'Demo B', PHP_EOL;
    }

    public function checkName() {
        echo 'Check B', PHP_EOL;
    }

    public function show1() {
        $this->showName();
    }
    public function show2() {
        parent::getName();
    }
}

$demo = new DemoB();
$demo->show1();
echo PHP_EOL, '------', PHP_EOL;
$demo->show2();
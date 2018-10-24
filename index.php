<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class Complex {

            private $a = 3;
            private $b = 5;
            private $c = 1;
            private $d = 8;
            private $sum;
            
            function __construct(float $a, float $b, float $c, float $d) {
                $this->a = $a;
                $this->b = $b;
                $this->c = $c;
                $this->d = $d;
            }

            function getA() {
                return $this->a;
            }

            function getB() {
                return $this->b;
            }

            function getC() {
                return $this->c;
            }

            function getD() {
                return $this->d;
            }

            function setA($a) {
                $this->a = $a;
            }

            function setB($b) {
                $this->b = $b;
            }

            function setC($c) {
                $this->c = $c;
            }

            function setD($d) {
                $this->d = $d;
            }
            
            function Sum(float $a, float $b, float $c, float $d) {
               $this->sum = ($a + $c) + ($b + $d);
               echo $this->sum;
            }
            
           
        }
        $f = new Complex();
        $f -> Sum($a, $b, $c, $d);
        ?>
    </body>
</html>

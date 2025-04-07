<?php
    class Calculator{
        public $num1;
        public $num2;
        public $operator;
        public $result;

        public function setNumbers($num1, $num2){
            $this->num1 = $num1;
            $this->num2 = $num2;
        }

        public function add($num1, $num2){
            $this->result = $num1 + $num2;
            return $this->result;
        }
        public function subtract($num1, $num2){
            $this->result = $num1 - $num2;
            return $this->result;
        }
        public function multiply($num1, $num2){
            $this->result = $num1 * $num2;
            return $this->result;
        }
        public function divide($num1, $num2){
            if ($num2 != 0) {
                $this->result = $num1 / $num2;
                return $this->result;
            } else {
                return "Error: Division by zero is not allowed.";
            }
        }

        public function getResult(){
            return $this->result;
        }

        public function getNum1(){
            return $this->num1;
        }
        public function getNum2(){
            return $this->num2;
        }

    }

    /*---------------Object 1--------------- */

    echo "<h1>Calculator 1</h1>";

    $calculator1 = new Calculator();
    $calculator1->setNumbers(1000, 500);
    $num1 = $calculator1->getNum1();
    $num2 = $calculator1->getNum2();
    $result = $calculator1->add($num1, $num2);
    echo "Number_1 = $num1 <br>Number_2 = $num2<br>";
    echo "Result: $num1 + $num2 = $result<br>";
    $result = $calculator1->subtract($num1, $num2);
    echo "Result: $num1 - $num2 = $result<br>";
    $result = $calculator1->multiply($num1, $num2);
    echo "Result: $num1 * $num2 = $result<br>"; 
    $result = $calculator1->divide($num1, $num2);
    echo "Result: $num1 / $num2 = $result<br>";
   
    echo "<hr>";
    /*---------------Object 2--------------- */

    echo "<h1>Calculator 2</h1>";

    $calculator2 = new Calculator();
    $calculator2->setNumbers(1000, 0);
    $num1 = $calculator2->getNum1();
    $num2 = $calculator2->getNum2();
    $result = $calculator2->add($num1, $num2);
    echo "Number_1 = $num1 <br>Number_2 = $num2<br>";
    echo "Result: $num1 + $num2 = $result<br>";
    $result = $calculator2->subtract($num1, $num2);
    echo "Result: $num1 - $num2 = $result<br>";
    $result = $calculator2->multiply($num1, $num2);
    echo "Result: $num1 * $num2 = $result<br>";
    $result = $calculator2->divide($num1, $num2);
    echo "Result: $num1 / $num2 = $result<br>";
    echo "<hr>";

    /*---------------Object 3--------------- */

    echo "<h1>Calculator 3</h1>";

    $calculator3 = new Calculator();
    $calculator3->setNumbers(1000, 500);   
    $num1 = $calculator3->getNum1();
    $num2 = $calculator3->getNum2();
    $result = $calculator3->add($num1, $num2);
    echo "Number_1 = $num1 <br>Number_2 = $num2<br>";
    echo "Result: $num1 + $num2 = $result<br>";
    $result = $calculator3->subtract($num1, $num2);
    echo "Result: $num1 - $num2 = $result<br>";
    $result = $calculator3->multiply($num1, $num2);
    echo "Result: $num1 * $num2 = $result<br>";
    $result = $calculator3->divide($num1, $num2);
    echo "Result: $num1 / $num2 = $result<br>";

    echo "<hr>";

    /*---------------Object 4--------------- */

    echo "<h1>Calculator 4</h1>";

    $calculator4 = new Calculator();
    $calculator4->setNumbers(700, 300);
    $num1 = $calculator4->getNum1();
    $num2 = $calculator4->getNum2();
    $result = $calculator4->add($num1, $num2);
    echo "Number_1 = $num1 <br>Number_2 = $num2<br>";
    echo "Result: $num1 + $num2 = $result<br>";
    $result = $calculator4->subtract($num1, $num2);
    echo "Result: $num1 - $num2 = $result<br>";
    $result = $calculator4->multiply($num1, $num2);
    echo "Result: $num1 * $num2 = $result<br>";
    $result = $calculator4->divide($num1, $num2);
    echo "Result: $num1 / $num2 = $result<br>";
    echo "<hr>";



?>
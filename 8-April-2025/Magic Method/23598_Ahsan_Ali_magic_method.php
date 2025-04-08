<?php

class MagicMethod {

    private $property1 = "I am property 1";
    public $property2 = "I am property 2";

    public function __get($name) {
        echo "Getting $name <br>";
        return $this->$name;
    }

    public function __set($name, $value) {
        echo "Setting $name to $value <br>";
        $this->$name = $value;
    }

    public function __isset($name) {
        echo "Is $name set? <br>";
        return isset($this->$name);
    }

    public function __unset($name) {
        echo "Unsetting $name <br>";
        unset($this->$name);
    }

    public function __toString() {
        return "This is a MagicMethod of toString() <br>";
    }

    public function __invoke() {
        echo "Invoke Function called <br>";
    }

    public function __sleep() {
        echo "Serializing object <br>";
        return array('property1', 'property2');
    }

    public function __wakeup() {
        echo "Unserializing object <br>";
    }
}
    
   
    $magic = new MagicMethod();
    
    // __set()
    echo "<h1>__set()</h1><hr>";
    $magic->property1 = "New value for property 1";


    // __get()
    echo "<hr><h1>__get()</h1><hr>";
    echo $magic->property1;
    echo "<br>";

    // __isset()
    echo "<hr><h1>__isset()</h1><hr>";
    if(isset($magic->property1)){
       echo "TRUE";
    }else{
       echo "FALSE";
    }

    echo "<br>";

    // __unset()
    echo "<hr><h1>__unset()</h1><hr>";
    unset($magic->property2);
    echo "<br>";

    if(isset($magic->property2)){
        echo "TRUE";
     }else{
        echo "FALSE";
     }

    echo "<br>";

    // __toString()
    echo "<hr><h1>__toString()</h1><hr>";
    echo $magic;
    echo "<br>";
    
    // __invoke()
    echo "<hr><h1>__invoke()</h1><hr>";
    $magic();

    $magic->property2 = "Property 2 Value";

    // __sleep()
    echo "<hr><h1>__sleep()</h1><hr>";
    $serialized = serialize($magic);
    echo "<pre>";
    print_r($serialized);
    echo "</pre>";
    echo "<br>";

    // __wakeup()
    echo "<hr><h1>__wakeup()</h1><hr>";
    $unserialized = unserialize($serialized);
    echo "<pre>";
    print_r($unserialized);
    echo "</pre>";

?>

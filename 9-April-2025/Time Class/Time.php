<?php
    class Time{
        private $hour = 0;
        private $minute = 0;
        private $second = 0;

    public function __construct($hour, $minute, $second){
            if(($hour >= 0 && $hour < 24 ) && ($minute >= 0 && $minute < 60) && ($second >= 0 && $second < 60)){
                $this->hour    = $hour;
                $this->minute  = $minute;
                $this->second  = $second;
            }else{
                echo "Error!: write data in hour (0-23), minute (0-59) and second (0-59), format";
            }
    }

    public function getHour(){
        return $this->hour;
    }
    
    public function getMinute(){
        return $this->minute;
    }
    
    public function getSecond(){
        return $this->second;
    }

    public function setHour($hour){
        $this->hour = $hour;
    }
    
    public function setMinute($minute){
        $this->minute = $minute;
    }
    
    public function setSecond($second){
        $this->second = $second;
    }

    public function setTime($hour, $minute, $second){
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }

    public function print(){
    return "Time: " .
        ($this->getHour()   < 10 ? "0" . $this->getHour()   : $this->getHour()) .":".
        ($this->getMinute() < 10 ? "0" . $this->getMinute() : $this->getMinute()) .":".
        ($this->getSecond() < 10 ? "0" . $this->getSecond() : $this->getSecond());
    }

    public function nextSecond() {
        $hour   = $this->getHour();
        $minute = $this->getMinute();
        $second = $this->getSecond();
    
        $second++;
    
        if ($second >= 60) {
            $second = 0;
            $minute++;
    
            if ($minute >= 60) {
                $minute = 0;
                $hour++;
    
                if ($hour >= 24) {
                    $hour = 0;
                }
            }
        }
    
        $this->setHour($hour);
        $this->setMinute($minute);
        $this->setSecond($second);
    
    }
}

    $time = new Time("0","0","0");  
    
    $time->setHour("23");
    $time->setMinute("59");
    $time->setSecond("59");
    echo $time->print()."<br />";
    $time->nextSecond();
    echo $time->print()."<br />";
    $time->nextSecond();
    echo $time->print();
?>

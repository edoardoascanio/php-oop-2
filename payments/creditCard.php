<?php

require_once(__DIR__ . "./payment.php");

class creditCard extends Payment {
    protected $number;
    protected $expiration;
    protected $cvv;

    function __construct($number, $expiration, $cvv) {

        $this->number = $number;
        $this->cvv = $cvv;

        $this->setExpiration($expiration);
    }

    public function setExpiration($value) {
        $exptime = strtotime($value);

        var_dump($exptime);
    }

}

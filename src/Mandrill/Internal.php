<?php

class Mandrill_Internal {
    private Mandrill $master;

    public function __construct(Mandrill $master) {
        $this->master = $master;
    }
}

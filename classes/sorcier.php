<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 12/12/2018
 * Time: 13:47
 */

class sorcier extends personnage {

    public function __construct()
    {
      parent::__construct();
        $this->x = 125;
        $this->y = 125;
    }
}
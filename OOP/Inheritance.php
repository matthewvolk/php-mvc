<?php

class Mother {
  public function getEyes() {
    return 2;
  }
}

class Child extends Mother {

}

(new Child)->getEyes();
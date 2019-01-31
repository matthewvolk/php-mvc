<?php

/**
 * LightSwitch is a good example of when to use encapsulation.
 * The user (public) only interfaces with the switch by turning
 * it on or off. However, there is some work that happens
 * under the hood to make the light switch work
 */
class LightSwitch {
 public function on() {

 }

 public function off() {

 }

 /**
  * Private vs. Protected
  * Private methods may ONLY be accessed from the parent class,
  * not from objects that extend the class
  */
 private function connect() {

 }
}
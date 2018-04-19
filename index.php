<?php

/**
 * Created by PhpStorm.
 * User: Gusli
 * Date: 4/19/2018
 * Time: 8:11 AM
 */
class Avian {
	protected $birdflu = 'Eww';
	protected $vaccination = 35.000;
	protected $hopesAndDreams = 0;

	public function getHopesAndDreams(): int {
		return ($this->hopesAndDreams);
		}
	public function getVaccination(): int {
		return ($this->vaccination);
	}
//	public function getBirdFlu();
////		if{ strlength $birdflu
}

$rex = new Avian();
echo $rex->getHopesAndDreams() . PHP_EOL;
echo $rex->getVaccination() . PHP_EOL;


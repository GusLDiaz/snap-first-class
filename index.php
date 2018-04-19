<?php
/**
 * Created by PhpStorm.
 * User: Gusli
 * Date: 4/19/2018
 * Time: 8:11 AM
 */
class Avian {
	protected $birdflu = 'Eww'
	protected $vaccination = 35.000;
	protected $hopesAndDreams=0;

	public function getBirdFlu(): str{}
		return ($this->birdflu);
	public function getVaccination(): int {
		return ($this->vaccination);
	}
}

$rex = new Avian();
echo $rex->getBirdFlu() .PHP_EOL;
echo $Felix->getBirdFlu()
-f

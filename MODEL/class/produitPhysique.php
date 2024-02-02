<?php
class ProduitPhysique extends Forme{
	private $type;

	function __construct($r,Point2D $centre){
		parent::__construct();
		$this->type=$r;
		$this->centre=$centre;
	}

	function surface(){
		return round(pow($this->rayon,2)*M_PI,2);
	}
//Source : www.exelib.net
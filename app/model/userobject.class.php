<?php 

namespace App\Model;

use Core\Component\Model\Object;

class UserObject extends Object {
	

	public function getGravatar($s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
	    $url = 'http://www.gravatar.com/avatar/';
	    $url .= md5( strtolower( trim( $this->get("mail") ) ) );
	    $url .= "?s=$s&d=$d&r=$r";
	    if ( $img ) {
	        $url = '<img src="' . $url . '"';
	        foreach ( $atts as $key => $val )
	            $url .= ' ' . $key . '="' . $val . '"';
	        $url .= ' />';
	    }
	    return $url;
	}

	public function get($attributName, $params = null) {
		return ($attributName=="title") ?
			$this->get("pseudo") : 
			parent::get($attributName, $params);
	}

	public function haveAccess($accessCode) {
		$res = false;
		foreach ($this->get("access") as $value) {
			if($value->get("title")==$accessCode) {
				$res = true;
				break;
			}
		}
		return $res;
	}
}
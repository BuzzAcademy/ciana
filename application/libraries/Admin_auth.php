<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Admin_auth
{
	public function is_authorized($func) {
		return true;
	}

}

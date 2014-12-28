<?php

//========================================================================
// MemHT Portal
// 
// Copyright (C) 2008-2012 by Miltenovikj Manojlo <dev@miltenovik.com>
// http://www.memht.com
// 
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your opinion) any later version.
// 
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
// 
// You should have received a copy of the GNU General Public License along
// with this program; if not, see <http://www.gnu.org/licenses/> (GPLv2)
// or write to the Free Software Foundation, Inc., 51 Franklin Street,
// Fifth Floor, Boston, MA02110-1301, USA.
//========================================================================

/**
 * @author      Miltenovikj Manojlo <dev@miltenovik.com>
 * @copyright	Copyright (C) 2008-2012 Miltenovikj Manojlo. All rights reserved.
 * @license     GNU/GPLv2 http://www.gnu.org/licenses/
 */

//Deny direct access
defined("_LOAD") or die("Access denied");

class userController extends userModel {
	public function index() {
		$this->Main();
	}
	
	public function social() {
		$this->SocialLogin();
	}
	
	public function login(){
		$this->LoginCheck();
	}
	
	public function logout(){
		$this->LoginDestroy();
	}
	
	public function register(){
		$this->RegisterForm();
	}
	
	public function activate(){
		$this->AccountActivation();
	}
	
	public function lostpass(){
		$this->ForgotPassword();
	}
	
	public function repass(){
		$this->ResetPassword();
	}
	
	public function info(){
		$this->UserInfo();
	}
	
	public function profile(){
		$this->ChangeProfile();
	}
	
	public function password(){
		$this->ChangePassword();
	}
}

?>
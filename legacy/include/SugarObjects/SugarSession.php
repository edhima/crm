<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * MintHCM is a Human Capital Management software based on SuiteCRM developed by MintHCM, 
 * Copyright (C) 2018-2023 MintHCM
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by SugarCRM" 
 * logo and "Supercharged by SuiteCRM" logo and "Reinvented by MintHCM" logo. 
 * If the display of the logos is not reasonably feasible for technical reasons, the 
 * Appropriate Legal Notices must display the words "Powered by SugarCRM" and 
 * "Supercharged by SuiteCRM" and "Reinvented by MintHCM".
 */


/**
 * Provide application specific logic to the session object.
 * @api
 */
class SugarSession{
	private static $_instance;
	public static $sessionId;

	/**
	 * When constructing the session object, be sure to check if the session_id() already exists as is the case of session.auto_start = 1
	 *
	 */
	public function __construct(){

	}

	public function setSessionId($sessionId){
		self::$sessionId = session_id($sessionId);
	}

	public function start(){
		$session_id = session_id();
		if(empty($session_id)){
			session_start();
			self::$sessionId = session_id();
		}else{
			self::$sessionId = $session_id;
		}
	}

	public static function getInstance(){
		if(!isset(self::$_instance)){
			$className = __CLASS__;
			self::$_instance = new $className();
		}

		return self::$_instance;
	}

	public function destroy(){
		foreach ($_SESSION as $var => $val) {
        	$_SESSION[$var] = null;
        }
		session_destroy();
	}

	public function __clone(){

	}

	public function __get($var){
		return (!empty($_SESSION[$var]) ? $_SESSION[$var] : '');
	}

	public function __set($var, $val){
		return ($_SESSION[$var] = $val);
	}

	public function __destruct(){
		session_write_close();
	}
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * This file is part of Auth_AD.

    Auth_AD is free software: you can redistribute it and/or modify
    it under the terms of the GNU Lesser General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Auth_AD is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Auth_AD.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */

/**
 * @package         Auth_AD
 * @subpackage      configuration
 * @author          Mark Kathmann <mark@stackedbits.com>
 * @version         0.4
 * @link            http://www.stackedbits.com/
 * @license         GNU Lesser General Public License (LGPL)
 * @copyright       Copyright © 2013 Mark Kathmann <mark@stackedbits.com>
 */

// hosts: an array of AD servers (usually domain controllers) to use for authentication		
$config['hosts'] = array('raffo.local');

// ports: an array containing the remote port number to connect to (default is 389) 
$config['ports'] = array(389);

// base_dn: the base DN of your Active Directory domain
//$config['base_dn'] = 'DC=mydomain,DC=local';
$config['base_dn'] = 'DC=raffo,DC=local';//"LDAP://DC=raffo,DC=local" (estandares)

// ad_domain: the domain name to prepend (versions prior to Windows 2000) or append (Windows 2000 and up)
//$config['ad_domain'] = 'mydomain.local';
$config['ad_domain'] = 'RAFFO';

// start_ou: the DN of the OU you want to start searching from. Leave empty to start from domain root.
// examples: 'OU=Users' or 'OU=Corporate,OU=Users'
$config['start_ou'] = 'OU=OU SJ';

// proxy_user: the (distinguished) username of the user that does the querying (AD generally does not allow anonymous binds) 
//$config['proxy_user'] = 'MyUser@mydomain.local';
$config['proxy_user'] = 'RAFFO\jarganaraz';

// proxy pass: the password for the proxy_user
//$config['proxy_pass'] = 'myPassword';
$config['proxy_pass'] = 'televisor30';

/* End of file auth_ad.php */
/* Location: ./application/config/auth_ad.php */

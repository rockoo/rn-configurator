<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* RN CodeIgniter Configurator Helper
*
* @package RN
* @author Rok Nemet
* @copyright Copyright (c) 2014
* @license http://www.opensource.org/licenses/mit-license.php
* @link http://roknemet.me
* @version v0.1
* @filesource
*
* @usage $autoload['helper'] = array('configurator');
* @example <?=configItem('parent.child'); ?>
*
*/


/**
 * Provides direct access to config items nested in arrays
 *
 * @access public
 * @param  string
 * @return string
 */
if ( ! function_exists('configItem'))
{
    function configItem($resource)
    {
        $tree = explode('.', $resource);

        // We set parent as default item here
        $conf = config_item($tree[0]);
        array_shift($tree);

        foreach($tree as $i)
        {
            $conf = $conf[$i];
        }

        return $conf;
    }   
}
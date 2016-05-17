<?php
// $Id: xoops_version.php 11970 2013-08-24 14:20:57Z beckmi $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
//	Hacks provided by: Adam Frick											 //
// 	e-mail: africk69@yahoo.com												 //
//	Purpose: Create a yellow-page like business directory for xoops using 	 //
//	the mylinks module as the foundation.									 //
// ------------------------------------------------------------------------- //
defined('XOOPS_ROOT_PATH') || exit('XOOPS root path not defined');

//$mydirname = $xoopsModule->getVar('dirname')
//2.2.x Change for dir discovery
$mydirname = basename(__DIR__);
if (!preg_match('/^(\D+)(\d*)$/', $mydirname)) {
    echo('invalid dirname: ' . htmlspecialchars($mydirname));
}

$modversion['name']        = _MI_MXDIR_NAME;
$modversion['version']     = 3.02;
$modversion['description'] = _MI_MXDIR_DESC;
$modversion['author']      = 'Tripmon, Zyspec & Mithy based on xDirectory by Adam Frick';
$modversion['credits']     = 'Kazumi Ono';
//$modversion['help'] = "xdir.html";
$modversion['help']        = 'page=help';
$modversion['license']     = 'GNU GPL 2.0 or later';
$modversion['license_url'] = 'www.gnu.org/licenses/gpl-2.0.html';
$modversion['official']    = 0;
$modversion['image']       = 'images/xdir_slogo.png';
$modversion['dirname']     = $mydirname;

$modversion['dirmoduleadmin'] = '/Frameworks/moduleclasses/moduleadmin';
$modversion['icons16']        = '../../Frameworks/moduleclasses/icons/16';
$modversion['icons32']        = '../../Frameworks/moduleclasses/icons/32';
//about
$modversion['release_date']        = '2013/08/02';
$modversion['module_website_url']  = 'www.xoops.org';
$modversion['module_website_name'] = 'XOOPS';
$modversion['module_status']       = 'Beta 1';
$modversion['min_php']             = '5.5';
$modversion['min_xoops']           = '2.5.8';
$modversion['min_admin']           = '1.1';
$modversion['min_db']              = array(
    'mysql'  => '5.0.7',
    'mysqli' => '5.0.7'
);

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
//$modversion['sqlfile']['postgresql'] = "sql/pgsql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = 'xdir_broken';
$modversion['tables'][1] = 'xdir_cat';
$modversion['tables'][2] = 'xdir_links';
$modversion['tables'][3] = 'xdir_mod';
$modversion['tables'][4] = 'xdir_text';
$modversion['tables'][5] = 'xdir_votedata';
$modversion['tables'][6] = 'xdir_coupon';

// Admin things
$modversion['hasAdmin']    = 1;
$modversion['system_menu'] = 1;
$modversion['adminindex']  = 'admin/index.php';
$modversion['adminmenu']   = 'admin/menu.php';

// Blocks
$modversion['blocks'][1]['file']        = 'xdir_top.php';
$modversion['blocks'][1]['name']        = _MI_MXDIR_BNAME1;
$modversion['blocks'][1]['description'] = _MI_MXDIR_BNAME1DSC;
$modversion['blocks'][1]['show_func']   = 'b_xdir_top_show';
$modversion['blocks'][1]['edit_func']   = 'b_xdir_top_edit';
$modversion['blocks'][1]['options']     = "date|10|25|{$mydirname}|1|All";
$modversion['blocks'][1]['template']    = 'xdir_block_new.html';

$modversion['blocks'][2]['file']        = 'xdir_top.php';
$modversion['blocks'][2]['name']        = _MI_MXDIR_BNAME2;
$modversion['blocks'][2]['description'] = _MI_MXDIR_BNAME2DSC;
$modversion['blocks'][2]['show_func']   = 'b_xdir_top_show';
$modversion['blocks'][2]['edit_func']   = 'b_xdir_top_edit';
$modversion['blocks'][2]['options']     = "hits|10|25|{$mydirname}|1|All";
$modversion['blocks'][2]['template']    = 'xdir_block_top.html';

$modversion['blocks'][3]['file']        = 'xdir_coup.php';
$modversion['blocks'][3]['name']        = _MI_MXDIR_BNAME3;
$modversion['blocks'][3]['description'] = _MI_MXDIR_BNAME3DSC;
$modversion['blocks'][3]['show_func']   = 'b_xdir_coup_show';
$modversion['blocks'][3]['edit_func']   = 'b_xdir_coup_edit';
$modversion['blocks'][3]['options']     = "text|10|25|{$mydirname}|1|All";
$modversion['blocks'][3]['template']    = 'xdir_block_exp.html';

$modversion['blocks'][4]['file']        = 'xdir_coup.php';
$modversion['blocks'][4]['name']        = _MI_MXDIR_BNAME4;
$modversion['blocks'][4]['description'] = _MI_MXDIR_BNAME4DSC;
$modversion['blocks'][4]['show_func']   = 'b_xdir_coup_show';
$modversion['blocks'][4]['edit_func']   = 'b_xdir_coup_edit';
$modversion['blocks'][4]['options']     = "image|10|25|{$mydirname}|1|All";
$modversion['blocks'][4]['template']    = 'xdir_block_pub.html';

$modversion['blocks'][5]['file']        = 'xdir_top.php';
$modversion['blocks'][5]['name']        = _MI_MXDIR_BNAME5;
$modversion['blocks'][5]['description'] = _MI_MXDIR_BNAME5DSC;
$modversion['blocks'][5]['show_func']   = 'b_xdir_top_show';
$modversion['blocks'][5]['edit_func']   = 'b_xdir_top_edit';
$modversion['blocks'][5]['options']     = "rand|10|25|{$mydirname}|1|All";
$modversion['blocks'][5]['template']    = 'xdir_block_rand.html';

$modversion['blocks'][6]['file']        = 'xdir_cats.php';
$modversion['blocks'][6]['name']        = _MI_MXDIR_BNAME6;
$modversion['blocks'][6]['description'] = _MI_MXDIR_BNAME6DSC;
$modversion['blocks'][6]['show_func']   = 'b_xdir_categories';
$modversion['blocks'][6]['edit_func']   = 'b_xdir_cat_edit';
$modversion['blocks'][6]['options']     = '0|0';
$modversion['blocks'][6]['template']    = 'xdir_block_cats.html';

$modversion['blocks'][7]['file']        = 'xdir_top.php';
$modversion['blocks'][7]['name']        = _MI_MXDIR_BNAME7;
$modversion['blocks'][7]['description'] = _MI_MXDIR_BNAME7DSC;
$modversion['blocks'][7]['show_func']   = 'b_xdir_top_show';
$modversion['blocks'][7]['edit_func']   = 'b_xdir_top_edit';
$modversion['blocks'][7]['options']     = "rank|10|25|{$mydirname}|1|All";
$modversion['blocks'][7]['template']    = 'xdir_block_rank.html';

// Menu
global $xoopsUser;
$modversion['hasMain'] = 1;
if ($xoopsUser) {
    $modversion['sub'][1]['name'] = _MI_MXDIR_SMNAME1;
    $modversion['sub'][1]['url']  = 'submit.php';
}
$modversion['sub'][2]['name'] = _MI_MXDIR_SMNAME2;
$modversion['sub'][2]['url']  = 'topten.php?hit=1';
$modversion['sub'][3]['name'] = _MI_MXDIR_SMNAME3;
$modversion['sub'][3]['url']  = 'topten.php?rate=1';
$modversion['sub'][4]['name'] = _MI_MXDIR_SMNAME4;
$modversion['sub'][4]['url']  = 'savings.php';
if ($xoopsUser) {
    $modversion['sub'][5]['name'] = _MI_MXDIR_SMNAME5;
    $modversion['sub'][5]['url']  = 'mylistings.php';
}

// Search
$modversion['hasSearch']      = 1;
$modversion['search']['file'] = 'include/search.inc.php';
$modversion['search']['func'] = 'xdir_search';

// Comments
$modversion['hasComments']             = 1;
$modversion['comments']['itemName']    = 'lid';
$modversion['comments']['pageName']    = 'singlelink.php';
$modversion['comments']['extraParams'] = array('cid');
// Comment callback functions
$modversion['comments']['callbackFile']        = 'include/comment_functions.php';
$modversion['comments']['callback']['approve'] = 'xdir_com_approve';
$modversion['comments']['callback']['update']  = 'xdir_com_update';

// Templates
$modversion['templates'][1]['file']         = 'xdir_listingfull.html';
$modversion['templates'][1]['description']  = _MI_MXDIR_LISTINGFULLDSC;
$modversion['templates'][2]['file']         = 'xdir_viewalpha.html';
$modversion['templates'][2]['description']  = _MI_MXDIR_VIEWALPHADSC;
$modversion['templates'][3]['file']         = 'xdir_brokenlink.html';
$modversion['templates'][3]['description']  = _MI_MXDIR_BROKENLINKDSC;
$modversion['templates'][4]['file']         = 'xdir_link.html';
$modversion['templates'][4]['description']  = _MI_MXDIR_LINKDSC;
$modversion['templates'][5]['file']         = 'xdir_index.html';
$modversion['templates'][5]['description']  = _MI_MXDIR_INDEXDSC;
$modversion['templates'][6]['file']         = 'xdir_ratelink.html';
$modversion['templates'][6]['description']  = _MI_MXDIR_RATELINKDSC;
$modversion['templates'][7]['file']         = 'xdir_singlelink.html';
$modversion['templates'][7]['description']  = _MI_MXDIR_SINGLELINKDSC;
$modversion['templates'][8]['file']         = 'xdir_topten.html';
$modversion['templates'][8]['description']  = _MI_MXDIR_TOPTENDSC;
$modversion['templates'][9]['file']         = 'xdir_viewcat.html';
$modversion['templates'][9]['description']  = _MI_MXDIR_VIEWCATDSC;
$modversion['templates'][10]['file']        = 'xdir_premiumlink.html';
$modversion['templates'][10]['description'] = _MI_MXDIR_PREMIUMLINKDSC;
$modversion['templates'][11]['file']        = 'xdir_print.html';
$modversion['templates'][11]['description'] = _MI_MXDIR_PRINTDSC;
$modversion['templates'][12]['file']        = 'xdir_savings.html';
$modversion['templates'][12]['description'] = _MI_MXDIR_SAVINGSDSC;
$modversion['templates'][13]['file']        = 'xdir_print_savings.html';
$modversion['templates'][13]['description'] = _MI_MXDIR_PRINT_SAVINGSDSC;
$modversion['templates'][14]['file']        = 'xdir_mylistings.html';
$modversion['templates'][14]['description'] = _MI_MXDIR_MYLISTINGS;
$modversion['templates'][15]['file']        = 'xdir_rss.html';
$modversion['templates'][15]['description'] = '';

// Config Settings (only for modules that need config settings generated automatically)

// name of config option for accessing its specified value. i.e. $xoopsModuleConfig['storyhome']
$modversion['config'][1]['name'] = 'popular';

// title of this config option displayed in config settings form
$modversion['config'][1]['title'] = '_MI_MXDIR_POPULAR';

// description of this config option displayed under title
$modversion['config'][1]['description'] = '_MI_MXDIR_POPULARDSC';

// form element type used in config form for this option. can be one of either textbox, textarea, select, select_multi, yesno, group, group_multi
$modversion['config'][1]['formtype'] = 'select';

// value type of this config option. can be one of either int, text, float, array, or other
// form type of 'group_multi', 'select_multi' must always be 'array'
// form type of 'yesno', 'group' must be always be 'int'
$modversion['config'][1]['valuetype'] = 'int';

// the default value for this option
// ignore it if no default
// 'yesno' formtype must be either 0(no) or 1(yes)
$modversion['config'][1]['default'] = 100;

// options to be displayed in selection box
// required and valid for 'select' or 'select_multi' formtype option only
// language constants can be used for both array keys and values
$modversion['config'][1]['options'] = array('5' => 5, '10' => 10, '50' => 50, '100' => 100, '200' => 200, '500' => 500, '1000' => 1000);

$modversion['config'][2]['name']        = 'newlinks';
$modversion['config'][2]['title']       = '_MI_MXDIR_NEWLINKS';
$modversion['config'][2]['description'] = '_MI_MXDIR_NEWLINKSDSC';
$modversion['config'][2]['formtype']    = 'select';
$modversion['config'][2]['valuetype']   = 'int';
$modversion['config'][2]['default']     = 10;
$modversion['config'][2]['options']     = array('5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50);

$modversion['config'][3]['name']        = 'perpage';
$modversion['config'][3]['title']       = '_MI_MXDIR_PERPAGE';
$modversion['config'][3]['description'] = '_MI_MXDIR_PERPAGEDSC';
$modversion['config'][3]['formtype']    = 'select';
$modversion['config'][3]['valuetype']   = 'int';
$modversion['config'][3]['default']     = 10;
$modversion['config'][3]['options']     = array('5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50);

$modversion['config'][4]['name']        = 'anonpost';
$modversion['config'][4]['title']       = '_MI_MXDIR_ANONPOST';
$modversion['config'][4]['description'] = '';
$modversion['config'][4]['formtype']    = 'yesno';
$modversion['config'][4]['valuetype']   = 'int';
$modversion['config'][4]['default']     = 0;

$modversion['config'][5]['name']        = 'autoapprove';
$modversion['config'][5]['title']       = '_MI_MXDIR_AUTOAPPROVE';
$modversion['config'][5]['description'] = '_MI_MXDIR_AUTOAPPROVEDSC';
$modversion['config'][5]['formtype']    = 'yesno';
$modversion['config'][5]['valuetype']   = 'int';
$modversion['config'][5]['default']     = 0;

$modversion['config'][6]['name']        = 'frame';
$modversion['config'][6]['title']       = '_MI_MXDIR_USEFRAMES';
$modversion['config'][6]['description'] = '_MI_MXDIR_USEFRAMEDSC';
$modversion['config'][6]['formtype']    = 'yesno';
$modversion['config'][6]['valuetype']   = 'int';
$modversion['config'][6]['default']     = 0;

$modversion['config'][7]['name']        = 'sponsor_active';
$modversion['config'][7]['title']       = '_MI_MXDIR_SPONSOR_ON';
$modversion['config'][7]['description'] = '_MI_MXDIR_SPONSOR_ONDSC';
$modversion['config'][7]['formtype']    = 'yesno';
$modversion['config'][7]['valuetype']   = 'int';
$modversion['config'][7]['default']     = 0;

$modversion['config'][8]['name']        = 'showmod';
$modversion['config'][8]['title']       = '_MI_MXDIR_SHOWMOD';
$modversion['config'][8]['description'] = '_MI_MXDIR_USEALPHADSC';
$modversion['config'][8]['formtype']    = 'yesno';
$modversion['config'][8]['valuetype']   = 'int';
$modversion['config'][8]['default']     = 1;

$modversion['config'][9]['name']        = 'usesearch';
$modversion['config'][9]['title']       = '_MI_MXDIR_USESEARCH';
$modversion['config'][9]['description'] = '_MI_MXDIR_USESEARCHDSC';
$modversion['config'][9]['formtype']    = 'yesno';
$modversion['config'][9]['valuetype']   = 'int';
$modversion['config'][9]['default']     = 1;

$modversion['config'][10]['name']        = 'usealpha';
$modversion['config'][10]['title']       = '_MI_MXDIR_USEALPHA';
$modversion['config'][10]['description'] = '_MI_MXDIR_USEALPHADSC';
$modversion['config'][10]['formtype']    = 'yesno';
$modversion['config'][10]['valuetype']   = 'int';
$modversion['config'][10]['default']     = 1;

$modversion['config'][11]['name']        = 'num_letters';
$modversion['config'][11]['title']       = '_MI_MXDIR_NUMLTRS';
$modversion['config'][11]['description'] = '_MI_MXDIR_NUMLTRSDSC';
$modversion['config'][11]['formtype']    = 'yesno';
$modversion['config'][11]['valuetype']   = 'int';
$modversion['config'][11]['default']     = 0;

$modversion['config'][12]['name']        = 'captcha_anon';
$modversion['config'][12]['title']       = '_MI_MXDIR_CAPTCHANON';
$modversion['config'][12]['description'] = '_MI_MXDIR_CAPTCHANONDSC';
$modversion['config'][12]['formtype']    = 'yesno';
$modversion['config'][12]['valuetype']   = 'int';
$modversion['config'][12]['default']     = 1;

$modversion['config'][13]['name']        = 'time_option';
$modversion['config'][13]['title']       = '_MI_MXDIR_CHOOSETIME';
$modversion['config'][13]['description'] = '_MI_MXDIR_CHOOSETIMEDESC';
$modversion['config'][13]['formtype']    = 'yesno';
$modversion['config'][13]['valuetype']   = 'int';
$modversion['config'][13]['default']     = 1;

$modversion['config'][14]['name']        = 'useshots';
$modversion['config'][14]['title']       = '_MI_MXDIR_USESHOTS';
$modversion['config'][14]['description'] = '_MI_MXDIR_USESHOTSDSC';
$modversion['config'][14]['formtype']    = 'yesno';
$modversion['config'][14]['valuetype']   = 'int';
$modversion['config'][14]['default']     = 0;

$modversion['config'][15]['name']        = 'logo_maxfilesize';
$modversion['config'][15]['title']       = '_MI_MXDIR_LOGOSIZE';
$modversion['config'][15]['description'] = '_MI_MXDIR_LOGOSIZEDSC';
$modversion['config'][15]['formtype']    = 'textbox';
$modversion['config'][15]['valuetype']   = 'text';
$modversion['config'][15]['default']     = '10000';

$modversion['config'][16]['name']        = 'logo_maximgwidth';
$modversion['config'][16]['title']       = '_MI_MXDIR_LOGOWIDTH';
$modversion['config'][16]['description'] = '_MI_MXDIR_LOGOWIDTHDSC';
$modversion['config'][16]['formtype']    = 'textbox';
$modversion['config'][16]['valuetype']   = 'text';
$modversion['config'][16]['default']     = '100';

$modversion['config'][17]['name']        = 'logo_maximgheight';
$modversion['config'][17]['title']       = '_MI_MXDIR_LOGOHEIGHT';
$modversion['config'][17]['description'] = '_MI_MXDIR_LOGOHEIGHTDSC';
$modversion['config'][17]['formtype']    = 'textbox';
$modversion['config'][17]['valuetype']   = 'text';
$modversion['config'][17]['default']     = '100';

$modversion['config'][18]['name']        = 'coupon_maxfilesize';
$modversion['config'][18]['title']       = '_MI_MXDIR_COUPSIZE';
$modversion['config'][18]['description'] = '_MI_MXDIR_COUPSIZEDSC';
$modversion['config'][18]['formtype']    = 'textbox';
$modversion['config'][18]['valuetype']   = 'text';
$modversion['config'][18]['default']     = '10000';

$modversion['config'][19]['name']        = 'coupon_maximgwidth';
$modversion['config'][19]['title']       = '_MI_MXDIR_COUPWIDTH';
$modversion['config'][19]['description'] = '_MI_MXDIR_COUPWIDTHDSC';
$modversion['config'][19]['formtype']    = 'textbox';
$modversion['config'][19]['valuetype']   = 'text';
$modversion['config'][19]['default']     = '100';

$modversion['config'][20]['name']        = 'coupon_maximgheight';
$modversion['config'][20]['title']       = '_MI_MXDIR_COUPHEIGHT';
$modversion['config'][20]['description'] = '_MI_MXDIR_COUPHEIGHTDSC';
$modversion['config'][20]['formtype']    = 'textbox';
$modversion['config'][20]['valuetype']   = 'text';
$modversion['config'][20]['default']     = '100';

$modversion['config'][21]['name']        = 'coupon_footer';
$modversion['config'][21]['title']       = '_MI_MXDIR_COUPON_FOOTER';
$modversion['config'][21]['description'] = '_MI_MXDIR_COUPON_FOOTERDESC';
$modversion['config'][21]['formtype']    = 'textbox';
$modversion['config'][21]['valuetype']   = 'text';
$modversion['config'][21]['default']     = 'More coupons and special offers available on ' . XOOPS_URL;

$modversion['config'][22]['name']        = 'premium_listing1';
$modversion['config'][22]['title']       = '_MI_MXDIR_PREMIUM1';
$modversion['config'][22]['description'] = '_MI_MXDIR_PREMIUM1DSC';
$modversion['config'][22]['formtype']    = 'textbox';
$modversion['config'][22]['valuetype']   = 'text';
$modversion['config'][22]['default']     = '' . _MI_MXDIR_PREMIUM1_DNAME . '';

$modversion['config'][23]['name']        = 'premium_listing1col';
$modversion['config'][23]['title']       = '_MI_MXDIR_PREMIUM1_COPT';
$modversion['config'][23]['description'] = '_MI_MXDIR_PREMDESC';
$modversion['config'][23]['formtype']    = 'textbox';
$modversion['config'][23]['valuetype']   = 'text';
$modversion['config'][23]['default']     = '#FFFFFF';

$modversion['config'][24]['name']        = 'premium_listing1opts';
$modversion['config'][24]['title']       = '_MI_MXDIR_PREMIUM1_OPTS';
$modversion['config'][24]['description'] = '_MI_MXDIR_PREMIUM1DSC_CON';
$modversion['config'][24]['formtype']    = 'select_multi';
$modversion['config'][24]['valuetype']   = 'array';
$modversion['config'][24]['default']     = array(_MI_MXDIR_PREMIUM_ON);
$modversion['config'][24]['options']     = array(
    '_MI_MXDIR_PREMIUM_ON'     => 1,
    '_MI_MXDIR_PREMIUM_UON'    => 11,
    '_MI_MXDIR_PREMIUM_SLLI'   => 2,
    '_MI_MXDIR_PREMIUM_SLSLI'  => 3,
    '_MI_MXDIR_PREMIUM_SLLF'   => 4,
    '_MI_MXDIR_PREMIUM_CALI'   => 5,
    '_MI_MXDIR_PREMIUM_CALF'   => 6,
    '_MI_MXDIR_PREMIUM_LOLI'   => 7,
    '_MI_MXDIR_PREMIUM_LOLF'   => 8,
    '_MI_MXDIR_PREMIUM_LLSLI'  => 9,
    '_MI_MXDIR_PREMIUM_LLCSLI' => 10
);

$modversion['config'][25]['name']        = 'premium_listing2';
$modversion['config'][25]['title']       = '_MI_MXDIR_PREMIUM2';
$modversion['config'][25]['description'] = '_MI_MXDIR_PREMIUM2DSC';
$modversion['config'][25]['formtype']    = 'textbox';
$modversion['config'][25]['valuetype']   = 'text';
$modversion['config'][25]['default']     = '' . _MI_MXDIR_PREMIUM2_DNAME . '';

$modversion['config'][26]['name']        = 'premium_listing2col';
$modversion['config'][26]['title']       = '_MI_MXDIR_PREMIUM2_COPT';
$modversion['config'][26]['description'] = '_MI_MXDIR_PREMDESC';
$modversion['config'][26]['formtype']    = 'textbox';
$modversion['config'][26]['valuetype']   = 'text';
$modversion['config'][26]['default']     = '#FFFFFF';

$modversion['config'][27]['name']        = 'premium_listing2opts';
$modversion['config'][27]['title']       = '_MI_MXDIR_PREMIUM2_OPTS';
$modversion['config'][27]['description'] = '_MI_MXDIR_PREMIUM1DSC_CON';
$modversion['config'][27]['formtype']    = 'select_multi';
$modversion['config'][27]['valuetype']   = 'array';
$modversion['config'][27]['options']     = array(
    '_MI_MXDIR_PREMIUM_ON'     => 1,
    '_MI_MXDIR_PREMIUM_UON'    => 11,
    '_MI_MXDIR_PREMIUM_SLLI'   => 2,
    '_MI_MXDIR_PREMIUM_SLSLI'  => 3,
    '_MI_MXDIR_PREMIUM_SLLF'   => 4,
    '_MI_MXDIR_PREMIUM_CALI'   => 5,
    '_MI_MXDIR_PREMIUM_CALF'   => 6,
    '_MI_MXDIR_PREMIUM_LOLI'   => 7,
    '_MI_MXDIR_PREMIUM_LOLF'   => 8,
    '_MI_MXDIR_PREMIUM_LLSLI'  => 9,
    '_MI_MXDIR_PREMIUM_LLCSLI' => 10
);

$modversion['config'][28]['name']        = 'premium_listing3';
$modversion['config'][28]['title']       = '_MI_MXDIR_PREMIUM3';
$modversion['config'][28]['description'] = '_MI_MXDIR_PREMIUM3DSC';
$modversion['config'][28]['formtype']    = 'textbox';
$modversion['config'][28]['valuetype']   = 'text';
$modversion['config'][28]['default']     = '' . _MI_MXDIR_PREMIUM3_DNAME . '';

$modversion['config'][29]['name']        = 'premium_listing3col';
$modversion['config'][29]['title']       = '_MI_MXDIR_PREMIUM3_COPT';
$modversion['config'][29]['description'] = '_MI_MXDIR_PREMDESC';
$modversion['config'][29]['formtype']    = 'textbox';
$modversion['config'][29]['valuetype']   = 'text';
$modversion['config'][29]['default']     = '#FFFFFF';

$modversion['config'][30]['name']        = 'premium_listing3opts';
$modversion['config'][30]['title']       = '_MI_MXDIR_PREMIUM3_OPTS';
$modversion['config'][30]['description'] = '_MI_MXDIR_PREMIUM3DSC_CON';
$modversion['config'][30]['formtype']    = 'select_multi';
$modversion['config'][30]['valuetype']   = 'array';
$modversion['config'][30]['options']     = array(
    '_MI_MXDIR_PREMIUM_ON'     => 1,
    '_MI_MXDIR_PREMIUM_UON'    => 11,
    '_MI_MXDIR_PREMIUM_SLLI'   => 2,
    '_MI_MXDIR_PREMIUM_SLSLI'  => 3,
    '_MI_MXDIR_PREMIUM_SLLF'   => 4,
    '_MI_MXDIR_PREMIUM_CALI'   => 5,
    '_MI_MXDIR_PREMIUM_CALF'   => 6,
    '_MI_MXDIR_PREMIUM_LOLI'   => 7,
    '_MI_MXDIR_PREMIUM_LOLF'   => 8,
    '_MI_MXDIR_PREMIUM_LLSLI'  => 9,
    '_MI_MXDIR_PREMIUM_LLCSLI' => 10
);

$modversion['config'][31]['name']        = 'premium_listing4 ';
$modversion['config'][31]['title']       = '_MI_MXDIR_PREMIUM4';
$modversion['config'][31]['description'] = '_MI_MXDIR_PREMIUM4DSC';
$modversion['config'][31]['formtype']    = 'textbox';
$modversion['config'][31]['valuetype']   = 'text';
$modversion['config'][31]['default']     = '' . _MI_MXDIR_PREMIUM4_DNAME . '';

$modversion['config'][32]['name']        = 'premium_listing4col';
$modversion['config'][32]['title']       = '_MI_MXDIR_PREMIUM4_COPT';
$modversion['config'][32]['description'] = '_MI_MXDIR_PREMDESC';
$modversion['config'][32]['formtype']    = 'textbox';
$modversion['config'][32]['valuetype']   = 'text';
$modversion['config'][32]['default']     = '#FFFFFF';

$modversion['config'][33]['name']        = 'premium_listing4opts';
$modversion['config'][33]['title']       = '_MI_MXDIR_PREMIUM4_OPTS';
$modversion['config'][33]['description'] = '_MI_MXDIR_PREMIUM1DSC_CON';
$modversion['config'][33]['formtype']    = 'select_multi';
$modversion['config'][33]['valuetype']   = 'array';
$modversion['config'][33]['options']     = array(
    '_MI_MXDIR_PREMIUM_ON'     => 1,
    '_MI_MXDIR_PREMIUM_UON'    => 11,
    '_MI_MXDIR_PREMIUM_SLLI'   => 2,
    '_MI_MXDIR_PREMIUM_SLSLI'  => 3,
    '_MI_MXDIR_PREMIUM_SLLF'   => 4,
    '_MI_MXDIR_PREMIUM_CALI'   => 5,
    '_MI_MXDIR_PREMIUM_CALF'   => 6,
    '_MI_MXDIR_PREMIUM_LOLI'   => 7,
    '_MI_MXDIR_PREMIUM_LOLF'   => 8,
    '_MI_MXDIR_PREMIUM_LLSLI'  => 9,
    '_MI_MXDIR_PREMIUM_LLCSLI' => 10
);

$modversion['config'][34]['name']        = 'premium_listing5';
$modversion['config'][34]['title']       = '_MI_MXDIR_PREMIUM5';
$modversion['config'][34]['description'] = '_MI_MXDIR_PREMIUM5DSC';
$modversion['config'][34]['formtype']    = 'textbox';
$modversion['config'][34]['valuetype']   = 'text';
$modversion['config'][34]['default']     = '' . _MI_MXDIR_PREMIUM5_DNAME . '';

$modversion['config'][35]['name']        = 'premium_listing5col';
$modversion['config'][35]['title']       = '_MI_MXDIR_PREMIUM5_COPT';
$modversion['config'][35]['description'] = '_MI_MXDIR_PREMDESC';
$modversion['config'][35]['formtype']    = 'textbox';
$modversion['config'][35]['valuetype']   = 'text';
$modversion['config'][35]['default']     = '#FFFFFF';

$modversion['config'][36]['name']        = 'premium_listing5opts';
$modversion['config'][36]['title']       = '_MI_MXDIR_PREMIUM5_OPTS';
$modversion['config'][36]['description'] = '_MI_MXDIR_PREMIUM1DSC_CON';
$modversion['config'][36]['formtype']    = 'select_multi';
$modversion['config'][36]['valuetype']   = 'array';
$modversion['config'][36]['options']     = array(
    '_MI_MXDIR_PREMIUM_ON'     => 1,
    '_MI_MXDIR_PREMIUM_UON'    => 11,
    '_MI_MXDIR_PREMIUM_SLLI'   => 2,
    '_MI_MXDIR_PREMIUM_SLSLI'  => 3,
    '_MI_MXDIR_PREMIUM_SLLF'   => 4,
    '_MI_MXDIR_PREMIUM_CALI'   => 5,
    '_MI_MXDIR_PREMIUM_CALF'   => 6,
    '_MI_MXDIR_PREMIUM_LOLI'   => 7,
    '_MI_MXDIR_PREMIUM_LOLF'   => 8,
    '_MI_MXDIR_PREMIUM_LLSLI'  => 9,
    '_MI_MXDIR_PREMIUM_LLCSLI' => 10
);

// Notification

$modversion['hasNotification']             = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'xdir_notify_iteminfo';

$modversion['notification']['category'][1]['name']           = 'global';
$modversion['notification']['category'][1]['title']          = _MI_MXDIR_GLOBAL_NOTIFY;
$modversion['notification']['category'][1]['description']    = _MI_MXDIR_GLOBAL_NOTIFYDSC;
$modversion['notification']['category'][1]['subscribe_from'] = array('index.php', 'viewcat.php', 'singlelink.php');

$modversion['notification']['category'][2]['name']           = 'category';
$modversion['notification']['category'][2]['title']          = _MI_MXDIR_CATEGORY_NOTIFY;
$modversion['notification']['category'][2]['description']    = _MI_MXDIR_CATEGORY_NOTIFYDSC;
$modversion['notification']['category'][2]['subscribe_from'] = array('viewcat.php', 'singlelink.php');
$modversion['notification']['category'][2]['item_name']      = 'cid';
$modversion['notification']['category'][2]['allow_bookmark'] = 1;

$modversion['notification']['category'][3]['name']           = 'link';
$modversion['notification']['category'][3]['title']          = _MI_MXDIR_LINK_NOTIFY;
$modversion['notification']['category'][3]['description']    = _MI_MXDIR_LINK_NOTIFYDSC;
$modversion['notification']['category'][3]['subscribe_from'] = 'singlelink.php';
$modversion['notification']['category'][3]['item_name']      = 'lid';
$modversion['notification']['category'][3]['allow_bookmark'] = 1;

$modversion['notification']['event'][1]['name']          = 'new_category';
$modversion['notification']['event'][1]['category']      = 'global';
$modversion['notification']['event'][1]['title']         = _MI_MXDIR_GLOBAL_NEWCATEGORY_NOTIFY;
$modversion['notification']['event'][1]['caption']       = _MI_MXDIR_GLOBAL_NEWCATEGORY_NOTIFYCAP;
$modversion['notification']['event'][1]['description']   = _MI_MXDIR_GLOBAL_NEWCATEGORY_NOTIFYDSC;
$modversion['notification']['event'][1]['mail_template'] = 'global_newcategory_notify';
$modversion['notification']['event'][1]['mail_subject']  = _MI_MXDIR_GLOBAL_NEWCATEGORY_NOTIFYSBJ;

$modversion['notification']['event'][2]['name']          = 'link_modify';
$modversion['notification']['event'][2]['category']      = 'global';
$modversion['notification']['event'][2]['admin_only']    = 1;
$modversion['notification']['event'][2]['title']         = _MI_MXDIR_GLOBAL_LINKMODIFY_NOTIFY;
$modversion['notification']['event'][2]['caption']       = _MI_MXDIR_GLOBAL_LINKMODIFY_NOTIFYCAP;
$modversion['notification']['event'][2]['description']   = _MI_MXDIR_GLOBAL_LINKMODIFY_NOTIFYDSC;
$modversion['notification']['event'][2]['mail_template'] = 'global_linkmodify_notify';
$modversion['notification']['event'][2]['mail_subject']  = _MI_MXDIR_GLOBAL_LINKMODIFY_NOTIFYSBJ;

$modversion['notification']['event'][3]['name']          = 'link_broken';
$modversion['notification']['event'][3]['category']      = 'global';
$modversion['notification']['event'][3]['admin_only']    = 1;
$modversion['notification']['event'][3]['title']         = _MI_MXDIR_GLOBAL_LINKBROKEN_NOTIFY;
$modversion['notification']['event'][3]['caption']       = _MI_MXDIR_GLOBAL_LINKBROKEN_NOTIFYCAP;
$modversion['notification']['event'][3]['description']   = _MI_MXDIR_GLOBAL_LINKBROKEN_NOTIFYDSC;
$modversion['notification']['event'][3]['mail_template'] = 'global_linkbroken_notify';
$modversion['notification']['event'][3]['mail_subject']  = _MI_MXDIR_GLOBAL_LINKBROKEN_NOTIFYSBJ;

$modversion['notification']['event'][4]['name']          = 'link_submit';
$modversion['notification']['event'][4]['category']      = 'global';
$modversion['notification']['event'][4]['admin_only']    = 1;
$modversion['notification']['event'][4]['title']         = _MI_MXDIR_GLOBAL_LINKSUBMIT_NOTIFY;
$modversion['notification']['event'][4]['caption']       = _MI_MXDIR_GLOBAL_LINKSUBMIT_NOTIFYCAP;
$modversion['notification']['event'][4]['description']   = _MI_MXDIR_GLOBAL_LINKSUBMIT_NOTIFYDSC;
$modversion['notification']['event'][4]['mail_template'] = 'global_linksubmit_notify';
$modversion['notification']['event'][4]['mail_subject']  = _MI_MXDIR_GLOBAL_LINKSUBMIT_NOTIFYSBJ;

$modversion['notification']['event'][5]['name']          = 'new_link';
$modversion['notification']['event'][5]['category']      = 'global';
$modversion['notification']['event'][5]['title']         = _MI_MXDIR_GLOBAL_NEWLINK_NOTIFY;
$modversion['notification']['event'][5]['caption']       = _MI_MXDIR_GLOBAL_NEWLINK_NOTIFYCAP;
$modversion['notification']['event'][5]['description']   = _MI_MXDIR_GLOBAL_NEWLINK_NOTIFYDSC;
$modversion['notification']['event'][5]['mail_template'] = 'global_newlink_notify';
$modversion['notification']['event'][5]['mail_subject']  = _MI_MXDIR_GLOBAL_NEWLINK_NOTIFYSBJ;

$modversion['notification']['event'][6]['name']          = 'link_submit';
$modversion['notification']['event'][6]['category']      = 'category';
$modversion['notification']['event'][6]['admin_only']    = 1;
$modversion['notification']['event'][6]['title']         = _MI_MXDIR_CATEGORY_LINKSUBMIT_NOTIFY;
$modversion['notification']['event'][6]['caption']       = _MI_MXDIR_CATEGORY_LINKSUBMIT_NOTIFYCAP;
$modversion['notification']['event'][6]['description']   = _MI_MXDIR_CATEGORY_LINKSUBMIT_NOTIFYDSC;
$modversion['notification']['event'][6]['mail_template'] = 'category_linksubmit_notify';
$modversion['notification']['event'][6]['mail_subject']  = _MI_MXDIR_CATEGORY_LINKSUBMIT_NOTIFYSBJ;

$modversion['notification']['event'][7]['name']          = 'new_link';
$modversion['notification']['event'][7]['category']      = 'category';
$modversion['notification']['event'][7]['title']         = _MI_MXDIR_CATEGORY_NEWLINK_NOTIFY;
$modversion['notification']['event'][7]['caption']       = _MI_MXDIR_CATEGORY_NEWLINK_NOTIFYCAP;
$modversion['notification']['event'][7]['description']   = _MI_MXDIR_CATEGORY_NEWLINK_NOTIFYDSC;
$modversion['notification']['event'][7]['mail_template'] = 'category_newlink_notify';
$modversion['notification']['event'][7]['mail_subject']  = _MI_MXDIR_CATEGORY_NEWLINK_NOTIFYSBJ;

$modversion['notification']['event'][8]['name']          = 'approve';
$modversion['notification']['event'][8]['category']      = 'link';
$modversion['notification']['event'][8]['invisible']     = 1;
$modversion['notification']['event'][8]['title']         = _MI_MXDIR_LINK_APPROVE_NOTIFY;
$modversion['notification']['event'][8]['caption']       = _MI_MXDIR_LINK_APPROVE_NOTIFYCAP;
$modversion['notification']['event'][8]['description']   = _MI_MXDIR_LINK_APPROVE_NOTIFYDSC;
$modversion['notification']['event'][8]['mail_template'] = 'link_approve_notify';
$modversion['notification']['event'][8]['mail_subject']  = _MI_MXDIR_LINK_APPROVE_NOTIFYSBJ;

// On Update
if (!empty($_POST['fct']) && !empty($_POST['op']) && $_POST['fct'] === 'modulesadmin' && $_POST['op'] === 'update_ok' && $_POST['dirname'] == $modversion['dirname']) {
    include __DIR__ . '/include/onupdate.inc.php';
}

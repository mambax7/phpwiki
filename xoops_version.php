<?php
// $Id$
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

$modversion['name'] = "Wiki";
$modversion['version'] = "1";
$modversion['description'] = "phpWiki 1.2.9 packaged for Xoops";
$modversion['credits'] = "Dianne Britton (dbritton@ciu.edu)";
$modversion['author'] = "phpWiki team";
$modversion['help'] = "";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "images/wikibase.png";
$modversion['dirname'] = "phpwiki";

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin.php";

// Menu
$modversion['hasMain'] = 1;

// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "wiki_wiki";
$modversion['tables'][1] = "wiki_archive";
$modversion['tables'][2] = "wiki_wikilinks";
$modversion['tables'][3] = "wiki_log_modules";
$modversion['tables'][4] = "wiki_wikiscore";
$modversion['tables'][5] = "wiki_hitcount";
?>
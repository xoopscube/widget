[![Project Status: Active – The project has reached a stable, usable state and is being actively developed.](https://www.repostatus.org/badges/2.0.0/active.svg)](https://github.com/xoopscube/)
![License GPL](https://img.shields.io/badge/License-GPL-green)
![X-Updare Store](https://img.shields.io/badge/X--Update%20Store-Pending-red)

## ///// — Widget - Nocode Frontend Widgets Blocks management

![widget](https://repository-images.githubusercontent.com/336455278/338e0354-d6db-4ccb-97c2-fa47567f8080)


MODULE | Widget
------------ | -------------
Description | No-code low-code module of plugins to manage multiple widgets instances and blocks.
Render Engine | Smarty v2 and XCube Layout
Version | 2.3.1
Update | @gigmaster Nuno Luciano (XCL7)
Author | Original by @kilica (core developer)
Copyright | 2011-2022 Authors
License | GPL


##### :computer: The Minimum Requirements



          Apache, Nginx, etc. PHP 7.2.x
          MySQL 5.6, MariaDB  InnoDB utf8 / utf8mb4
          XCL version 2.3.+



-----



## Overview

Widget
============

Widget is a XOOPSCube Legacy module to install and manage widget plugins.   
This module features a frontend Widgets Blocks management to install widget plugins and blocks.  
It allows you to create multiple instances and to insert blocks and widgets into any of the modules pages, set cache and user group permissions.
You can add widgets like maps, custom html content, smarty variables, banners, rss feed, etc.


Template
--------
The module's templates are based on thme xcl_default built with PicoCSS.

Included Plugins
----------------
* Amazon
* ATND
* HTML
* Google Maps
* Menu
* Twitter
* Smarty
* RSS
* Counter
* Simplebanner
* Mini Calendar
* Social Buttons

Terms of this module
--------------------
* Plugin: Plugin contains settings, language file, templates for some sort of function. For example, showing Google map, showing Tweet, showing social buttons.
* Instance: Installed Plugin. Also called 'Widget'. A Plugin can installed many times with different config value.

How to Use
----------
* From the top page of this module, click Plugin List(プラグイン一覧)
* Plugins you can install are listed. Click "Add"（追加） Button you want to install.
* Input options for the plugin then click "Send" button. You don't have to input "template" field.
* New instance of the plugin are installed now.
* Add a new block of Widget module from admin panel. Input instance id you installed.

Use with Smarty in template
---------------------------
You can show widget on template, instead of block.

Use 'xoops_widget' smarty function.

ex)
`<{xoops_widget dirname="widget" widget_id=3}>`

You can overwrite option value by smarty parameter like below.
`<{xoops_widget dirname="widget" widget_id=3 p_username="kilica"}>`
In this case, "p_username" option is replaced by "kilica".

History
-------
2013-06-11 [0.41]
* Add Socialbutton Plugin

2013-04-26 [0.40]
* Add Block Install

2013-04-04 [0.38]
* Add Mini Calendar Plugin

2013-04-04 [0.37]
* Fix Bug about update module

2013-04-02 [0.36]
* Fix Bugs about plugin interface
* Use call_user_func_array() instead of call_user_func() because of reference issue.


2013-01-21 [0.35]
* $form is added as prepareEditform() first argument

2013-01-16 [0.34]
* Fix Bug : move html class of "datePicker"

2013-01-16 [0.33]
* Fix Bugs: config.ini array with index number was invalid format.
* Fix Bugs: Block template update when module updated.
* Add edit button at View

2012-12-28 [0.32]
* Simple Banner plugin added.

2012-12-21 [0.31]
* RSS Plugin update
* Fix bug: getImageNumber function adopting for under PHP 5.3

2012-11-09 [0.30]
* Bootstrap template

2012-10-05 0.26
* Add Counter Plugin
* Add RSS Plugin

2012-08-30 0.25
* Fix Bug: Load Plugin timing in block show

2012-08-29 0.24
* Add Amazon plugin

2012-08-29 0.23
* Add ATND plugin

2012-08-29 0.22
* Expand Twitter plugin for search, faves, list
* Add prepareEditform() method for plugin

2012-07-14 0.21
* Add Menu plugin

2012-07-13 0.20
* Add Smarty plugin

2012-07-12 0.10
* First Release

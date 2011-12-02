Module Generator for Centurion
==============================

This module can be used to make a reverse engineering of your SGBD, and pregenerate some file :

* a dir in application/modules
* a Bootstrap class
* all dir structure (configs, data, controllers, models, formst, view ...)

For each object (ie table) the module find, it will create a :

* an admin controller
* a front controller
* some view for admin controller
* some view for front controller
* a table class
* a row class
* a form model

It's actually designed to help you in first step of creation of a new module.
It will no help you (currently) to update an existing module.

Requirements
------------

* Your SGBD must be a MYSQL server and your table engine must be inoodb.
* You must specified foreign key in your SGBD
* Some columns must have specific name :
    * *id*: for pk columns
	* *\*\_id*: for foreign key columns
	* *\*\_at*: for date columns
	* *is\_\** or *canbe_**: for boolean columns
	* *slug*: for slug columns
	* *created\_at*: for date creation of the row
	* *updated\_at*: for date modification of the row

How to use it?
--------------

* Design you DB in your SGBD
* Add this modules to your application/modules path
* Open you application/configs/modules.ini, activate the generator module
* Go to: http://myproject.local/generator/
* Select the module that you want to pregenerate

Commons errors
--------------

* If you try to generate an existing module, problem could appear.

Improvments
-----------

* Better use Zend_CodeGenerator_* 
* Improve code quality
* Allow update of a module (new table)
* Allow update of a table in an existing module (new columns)


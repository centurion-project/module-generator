<?php

class Generator_Bootstrap extends Centurion_Application_Module_Bootstrap
{
	public function _initIncludePath()
	{
		set_include_path(implode(PATH_SEPARATOR, array(
			realpath(dirname(__FILE__) . '/library'),
			get_include_path(),
		)));
	}
}

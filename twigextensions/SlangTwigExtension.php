<?php
namespace Craft;

use Twig_Extension;
use Twig_SimpleFunction;

class SlangTwigExtension extends \Twig_Extension  
{
	public function getName()
	{
		return 'Slang';
	}

	public function getFunctions() {
		return array(
			new Twig_SimpleFunction('slang', array($this, 'slang'))
		);
	}

	public function slang($default_string, $lang_dict) {
		$preferred_langs = explode(",", substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0));
		foreach($preferred_langs as $key => $lang) {
			if(strpos($lang, ";") !== false)
				$lang = strstr($lang, ";", true);
			if(array_key_exists($lang, $lang_dict)) {
				return $lang_dict[$lang];
			}
		}
		return $default_string;
	}
}
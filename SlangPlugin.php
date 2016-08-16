<?php

namespace Craft;

class SlangPlugin extends BasePlugin
{
	public function getName()
	{
		 return Craft::t('Slang');
	}
	public function getVersion()
	{
		return '1.0.0';
	}
	public function getDeveloper()
	{
		return 'Pelle Beckman';
	}
	public function getDeveloperUrl()
	{
		return 'http://beckman.io';
	}
	public function getDocumentationUrl()
	{
		return 'https://github.com/pbeck/slang';
	}
	public function getDescription()
	{
		return 'Use language specific fields in templates';
	}
	public function hasCpSection()
	{
		return false;
	}
	public function addTwigExtension()
	{
		Craft::import('plugins.slang.twigextensions.SlangTwigExtension');
		return new SlangTwigExtension();
	}
	public function getReleaseFeedUrl()
	{
		return 'https://github.com/pbeck/slang/raw/master/releases.json';
	}
}
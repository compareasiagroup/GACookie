<?php namespace CompareAsiaGroup\GACookie;

use Illuminate\Container\Container;

class GACookie
{
	/**
	 * Static shortcut to Parser 'parse' method
	 * @param  string $cookieName
	 * @return CompareAsiaGroup\GACookie\Cookie
	 */
	public static function parse($cookieName)
	{
		$c = new Container;
		$c->bind('DateTime', function(){
			return new \DateTime;
		});
		$parser = $c->make('CompareAsiaGroup\GACookie\Parser');
		return $parser->parse($cookieName);
	}
}
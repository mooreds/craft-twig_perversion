<?php
/**
 * MN Twig Perversion plugin for Craft CMS
 *
 * MN Twig Perversion Twig Extension
 *
 *
 * @author    Marion Newlevant
 * @copyright Copyright (c) 2016 Marion Newlevant
 * @link      http://marion.newlevant.com
 * @package   MnTwigPerversion
 * @since     1.0.0
 */

namespace Craft;

/* NumericTest is lifted straight out of https://github.com/GeckoPackages/GeckoTwig
*/
require_once('NumericTest.php');

class MnTwigPerversionTwigExtension extends \Twig_Extension
{
	/**
	 * Returns the name of the extension.
	 *
	 * @return string The extension name
	 */
	public function getName()
	{
		return 'MnTwigPerversion';
	}

	public function getTokenParsers()
	{
		return array(
			new MnTwigPerversion_Break_TokenParser(),
			new MnTwigPerversion_Continue_TokenParser(),
			new MnTwigPerversion_Return_TokenParser(),
		);
	}

	public function getTests()
	{
		return array(
			new \GeckoPackages\Twig\Tests\NumericTest(),
		);
	}

}

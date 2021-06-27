<?php
/**
 * @copyright Copyright (c) 2014 Anton Devcoder
 * @license https://github.com/antonkj/markdown/blob/master/LICENSE
 * @link https://github.com/antonkj/markdown#readme
 */

namespace antonkj\markdown\tests;

use antonkj\markdown\Markdown;

/**
 * Test support ordered lists at arbitrary number(`start` html attribute)
 * @author Maxim Hodyrew <maximkou@gmail.com>
 * @group default
 */
class MarkdownOLStartNumTest extends BaseMarkdownTest
{
	public function createMarkdown()
	{
		$markdown = new Markdown();
		$markdown->keepListStartNumber = true;
		return $markdown;
	}

	public function getDataPaths()
	{
		return [
			'markdown-data' => __DIR__ . '/markdown-ol-start-num-data',
		];
	}
}

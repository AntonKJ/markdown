<?php

namespace antonkj\markdown\tests;
use antonkj\markdown\MarkdownExtra;

/**
 * @author Anton Devcoder <mail@antonkj.cc>
 * @group extra
 */
class MarkdownExtraTest extends BaseMarkdownTest
{
	public function createMarkdown()
	{
		return new MarkdownExtra();
	}

	public function getDataPaths()
	{
		return [
			'markdown-data' => __DIR__ . '/markdown-data',
			'extra-data' => __DIR__ . '/extra-data',
		];
	}
}
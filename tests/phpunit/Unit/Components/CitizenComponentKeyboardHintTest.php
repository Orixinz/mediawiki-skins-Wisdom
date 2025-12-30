<?php

declare( strict_types=1 );

namespace MediaWiki\Skins\Wisdom\Tests\Components;

use MediaWiki\Skins\Wisdom\Components\CitizenComponentKeyboardHint;
use MediaWikiUnitTestCase;

/**
 * @group Citizen
 * @group Components
 * @coversDefaultClass \MediaWiki\Skins\Wisdom\Components\CitizenComponentKeyboardHint
 */
class CitizenComponentKeyboardHintTest extends MediaWikiUnitTestCase {

	/**
	 * @covers ::__construct
	 * @covers ::getTemplateData
	 */
	public function testGetTemplateData(): void {
		$expected = [
			'label' => 'Mock aria label',
			'key' => 'mock-key'
		];

		$component = new CitizenComponentKeyboardHint( 'Mock aria label', 'mock-key' );
		$this->assertSame( $expected, $component->getTemplateData() );
	}
}

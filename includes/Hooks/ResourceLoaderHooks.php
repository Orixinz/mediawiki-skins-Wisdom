<?php

declare( strict_types=1 );

namespace MediaWiki\Skins\Citizen\Hooks;

use MediaWiki\Config\Config;
use MediaWiki\MainConfigNames;
use MediaWiki\Registration\ExtensionRegistry;
use MediaWiki\ResourceLoader as RL;

/**
 * Hooks to run relating to the resource loader
 */
class ResourceLoaderHooks {

	/**
	 * Passes config variables to skins.wisdom.scripts ResourceLoader module.
	 * @param RL\Context $context
	 * @param Config $config
	 * @return array
	 */
	public static function getCitizenResourceLoaderConfig(
		RL\Context $context,
		Config $config
	) {
		return [
			'wgCitizenEnablePreferences' => $config->get( 'WisdomEnablePreferences' ),
			'wgCitizenOverflowInheritedClasses' => $config->get( 'WisdomOverflowInheritedClasses' ),
			'wgCitizenOverflowNowrapClasses' => $config->get( 'WisdomOverflowNowrapClasses' ),
			'wgCitizenSearchModule' => $config->get( 'WisdomSearchModule' ),
			'wgCitizenEnableCommandPalette' => $config->get( 'WisdomEnableCommandPalette' ),
		];
	}

	/**
	 * Passes config variables to skins.wisdom.preferences ResourceLoader module.
	 * @param RL\Context $context
	 * @param Config $config
	 * @return array
	 */
	public static function getCitizenPreferencesResourceLoaderConfig(
		RL\Context $context,
		Config $config
	) {
		return [
			'wgCitizenThemeDefault' => $config->get( 'WisdomThemeDefault' ),
		];
	}

	/**
	 * Passes config variables to skins.wisdom.search ResourceLoader module.
	 * @param RL\Context $context
	 * @param Config $config
	 * @return array
	 */
	public static function getCitizenSearchResourceLoaderConfig(
		RL\Context $context,
		Config $config
	) {
		$extensionRegistry = ExtensionRegistry::getInstance();

		return [
			'isAdvancedSearchExtensionEnabled' => $extensionRegistry->isLoaded( 'AdvancedSearch' ),
			'isMediaSearchExtensionEnabled' => $extensionRegistry->isLoaded( 'MediaSearch' ),
			'wgCitizenSearchGateway' => $config->get( 'WisdomSearchGateway' ),
			'wgCitizenSearchDescriptionSource' => $config->get( 'WisdomSearchDescriptionSource' ),
			'wgCitizenMaxSearchResults' => $config->get( 'WisdomMaxSearchResults' ),
			'wgScriptPath' => $config->get( MainConfigNames::ScriptPath ),
			'wgSearchSuggestCacheExpiry' => $config->get( MainConfigNames::SearchSuggestCacheExpiry )
		];
	}

	/**
	 * Passes config variables to skins.wisdom.commandPalette ResourceLoader module.
	 * @param RL\Context $context
	 * @param Config $config
	 * @return array
	 */
	public static function getCitizenCommandPaletteResourceLoaderConfig(
		RL\Context $context,
		Config $config
	) {
		$extensionRegistry = ExtensionRegistry::getInstance();

		return [
			'isMediaSearchExtensionEnabled' => $extensionRegistry->isLoaded( 'MediaSearch' ),
			'wgSearchSuggestCacheExpiry' => $config->get( MainConfigNames::SearchSuggestCacheExpiry )
		];
	}
}

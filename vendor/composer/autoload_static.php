<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2422cff403e485a049549b885a399f25
{
    public static $files = array (
        '62b15e16680c158ea02516f33e41c943' => __DIR__ . '/..' . '/wpbones/wpbones/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPXMaintenanceProLight\\WPBones\\' => 31,
            'WPXMaintenanceProLight\\PureCSSTabs\\' => 35,
            'WPXMaintenanceProLight\\PureCSSSwitch\\' => 37,
            'WPXMaintenanceProLight\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPXMaintenanceProLight\\WPBones\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpbones/wpbones/src',
        ),
        'WPXMaintenanceProLight\\PureCSSTabs\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpbones/pure-css-tabs/src',
        ),
        'WPXMaintenanceProLight\\PureCSSSwitch\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpbones/pure-css-switch/src',
        ),
        'WPXMaintenanceProLight\\' => 
        array (
            0 => __DIR__ . '/../..' . '/plugin',
        ),
    );

    public static $classMap = array (
        'WPXMaintenanceProLight\\Http\\Controllers\\Controller' => __DIR__ . '/../..' . '/plugin/Http/Controllers/Controller.php',
        'WPXMaintenanceProLight\\Http\\Controllers\\Settings\\SettingsController' => __DIR__ . '/../..' . '/plugin/Http/Controllers/Settings/SettingsController.php',
        'WPXMaintenanceProLight\\Providers\\WPXMaintenanceProManagerServiceProvider' => __DIR__ . '/../..' . '/plugin/Providers/WPXMaintenanceProServiceProvider.php',
        'WPXMaintenanceProLight\\PureCSSSwitch\\Html\\HtmlTagSwitchButton' => __DIR__ . '/..' . '/wpbones/pure-css-switch/src/Html/HtmlTagSwitchButton.php',
        'WPXMaintenanceProLight\\PureCSSSwitch\\PureCSSSwitchProvider' => __DIR__ . '/..' . '/wpbones/pure-css-switch/src/PureCSSSwitchProvider.php',
        'WPXMaintenanceProLight\\PureCSSTabs\\PureCSSTabsProvider' => __DIR__ . '/..' . '/wpbones/pure-css-tabs/src/PureCSSTabsProvider.php',
        'WPXMaintenanceProLight\\WPBones\\Console\\Command' => __DIR__ . '/..' . '/wpbones/wpbones/src/Console/Command.php',
        'WPXMaintenanceProLight\\WPBones\\Container\\Container' => __DIR__ . '/..' . '/wpbones/wpbones/src/Container/Container.php',
        'WPXMaintenanceProLight\\WPBones\\Contracts\\Container\\Container' => __DIR__ . '/..' . '/wpbones/wpbones/src/Contracts/Container/Container.php',
        'WPXMaintenanceProLight\\WPBones\\Contracts\\Foundation\\Plugin' => __DIR__ . '/..' . '/wpbones/wpbones/src/Contracts/Foundation/Plugin.php',
        'WPXMaintenanceProLight\\WPBones\\Database\\Migrations\\Migration' => __DIR__ . '/..' . '/wpbones/wpbones/src/Database/Migrations/Migration.php',
        'WPXMaintenanceProLight\\WPBones\\Database\\Seeder' => __DIR__ . '/..' . '/wpbones/wpbones/src/Database/Seeder.php',
        'WPXMaintenanceProLight\\WPBones\\Database\\WordPressOption' => __DIR__ . '/..' . '/wpbones/wpbones/src/Database/WordPressOption.php',
        'WPXMaintenanceProLight\\WPBones\\Foundation\\Console\\Kernel' => __DIR__ . '/..' . '/wpbones/wpbones/src/Foundation/Console/Kernel.php',
        'WPXMaintenanceProLight\\WPBones\\Foundation\\Http\\Request' => __DIR__ . '/..' . '/wpbones/wpbones/src/Foundation/Http/Request.php',
        'WPXMaintenanceProLight\\WPBones\\Foundation\\Plugin' => __DIR__ . '/..' . '/wpbones/wpbones/src/Foundation/Plugin.php',
        'WPXMaintenanceProLight\\WPBones\\Foundation\\WordPressAjaxServiceProvider' => __DIR__ . '/..' . '/wpbones/wpbones/src/Foundation/WordPressAjaxServiceProvider.php',
        'WPXMaintenanceProLight\\WPBones\\Foundation\\WordPressCustomPostTypeServiceProvider' => __DIR__ . '/..' . '/wpbones/wpbones/src/Foundation/WordPressCustomPostTypeServiceProvider.php',
        'WPXMaintenanceProLight\\WPBones\\Foundation\\WordPressCustomTaxonomyTypeServiceProvider' => __DIR__ . '/..' . '/wpbones/wpbones/src/Foundation/WordPressCustomTaxonomyTypeServiceProvider.php',
        'WPXMaintenanceProLight\\WPBones\\Foundation\\WordPressShortcodesServiceProvider' => __DIR__ . '/..' . '/wpbones/wpbones/src/Foundation/WordPressShortcodesServiceProvider.php',
        'WPXMaintenanceProLight\\WPBones\\Html\\Html' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/Html.php',
        'WPXMaintenanceProLight\\WPBones\\Html\\HtmlTag' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTag.php',
        'WPXMaintenanceProLight\\WPBones\\Html\\HtmlTagA' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagA.php',
        'WPXMaintenanceProLight\\WPBones\\Html\\HtmlTagButton' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagButton.php',
        'WPXMaintenanceProLight\\WPBones\\Html\\HtmlTagCheckbox' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagCheckbox.php',
        'WPXMaintenanceProLight\\WPBones\\Html\\HtmlTagDatetime' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagDatetime.php',
        'WPXMaintenanceProLight\\WPBones\\Html\\HtmlTagFieldSet' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagFieldSet.php',
        'WPXMaintenanceProLight\\WPBones\\Html\\HtmlTagForm' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagForm.php',
        'WPXMaintenanceProLight\\WPBones\\Html\\HtmlTagInput' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagInput.php',
        'WPXMaintenanceProLight\\WPBones\\Html\\HtmlTagLabel' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagLabel.php',
        'WPXMaintenanceProLight\\WPBones\\Html\\HtmlTagOptGroup' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagOptGroup.php',
        'WPXMaintenanceProLight\\WPBones\\Html\\HtmlTagOption' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagOption.php',
        'WPXMaintenanceProLight\\WPBones\\Html\\HtmlTagSelect' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagSelect.php',
        'WPXMaintenanceProLight\\WPBones\\Html\\HtmlTagTextArea' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagTextArea.php',
        'WPXMaintenanceProLight\\WPBones\\Routing\\Controller' => __DIR__ . '/..' . '/wpbones/wpbones/src/Routing/Controller.php',
        'WPXMaintenanceProLight\\WPBones\\Routing\\Route' => __DIR__ . '/..' . '/wpbones/wpbones/src/Routing/Route.php',
        'WPXMaintenanceProLight\\WPBones\\Support\\ServiceProvider' => __DIR__ . '/..' . '/wpbones/wpbones/src/Support/ServiceProvider.php',
        'WPXMaintenanceProLight\\WPBones\\Support\\Str' => __DIR__ . '/..' . '/wpbones/wpbones/src/Support/Str.php',
        'WPXMaintenanceProLight\\WPBones\\Support\\Widget' => __DIR__ . '/..' . '/wpbones/wpbones/src/Support/Widget.php',
        'WPXMaintenanceProLight\\WPBones\\View\\View' => __DIR__ . '/..' . '/wpbones/wpbones/src/View/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2422cff403e485a049549b885a399f25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2422cff403e485a049549b885a399f25::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2422cff403e485a049549b885a399f25::$classMap;

        }, null, ClassLoader::class);
    }
}

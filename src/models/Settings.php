<?php
/**
 * ImageOptimize plugin for Craft CMS 3.x
 *
 * Automatically optimize images after they've been transformed
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

namespace nystudio107\imageoptimize\models;

use craft\base\Model;
use craft\validators\ArrayValidator;

/**
 * ImageOptimize Settings model
 *
 * @author    nystudio107
 * @package   ImageOptimize
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Default variants
     *
     * @var array
     */
    public $defaultVariants = [
        [
            'width'          => 1170,
            'useAspectRatio' => true,
            'aspectRatioX'   => 16.0,
            'aspectRatioY'   => 9.0,
            'retinaSizes'    => ['1'],
            'quality'        => 82,
            'format'         => 'jpg',
        ],
        [
            'width'          => 970,
            'useAspectRatio' => true,
            'aspectRatioX'   => 16.0,
            'aspectRatioY'   => 9.0,
            'retinaSizes'    => ['1'],
            'quality'        => 82,
            'format'         => 'jpg',
        ],
        [
            'width'          => 750,
            'useAspectRatio' => true,
            'aspectRatioX'   => 4.0,
            'aspectRatioY'   => 3.0,
            'retinaSizes'    => ['1'],
            'quality'        => 60,
            'format'         => 'jpg',
        ],
        [
            'width'          => 320,
            'useAspectRatio' => true,
            'aspectRatioX'   => 4.0,
            'aspectRatioY'   => 3.0,
            'retinaSizes'    => ['1'],
            'quality'        => 60,
            'format'         => 'jpg',
        ],
    ];

    /**
     * Active image processors
     *
     * @var array
     */
    public $activeImageProcessors = [
        'jpg' => [
            'jpegoptim',
        ],
        'png' => [
            'optipng',
        ],
        'svg' => [
            'svgo',
        ],
        'gif' => [
            'gifsicle',
        ],
    ];

    /**
     * Active image variant creators
     *
     * @var array
     */
    public $activeImageVariantCreators = [
        'jpg' => [
            'cwebp',
        ],
        'png' => [
            'cwebp',
        ],
        'gif' => [
            'cwebp',
        ],
    ];

    /**
     * Preset image processors
     *
     * @var array
     */
    public $imageProcessors = [
        // jpeg optimizers
        'jpegoptim' => [
            'commandPath'           => '/usr/bin/jpegoptim',
            'commandOptions'        => '-s',
            'commandOutputFileFlag' => '',
        ],
        'mozjpeg'   => [
            'commandPath'           => '/usr/bin/mozjpeg',
            'commandOptions'        => '-optimize -copy none',
            'commandOutputFileFlag' => '-outfile',
        ],
        'jpegtran'  => [
            'commandPath'           => '/usr/bin/jpegtran',
            'commandOptions'        => '-optimize -copy none',
            'commandOutputFileFlag' => '',
        ],
        // png optimizers
        'optipng'   => [
            'commandPath'           => '/usr/bin/optipng',
            'commandOptions'        => '-o7 -strip all',
            'commandOutputFileFlag' => '',
        ],
        'pngcrush'  => [
            'commandPath'           => '/usr/bin/pngcrush',
            'commandOptions'        => '-brute -ow',
            'commandOutputFileFlag' => '',
        ],
        'pngquant'  => [
            'commandPath'           => '/usr/bin/pngquant',
            'commandOptions'        => '--strip --skip-if-larger',
            'commandOutputFileFlag' => '',
        ],
        // svg optimizers
        'svgo'      => [
            'commandPath'           => '/usr/bin/svgo',
            'commandOptions'        => '',
            'commandOutputFileFlag' => '',
        ],
        // gif optimizers
        'gifsicle'  => [
            'commandPath'           => '/usr/bin/gifsicle',
            'commandOptions'        => '-O3 -k 256',
            'commandOutputFileFlag' => '',
        ],
    ];

    public $imageVariantCreators = [
        // webp variant creator
        'cwebp' => [
            'commandPath'           => '/usr/bin/cwebp',
            'commandOptions'        => '',
            'commandOutputFileFlag' => '-o',
            'commandQualityFlag'    => '-q',
            'imageVariantExtension' => 'webp',
        ],
    ];

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [
                [
                    'defaultVariants',
                    'activeImageProcessors',
                    'activeImageVariantCreators',
                    'imageProcessors',
                    'imageVariantCreators',
                ],
                'required'
            ],
            [
                [
                    'defaultVariants',
                    'activeImageProcessors',
                    'activeImageVariantCreators',
                    'imageProcessors',
                    'imageVariantCreators',
                ],
                ArrayValidator::class
            ],
        ];
    }
}

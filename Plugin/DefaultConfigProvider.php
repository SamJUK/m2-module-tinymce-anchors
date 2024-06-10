<?php
/**
 * @author     Sam James <sam@samdjames.uk>
 * @package    SamJUK_TinyMCE
 * @copyright  Copyright (c) 2024 Sam James (https://www.samdjames.uk)
 */

namespace SamJUK\TinyMCE\Plugin;

use Magento\Framework\Data\Wysiwyg\ConfigProviderInterface;
use Magento\Framework\DataObject;

class DefaultConfigProvider
{

    public function afterGetConfig(
        ConfigProviderInterface $subject, 
        DataObject $config
    ) : DataObject {
        $tinyConfig = $config->getData('tinymce4');
        $tinyConfig['toolbar'] = str_replace(' link ', ' anchor link ', $tinyConfig['toolbar']);
        $tinyConfig['plugins'] = str_replace(' link ', ' link anchor ', $tinyConfig['plugins']);
        $config->setData('tinymce4', $tinyConfig);
        return $config;
    }

}
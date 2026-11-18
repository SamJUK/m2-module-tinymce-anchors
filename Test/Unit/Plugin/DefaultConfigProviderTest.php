<?php

declare(strict_types=1);

namespace SamJUK\TinyMCE\Test\Unit\Plugin;

use Magento\Framework\Data\Wysiwyg\ConfigProviderInterface;
use Magento\Framework\DataObject;
use PHPUnit\Framework\TestCase;
use SamJUK\TinyMCE\Plugin\DefaultConfigProvider;

class DefaultConfigProviderTest extends TestCase
{
    public function testAddsAnchorToToolbarAndPlugins(): void
    {
        $config = new DataObject(['tinymce4' => [
            'toolbar' => 'bold link image',
            'plugins' => 'lists link table',
        ]]);

        $result = (new DefaultConfigProvider())->afterGetConfig(
            $this->createStub(ConfigProviderInterface::class),
            $config
        );

        $this->assertSame('bold anchor link image', $result->getData('tinymce4')['toolbar']);
        $this->assertSame('lists link anchor table', $result->getData('tinymce4')['plugins']);
    }
}

<?php
namespace Drupal\gvz_config_override\Config;

use Drupal\Core\Cache\CacheableMetadata;

class GvzConfigOverrideParagraph implements \Drupal\Core\Config\ConfigFactoryOverrideInterface
{

    /**
     * @inheritDoc
     */
    public function loadOverrides($names)
    {
        $override = [];
        if (in_array('field.storage.paragraph.field_position_image', $names)) {
          $override['field.storage.paragraph.field_position_image'] = [
            'settings' => [
              'allowed_values' => [],
              'allowed_values_function' => [$this, 'fieldPositionImageList'],
            ],
          ];
        }
        return $override;
    }

    /**
     * @inheritDoc
     */
    public function getCacheSuffix()
    {
        return 'GvzConfigOverrideParagraph';
    }

    /**
     * @inheritDoc
     */
    public function createConfigObject($name, $collection = \Drupal\Core\Config\StorageInterface::DEFAULT_COLLECTION)
    {
        return NULL;
    }

    /**
     * @inheritDoc
     */
    public function getCacheableMetadata($name)
    {
      return new CacheableMetadata();
    }

    public function fieldPositionImageList() {
      return [
        '' => '',
        '' => ''
      ];
    }
}

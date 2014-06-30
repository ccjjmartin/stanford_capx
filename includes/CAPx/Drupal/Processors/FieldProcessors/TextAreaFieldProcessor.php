<?php
/**
 * @file
 * @author [author] <[email]>
 */

namespace CAPx\Drupal\Processors\FieldProcessors;

class TextAreaFieldProcessor extends FieldTypeProcessor {

  /**
   * Default implementation of put
   * @param  [type] $data [description]
   * @return [type]       [description]
   */
  public function put($data) {
    $entity = $this->getEntity();
    $fieldName = $this->getFieldName();
    $fieldInfo = field_info_field($fieldName);
    $field = $entity->{$fieldName};
    $data = $this->repackageJsonDataForDrupal($data, $fieldInfo);
    $field->set($data);
  }


}

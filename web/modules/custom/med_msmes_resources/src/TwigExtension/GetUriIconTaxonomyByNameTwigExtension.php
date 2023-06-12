<?php

namespace Drupal\med_msmes_resources\TwigExtension;

/**
 * Class GetUriIconTaxonomyByNameTwigExtension.
 */
class GetUriIconTaxonomyByNameTwigExtension extends \Twig_Extension {

  /**
   * {@inheritdoc}
   * This function must return the name of the extension. It must be unique.
   */
  public function getName() {
    return 'get_uri_icon_taxonomy_by_name';
  }

  /**
   * In this function we can declare the extension function
   */
  public function getFunctions() {
    return [
      new \Twig_SimpleFunction('get_uri_icon_taxonomy_by_name', [$this, 'get_uri_icon_taxonomy_by_name']),
    ];
  }



  public function get_uri_icon_taxonomy_by_name($name) {
    $properties = [
      'name' => $name,
      'vid' => 'resources'
    ];

    $terms = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadByProperties($properties);
    $term = reset($terms);
    if(is_object($term)) {
      return $term->get('field_icon')->entity->getFileUri();
    }
    return FALSE;
  }

}

<?php

/**
 * Override or insert variables into the html templates.
 */

function bedrock_preprocess_html(&$variables, $hook) {

  // Add paths
  $variables['base_path'] = base_path();
  $variables['path_to_theme'] = drupal_get_path('theme', 'bedrock');
  
}

/**
 * Implements hook_process_html().
 */

function bedrock_process_html(&$variables) {

  // Attributes for html element.
  $variables['html_attributes_array'] = array(
    'lang' => $variables['language']->language,
    'dir' => $variables['language']->dir,
  );
  
  $variables['body_attributes_array'] = array();
  
  // Flatten out html_attributes.
  $variables['html_attributes'] = drupal_attributes($variables['html_attributes_array']);

}

/**
 * Implement hook_html_head_alter().
 */

function bedrock_html_head_alter(&$head) {
  // Simplify the meta tag for character encoding.
  if (isset($head['system_meta_content_type']['#attributes']['content'])) {
    $head['system_meta_content_type']['#attributes'] = array('charset' => str_replace('text/html; charset=', '', $head['system_meta_content_type']['#attributes']['content']));
  }
}

/**
  * Implements hook_process_html_tag
  * - From http://sonspring.com/journal/html5-in-drupal-7#_pruning
  */
function bedrock_process_html_tag(&$variables) {
    
    //Since we're HTML5...remove needless XHTML
    $tags = &$variables['element'];

    // Remove type="..." and CDATA prefix/suffix.
    unset($tags['#attributes']['type'], $tags['#value_prefix'], $tags['#value_suffix']);

    // Remove media="all" but leave others unaffected.
    if (isset($tags['#attributes']['media']) && $tags['#attributes']['media'] === 'all') {
      unset($tags['#attributes']['media']);
    }

}

/**
 * Override or insert variables into the page template.
 */

function bedrock_preprocess_page(&$variables, $hook) {

  //Auto replace Copyright Year
  //$variables['page']['footer']['block_6']['#markup'] = str_replace('*', date('Y'), $variables['page']['footer']['block_6']['#markup']);

}
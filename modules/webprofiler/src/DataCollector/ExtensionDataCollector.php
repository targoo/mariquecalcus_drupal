<?php

/**
 * @file
 * Contains \Drupal\webprofiler\DataCollector\ExtensionDataCollector.
 */

namespace Drupal\webprofiler\DataCollector;

use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Extension\ThemeHandlerInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\webprofiler\DrupalDataCollectorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

/**
 * Defines a data collector for the extension system.
 */
class ExtensionDataCollector extends DataCollector implements DrupalDataCollectorInterface {

  use StringTranslationTrait, DrupalDataCollectorTrait;

  /**
   * The module handler.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * The theme handler.
   *
   * @var \Drupal\Core\Extension\ThemeHandlerInterface
   */
  protected $themeHandler;

  /**
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \Drupal\Core\Extension\ThemeHandlerInterface $theme_handler
   *   The theme handler.
   */
  public function __construct(ModuleHandlerInterface $module_handler, ThemeHandlerInterface $theme_handler) {
    $this->moduleHandler = $module_handler;
    $this->themeHandler = $theme_handler;
  }

  /**
   * {@inheritdoc}
   */
  public function collect(Request $request, Response $response, \Exception $exception = NULL) {
    $this->data['drupal_extension']['count'] = count($this->moduleHandler->getModuleList()) + count($this->themeHandler->listInfo());
    $this->data['drupal_extension']['modules'] = $this->moduleHandler->getModuleList();
    $this->data['drupal_extension']['themes'] = $this->themeHandler->listInfo();
  }

  /**
   * Returns the total number of drupal extensions.
   *
   * @return int
   */
  public function getExtensionsCount() {
    return isset($this->data['drupal_extension']['count']) ? $this->data['drupal_extension']['count'] : 0;
  }

  /**
   * @return array
   */
  public function moduleInfo() {
    if (!isset($this->data['drupal_extension']['modules'])) {
      return array();
    }

    $data = array();
    foreach ($this->data['drupal_extension']['modules'] as $module => $info) {
      $data[$module] = implode(' | ', array(
        $this->t('Path: @path', array('@path' => $info->uri)),
      ));
    }
    return $data;
  }

  /**
   * @return array
   */
  public function themeInfo() {
    if (!isset($this->data['drupal_extension']['themes'])) {
      return array();
    }
    $data = array();
    foreach ($this->data['drupal_extension']['themes'] as $name => $info) {
      $data[$name] = implode(' | ', array(
        $this->t('Path: @path', array('@path' => $info->uri)),
        $this->t('Status: @status', array('@status' => $info->status)),
        $this->t('Engine: @engine', array('@engine' => $info->engine)),
      ));
    }
    return $data;
  }

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'drupal_extension';
  }

  /**
   * {@inheritdoc}
   */
  public function getTitle() {
    return $this->t('Extensions (modules/themes)');
  }

  /**
   * {@inheritdoc}
   */
  public function getPanelSummary() {
    return $this->t('Total active extensions: @extensions', array('@extensions' => $this->getExtensionsCount()));
  }

  /**
   * {@inheritdoc}
   */
  public function getPanel() {
    $build = array();

    // Active modules
    $build['modules'] = $this->getTable($this->t('Active modules'), $this->moduleInfo(), array(
      $this->t('Key'),
      $this->t('Value')
    ));

    // Active themes
    $build['themes'] = $this->getTable($this->t('Active themes'), $this->themeInfo(), array(
      $this->t('Key'),
      $this->t('Value')
    ));

    return $build;
  }
} 

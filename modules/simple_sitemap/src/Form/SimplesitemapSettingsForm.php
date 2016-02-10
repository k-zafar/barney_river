<?php

/**
 * @file
 * Contains \Drupal\simplesitemap\Form\SimplesitemapSettingsForm.
 */

namespace Drupal\simplesitemap\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\simplesitemap\Simplesitemap;

/**
 * SimplesitemapSettingsFrom
 */
class SimplesitemapSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'simplesitemap_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['simplesitemap.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $sitemap = new Simplesitemap;
    $settings = $sitemap->get_settings();

    $form['simplesitemap_settings']['rebuild'] = array(
      '#title' => t('Rebuild sitemap'),
      '#type' => 'fieldset',
      '#markup' => '<p>' . t('This will rebuild the XML sitemap for all languages.') . '</p>',
    );

    $form['simplesitemap_settings']['rebuild']['rebuild_submit'] = array(
      '#type' => 'submit',
      '#value' => t('Rebuild sitemap'),
      '#submit' => array('::rebuild_sitemap'),
      '#validate' => array(), // Skip form-level validator.
    );

    $form['simplesitemap_settings']['settings'] = array(
      '#title' => t('Other settings'),
      '#type' => 'fieldset',
      '#markup' => '<p>' . t('Various sitemap settings.') . '</p>',
    );

    $form['simplesitemap_settings']['settings']['max_links'] = array(
      '#title' => t('Maximum links in a sitemap'),
      '#description' => t("The maximum number of links one sitemap can hold. If more links are generated than set here, a sitemap index will be created and the links split into several sub-sitemaps.<br/>50 000 links is the maximum Google will parse per sitemap, however it is advisable to set this to a lower number. If left blank, all links will be shown on a single sitemap."),
      '#type' => 'textfield',
      '#maxlength' => 5,
      '#size' => 5,
      '#default_value' => $settings['max_links'],
    );

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $max_links = $form_state->getValue('max_links');
    if ($max_links != '') {
      if (!is_numeric($max_links) || $max_links < 1 || $max_links != round($max_links)) {
        $form_state->setErrorByName('', t("The value of the max links field must be a positive integer and greater than 1."));
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $sitemap = new Simplesitemap;
    $settings = $sitemap->get_settings();
    $settings['max_links'] = $form_state->getValue('max_links');
    $sitemap->save_settings($settings);
    parent::submitForm($form, $form_state);
  }

  public function rebuild_sitemap(array &$form, FormStateInterface $form_state) {
    $sitemap = new Simplesitemap;
    $sitemap->generate_sitemap();
  }
}

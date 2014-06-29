<?php

/**
 * @file
 * Contains \Drupal\mc_form\Form.
 */

namespace Drupal\mc_demo\Form;

use Drupal\Core\Form\FormBase;

/**
 * Demonstrate HTML5 support for the Drupal 8 API.
 */
class HTML5FormBase extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'my_unique_id';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, array &$form_state) {

    // novalidate

    $form['email'] = array(
      '#type' => 'email',
      '#title' => $this->t('Email:'),
      '#attributes' => array(
        'placeholder' => 'calcus.david@gmail.com',
        'autofocus' => TRUE,
      ),
    );

    $form['url'] = array(
      '#type' => 'url',
      '#title' => $this->t('Url:'),
      '#attributes' => array(
        'placeholder' => 'http://www.mariquecalcus.com',
      ),
    );

    $form['tel'] = array(
      '#type' => 'tel',
      '#title' => $this->t('Tel:'),
    );

    $form['color'] = array(
      '#type' => 'color',
      '#title' => $this->t('Color:'),
    );

    // Not yet supported for the core.
    $form['datalist'] = array(
      '#type' => 'datalist',
      '#title' => $this->t('Datalist:'),
    );

    // Use for suggestion
    $form['datalist2'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Datalist:'),
      '#field_prefix' => '<datalist id="colors"><option value="blue" /><option value="red" /></datalist>',
      '#attributes' => array('list' => array('colors')),
    );

    $form['date'] = array(
      '#type' => 'date',
      '#title' => $this->t('Date:'),
    );

    $form['time'] = array(
      '#type' => 'time',
      '#title' => $this->t('Time:'),
    );

    $form['datetime'] = array(
      '#type' => 'datetime',
      '#title' => $this->t('Datetime:'),
    );

    // Not supported in drupal core.
    $form['datetime-local'] = array(
      '#type' => 'datetime-local',
      '#title' => $this->t('Datetime Local:'),
    );

    // Not supported in drupal core.
    $form['week'] = array(
      '#type' => 'week',
      '#title' => $this->t('Week.'),
    );

    // Not supported in drupal core.
    $form['month'] = array(
      '#type' => 'month',
      '#title' => $this->t('Month:'),
    );

    //if (!Modernizr.inputtypes.number) {
      // no native support for type=number fields
      // maybe try Dojo or some other JavaScript framework
    //}
    $form['number'] = array(
      '#type' => 'number',
      '#title' => $this->t('Number:'),
      '#attributes' => array(
        'min' => 0,
        'max' => 10,
        'step' => 2,
        'value' => 6,
      ),
    );

    $form['range'] = array(
      '#type' => 'range',
      '#title' => $this->t('Range:'),
      '#attributes' => array(
        'min' => 0,
        'max' => 10,
        'step' => 2,
        'value' => 6,
      ),
    );

    $form['search'] = array(
      '#type' => 'search',
      '#title' => $this->t('Search:'),
    );

    $form['show'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, array &$form_state) {
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, array &$form_state) {
  }

}

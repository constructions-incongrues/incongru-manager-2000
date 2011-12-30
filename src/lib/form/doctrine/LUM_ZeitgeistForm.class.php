<?php

/**
 * LUM_Zeitgeist form.
 *
 * @package    admin-incongrue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LUM_ZeitgeistForm extends BaseLUM_ZeitgeistForm
{
  public function configure()
  {
	// Widgets
	$this->widgetSchema['image'] = new sfWidgetFormInputText();

	// Validators
	$this->validatorSchema['image'] = new sfValidatorUrl();
  }
}

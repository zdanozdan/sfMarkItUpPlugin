<?php
/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @author     Lukasz Sarzynski <LukaszSarzynski@gmail.com>
 * @author     Tomasz Zdanowski <tomasz@mikran.pl>
 *
 */
class sfMarkItUpWidget extends sfWidgetFormTextarea
{
  protected function configure($options = array(), $attributes = array())
  {
    $this->addOption('mark_down_options', sfConfig::get('app_mark_down_default', array()));
  }
  
  /**
   * @param  string $name        The element name
   * @param  string $value       The value displayed in this widget
   * @param  array  $attributes  An array of HTML attributes to be merged with the default HTML attributes
   * @param  array  $errors      An array of errors for the field
   *
   * @see sfWidget
   **/    
  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
 
    $id = $this->generateId($name, $value);

    //    $script_content = <<<JS
    //<![CDATA[
    // window.onload = function () {
    // $('#{$id}').markItUp({});
    //}
    //]]>
    //JS;

    return parent::render($name, $value, $attributes, $errors);
    //.$this->renderContentTag('script', $script_content, array('type' => 'text/javascript'));
  }
}
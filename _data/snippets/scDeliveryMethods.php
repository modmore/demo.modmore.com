id: 25
name: scDeliveryMethods
description: 'Lists the delivery methods processed inside chunks'
category: SimpleCart
properties: 'a:5:{s:11:"deliveryKey";a:7:{s:4:"name";s:11:"deliveryKey";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:14:"deliveryMethod";s:7:"lexicon";N;s:4:"area";s:0:"";}s:17:"placeholderPrefix";a:7:{s:4:"name";s:17:"placeholderPrefix";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:7:"method.";s:7:"lexicon";N;s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:16:"scDeliveryMethod";s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"filterMethod";a:7:{s:4:"name";s:12:"filterMethod";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:8:"selected";a:7:{s:4:"name";s:8:"selected";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}}'

-----

/**
 * Lists the delivery methods processed inside chunks
 *
 * @author Bert Oost at OostDesign <support@modxsimplecart.com>
 * @package simplecart
 */
$sc = $modx->getService('simplecart','SimpleCart',$modx->getOption('simplecart.core_path',null,$modx->getOption('core_path').'components/simplecart/').'model/simplecart/',$scriptProperties);
if (!($sc instanceof SimpleCart)) return '';

$controller = $sc->loadController('Methods');
$output = $controller->run($scriptProperties);

return $output;
id: 23
name: scCreateComment
description: "Creates an order comment\nNOTE: Works as FormIt hook, use it that way!! Pass the properties in the FormIt call"
category: SimpleCart
properties: null

-----

/**
 * Creates an order comment
 * NOTE: Works as FormIt hook, use it that way!! Pass the properties in the FormIt call
 *
 * @author Bert Oost at OostDesign <support@modxsimplecart.com>
 * @package simplecart
 */
$sc = $modx->getService('simplecart','SimpleCart',$modx->getOption('simplecart.core_path',null,$modx->getOption('core_path').'components/simplecart/').'model/simplecart/',$scriptProperties);
if (!($sc instanceof SimpleCart)) return '';

$controller = $sc->loadController('Order');
$controller->setAction('list');
$controller->run($scriptProperties);

return true;
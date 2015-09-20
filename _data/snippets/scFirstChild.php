id: 32
name: scFirstChild
description: 'Finds the first child from the given id'
category: SimpleCart
properties: null

-----

/**
 * Finds the first child from the given id
 * Returns the first child id or the given id on failure
 *
 * @author Bert Oost at OostDesign <support@modxsimplecart.com>
 * @package simplecart
 *
 * Examples:
 *
 * As output filter:
 *   [[*id:firstChildId]]
 *
 * As snippet:
 *   [[firstChildId? &id=`[[*id]]`]]
 */

$id = (!empty($input)) ? $input : false;
if(!empty($id)) { $id = $modx->getOption('id', $scriptProperties, $modx->resource->get('id')); }

// select the first child
$c = $modx->newQuery('modResource');
$c->select('`modResource`.`id`');
$c->where(array(
  'parent' => $id,
  'published' => true
));
$c->sortby('menuindex', 'ASC');
$c->limit(1);

$child = $modx->getObject('modResource', $c);

if(!empty($child) && $child instanceof modResource) {
  
  return $child->get('id');
}

return $id;
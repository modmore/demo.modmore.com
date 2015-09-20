id: 9
name: SimpleCart
description: 'SimpleCart events handler'
category: SimpleCart
properties: null

-----

/**
 * Handles plugin events for SimpleCart's Custom TV
 * 
 * @package simplecart
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var string $mode (new or upd)
 */

$eventName = $modx->event->name;
if(!in_array($eventName, array(
    'OnManagerPageInit',
    'OnManagerPageBeforeRender',
    'OnSnipFormRender',
    'OnChunkFormRender',
    'OnTVInputRenderList',
    'OnTVOutputRenderList',
    'OnTVInputPropertiesList',
    'OnTVOutputRenderPropertiesList',
    'OnSiteRefresh',
))) {
    return '';
}

// load SimpleCart
$corePath = $modx->getOption('simplecart.core_path', null, $modx->getOption('core_path').'components/simplecart/');
$cart = $modx->getService('simplecart', 'SimpleCart', $corePath.'model/simplecart/', $scriptProperties);
if (!($cart instanceof SimpleCart)) { return ''; }

switch($eventName) {
    case 'OnManagerPageInit':
        $cssFile = $modx->getOption('simplecart.assets_url',null,$modx->getOption('assets_url').'components/simplecart/').'fontawesome/fonts.css';
        $modx->regClientCSS($cssFile);

        $cssFile = $modx->getOption('simplecart.assets_url',null,$modx->getOption('assets_url').'components/simplecart/').'css/mgr.css';
        $modx->regClientCSS($cssFile);

        $jsFile = $modx->getOption('simplecart.assets_url',null,$modx->getOption('assets_url').'components/simplecart/').'js/mgr/simplecart.js';
        $modx->regClientStartupScript($jsFile);
    break;
    
    case 'OnManagerPageBeforeRender':
        $modx->lexicon->load('simplecart:resource');
        
        $addIconToToolbar = (boolean) $modx->getOption('simplecart.add_icon_to_toolbar', null, 1);
        if (!$addIconToToolbar) { return; }
        
        $defaultTemplate = $modx->getOption('simplecart.default_category_template', null, '');
        
        $actionParams = array('class_key' => 'scCategoryResource');
        if(!empty($defaultTemplate)) {
            $actionParams['template'] = $defaultTemplate;
        }

        // add icon to the tree top buttons
        $assetsUrl = $modx->simplecart->config['imgsUrl'];
        $controller->addHTML("<script type=\"text/javascript\">
        var scTreeToolbarInitiated = false;
        Ext.onReady( function() {
            var tree = Ext.getCmp('modx-resource-tree'),
                tb = tree.getTopToolbar();
                
            if (!scTreeToolbarInitiated) {
                scTreeToolbarInitiated = true;
                setTimeout(function() {
                    tb.insertButton(4, {
                        cls: 'simplecart-shopping-cart',
                        icon: '{$assetsUrl}mgr/icon-cart-add.png', /* Deprecated: icon no longer used by MODX 2.3 */
                        tooltip: '".$modx->lexicon('simplecart.resource.category_add')."',
                        handler: function() {
                            var action = (MODx.action && MODx.action['resource/create']) ? MODx.action['resource/create'] : 'resource/create';
                            MODx.loadPage(action, '".http_build_query($actionParams)."');
                        }
                    });
                    tb.doLayout();
                }, 150);
            }
        });
        </script>");
    break;

    // ---------------------------

    case 'OnSnipFormRender':
        if((!isset($snippet) || empty($snippet) || !is_object($snippet)) && $mode != 'upd') { return ''; }

        $snippetName = $snippet->get('name');
        if(substr($snippetName, 0, 2) == 'sc') {

            $modx->controller->addLexiconTopic('simplecart:default');
            $jsFile = $modx->getOption('simplecart.assets_url',null,$modx->getOption('assets_url').'components/simplecart/').'js/mgr/simplecart.js';
            $modx->controller->addJavascript($jsFile);
            $modx->controller->addHtml('<script type="text/javascript">
            SimpleCart.config.baseDocsUrl = "'.$modx->simplecart->config['baseDocsUrl'].'";
            MODx.helpUrl = "snippets/'.strtolower($snippetName).'";
            </script>');
        }
    break;

    case 'OnChunkFormRender':
        if((!isset($chunk) || empty($chunk) || !is_object($chunk)) && $mode != 'upd') { return ''; }

        $chunkName = $chunk->get('name');
        if(substr($chunkName, 0, 2) == 'sc') {

            $modx->controller->addLexiconTopic('simplecart:default');
            $jsFile = $modx->getOption('simplecart.assets_url',null,$modx->getOption('assets_url').'components/simplecart/').'js/mgr/simplecart.js';
            $modx->controller->addJavascript($jsFile);
            $modx->controller->addHtml('<script type="text/javascript">
            SimpleCart.config.baseDocsUrl = "'.$modx->simplecart->config['baseDocsUrl'].'";
            MODx.helpUrl = "chunks/'.strtolower($chunkName).'";
            </script>');
        }
    break;
    
    // ---------------------------
    
    case 'OnTVInputRenderList':
        $modx->lexicon->load('simplecart:tvrenders');
        $modx->event->output($cart->config['corePath'].'elements/tv/input/');
    break;
    
    case 'OnTVOutputRenderList':
        $modx->lexicon->load('simplecart:tvrenders');
        $modx->event->output($cart->config['corePath'].'elements/tv/output/');
    break;
    
    case 'OnTVInputPropertiesList':
        $modx->lexicon->load('simplecart:tvrenders');
        $modx->event->output($cart->config['corePath'].'elements/tv/properties/input/');
    break;
    
    case 'OnTVOutputRenderPropertiesList':
        $modx->lexicon->load('simplecart:tvrenders');
        $modx->event->output($cart->config['corePath'].'elements/tv/properties/output/');
    break;

    case 'OnSiteRefresh':
        $modx->cacheManager->refresh(array(
            'simplecart' => array(),
        ));
        $modx->log(modX::LOG_LEVEL_INFO, 'SimpleCarts caching cleared...');
    break;
}
id: 14
name: AutoLogin
properties: 'a:0:{}'

-----

if ($modx->getOption('http_host') == 'demo.modmore.com') {
    $op = '<script type="text/javascript">
    Ext.onReady(function() {
        document.getElementById("modx-login-username").value = "demo";
        document.getElementById("modx-login-password").value = "demouser";
        document.getElementById("modx-login-btn").click();
    });
    </script>';
    
    $modx->event->output($op);
}
return;
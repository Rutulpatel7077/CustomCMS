<?php
/**
 * Page Name:pureChat.php
 * Author: Rutul Patel
 * Student Number: 200335158
 * Description of Page: This Page is script page for tghe pureChat live chat  for the CMS.
 */
?>

<body>
<script type='text/javascript' data-cfasync='false'>window.purechatApi = {
        l: [], t: [], on: function () {
            this.l.push(arguments);
        }
    };
    (function () {
        var done = false;
        var script = document.createElement('script');
        script.async = true;
        script.type = 'text/javascript';
        script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript';
        document.getElementsByTagName('HEAD').item(0).appendChild(script);
        script.onreadystatechange = script.onload = function (e) {
            if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
                var w = new PCWidget({c: '0c5d9b36-7051-4ec8-b6c2-40597facba73', f: true});
                done = true;
            }
        };
    })();</script>


</body>


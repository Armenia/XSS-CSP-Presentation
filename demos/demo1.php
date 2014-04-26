<?php header("X-XSS-Protection: 0"); ?>
<html>
    <head>
        <title>Demonstration</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/monokai.css">
    </head>
<body>
    <h1>Demo page</h1>
    POC: <a href="?param=<script>alert('XSS')</script>">?param=&lt;script&gt;alert('XSS')&lt;/script&gt;</a>
    <br />
    POC: <a href="?param=<img+src='http://images2.fanpop.com/image/photos/10500000/Cute-Kitty-Wallpaper-cats-10533694-1024-768.jpg'/>">?param=&lt;img+src='http://images2.fanpop.com/image/photos/10500000/Cute-Kitty-Wallpaper-cats-10533694-1024-768.jpg'&gt;</a>
    <br />
    POC: <a href="?param=<script>document.body.innerHTML='<div class=\'defaced\'>Defaced!</div>';</script><script>document.write(\'<script type=\u022;text\/undefined\u022;>\');">?param=&lt;script&gt;document.body.innerHTML='&lt;div style='color:red;'&gt;Defaced!&lt;/div&gt;';&lt;/script&gt;&lt;script&gt;document.write('&lt;script type=u022;text/undefinedu022;&gt;');</a>
    
    <div class="content">
        <!-- Vulnerability -->
        I want to echo something here:
        <?php
        echo $_GET['param'];
        ?>
        <!-- end of Vulnerability -->
    </div> 
    <hr />
    <h4>Page Source:</h4>
    <div class="filename">File: <?php echo basename(__FILE__);?></div>
    <pre class="monokai"><code><?php echo htmlentities(file_get_contents(__FILE__)); ?></code></pre>
    <script src="js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>

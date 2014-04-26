<html>
    <head>
        <title>Demonstration</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/monokai.css">
    </head>
<body>
    <h1>Demo page</h1>
    POC: <a href='?param=alert("XSS")'>?param=alert('XSS')</a>
    
    <div class="content">
        <!-- Vulnerability -->
            <script>
                eval('<?php echo $_GET['param'];?>');
            </script>
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


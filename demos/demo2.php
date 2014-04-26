<html>
    <head>
        <title>Demonstration</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/monokai.css">
    </head>
<body>
    <h1>Demo page</h1>
    POC: <a href="#param=<img src='http://images2.fanpop.com/image/photos/10500000/Cute-Kitty-Wallpaper-cats-10533694-1024-768.jpg'/>">#param=&lt;img src='http://images2.fanpop.com/image/photos/10500000/Cute-Kitty-Wallpaper-cats-10533694-1024-768.jpg'/&gt;</a>
    <div class="content" id="content">

        <!-- Vulnerability -->
        <a href="#" onclick="document.getElementById('content').innerHTML+='<br/>' + window.location.href; return false;">Click me</a>
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

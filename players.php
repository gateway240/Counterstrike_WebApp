<!doctype html>



<html lang="en-US">
  <head>
    <title>Players</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">

    <!-- Begin Jekyll SEO tag v2.4.0 -->
<title>Players | marxy.net</title>
<meta name="generator" content="Jekyll v3.6.2" />
<meta property="og:title" content="Players" />
<meta property="og:locale" content="en_US" />
<meta name="description" content="Demos and statistics from CS:GO 10 mans with friends." />
<meta property="og:description" content="Demos and statistics from CS:GO 10 mans with friends." />
<link rel="canonical" href="http://marxy.net/players" />
<meta property="og:url" content="http://marxy.net/players" />
<meta property="og:site_name" content="marxy.net" />
<script type="application/ld+json">
{"description":"Demos and statistics from CS:GO 10 mans with friends.","@type":"WebPage","url":"http://marxy.net/players","headline":"Players","@context":"http://schema.org"}</script>
<!-- End Jekyll SEO tag -->

    <link href='https://fonts.googleapis.com/css?family=Lato:300italic,700italic,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./assets/css/style.css?v=">
    <script src="./assets/js/scale.fix.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!--<link type="text/css" rel="stylesheet" href="./assets/css/materialize.min.css"  media="screen,projection"/>-->

    <link rel="shortcut icon" href="./assets/images/favicon.ico">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="./assets/js/materialize.min.js"></script>
    <div class="wrapper">
      <header>
      <font style="font-weight:bold" size="3" color="#333">Marxy.net</font>
      </header>
      
<style>
#navBar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

#navItem {
    float: left;
}

#navItem > a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
#navItem > a:hover {
    background-color: #111;
}
</style>
<?php include'menu.php';?>


      <section>

      
<div class="container">
    <div class="row">
    <?php include './queries/users.php';?>
       
    </div>
</div>

      </section>
    </div>
    <footer>
    
    
      <p>Hosted on GitHub Pages &mdash; Theme by <a href="https://github.com/orderedlist">orderedlist</a></p>
    </footer>
    <!--[if !IE]><script>fixScale(document);</script><![endif]-->
    <script>
        var acc = document.getElementsByClassName("clickablerow");
        
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            var win = window.open(this.getAttribute("href"), "_blank");
            //window.location = this.getAttribute("href");
          });
        }
    </script>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            } 
        });
        }
    </script>
    
      <script type="text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-111346607-1', 'auto');
        ga('send', 'pageview');
      </script>
    
  </body>
</html>
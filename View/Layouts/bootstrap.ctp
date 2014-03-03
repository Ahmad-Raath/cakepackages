
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $this->Sham->out('charset'); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php echo $this->Sham->out(null, array('skip' => array('charset'))); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php $baseUrl = Router::url('/', true); ?>
    <link rel="shortcut icon" href="<?php echo $baseUrl; ?>favicon.ico" />
    <!-- For iPhone 4 with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $baseUrl; ?>apple-touch-icon-114x114-precomposed.png">
    <!-- For first-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $baseUrl; ?>apple-touch-icon-72x72-precomposed.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo $baseUrl; ?>apple-touch-icon-precomposed.png">


    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <?php
      $_theme = 'default';
    ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php if (Configure::read('Environment.name') == 'production') : ?>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-743287-12']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <?php endif; ?>
  </head>

  <body class="<?php echo $_bodyClass; ?> theme-<?php echo $_theme ?>" id="<?php echo $_bodyId; ?>">

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-static-top navbar-sm" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://cakephp.org">CakePHP</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Downloads</a>
              <ul class="dropdown-menu">
                <li><a href="https://github.com/cakephp/cakephp/tags">Releases</a></li>
                <li><a href="http://pear.cakephp.org">Pear channel</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Documentation</a>
              <ul class="dropdown-menu">
                <li class="cake-version">
                  <a href="http://api.cakephp.org">API</a>
                  <ul class="third-level">
                    <li><a href="http://api.cakephp.org/2.4">2.4</a>&nbsp;|</li>
                    <li><a href="http://api.cakephp.org/2.3">2.3</a>&nbsp;|</li>
                    <li><a href="http://api.cakephp.org/1.3">1.3</a>&nbsp;|</li>
                    <li><a href="http://api.cakephp.org/1.2">1.2</a>&nbsp;|</li>
                    <li><a href="http://api.cakephp.org/1.1">1.1</a></li>
                  </ul>
                </li>
                <li class="cake-version">
                  <a href="http://book.cakephp.org">Book</a>
                  <ul class="third-level">
                    <li><a href="http://book.cakephp.org/2.0/en/">2.x</a>&nbsp;|</li>
                    <li><a href="http://book.cakephp.org/1.3/en/">1.3</a>&nbsp;|</li>
                    <li><a href="http://book.cakephp.org/1.2/en/">1.2</a>&nbsp;|</li>
                    <li><a href="http://book.cakephp.org/1.1/en/">1.1</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="http://community.cakephp.org/" class="dropdown-toggle" data-toggle="dropdown">Community</a>
              <ul class="dropdown-menu">
                <li><a href="http://webchat.freenode.net/?channels=cakephp&amp;uio=MT1mYWxzZSY5PXRydWUmMTE9MjQ2b8">Help &amp; Support</a></li>
                <li><a href="https://github.com/cakephp/cakephp/issues">Issues</a></li>
                <li><a href="http://bakery.cakephp.org">The Bakery</a></li>
                <li><a href="http://stackoverflow.com/tags/cakephp">Stack Overflow</a></li>
                <li><a href="http://www.facebook.com/groups/cake.community">Facebook Group</a></li>
                <li><a href="http://goo.gl/mSC0s">Google+ Community</a></li>
                <li><a href="http://www.youtube.com/user/CakePHP">YouTube Channel</a></li>
                <li><a href="http://twitter.com/CakePHP">Follow us on Twitter</a></li>
                <li><a href="http://groups.google.com/group/cake-php">Google Group</a></li>
                <li><a href="http://github.com/cakephp/cakephp/contributors">Contributors</a></li>
                <li><a href="http://plugins.cakephp.org">Plugins &amp; Packages</a></li>
                <li><a href="http://community.cakephp.org/get-involved">Get Involved</a></li>
                <li><a href="http://community.cakephp.org/guidelines">Guidelines</a></li>
                <li><a href="http://cakefest.org">CakeFest</a></li>
                <li><a href="http://cakephp.org/logos">Logo</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
              <ul class="dropdown-menu">
                <li><a href="http://cakephp.org/services/certification">Certification</a></li>
                <li><a href="http://cakephp.org/services/consultation">Consultation</a></li>
                <li><a href="http://cakephp.org/services/support">Support</a></li>
                <li><a href="http://training.cakephp.org">Training</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
      <?php echo $this->Session->flash(); ?>
      <div class="row">
        <div class="col-md-12">
          <?php echo $content_for_layout; ?>
        </div>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
      !window.jQuery &&
      document.write(unescape('%3Cscript src="<?php echo $this->Html->url("/js/jquery-1.11.0.min.js") ?>"%3E%3C/script%3E'));
    </script>
    <script type="text/javascript">
      var App = App || {};
      App.basePath = "<?php echo $this->webroot; ?>";
      <?php
        $jsUser = array();
        $userData = $this->Session->read('Auth.User');

        if (!empty($userData['username'])) {
          $jsUser['username'] = $userData['username'];
        }
        if (!empty($userData['slug'])) {
          $jsUser['slug'] = $userData['slug'];
        }
      ?>
      App.user = <?php echo empty($jsUser) ? '{}' : json_encode($jsUser); ?>;

      <?php if (!empty($disqus)) : ?>
        var disqus_developer = <?php echo Configure::read('Disqus.disqus_developer') ?>;
        <?php foreach ($disqus as $k => $v) : ?>
          <?php printf("var %s = '%s';\n", $k, $v) ?>
        <?php endforeach; ?>

        (function() {
          var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
          dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
          (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
      <?php endif; ?>

      <?php if (Configure::read('Environment.name') == 'production') : ?>
        $('.github-external').click(function(e) {
          e = e || window.event;
          target = e.target || e.srcElement;
          _gaq.push(['_trackEvent', 'click', 'github-external', $(target).attr('package-name')]);
        });
        $('.blog-external').click(function(e) {
          e = e || window.event;
          target = e.target || e.srcElement;
          _gaq.push(['_trackEvent', 'click', 'blog-external', $(target).text()]);
        });
        $('.video-external').click(function(e) {
          e = e || window.event;
          target = e.target || e.srcElement;
          _gaq.push(['_trackEvent', 'click', 'video-external', $(target).text()]);
        });
        $('.download-link').click(function(e) {
          e = e || window.event;
          target = e.target || e.srcElement;
          _gaq.push(['_trackEvent', 'click', 'download-link', $(target).attr('package-id')]);
        });
      <?php endif; ?>

    </script>
    <?php echo $scripts_for_layout; ?>
    <?php echo $this->AssetCompress->script('default'); ?>
  </body>
</html>

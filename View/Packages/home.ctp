<section class="highlight clearfix">
  <span class="tag">featured</span>
  <p class="description">
    <span class="title">debug_kit:</span>&nbsp;
    The official method of debugging your applications
  </p>
  <p class="button">
    <a href="/p/52-debug_kit" rel="nofollow">Get it!</a>
  </p>
</section>

<!-- <section class="contribute">
  <div class="bubble-top bubble-border">
    <h2 class="header">Use and Share Open Source CakePHP Code</h2>
  </div>
  <div class="bubble-bottom clearfix">
    <article>
      Signup
    </article>
    <article>
      Create a Package
    </article>
    <article>
      Install Plugins
    </article>
    <article>
      Follow Repositories
    </article>
  </div>
</section> -->

<section class="search">
  <h2>Search For Packages</h2>
  <div>
    <?php echo $this->Form->create(false, array('action' => 'index', 'class' => 'form-horizontal'));?>
      <div class="form-group">
        <div class="col-sm-11">
          <?php
            echo $this->Form->input('query', array(
              'class' => 'query form-control',
              'div' => false,
              'label' => false,
              'placeholder' => __('search (ex. debug watchers:5 forks:8 has:component)')
            ));
          ?>
        </div>
        <?php
          echo $this->Form->button(__('Search'), array(
            'class' => 'icon search btn btn-default col-sm-1',
            'div' => false,
          ));
        ?>
      </div>
    <?php echo $this->Form->end();?>
  </div>
</section>

<section class="lists">
  <article class="popular-packages">
    <h3 class="section-heading">Popular Packages</h3>
    <ul class="popular-list">
      <li><?php echo $this->Resource->package('CakePHP', 'debug_kit'); ?></li>
      <li><?php echo $this->Resource->package('lorenzo', 'MongoCake'); ?></li>
      <li><?php echo $this->Resource->package('markstory', 'asset_compress'); ?></li>
      <li><?php echo $this->Resource->package('dkullmann', 'CakePHP-Elastic-Search-DataSource'); ?></li>
      <li><?php echo $this->Resource->package('josegonzalez', 'upload'); ?></li>
      <li><?php echo $this->Resource->package('CakeDC', 'migrations'); ?></li>
      <li><?php echo $this->Resource->package('FriendsOfCake', 'crud'); ?></li>
      <li><?php echo $this->Resource->package('slywalker', 'cakephp-plugin-boost_cake'); ?></li>
      <li><?php echo $this->Resource->package('FriendsOfCake', 'app-template'); ?></li>
    </ul>
  </article>
</section>

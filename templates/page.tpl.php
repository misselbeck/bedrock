<div id="page">

  <header id="header" role="banner">
    <div id="branding">
      <a id="logo" href="/">bedrock</a>
    </div>
  
    <?php if($page['header']): ?>
      <?php print render($page['header']); ?>
    <?php endif; ?>
  </header>
  
  <nav role="navigation">
    <button type="button" id="nav-toggle">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <?php print render($page['navigation']); ?>
  </nav><!-- /#navigation -->
    
  <div id="main" class="clearfix">
    <div id="content" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print render($tabs); ?>
      <?php print $messages; ?>
      <?php print render($page['content']); ?>
    </div><!--/#content-->
      
    <?php if($page['sidebar_first']): ?>
      <aside id="sidebar-first">
        <?php print render($page['sidebar_first']); ?>
      </aside>  
    <?php endif; ?>
      
    <?php if($page['sidebar_second']): ?>
      <aside id="sidebar-second">
        <?php print render($page['sidebar_second']); ?>
      </aside>  
    <?php endif; ?>
  </div><!--/#main-->

  <footer role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
          
</div><!--/#page-->
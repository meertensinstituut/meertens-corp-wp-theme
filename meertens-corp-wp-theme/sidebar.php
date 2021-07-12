<aside class="aside paddingSite mLineLeft">
  <div class="asideInner">
    <div class="mBranding mMarginBottom">
      <a href="/wp-meertens-corp/"><img src="<?php bloginfo('template_url'); ?>/images/logo_Meertens.png" alt="Logo Meertens Instituut"></a>
      <div class="mSubTitle mText--XS">Onderzoek en documentatie <br> van Nederlandse taal en cultuur</div>
    </div>


    <nav class="mMainNavgation mMarginBottom">
      <?php
        $cleanMenu = wp_nav_menu( array(
          'echo' => false,
          'depth'=> 2,
        ) );
        echo strip_tags($cleanMenu, "<a><ul><li>");
        //echo $cleanMenu;

      ?>
    </nav>


    <div>NL - ENG</div>

  </div>
</aside>

<div class="mSubNavLayer" id="subnav">
  <div class="mSubNav mLineLeft paddingSite">
    <div><button type="button" name="button" onclick="hideSubnav()">close</button></div>
    <nav class="mMainNavgation mSubNavInner" id="subnavInner"></nav>
    <div></div>
  </div>
</div>

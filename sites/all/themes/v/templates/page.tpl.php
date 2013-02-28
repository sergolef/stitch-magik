
<div id="body1">
    <div class="body1_top"> </div>
    <div class="body1_center"> </div>
    <div class="body1_bottom"> </div>
</div>
<div id='header'>
    <div class="header_top">
        <h1 class="sate_name">
            <?php print render($page['header']); ?>
            Stitch Magic
        </h1>
    </div>
    <div class="search_form">
        <div class="internal_box">
            <p class="search_name"></p>
        </div>
        <div class="internal_box">
            <p class="input_field"><?php print render($page['search']); ?></p>

        </div>
    </div>

    <div id="search"></div>



    <div id=menu><?php print render($page['h_menu']); ?></div>



    <div class="central_picture" style=""><?php print render($page['slider']); ?></div>
</div>

<div id="body2">

    <div id='left_bar'>
        <?php print render($page['sidebar_left']); ?>
    </div>

    <div id="content" class="column" role="main">
        <?php print render($page['highlighted']); ?>
        <?php print $breadcrumb; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
            <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
    </div><!-- /#content -->
</div>

<div id="triptych-wrapper"><div id="triptych" class="clearfix">
        <div class="footer_coloumn">1<?php print render($page['triptych_first']); ?></div>
        <div class="separator"></div>
        <div class="footer_coloumn">2<?php print render($page['triptych_middle']); ?></div>
        <div class="separator"></div>
        <div class="footer_coloumn">3<?php print render($page['triptych_last']); ?></div>
    </div></div> <!-- /#triptych, /#triptych-wrapper -->


<div class="clear_fix">&nbsp;</div>
<div id='footer'>
    <div class="body1_top"> </div>
    <div id="top_footer">
        <div id="coloums">

            <div class="footer_coloumn">
                <?php print render($page['prefooter1']); ?>
            </div>
            <div class="footer_coloumn">
                <?php print render($page['prefooter2']); ?>
            </div>
            <div class="footer_coloumn">
                <?php print render($page['prefooter3']); ?>
            </div>
        </div>
        <div class="footer_line"> </div>
        <div id="sign_up_form">

        </div>
    </div>
    <div id="bottom_footer">
        <p>Copyright by Natashenka.Mir 2012</p>
        <?php print render($page['footer']); ?>
    </div>
</div>


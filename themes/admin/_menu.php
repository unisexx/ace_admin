<a class="menu-toggler" id="menu-toggler" href="#">
    <span class="menu-text"></span>
</a>
                
<div class="sidebar" id="sidebar">
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="icon-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="icon-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="icon-group"></i>
            </button>

            <button class="btn btn-danger">
                <i class="icon-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- #sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li <?php echo menu_active('demo',false,'index')?>>
            <a href="demo/admin/demo/index">
                <i class="icon-dashboard"></i>
                <span class="menu-text"> Dashboard </span>
            </a>
        </li>

        <li <?php echo menu_active('demo',false,'typography')?>>
            <a href="demo/admin/demo/typography">
                <i class="icon-text-width"></i>
                <span class="menu-text"> Typography </span>
            </a>
        </li>

        <li <?php echo menu_active('demo',false,'elements','active open')?>
            <?php echo menu_active('demo',false,'buttons','active open')?>
            <?php echo menu_active('demo',false,'treeview','active open')?>
            <?php echo menu_active('demo',false,'jqueryui','active open')?>
            <?php echo menu_active('demo',false,'nestablelist','active open')?>>
            <a href="#" class="dropdown-toggle">
                <i class="icon-desktop"></i>
                <span class="menu-text"> UI Elements </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li <?php echo menu_active('demo',false,'elements')?>>
                    <a href="demo/admin/demo/elements">
                        <i class="icon-double-angle-right"></i>
                        Elements
                    </a>
                </li>

                <li <?php echo menu_active('demo',false,'buttons')?>>
                    <a href="demo/admin/demo/buttons">
                        <i class="icon-double-angle-right"></i>
                        Buttons &amp; Icons
                    </a>
                </li>

                <li <?php echo menu_active('demo',false,'treeview')?>>
                    <a href="demo/admin/demo/treeview">
                        <i class="icon-double-angle-right"></i>
                        Treeview
                    </a>
                </li>

                <li <?php echo menu_active('demo',false,'jqueryui')?>>
                    <a href="demo/admin/demo/jqueryui">
                        <i class="icon-double-angle-right"></i>
                        jQuery UI
                    </a>
                </li>

                <li <?php echo menu_active('demo',false,'nestablelist')?>>
                    <a href="demo/admin/demo/nestablelist">
                        <i class="icon-double-angle-right"></i>
                        Nestable Lists
                    </a>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-double-angle-right"></i>

                        Three Level Menu
                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="#">
                                <i class="icon-leaf"></i>
                                Item #1
                            </a>
                        </li>

                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-pencil"></i>

                                4th level
                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="#">
                                        <i class="icon-plus"></i>
                                        Add Product
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-eye-open"></i>
                                        View Products
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <li <?php echo menu_active('demo',false,'tables','active open')?>
            <?php echo menu_active('demo',false,'jqgrid','active open')?>>
            <a href="#" class="dropdown-toggle">
                <i class="icon-list"></i>
                <span class="menu-text"> Tables </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li <?php echo menu_active('demo',false,'tables')?>>
                    <a href="demo/admin/demo/tables">
                        <i class="icon-double-angle-right"></i>
                        Simple &amp; Dynamic
                    </a>
                </li>

                <li <?php echo menu_active('demo',false,'jqgrid')?>>
                    <a href="demo/admin/demo/jqgrid">
                        <i class="icon-double-angle-right"></i>
                        jqGrid plugin
                    </a>
                </li>
            </ul>
        </li>

        <li <?php echo menu_active('demo',false,'form_elements','active open')?>
            <?php echo menu_active('demo',false,'form_wizard','active open')?>
            <?php echo menu_active('demo',false,'wysiwyg','active open')?>
            <?php echo menu_active('demo',false,'dropzone','active open')?>>
            <a href="#" class="dropdown-toggle">
                <i class="icon-edit"></i>
                <span class="menu-text"> Forms </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li <?php echo menu_active('demo',false,'form_elements')?>>
                    <a href="demo/admin/demo/form_elements">
                        <i class="icon-double-angle-right"></i>
                        Form Elements
                    </a>
                </li>

                <li <?php echo menu_active('demo',false,'form_wizard')?>>
                    <a href="demo/admin/demo/form_wizard">
                        <i class="icon-double-angle-right"></i>
                        Wizard &amp; Validation
                    </a>
                </li>

                <li <?php echo menu_active('demo',false,'wysiwyg')?>>
                    <a href="demo/admin/demo/wysiwyg">
                        <i class="icon-double-angle-right"></i>
                        Wysiwyg &amp; Markdown
                    </a>
                </li>

                <li <?php echo menu_active('demo',false,'dropzone')?>>
                    <a href="demo/admin/demo/dropzone">
                        <i class="icon-double-angle-right"></i>
                        Dropzone File Upload
                    </a>
                </li>
            </ul>
        </li>

        <li <?php echo menu_active('demo',false,'widgets')?>>
            <a href="demo/admin/demo/widgets">
                <i class="icon-list-alt"></i>
                <span class="menu-text"> Widgets </span>
            </a>
        </li>

        <li>
            <a href="calendar.html">
                <i class="icon-calendar"></i>

                <span class="menu-text">
                    Calendar
                    <span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">
                        <i class="icon-warning-sign red bigger-130"></i>
                    </span>
                </span>
            </a>
        </li>

        <li>
            <a href="gallery.html">
                <i class="icon-picture"></i>
                <span class="menu-text"> Gallery </span>
            </a>
        </li>

        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-tag"></i>
                <span class="menu-text"> More Pages </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="profile.html">
                        <i class="icon-double-angle-right"></i>
                        User Profile
                    </a>
                </li>

                <li>
                    <a href="inbox.html">
                        <i class="icon-double-angle-right"></i>
                        Inbox
                    </a>
                </li>

                <li>
                    <a href="pricing.html">
                        <i class="icon-double-angle-right"></i>
                        Pricing Tables
                    </a>
                </li>

                <li>
                    <a href="invoice.html">
                        <i class="icon-double-angle-right"></i>
                        Invoice
                    </a>
                </li>

                <li>
                    <a href="timeline.html">
                        <i class="icon-double-angle-right"></i>
                        Timeline
                    </a>
                </li>

                <li>
                    <a href="login.html">
                        <i class="icon-double-angle-right"></i>
                        Login &amp; Register
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-file-alt"></i>

                <span class="menu-text">
                    Other Pages
                    <span class="badge badge-primary ">5</span>
                </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="faq.html">
                        <i class="icon-double-angle-right"></i>
                        FAQ
                    </a>
                </li>

                <li>
                    <a href="error-404.html">
                        <i class="icon-double-angle-right"></i>
                        Error 404
                    </a>
                </li>

                <li>
                    <a href="error-500.html">
                        <i class="icon-double-angle-right"></i>
                        Error 500
                    </a>
                </li>

                <li>
                    <a href="grid.html">
                        <i class="icon-double-angle-right"></i>
                        Grid
                    </a>
                </li>

                <li>
                    <a href="blank.html">
                        <i class="icon-double-angle-right"></i>
                        Blank Page
                    </a>
                </li>
            </ul>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-collapse" id="sidebar-collapse">
        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
    </div>

    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>
</div>

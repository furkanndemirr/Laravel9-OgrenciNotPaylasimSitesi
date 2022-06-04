<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">

        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li>
                        <a href="/admin"><i class="fa fa-home" aria-hidden="true" style="color: #0e9f6e"></i><span>Dashboard</span></a>
                    </li>

                    <li>
                        <a href="/admin/category"><i class="fa fa-th" aria-hidden="true" style="color: yellow"></i><span>Categories</span></a>
                    </li>
                    <li>
                        <a href="/admin/content"><i class="fa fa-ellipsis-v" aria-hidden="true" style="color: #0a6aa1"></i><span>Content</span></a>
                    </li>
                    <li>
                        <a href="{{route('admin.comment.index')}}"><i class="fa fa-comments" aria-hidden="true" style="color: black"></i><span>Comments</span></a>
                    </li>
                    <li>
                        <a href="{{route('admin.faq.index')}}"><i class="fa fa-warning" aria-hidden="true" style="color: red"></i><span>FAQ</span></a>
                    </li>
                    <li>
                        <a href="{{route('admin.message.index')}}"><i class="fa fa-envelope" aria-hidden="true" style="color: #6f42c1"></i><span>Messages</span></a>
                    </li>
                    <li>
                        <a href="/admin/users"><i class="fa fa-users" aria-hidden="true" style="color: #888a85"></i><span>Users</span></a>
                    </li>
                    <li>
                        <a href="/admin/social"><i class="fa fa-flickr" aria-hidden="true" style="color: #e96ba8"></i><span>Social</span></a>
                    </li>
                </ul>
            </nav>

            <hr class="separator" />

            <div class="sidebar-widget ">
                <div class="widget-header">
                    <h6 style="color: #cccccc">LABELS</h6>
                    <div class="widget-toggle ">+</div>
                </div>
                <div class="widget-content">
                    &nbsp;<li class="fa fa-gears" style="color: #cccccc"  >&nbsp;&nbsp;<a href="/admin/setting" style="color: #cccccc;font-size: 16px" >Settings</a> </li>

                </div>
            </div>

        </div>

    </div>

</aside>
<!-- end: sidebar -->

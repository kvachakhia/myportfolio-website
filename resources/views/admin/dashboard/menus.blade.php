<li>
    <a href="/dashboard"><i class="mdi mdi-gauge"></i> <span>Dashboard</span></a>
</li>

<li class="menu-list"><a href=""><i class="mdi mdi-buffer"></i> <span>Pages</span></a>
    <ul class="child-list" style="display: block;">
        <li class="{{ (request()->is('dashboard/page/home')) ? 'active' :'' }}"><a href="/dashboard/page/home">Home</a></li>
        <li class="{{ (request()->is('dashboard/page/about')) ? 'active' :'' }}"><a href="/dashboard/page/about">About</a></li>
        <li class="{{ (request()->is('dashboard/page/resume')) ? 'active' :'' }}"><a href="/dashboard/page/resume">Resume</a></li>
        <li class="{{ (request()->is('dashboard/page/portfolio')) ? 'active' :'' }}"><a href="/dashboard/page/portfolio">Portfolio</a></li>
        <li class="{{ (request()->is('dashboard/page/blogs')) ? 'active' :'' }}"><a href="/dashboard/page/blogs">Blogs</a></li>
        <li class="{{ (request()->is('dashboard/page/services')) ? 'active' :'' }}"><a href="/dashboard/page/services">Services</a></li>
        <li class="{{ (request()->is('dashboard/page/contact')) ? 'active' :'' }}"><a href="/dashboard/page/contact">Contact</a></li>
    </ul>
</li>

<li class="menu"><a href="/dashboard/menus"><i class="ti-menu-alt"></i> <span>Menus</span></a></li>
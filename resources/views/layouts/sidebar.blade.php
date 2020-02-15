<style>
    aside li:hover,
    aside li:focus {
        background: rgba(0, 0, 0, 0.075);
        color: #000;
    }

    aside .nav-item {
        padding: 10px;
    }

    aside .nav-item.active {
        background: rgba(0, 0, 0, 0.125);
        color: #111;
    }
</style>

<aside class="navbar navbar-expand-lg bg-white" style="position: absolute; top: 20px; bottom: 0; width: 200px;">
    <ul class="navbar-nav nav-pills flex-column" style="width: 100%; text-align: center;">
        <li class="nav-item {{ Request::is(['dashboard']) ? 'active' : '' }}"><a class="nav-link"
                                                                                 href="{{ route('dashboard') }}"><i
                    class="fa fa-star"></i> Home</a></li>
        <li class="nav-item {{ Request::is('dashboard/settings') ? 'active' : '' }}"><a class="nav-link"
                                                                                        href="{{ route('dashboard.settings') }}"><i
                    class="fa fa-gear"></i> Settings</a></li>
        <li class="nav-item {{ Request::is('dashboard/users') ? 'active' : '' }}"><a class="nav-link"
                                                                                     href="{{ route('dashboard.users') }}"><i
                    class="fa fa-user"></i> Users</a></li>
        <li class="nav-item {{ Request::is('dashboard/posts') ? 'active' : '' }}"><a class="nav-link"
                                                                                     href="{{ route('dashboard.posts') }}"><i
                    class="fa fa-pencil"></i> Posts</a></li>
        <li class="nav-item {{ Request::is('dashboard/tags') ? 'active' : '' }}"><a class="nav-link"
                                                                                    href="{{ route('dashboard.tags') }}"><i
                    class="fa fa-hashtag"></i> Tags</a></li>
    </ul>
</aside>

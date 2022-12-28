<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/announcements') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.announcement.title') }}</a></li>
           <!-- <li class="nav-item"><a class="nav-link" href="{{ url('admin/calendars') }}"><i class="nav-icon icon-star"></i> {{ trans('admin.calendar.title') }}</a></li> -->
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/polls') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.poll.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/communicates') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.communicate.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/manage-courses') }}"><i class="nav-icon icon-graduation"></i> {{ trans('admin.manage-course.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/solves') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.solve.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/academics-administrations') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.academics-administration.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/cafeteria-menus') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.cafeteria-menu.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>

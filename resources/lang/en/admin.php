<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'announcement' => [
        'title' => 'Announcements',

        'actions' => [
            'index' => 'Announcements',
            'create' => 'New Announcement',
            'edit' => 'Edit :name',
            'will_be_published' => 'Announcement will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'link' => 'Link',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'calendar' => [
        'title' => 'Calendar',

        'actions' => [
            'index' => 'Calendar',
            'create' => 'New Calendar',
            'edit' => 'Edit :name',
            'will_be_published' => 'Calendar will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'event_time' => 'Event time',
            'event_location' => 'Event location',
            'link' => 'Link',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'poll' => [
        'title' => 'Poll',

        'actions' => [
            'index' => 'Poll',
            'create' => 'New Poll',
            'edit' => 'Edit :name',
            'will_be_published' => 'Poll will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'link' => 'Link',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'communicate' => [
        'title' => 'Communicate',

        'actions' => [
            'index' => 'Communicate',
            'create' => 'New Communicate',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'link' => 'Link',
            'enabled' => 'Enabled',
            
        ],
    ],

    'manage-course' => [
        'title' => 'Manage Courses',

        'actions' => [
            'index' => 'Manage Courses',
            'create' => 'New Manage Course',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'link' => 'Link',
            'enabled' => 'Enabled',
            
        ],
    ],

    'solve' => [
        'title' => 'Solve',

        'actions' => [
            'index' => 'Solve',
            'create' => 'New Solve',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'link' => 'Link',
            'enabled' => 'Enabled',
            
        ],
    ],

    'academics-administration' => [
        'title' => 'Academics Administration',

        'actions' => [
            'index' => 'Academics Administration',
            'create' => 'New Academics Administration',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'link' => 'Link',
            'enabled' => 'Enabled',
            
        ],
    ],

    'cafeteria-menu' => [
        'title' => 'Cafeteria Menu',

        'actions' => [
            'index' => 'Cafeteria Menu',
            'create' => 'New Cafeteria Menu',
            'edit' => 'Edit :name',
            'will_be_published' => 'CafeteriaMenu will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];
<?php

// Dentzone
Breadcrumbs::for('/', function ($trail) {
    $trail->push(config('app.name'), route('/'));
});

// Dentzone > Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->parent('/');
    $trail->push('Dashboard', route('dashboard'));
});

// Dentzone > Navigations
Breadcrumbs::for('navigations', function ($trail) {
    $trail->parent('/');
    $trail->push('Navigations', route('navigations.index'));
});
// Dentzone > Navigations > Create
Breadcrumbs::for('navigation-create', function ($trail) {
    $trail->parent('navigations');
    $trail->push('Create', route('navigations.create'));
});

// Dentzone > Navigations > Edit
Breadcrumbs::for('navigation-edit', function ($trail,$navigation) {
    $trail->parent('navigations');
    $trail->push('Edit',route('navigations.create',encrypt($navigation->id)));
});

// Dentzone > Shops
Breadcrumbs::for('shops', function ($trail) {
    $trail->parent('/');
    $trail->push('Shops', route('shops.index'));
});
// Dentzone > Shops > Create
Breadcrumbs::for('shop-create', function ($trail) {
    $trail->parent('shops');
    $trail->push('Create', route('shops.create'));
});

// Dentzone > Shops > Edit
Breadcrumbs::for('shop-edit', function ($trail,$shop) {
    $trail->parent('shops');
    $trail->push('Edit',route('shops.create',encrypt($shop->id)));
});




// Dentzone > Profile
Breadcrumbs::for('profile', function ($trail) {
    $trail->parent('/');
    $trail->push('Profile', route('profile.index'));
});
// Dentzone > Profile > Edit
Breadcrumbs::for('profile Edit', function ($trail,$profile) {
    $trail->parent('profile');
    $trail->push('Profile', route('profile',$profile->id));
});

// Dentzone > Roles
Breadcrumbs::for('roles', function ($trail) {
    $trail->parent('/');
    $trail->push('Roles', route('roles.index'));
});
// Dentzone > Roles > Create
Breadcrumbs::for('role-create', function ($trail) {
    $trail->parent('roles');
    $trail->push('Create', route('roles.create'));
});

// Dentzone > Roles > Edit
Breadcrumbs::for('role-edit', function ($trail,$role) {
    $trail->parent('roles');
    $trail->push('Edit',route('roles.create',encrypt($role->id)));
});

// Dentzone > Permissions
Breadcrumbs::for('permissions', function ($trail) {
    $trail->parent('/');
    $trail->push('Permissions', route('permissions.index'));
});
// Dentzone > Permissions > Create
Breadcrumbs::for('permission-create', function ($trail) {
    $trail->parent('permissions');
    $trail->push('Create', route('permissions.create'));
});

// Dentzone > Permissions > Edit
Breadcrumbs::for('permission-edit', function ($trail,$permission) {
    $trail->parent('permissions');
    $trail->push('Edit',route('permissions.create',encrypt($permission->id)));
});


// Dentzone > Users
Breadcrumbs::for('users', function ($trail) {
    $trail->parent('/');
    $trail->push('Users', route('users.index'));
});
// Dentzone > Permissions > Create
Breadcrumbs::for('user-create', function ($trail) {
    $trail->parent('users');
    $trail->push('Create', route('users.create'));
});

// Dentzone > Permissions > Edit
Breadcrumbs::for('user-edit', function ($trail,$user) {
    $trail->parent('users');
    $trail->push('Edit',route('users.create',encrypt($user->id)));
});

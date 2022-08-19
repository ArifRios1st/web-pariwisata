<?php // routes/breadcrumbs.php

use App\Models\Destination;
use App\Models\Order;
use App\Models\Packet;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
     $trail->push('Home', route('home'));
});

Breadcrumbs::for('admin', function (BreadcrumbTrail $trail) {
    $trail->push('Admin',route('home'));
});

Breadcrumbs::for('profile.show', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Profile', route('profile.show'));
});

Breadcrumbs::for('admin.destination.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin');
    $trail->push('Destinasi', route('admin.destination.index'));
});

Breadcrumbs::for('admin.order.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin');
    $trail->push('Pesanan', route('admin.order.index'));
});

Breadcrumbs::for('admin.destination.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.destination.index');
    $trail->push('Tambah', route('admin.destination.create'));
});

Breadcrumbs::for('admin.destination.edit', function (BreadcrumbTrail $trail,Destination $destination) {
    $trail->parent('admin.destination.index');
    $trail->push($destination->name, route('admin.destination.index', $destination->slug));
    $trail->push('Edit', '#');
});

Breadcrumbs::for('admin.destination.show', function (BreadcrumbTrail $trail,Destination $destination) {
    $trail->parent('admin.destination.index');
    $trail->push($destination->name, route('admin.destination.show', $destination->slug));
});

Breadcrumbs::for('admin.destination.packet.index', function (BreadcrumbTrail $trail,Destination $destination) {
    $trail->parent('admin.destination.index');
    $trail->push($destination->name, route('admin.destination.show', $destination->slug));
});

Breadcrumbs::for('admin.destination.packet.create', function (BreadcrumbTrail $trail,Destination $destination) {
    $trail->parent('admin.destination.index');
    $trail->push($destination->name, route('admin.destination.show', $destination->slug));
    $trail->push('Paket', route('admin.destination.packet.index', $destination->slug));
    $trail->push('Tambah', route('admin.destination.packet.create', $destination->slug));
});

Breadcrumbs::for('admin.destination.packet.edit', function (BreadcrumbTrail $trail,Destination $destination, Packet $packet) {
    $trail->parent('admin.destination.index');
    $trail->push($destination->name, route('admin.destination.packet.index', $destination->slug));
    $trail->push('Edit Paket', "#");
});

Breadcrumbs::for('admin.destination.packet.show', function (BreadcrumbTrail $trail,Destination $destination, Packet $packet) {
    $trail->parent('admin.destination.index');
    $trail->push($destination->name, route('admin.destination.show', $destination->slug));
    $trail->push($packet->name, route('admin.destination.packet.show', [$destination->slug, $packet->slug]));
});

Breadcrumbs::for('admin.settings.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin');
    $trail->push('Pengaturan Website');
});


Breadcrumbs::for('destination.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Semua Tempat Destinasi', route('destination.index'));
});

Breadcrumbs::for('destination.show', function (BreadcrumbTrail $trail,Destination $destination) {
    $trail->parent('destination.index');
    $trail->push($destination->name, route('destination.show',$destination->slug));
});

Breadcrumbs::for('packet.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Semua Paket Destinasi', route('packet.index'));
});

Breadcrumbs::for('user.order.create', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Buat Pesanan', route('user.order.create'));
});

Breadcrumbs::for('user.order.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Semua Pesanan', route('user.order.index'));
});

Breadcrumbs::for('user.order.edit', function (BreadcrumbTrail $trail, Order $order) {
    $trail->parent('home');
    $trail->push('Bayar Pesanan', route('user.order.edit',$order->id));
});


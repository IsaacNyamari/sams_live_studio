<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
Broadcast::channel('initiate-payment', function ($user) {
    return $user->isAdmin() || $user->isClient();
});
Broadcast::channel('donation-notifications.{userId}', function ($user, $userId) {
    return (int) $user->id === (int) $userId && $user->isAdmin();
});
Broadcast::channel('notifiy-admin-on-donation.{userId}', function ($user, $userId) {
    return (int) $user->id === (int) $userId && $user->isAdmin();
});
Broadcast::channel('user-booking-updates.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

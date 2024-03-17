<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


   class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::latest()->get();

        return view('notifications.index', compact('notifications'));
    }

    public function show($id)
    {
        // Retrieve a specific notification
        $notification = Notification::findOrFail($id);

        return view('notifications.show', compact('notification'));
    }

    public function markAsRead($id)
    {
        // Mark a notification as read
        $notification = Notification::findOrFail($id);
        $notification->markAsRead();

        return redirect()->route('notifications.index');
    }

    public function markAllAsRead()
    {
        // Mark all notifications as read
        auth()->user()->unreadNotifications->markAsRead();

        return redirect()->route('notifications.index');
    }

    public function destroy($id)
    {
        // Delete a specific notification
        $notification = Notification::findOrFail($id);
        $notification->delete();

        return redirect()->route('notifications.index');
    }

    public function destroyAll()
    {
        // Delete all notifications
        auth()->user()->notifications()->delete();

        return redirect()->route('notifications.index');
    }
}

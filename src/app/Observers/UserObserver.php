<?php

namespace App\Observers;

use App\Mail\User\UserEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class UserObserver
{
    /**
     * ユーザーの"created"イベントの処理
     */
    public function created(User $user): void
    {
        Mail::send(new UserEmail());
    }

    /**
     * ユーザーの"updated"イベントの処理
     */
    public function updated(User $user): void
    {
        // ...
    }

    /**
     * ユーザーの"deleted"イベントの処理
     */
    public function deleted(User $user): void
    {
        // ...
    }

    /**
     * ユーザーの"restored"イベントの処理
     */
    public function restored(User $user): void
    {
        // ...
    }

    /**
     * ユーザーの"forceDeleted"イベントの処理
     */
    public function forceDeleted(User $user): void
    {
        // ...
    }
}

<?php

namespace App\Repositories\UserToken;

use App\ValueObjects\User\Id;

interface UserTokenRepositoryInterface
{
    /**
     * アクセストークン保存
     *
     * @param Id $user_id
     * @return void
     */
    public function accessTokenSave(Id $user_id): void;

    /**
     * リフレッシュトークン保存
     *
     * @param Id $user_id
     * @return void
     */
    public function refreshTokenSave(Id $user_id): void;
}

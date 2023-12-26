<?php

namespace App\Repositories\UserToken;

use App\Models\UserToken;
use App\Services\Token\TokenService;
use App\ValueObjects\User\Id;
use Illuminate\Support\Facades\Log;

final class UserTokenRepository implements UserTokenRepositoryInterface
{
    /** @var UserToken $model */
    protected $model;

    /**
     * 初期化処理
     */
    public function __construct()
    {
        $this->model = new UserToken();
    }

    /**
     * 保存
     *
     * @param Id $user_id
     * @return void
     */
    public function accessTokenSave(Id $user_id): void
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');

        $access_token = TokenService::createAccessToken();
        $data = [
            'user_id' => $user_id->getValue(),
            'access_token' => $access_token->token,
            'access_token_expired' => $access_token->expired
        ];
        $this->model->fill($data)->save();
    }

    /**
     * リフレッシュトークン保存
     *
     * @param Id $user_id
     * @return void
     */
    public function refreshTokenSave(Id $user_id): void
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');

        $refresh_token = TokenService::createRefreshToken();
        $data = [
            'user_id' => $user_id->getValue(),
            'refresh_token' => $refresh_token->token,
            'refresh_token_expired' => $refresh_token->expired
        ];
        $this->model->fill($data)->save();
    }
}

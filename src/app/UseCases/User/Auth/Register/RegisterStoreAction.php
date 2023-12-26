<?php

namespace App\UseCases\User\Auth\Register;

use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\UserToken\UserTokenRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

final class RegisterStoreAction
{
    /** @var UserRepositoryInterface ユーザリポジトリ */
    private readonly UserRepositoryInterface $user_repository;

    /** @var UserTokenRepositoryInterface ユーザトークンリポジトリ */
    private readonly UserTokenRepositoryInterface $user_token_repository;

    /**
     * 初期化処理
     *
     * @param UserRepositoryInterface $user_repository
     * @param UserTokenRepositoryInterface $user_token_repository
     */
    public function __construct(
        UserRepositoryInterface $user_repository,
        UserTokenRepositoryInterface $user_token_repository
    ) {
        $this->user_repository = $user_repository;
        $this->user_token_repository = $user_token_repository;
    }

    /**
     * ユーザ新規登録
     *
     * @param RegisterStoreCommand $command
     * @return void
     */
    public function __invoke(RegisterStoreCommand $command)
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');

        DB::transaction(function () use ($command) {
            $user_id = $this->user_repository->saveReturnId($command);
            $this->user_token_repository->accessTokenSave($user_id);
            $this->user_token_repository->refreshTokenSave($user_id);
        });
    }
}

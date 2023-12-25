<?php

namespace App\UseCases\User\Auth\Register;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Log;

final class RegisterStoreAction
{
    /** @var UserRepositoryInterface $user_repository */
    private readonly UserRepositoryInterface $user_repository;

    /**
     * 初期化処理
     *
     * @param UserRepositoryInterface $user_repository
     */
    public function __construct(
        UserRepositoryInterface $user_repository
    ) {
        $this->user_repository = $user_repository;
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

        $this->user_repository->save($command);
    }
}

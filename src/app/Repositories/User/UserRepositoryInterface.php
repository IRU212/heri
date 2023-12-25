<?php

namespace App\Repositories\User;

use App\UseCases\User\Auth\Register\RegisterStoreCommand;

interface UserRepositoryInterface
{
    /**
     * ユーザを保存
     *
     * @param RegisterStoreCommand $command
     * @return void
     */
    public function save(RegisterStoreCommand $command): void;
}

<?php

namespace App\Repositories\User;

use App\UseCases\User\Auth\Register\RegisterStoreCommand;
use App\ValueObjects\User\Id;

interface UserRepositoryInterface
{
    /**
     * ユーザを保存
     *
     * @param RegisterStoreCommand $command
     * @return void
     */
    public function save(RegisterStoreCommand $command): void;

    /**
     * ユーザを保存 ユーザIDを返す
     *
     * @param RegisterStoreCommand $command
     * @return Id
     */
    public function saveReturnId(RegisterStoreCommand $command): Id;
}

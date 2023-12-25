<?php

namespace App\UseCases\User\Auth\Register;

use App\UseCases\Common\Command\Store\StoreCommand;
use App\ValueObjects\User\Email;
use App\ValueObjects\User\Id;
use App\ValueObjects\User\Name;
use App\ValueObjects\User\Password;
use Illuminate\Support\Facades\Log;

final class RegisterStoreCommand extends StoreCommand
{
    /** @var Id $id */
    public readonly Id $id;

    /** @var Name $name */
    public readonly Name $name;

    /** @var Email $email */
    public readonly Email $email;

    /** @var Password $password */
    public readonly Password $password;

    /**
     * 初期化処理
     *
     * @param Id $id
     * @param Name $name
     * @param Email $email
     * @param Password $password
     */
    public function __construct(
        Id $id,
        Name $name,
        Email $email,
        Password $password
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * 入力値をセットする
     *
     * @param array $validate_data
     * @param int|null $id
     * @return self
     */
    public static function setInput(array $validate_data, int|null $id = null): self
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');

        return new self(
            Id::fromNative($id),
            Name::fromNative($validate_data[Name::getName()]),
            Email::fromNative($validate_data[Email::getName()]),
            Password::fromNative($validate_data[Password::getName()]),
        );
    }
}

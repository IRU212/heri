<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\Common\BaseRepository;
use App\UseCases\User\Auth\Register\RegisterStoreCommand;
use App\ValueObjects\User\Id;
use Illuminate\Support\Facades\Log;
use RuntimeException;

final class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /** @var User $model */
    protected $model;

    /**
     * 初期化処理
     */
    public function __construct()
    {
        $this->model = new User();
    }

    /**
     * ユーザを保存
     *
     * @param RegisterStoreCommand $command
     * @return void
     */
    public function save(RegisterStoreCommand $command): void
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');

        $data = [
            'name' => $command->name->getValue(),
            'email' => $command->email->getValue(),
            'password' => $command->password->makeHashPassword(),
        ];
        if (!$command->id->isNull()) {
            $data['id'] = $command->id->getValue();
        }
        $this->model->fill($data)->save();
    }

    /**
     * ユーザを保存 ユーザIDを返す
     *
     * @param RegisterStoreCommand $command
     * @return Id
     */
    public function saveReturnId(RegisterStoreCommand $command): Id
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');

        $data = [
            'name' => $command->name->getValue(),
            'email' => $command->email->getValue(),
            'password' => $command->password->makeHashPassword(),
        ];
        $this->model->fill($data)->save();
        return Id::fromNative($this->model->id);
    }
}

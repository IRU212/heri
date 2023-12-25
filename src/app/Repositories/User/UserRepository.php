<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\Common\BaseRepository;
use App\UseCases\User\Auth\Register\RegisterStoreCommand;
use Illuminate\Support\Facades\Log;
use RuntimeException;

final class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /** @var User $model */
    protected $model;

    /**
     * 初期化処理
     *
     * @param Model $model
     */
    public function __construct(User $model)
    {
        if ($model === null) {
            throw new RuntimeException('Userモデルが見つかりませんでした');
        }
        $this->model = $model;
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
}

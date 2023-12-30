<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Common\Controller;
use App\Http\Requests\User\Auth\Register\StoreRegisterRequest;
use App\Http\Resources\User\Auth\RegisterStoreResource;
use App\UseCases\User\Auth\Register\RegisterStoreAction;
use App\UseCases\User\Auth\Register\RegisterStoreCommand;
use Illuminate\Support\Facades\Log;

final class RegisterController extends Controller
{
    /**
     * 新規保存
     *
     * @param StoreRegisterRequest $request
     * @param RegisterStoreAction $action
     * @return RegisterStoreResource
     */
    protected function store(StoreRegisterRequest $request, RegisterStoreAction $action)
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');

        $command = RegisterStoreCommand::setInput($request->validated());
        $action($command);
        return new RegisterStoreResource($request);
    }
}

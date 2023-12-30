<?php

namespace Tests\Feature\User;

use App\Enums\Api\Status as EnumsStatus;
use App\Mail\User\UserEmail;
use App\ValueObjects\User\Email;
use App\ValueObjects\User\Name;
use App\ValueObjects\User\Password;
use Illuminate\Support\Facades\Mail;
use Tests\TestDbCase;

class RegisterControllerTest extends TestDbCase
{
    /** 新規保存 */
    private const STORE_ROUTE = 'auth.register.store';

    /**
     * テスト用データ
     */
    private function createRequestData($override = []): array
    {
        return [
            Name::getName() => 'テストaaa',
            Email::getName() => 'test@test.com',
            Password::getName() => 'TestPassword',
            ...$override
        ];
    }

    /**
     * 新規登録保存
     */
    public function testStoreRouteWithData(): void
    {
        $response = $this->postJson(route(self::STORE_ROUTE), $this->createRequestData());

        Mail::fake();

        $response->assertStatus(200)
            ->assertJson([
                "data" => [
                    "status" => EnumsStatus::SUCCESS->value,
                    "link" => [
                        "origin_url" => "http://localhost",
                        "url" => route(self::STORE_ROUTE)
                    ]
                ]
            ]);
    }

    /**
     * 新規登録保存 バリデーションチェック
     */
    public function testStoreRouteWithCheckValidateData(): void
    {
        $response = $this->postJson(route(self::STORE_ROUTE), $this->createRequestData([
            Email::getName() => '失敗メール'
        ]));
        $response->assertStatus(200)
            ->assertJson([
                "errors" => [
                    "email" => [
                        "メールアドレスを正しいメールアドレスにしてください。"
                    ]
                ]
            ]);
    }
}

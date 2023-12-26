<?php

namespace App\Services\Token;

use App\Repositories\Common\BaseRepository;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

final class TokenService extends BaseRepository implements TokenServiceInterface
{
    /** @var int トークン文字数 */
    private const TOKEN_LENGTH = 64;

    /** @var string トークン */
    public string $token;

    /** @var string トークン期限 */
    public string $expired;

    /**
     * 初期化処理
     *
     * @param string $token
     * @param string $expired
     */
    public function __construct(
        string $token,
        string $expired
    ) {
        $this->token = $token;
        $this->expired = $expired;
    }

    /**
     * トークン作成
     *
     * @return string
     */
    public static function createToken(): string
    {
        return hash('sha256', Str::random(self::TOKEN_LENGTH));
    }

    /**
     * アクセストークン作成
     *
     * @return self
     */
    public static function createAccessToken(): self
    {
        $datetime = new Carbon();
        return new self(
            self::createToken(),
            $datetime->addDays(3)
        );
    }

    /**
     * リフレッシュトークン作成
     *
     * @return self
     */
    public static function createRefreshToken(): self
    {
        $datetime = new Carbon();
        return new self(
            self::createToken(),
            $datetime->addDays(3)
        );
    }
}

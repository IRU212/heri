<?php

namespace App\Services\Token;

interface TokenServiceInterface
{
    /**
     * トークン作成
     *
     * @return string
     */
    public static function createToken(): string;

    /**
     * アクセストークン作成
     *
     * @return self
     */
    public static function createAccessToken(): self;
}

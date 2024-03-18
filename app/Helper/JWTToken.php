<?php


namespace App\Helper;

use App\Models\Company;
use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTToken
{
    public static function CreateToken($userEmail, $userId, $role):string
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss'       => 'jobpulse',
            'iat'       => time(),
            'exp'       => time()+24*60*60,
            'userEmail' => $userEmail,
            'userId'    => $userId,
            'role'      => $role
        ];

        return JWT::encode($payload, $key, 'HS256');
    }

    public static function CreateTokenForSetPassword($userEmail):string
    {
        $key= env('JWT_KEY');
        $payload = [
            'iss'       => 'jobpulse',
            'iat'       => time(),
            'exp'       => time()+60*20,
            'userEmail' => $userEmail,
            'userId'    => '0'
        ];

        return JWT::encode($payload, $key, 'HS256');
    }



    public static function VerifyToken($token):string|object
    {
        try
        {
            if($token == null)
            {
                return 'unauthorized';
            }
            else
            {
                $key= env('JWT_KEY');
                $decode = JWT::decode($token, new Key($key, 'HS256'));
                return $decode;
            }
        }
        catch(Exception $exception)
        {
            return 'unauthorized';
        }
    }
}

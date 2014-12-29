<?php
namespace Jlopez\Lesson1\Model;

/**
 * Class User
 * @package Jlopez\Lesson1\Model
 */
class User
{

    const MIN_PASS_LENGTH = 1;

    /**
     * @var array
     */
    private $user = [];

    public function __construct(array $user)
    {
        $this->user = $user;
    }

    /**
     * @return array
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param $password
     * @return bool
     */
    public function setPassword($password)
    {
        if (strlen($password) < self::MIN_PASS_LENGTH) {
            return false;
        }

        $this->user['password'] = $this->cryptPassword($password);
        return true;
    }

    /**
     * @param $password
     * @return string
     */
    private function cryptPassword($password)
    {
        return md5($password);
    }
} 
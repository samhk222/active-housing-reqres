<?php


namespace Samhk222\ActiveHousingReqres\Interfaces\V1;

interface UsersInterface
{
    /**
     * @param int $user_id
     * @return mixed
     */
    public function getById(int $user_id);

    public function getUsers(int $page = 0);
}

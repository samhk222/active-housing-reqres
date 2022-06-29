<?php


namespace Samhk222\ActiveHousingReqres\Models\V1;

use Samhk222\ActiveHousingReqres\Integrations\ReqRes;
use Samhk222\ActiveHousingReqres\Interfaces\V1\UsersInterface;

class User implements UsersInterface
{

    /**
     * @param int $user_id
     * @return mixed|void
     */
    public function getById(int $user_id)
    {
        return (new ReqRes)->user($user_id)->toJson();
    }

    /**
     * @param int|int $page
     */
    public function getUsers(int $page = 0)
    {
        return (new ReqRes)->users($page)->toJson();
    }
}

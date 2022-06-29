<?php


namespace Samhk222\ActiveHousingReqres\Integrations;


class BaseClass
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    protected $resource;

    protected $user_not_found = false;

    public function toJson()
    {
        if ($this->user_not_found) {
            return \json_decode('{"error":"User not found"}');
        }

        return \json_decode($this->resource->getBody()->getContents());
    }
}

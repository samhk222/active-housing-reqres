<?php


namespace Samhk222\ActiveHousingReqres\Integrations;


class BaseClass
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    protected $resource;

    public function toJson()
    {
        return \json_decode($this->resource->getBody()->getContents());
    }
}

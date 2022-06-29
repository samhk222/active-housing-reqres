<?php


namespace Samhk222\ActiveHousingReqres\Integrations;


use Exception;

use function PHPUnit\Framework\throwException;

class ReqRes extends BaseClass
{
    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    /**
     * ReqRes constructor.
     */
    public function __construct()
    {
        $this->client = (new GuzzleClient)();
    }

    /**
     * @param int $id
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function user(int $id)
    {
        try {
            $this->resource = $this->client->request('GET', 'users/' . $id);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $this->user_not_found = true;
        }
        return $this;
    }

    /**
     * @param int $id
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function users(int $page)
    {
        try {
            $this->resource = $this->client->request('GET', 'users?page=' . $page);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $this->user_not_found = true;
        }
        return $this;
    }
}

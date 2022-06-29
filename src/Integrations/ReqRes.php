<?php


namespace Samhk222\ActiveHousingReqres\Integrations;


use Exception;

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
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                if (404 === $response->getStatusCode()) {
                    die(\json_encode(['error' => "User not found"]));
                }
            } else {
                $response = $e->getHandlerContext();
                if (isset($response['error'])) {
                    dd($response['error']);
                } else {
                    dd('Unknown error occured!');
                }
            }
        }


        return $this;
    }

    /**
     * @param int $id
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function users(int $page)
    {
        $this->resource = $this->client->request('GET', 'users?page=' . $page);

        return $this;
    }
}

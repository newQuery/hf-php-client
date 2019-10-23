<?php


namespace HFClient;


use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;

class RequestHandler
{
    /** @var string */
    private $apiKey;

    /** @var GuzzleClient */
    private $guzzle;

    /**
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->guzzle = new GuzzleClient();
    }

    /**
     * @param string $method
     * @param string $endpoint
     * @param array $options
     *
     * @return \Exception|GuzzleException|mixed
     */
    public function request(string $method, string $endpoint, array $options = [])
    {
        try {
            $guzzleOptions = [
                'headers' => [
                    'User-Agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)'
                ],
                'auth' => [
                    $this->apiKey,
                    ''
                ]
            ];

            $res = $this->guzzle->request(strtoupper($method),
                sprintf('%s/%s', HackForumsInterface::API_URL, $endpoint),
                $guzzleOptions
            );

            return json_decode($res->getBody(), true);
        } catch (GuzzleException $e) {
            return $e;
        }
    }
}
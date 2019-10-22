<?php


namespace HFClient;


use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;

class RequestHandler
{
    private const API_URL = "https://hackforums.net/api/v1";

    public const API_ENDPOINTS = [
        "userInfo" => [
            "method"    => "GET",
            "path"      => "/user/:id"
        ],
        "multipleUserInfo" => [
            "method"    => "GET",
            "path"      => "/users/:ids"
        ],
        "categoryInfo" => [
            "method"    => "GET",
            "path"      => "/category/:id"
        ],
        "postInfo" => [
            "method"    => "GET",
            "path"      => "/post/:id"
        ],
        "formInfo" => [
            "method"    => "GET",
            "path"      => "/forum/:id"
        ],
        "threadInfo" => [
            "method"    => "GET",
            "path"      => "/thread/:id"
        ],
        "privateMessage" => [
            "method"    => "GET",
            "path"      => "/post/:id"
        ],
        "listInbox" => [
            "method"    => "GET",
            "path"      => "/pmbox/:id"
        ],
        "groupInfo" => [
            "method"    => "GET",
            "path"      => "/group/:id"
        ]
    ];

    /** @var string */
    private $apiKey;

    /** @var GuzzleClient */
    private $guzzle;

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
                sprintf('%s/%s', self::API_URL, $endpoint),
                $guzzleOptions
            );

            return json_decode($res->getBody(), true);
        } catch (GuzzleException $e) {
            return $e;
        }
    }
}
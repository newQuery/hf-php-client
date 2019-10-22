<?php

namespace HFClient;

class Client
{
    /** @var RequestHandler */
    private $requestHandler;

    /**
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->requestHandler = new RequestHandler($apiKey);
    }

    /**
     * @param int $id
     *
     * @return array
     */
    public function getUser(int $id): array
    {
        $endpointInfo = RequestHandler::API_ENDPOINTS['userInfo'];

        return $this->requestHandler->request($endpointInfo['method'], str_replace(':id', $id, $endpointInfo['path']));
    }

    /**
     * @param array $ids
     *
     * @return array
     */
    public function getUsers(array $ids): array
    {
        $endpointInfo = RequestHandler::API_ENDPOINTS['multipleUserInfo'];

        return $this->requestHandler->request($endpointInfo['method'], str_replace(':ids', implode(',', $ids), $endpointInfo['path']));
    }

    /**
     * @param int $id
     *
     * @return array
     */
    public function getCategory(int $id): array
    {
        $endpointInfo = RequestHandler::API_ENDPOINTS['categoryInfo'];

        return $this->requestHandler->request($endpointInfo['method'], str_replace(':id', $id, $endpointInfo['path']));
    }

    /**
     * @param int $id
     *
     * @return array
     */
    public function getPost(int $id): array
    {
        $endpointInfo = RequestHandler::API_ENDPOINTS['postInfo'];

        return $this->requestHandler->request($endpointInfo['method'], str_replace(':id', $id, $endpointInfo['path']));
    }

    /**
     * @param int $id
     * @param bool $raw
     * @param int|null $pageNumber
     *
     * @return array
     */
    public function getThread(int $id, bool $raw = false, int $pageNumber = null): array
    {
        $endpointInfo = RequestHandler::API_ENDPOINTS['threadInfo'];

        if(false !== $raw && null !== $pageNumber) {
            $endpoint = sprintf('%s?raw&page=%d', str_replace(':id', $id, $endpointInfo['path']), $pageNumber);
        } elseif(false !== $raw && null === $pageNumber) {
            $endpoint = sprintf('%s?raw', str_replace(':id', $id, $endpointInfo['path']));
        } else {
            $endpoint = str_replace(':id', $id, $endpointInfo['path']);
        }

        return $this->requestHandler->request($endpointInfo['method'], $endpoint);
    }

    /**
     * @param int $id
     *
     * @return array
     */
    public function getForum(int $id): array
    {
        $endpointInfo = RequestHandler::API_ENDPOINTS['formInfo'];

        return $this->requestHandler->request($endpointInfo['method'], str_replace(':id', $id, $endpointInfo['path']));
    }

    /**
     * @param int $id
     *
     * @return array
     */
    public function getPrivateMessage(int $id): array
    {
        $endpointInfo = RequestHandler::API_ENDPOINTS['privateMessage'];

        return $this->requestHandler->request($endpointInfo['method'], str_replace(':id', $id, $endpointInfo['path']));
    }

    /**
     * @param int $pageNumber
     *
     * @return array
     */
    public function getInbox(int $pageNumber = 1): array
    {
        $endpointInfo = RequestHandler::API_ENDPOINTS['listInbox'];

        return $this->requestHandler->request($endpointInfo['method'], str_replace(':id', $pageNumber, $endpointInfo['path']));
    }

    /**
     * @param int $id
     *
     * @return array
     */
    public function getGroup(int $id): array
    {
        $endpointInfo = RequestHandler::API_ENDPOINTS['groupInfo'];

        return $this->requestHandler->request($endpointInfo['method'], str_replace(':id', $id, $endpointInfo['path']));
    }
}

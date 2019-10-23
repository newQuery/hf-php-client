<?php

namespace HFClient;

interface HackForumsInterface
{
    public const API_URL = "https://hackforums.net/api/v1";

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

    /**
     * @param int $id
     *
     * @return array
     */
    public function getUser(int $id): array;

    /**
     * @param array $ids
     *
     * @return array
     */
    public function getUsers(array $ids): array;

    /**
     * @param int $id
     *
     * @return array
     */
    public function getCategory(int $id): array;

    /**
     * @param int $id
     *
     * @return array
     */
    public function getPost(int $id): array;

    /**
     * @param int $id
     * @param bool $raw
     * @param int|null $pageNumber
     *
     * @return array
     */
    public function getThread(int $id, bool $raw = false, int $pageNumber = null): array;

    /**
     * @param int $id
     *
     * @return array
     */
    public function getForum(int $id): array;

    /**
     * @param int $id
     *
     * @return array
     */
    public function getPrivateMessage(int $id): array;

    /**
     * @param int $pageNumber
     *
     * @return array
     */
    public function getInbox(int $pageNumber = 1): array;

    /**
     * @param int $id
     *
     * @return array
     */
    public function getGroup(int $id): array;
}
# Hackforums API PHP Client

Hackforums API PHP Client by newQuery from the Sociopaths

## Requirements

- PHP 7.2
- Composer
- API Key - https://hackforums.net/apikey.php

## Supported endpoints

- User info (GET /user/:id)
- Multiple users info (GET /users/:ids)
- Forum navigation (GET /category/:id)
- Forum info (GET /forum/:id)
- Thread info (GET /thread/:id)
- Post info (GET /post/:id)
- Private message info (GET /pm/:id)
- List of PMs in inbox and other pm boxes (GET /pmbox/:id or GET /inbox)
- Group info (GET /group/:id)
- Get total of inbox (custom)

## Install

``` 
composer require newquery/hf-php-client
```

## Usage

##### Initialize client

```php
<?php

require 'vendor/autoload.php';

$client = new \HFClient\Client("YOUR_API_KEY");
```

##### Get total pm 

```php
$totalInbox = $client->getTotalInbox()
```

##### Get user infos

```php
$user = $client->getUser(2602549);
```

##### Get users infos

```php
$users = $client->getUsers([2602549, 2015410]);
```

##### Get inbox

```php
$user = $client->inbox();
```

##### Get thread

```php
$thread = $client->getThread(6018226);
```

##### Get post

```php
$post = $client->getPost(59077447);
```

##### Get group

```php
$sociopaths = $client->getGroup(49);
```

##### Get forum

```php
$phpSubForum = $client->getForum(154);
```

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

##### Get user infos

```php
$user = $client->getUser(2602549);
```

Output 

```
array(3) {
  ["success"]=>
  bool(true)
  ["message"]=>
  string(0) ""
  ["result"]=>
  array(12) {
    ["username"]=>
    string(8) "newQuery"
    ["postnum"]=>
    int(1207)
    ["avatar"]=>
    string(56) "./uploads/avatars/avatar_2602549.png?dateline=1563788420"
    ["avatartype"]=>
    string(6) "upload"
    ["usergroup"]=>
    int(28)
    ["displaygroup"]=>
    int(49)
    ["additionalgroups"]=>
    array(1) {
      [0]=>
      int(49)
    }
    ["usertitle"]=>
    string(13) "rm -rf /var/*"
    ["timeonline"]=>
    int(1878195)
    ["regdate"]=>
    string(20) "2015-02-03T07:41:24Z"
    ["lastactive"]=>
    string(20) "2019-10-22T14:36:08Z"
    ["reputation"]=>
    int(356)
  }
}

```

##### Get users infos

```php
$users = $client->getUsers([2602549, 2015410]);
```

Output 

```
array(3) {
  ["success"]=>
  bool(true)
  ["message"]=>
  string(0) ""
  ["uids"]=>
  array(2) {
    [0]=>
    array(4) {
      ["uid"]=>
      int(2015410)
      ["success"]=>
      bool(true)
      ["message"]=>
      string(0) ""
      ["result"]=>
      array(12) {
        ["username"]=>
        string(12) "meshcollider"
        ["postnum"]=>
        int(5785)
        ["avatar"]=>
        string(56) "./uploads/avatars/avatar_2015410.png?dateline=1509167801"
        ["avatartype"]=>
        string(6) "upload"
        ["usergroup"]=>
        int(28)
        ["displaygroup"]=>
        int(28)
        ["additionalgroups"]=>
        array(1) {
          [0]=>
          int(39)
        }
        ["usertitle"]=>
        string(12) "Transcendent"
        ["timeonline"]=>
        int(8954918)
        ["regdate"]=>
        string(20) "2013-10-17T22:07:52Z"
        ["lastactive"]=>
        string(20) "2019-10-21T15:11:31Z"
        ["reputation"]=>
        int(62)
      }
    }
    [1]=>
    array(4) {
      ["uid"]=>
      int(2602549)
      ["success"]=>
      bool(true)
      ["message"]=>
      string(0) ""
      ["result"]=>
      array(12) {
        ["username"]=>
        string(8) "newQuery"
        ["postnum"]=>
        int(1207)
        ["avatar"]=>
        string(56) "./uploads/avatars/avatar_2602549.png?dateline=1563788420"
        ["avatartype"]=>
        string(6) "upload"
        ["usergroup"]=>
        int(28)
        ["displaygroup"]=>
        int(49)
        ["additionalgroups"]=>
        array(1) {
          [0]=>
          int(49)
        }
        ["usertitle"]=>
        string(13) "rm -rf /var/*"
        ["timeonline"]=>
        int(1878195)
        ["regdate"]=>
        string(20) "2015-02-03T07:41:24Z"
        ["lastactive"]=>
        string(20) "2019-10-22T14:36:08Z"
        ["reputation"]=>
        int(356)
      }
    }
  }
}
```

##### Get inbox

```php
$user = $client->inbox();
```

##### Get thread

```php
$thread = $client->getThread(6018226);
```

Output

```
array(3) {
  ["success"]=>
  bool(true)
  ["message"]=>
  string(0) ""
  ["result"]=>
  array(10) {
    ["subject"]=>
    string(15) "HF NSFW Version"
    ["threadprefix"]=>
    string(0) ""
    ["user"]=>
    int(1857593)
    ["username"]=>
    string(9) "LaFerrari"
    ["fid"]=>
    int(2)
    ["closed"]=>
    bool(false)
    ["numreplies"]=>
    int(12)
    ["dateline"]=>
    string(20) "2019-10-21T15:35:36Z"
    ["firstpost"]=>
    int(59074707)
    ["postdata"]=>
    array(10) {
      [0]=>
      array(8) {
        ["pid"]=>
        int(59074707)
        ["parent"]=>
        int(0)
        ["subject"]=>
        string(15) "HF NSFW Version"
        ["uid"]=>
        int(1857593)
        ["dateline"]=>
        string(20) "2019-10-21T15:35:36Z"
        ["message"]=>
        string(87) "I remember there used to be an option here for nsfw in the past, does that still exist?"
        ["edituid"]=>
        int(0)
        ["edittime"]=>
        string(20) "1969-12-31T16:00:00Z"
      }
      [1]=>
      array(8) {
        ["pid"]=>
        int(59074709)
        ["parent"]=>
        int(59074707)
        ["subject"]=>
        string(19) "RE: HF NSFW Version"
        ["uid"]=>
        int(1306528)
        ["dateline"]=>
        string(20) "2019-10-21T15:36:08Z"
        ["message"]=>
        string(49) "No, it no longer exists.

It was useful though."
        ["edituid"]=>
        int(0)
        ["edittime"]=>
        string(20) "1969-12-31T16:00:00Z"
      }
      [2]=>
      array(8) {
        ["pid"]=>
        int(59074711)
        ["parent"]=>
        int(59074707)
        ["subject"]=>
        string(19) "RE: HF NSFW Version"
        ["uid"]=>
        int(516470)
        ["dateline"]=>
        string(20) "2019-10-21T15:36:13Z"
        ["message"]=>
        string(172) "https://hackforums.net/showthread.php?tid=5826971

Nope."
        ["edituid"]=>
        int(0)
        ["edittime"]=>
        string(20) "1969-12-31T16:00:00Z"
      }
      [3]=>
      array(8) {
        ["pid"]=>
        int(59074739)
        ["parent"]=>
        int(59074707)
        ["subject"]=>
        string(19) "RE: HF NSFW Version"
        ["uid"]=>
        int(1441945)
        ["dateline"]=>
        string(20) "2019-10-21T15:46:53Z"
        ["message"]=>
        string(64) "just use adblocker to block the elements u dont want to show. ez"
        ["edituid"]=>
        int(0)
        ["edittime"]=>
        string(20) "1969-12-31T16:00:00Z"
      }
      [4]=>
      array(8) {
        ["pid"]=>
        int(59075357)
        ["parent"]=>
        int(59074711)
        ["subject"]=>
        string(19) "RE: HF NSFW Version"
        ["uid"]=>
        int(3183372)
        ["dateline"]=>
        string(20) "2019-10-21T20:13:17Z"
        ["message"]=>
        string(1285) "

     (23 hours ago)SoulZeh Wrote:  
    https://hackforums.net/showthread.php?tid=5826971

    Nope.



A more definitive answer from this year:

https://hackforums.net/showthread.php?tid=5926426

     (23 hours ago)M0HX Wrote:  
    just use adblocker to block the elements u dont want to show. ez



This

Just block hackforums.net/images/logo/* to remove the banner. 
Block hackforums.net/uploads/avatars/* to remove avatars
You can globally disable signatures in user options, I believe."
        ["edituid"]=>
        int(3183372)
        ["edittime"]=>
        string(20) "2019-10-21T20:16:07Z"
      }
      [5]=>
      array(8) {
        ["pid"]=>
        int(59075898)
        ["parent"]=>
        int(59075357)
        ["subject"]=>
        string(19) "RE: HF NSFW Version"
        ["uid"]=>
        int(516470)
        ["dateline"]=>
        string(20) "2019-10-22T01:53:01Z"
        ["message"]=>
        string(590) "

     (18 hours ago)BV1 Wrote:  
    A more definitive answer from this year:

    https://hackforums.net/showthread.php?tid=5926426


    This



I mean fair enough my previous post was last year or so but it was still the same answer lol."
        ["edituid"]=>
        int(0)
        ["edittime"]=>
        string(20) "1969-12-31T16:00:00Z"
      }
      [6]=>
      array(8) {
        ["pid"]=>
        int(59076972)
        ["parent"]=>
        int(59074707)
        ["subject"]=>
        string(19) "RE: HF NSFW Version"
        ["uid"]=>
        int(1891811)
        ["dateline"]=>
        string(20) "2019-10-22T10:45:31Z"
        ["message"]=>
        string(283) "I believe this is the most recent statement from Omni regarding the NSFW version of HF.

https://hackforums.net/showthread.php?ti...id58096460"
        ["edituid"]=>
        int(0)
        ["edittime"]=>
        string(20) "1969-12-31T16:00:00Z"
      }
      [7]=>
      array(8) {
        ["pid"]=>
        int(59077259)
        ["parent"]=>
        int(59074707)
        ["subject"]=>
        string(19) "RE: HF NSFW Version"
        ["uid"]=>
        int(1)
        ["dateline"]=>
        string(20) "2019-10-22T12:43:01Z"
        ["message"]=>
        string(432) "Here is my current stance.

I don't want the feature back. It worked under a subdomain.  It requires extra DNS configurations along with server redirects.  I can't be sure it will negatively effect SEO but I'm positive it doesn't offer me any positive SEO, so under that risk I can't justify experimenting with this.

It was a slightly cool feature to have. I admit that.  But I don't think we need it. Don't be ashamed of using HF."
        ["edituid"]=>
        int(1)
        ["edittime"]=>
        string(20) "2019-10-22T12:43:16Z"
      }
      [8]=>
      array(8) {
        ["pid"]=>
        int(59077262)
        ["parent"]=>
        int(59074707)
        ["subject"]=>
        string(19) "RE: HF NSFW Version"
        ["uid"]=>
        int(1500389)
        ["dateline"]=>
        string(20) "2019-10-22T12:44:21Z"
        ["message"]=>
        string(851) "I believe Omniscient stated he won't bring it back as it needs more resources, or something like that.

Can't find the thread.

EDIT: Yeah.. he beat me to it.

     (2 hours ago)Omniscient Wrote:  
    Here is my current stance.

    I don't want the feature back. It worked under a subdomain.  It requires extra DNS configurations along with server redirects.  I can't be sure it will negatively effect SEO but I'm positive it doesn't offer me any positive SEO, so under that risk I can't justify experimenting with this.

    It was a slightly cool feature to have. I admit that.  But I don't think we need it. Don't be ashamed of using HF.


"
        ["edituid"]=>
        int(1500389)
        ["edittime"]=>
        string(20) "2019-10-22T12:44:51Z"
      }
      [9]=>
      array(8) {
        ["pid"]=>
        int(59077266)
        ["parent"]=>
        int(59074707)
        ["subject"]=>
        string(19) "RE: HF NSFW Version"
        ["uid"]=>
        int(4427303)
        ["dateline"]=>
        string(20) "2019-10-22T12:45:15Z"
        ["message"]=>
        string(95) "I would never be ashamed of using Hackforums. I don't think I was around when it was an option."
        ["edituid"]=>
        int(0)
        ["edittime"]=>
        string(20) "1969-12-31T16:00:00Z"
      }
    }
  }
}
```

##### Get post

```php
$post = $client->getPost(59077447);
```

Output 

```
array(3) {
  ["success"]=>
  bool(true)
  ["message"]=>
  string(0) ""
  ["result"]=>
  array(10) {
    ["tid"]=>
    int(6018226)
    ["parent"]=>
    int(59077416)
    ["fid"]=>
    int(2)
    ["subject"]=>
    string(19) "RE: HF NSFW Version"
    ["uid"]=>
    int(561239)
    ["username"]=>
    string(5) "Hydra"
    ["dateline"]=>
    string(20) "2019-10-22T14:11:02Z"
    ["message"]=>
    string(703) "

     (48 minutes ago)Soulmate～っ☆ Wrote:  
    Someone could probably make a userscript for this to remove elements that you wouldn't want to see while browsing in public, for example tick boxes with "Remove logo, remove banner, remove signatures, remove avatars" etc



Which Flat Darkness did do to an extent. It had an NSFW option to enable that would hide the logo, avatars and signatures. I'm sure someone can make a standalone faster than I can  :hehe: . But yes, it's doable."
    ["edituid"]=>
    int(0)
    ["edittime"]=>
    string(20) "1969-12-31T16:00:00Z"
  }
}
```

##### Get group

```php
$sociopaths = $client->getGroup(49);
```

Output 

```
array(3) {
  ["success"]=>
  bool(true)
  ["message"]=>
  string(0) ""
  ["result"]=>
  array(6) {
    ["name"]=>
    string(10) "Sociopaths"
    ["type"]=>
    int(4)
    ["description"]=>
    string(17) "Sociopaths group."
    ["userbar"]=>
    string(40) "images/groupimages/custom/sociopaths.png"
    ["owner"]=>
    array(2) {
      ["uid"]=>
      int(3894729)
      ["username"]=>
      string(5) "Kawen"
    }
    ["leaders"]=>
    array(4) {
      [0]=>
      array(2) {
        ["uid"]=>
        string(7) "1339775"
        ["username"]=>
        string(8) "Haseo™"
      }
      [1]=>
      array(2) {
        ["uid"]=>
        string(7) "1573817"
        ["username"]=>
        string(6) "Spaark"
      }
      [2]=>
      array(2) {
        ["uid"]=>
        string(7) "2890436"
        ["username"]=>
        string(7) "Pikachu"
      }
      [3]=>
      array(2) {
        ["uid"]=>
        string(7) "3831906"
        ["username"]=>
        string(10) "RedCupcake"
      }
    }
  }
}
```



##### Get forum

```php
$phpSubForum = $client->getForum(154);
```

Output 

```
array(3) {
  ["success"]=>
  bool(true)
  ["message"]=>
  string(0) ""
  ["result"]=>
  array(6) {
    ["name"]=>
    string(15) "PHP Development"
    ["description"]=>
    string(161) "For PHP classes, functions, and development discussions we ask you post here. PHP is the #1 used web language and is easy to use. Its strength is its simplicity."
    ["type"]=>
    string(1) "f"
    ["parent"]=>
    int(151)
    ["numthreads"]=>
    string(5) "20617"
    ["threaddata"]=>
    array(20) {
      [0]=>
      array(12) {
        ["tid"]=>
        int(4238146)
        ["sticky"]=>
        bool(true)
        ["subject"]=>
        string(23) "The PHP Security Series"
        ["threadprefix"]=>
        string(0) ""
        ["user"]=>
        int(183596)
        ["username"]=>
        string(7) "Haxalot"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(115)
        ["dateline"]=>
        string(20) "2014-05-19T14:47:41Z"
        ["lastpost"]=>
        string(20) "2019-04-20T08:54:11Z"
        ["lastposter"]=>
        string(7) "cnminus"
        ["lastposteruid"]=>
        int(4093858)
      }
      [1]=>
      array(12) {
        ["tid"]=>
        int(5206206)
        ["sticky"]=>
        bool(true)
        ["subject"]=>
        string(27) "=== PHP BEGINNERS GUIDE ==="
        ["threadprefix"]=>
        string(0) ""
        ["user"]=>
        int(2848947)
        ["username"]=>
        string(6) "RYDIOO"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(161)
        ["dateline"]=>
        string(20) "2016-03-17T10:03:05Z"
        ["lastpost"]=>
        string(20) "2019-04-02T00:10:10Z"
        ["lastposter"]=>
        string(5) "kamza"
        ["lastposteruid"]=>
        int(4183876)
      }
      [2]=>
      array(12) {
        ["tid"]=>
        int(5114645)
        ["sticky"]=>
        bool(true)
        ["subject"]=>
        string(54) "The PHP Section Bible | Information, Rules and Advices"
        ["threadprefix"]=>
        string(0) ""
        ["user"]=>
        int(695943)
        ["username"]=>
        string(6) "Sakuto"
        ["closed"]=>
        bool(true)
        ["numreplies"]=>
        int(39)
        ["dateline"]=>
        string(20) "2015-12-30T08:00:06Z"
        ["lastpost"]=>
        string(20) "2018-06-25T22:16:44Z"
        ["lastposter"]=>
        string(12) "boffin_mixer"
        ["lastposteruid"]=>
        int(3098122)
      }
      [3]=>
      array(12) {
        ["tid"]=>
        int(6018021)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(31) "Help about Php curl get cookies"
        ["threadprefix"]=>
        string(0) ""
        ["user"]=>
        int(3733719)
        ["username"]=>
        string(8) "linhtinh"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(2)
        ["dateline"]=>
        string(20) "2019-10-20T21:46:16Z"
        ["lastpost"]=>
        string(20) "2019-10-22T00:46:53Z"
        ["lastposter"]=>
        string(8) "linhtinh"
        ["lastposteruid"]=>
        int(3733719)
      }
      [4]=>
      array(12) {
        ["tid"]=>
        int(6010070)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(35) "Laravel Database Notifications help"
        ["threadprefix"]=>
        string(34) "[Help]"
        ["user"]=>
        int(4327077)
        ["username"]=>
        string(8) "ModernJS"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(2)
        ["dateline"]=>
        string(20) "2019-09-22T01:49:39Z"
        ["lastpost"]=>
        string(20) "2019-10-20T07:42:13Z"
        ["lastposter"]=>
        string(8) "ModernJS"
        ["lastposteruid"]=>
        int(4327077)
      }
      [5]=>
      array(12) {
        ["tid"]=>
        int(6017705)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(47) "FULL PHP SCRIPT MOBILE RECHARGE (INTERNATIONAL)"
        ["threadprefix"]=>
        string(36) "[Source]"
        ["user"]=>
        int(4432976)
        ["username"]=>
        string(13) "pedrogonzalez"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(1)
        ["dateline"]=>
        string(20) "2019-10-19T14:44:52Z"
        ["lastpost"]=>
        string(20) "2019-10-19T16:17:25Z"
        ["lastposter"]=>
        string(12) "gerstaro2022"
        ["lastposteruid"]=>
        int(3318079)
      }
      [6]=>
      array(12) {
        ["tid"]=>
        int(6016886)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(57) "FREE DOWNLOAD INTERNATIONAL MOBILE RECHARGE TOPUP  SCRIPT"
        ["threadprefix"]=>
        string(0) ""
        ["user"]=>
        int(4432976)
        ["username"]=>
        string(13) "pedrogonzalez"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(0)
        ["dateline"]=>
        string(20) "2019-10-16T12:33:24Z"
        ["lastpost"]=>
        string(20) "2019-10-16T12:33:24Z"
        ["lastposter"]=>
        string(13) "pedrogonzalez"
        ["lastposteruid"]=>
        int(4432976)
      }
      [7]=>
      array(12) {
        ["tid"]=>
        int(6004322)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(36) "Who can provide me Script like Olux?"
        ["threadprefix"]=>
        string(34) "[Help]"
        ["user"]=>
        int(4372529)
        ["username"]=>
        string(10) "salman0x01"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(3)
        ["dateline"]=>
        string(20) "2019-09-02T04:57:17Z"
        ["lastpost"]=>
        string(20) "2019-10-14T18:16:36Z"
        ["lastposter"]=>
        string(7) "Ahmosis"
        ["lastposteruid"]=>
        int(4012979)
      }
      [8]=>
      array(12) {
        ["tid"]=>
        int(6008826)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(42) "How much does a php coder costs this days?"
        ["threadprefix"]=>
        string(0) ""
        ["user"]=>
        int(4393437)
        ["username"]=>
        string(6) "Choups"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(15)
        ["dateline"]=>
        string(20) "2019-09-17T13:53:50Z"
        ["lastpost"]=>
        string(20) "2019-10-14T17:31:44Z"
        ["lastposter"]=>
        string(7) "Charger"
        ["lastposteruid"]=>
        int(400724)
      }
      [9]=>
      array(12) {
        ["tid"]=>
        int(6007612)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(7) "unitvps"
        ["threadprefix"]=>
        string(0) ""
        ["user"]=>
        int(4046062)
        ["username"]=>
        string(15) "Karmatheunicorn"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(8)
        ["dateline"]=>
        string(20) "2019-09-13T14:36:05Z"
        ["lastpost"]=>
        string(20) "2019-10-12T17:31:00Z"
        ["lastposter"]=>
        string(5) "Flegy"
        ["lastposteruid"]=>
        int(292064)
      }
      [10]=>
      array(12) {
        ["tid"]=>
        int(6010295)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(49) "Who has ideas for a successful website or script?"
        ["threadprefix"]=>
        string(0) ""
        ["user"]=>
        int(3762836)
        ["username"]=>
        string(14) "Dollar General"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(11)
        ["dateline"]=>
        string(20) "2019-09-22T16:09:23Z"
        ["lastpost"]=>
        string(20) "2019-10-12T10:02:08Z"
        ["lastposter"]=>
        string(15) "Racquelialicia6"
        ["lastposteruid"]=>
        int(4426995)
      }
      [11]=>
      array(12) {
        ["tid"]=>
        int(6010143)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(14) "ionCube decode"
        ["threadprefix"]=>
        string(34) "[Help]"
        ["user"]=>
        int(4399645)
        ["username"]=>
        string(12) "Alaa Hussein"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(4)
        ["dateline"]=>
        string(20) "2019-09-22T07:27:33Z"
        ["lastpost"]=>
        string(20) "2019-10-06T22:49:32Z"
        ["lastposter"]=>
        string(5) "kolaz"
        ["lastposteruid"]=>
        int(2617479)
      }
      [12]=>
      array(12) {
        ["tid"]=>
        int(6013475)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(41) "Undetectable Scam/clone page from scratch"
        ["threadprefix"]=>
        string(0) ""
        ["user"]=>
        int(4415560)
        ["username"]=>
        string(10) "shabeeb ck"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(4)
        ["dateline"]=>
        string(20) "2019-10-04T04:02:56Z"
        ["lastpost"]=>
        string(20) "2019-10-04T10:54:03Z"
        ["lastposter"]=>
        string(6) "raymah"
        ["lastposteruid"]=>
        int(4415675)
      }
      [13]=>
      array(12) {
        ["tid"]=>
        int(6013016)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(23) "NEED SOME HELP WITH PHP"
        ["threadprefix"]=>
        string(0) ""
        ["user"]=>
        int(4412921)
        ["username"]=>
        string(9) "Hungrydog"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(4)
        ["dateline"]=>
        string(20) "2019-10-02T11:45:08Z"
        ["lastpost"]=>
        string(20) "2019-10-04T00:56:53Z"
        ["lastposter"]=>
        string(8) "newQuery"
        ["lastposteruid"]=>
        int(2602549)
      }
      [14]=>
      array(12) {
        ["tid"]=>
        int(6009356)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(15) "PHP Web Crypter"
        ["threadprefix"]=>
        string(0) ""
        ["user"]=>
        int(4269493)
        ["username"]=>
        string(9) "MastaBman"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(4)
        ["dateline"]=>
        string(20) "2019-09-19T07:42:21Z"
        ["lastpost"]=>
        string(20) "2019-09-30T08:11:26Z"
        ["lastposter"]=>
        string(7) "___arkr"
        ["lastposteruid"]=>
        int(4283985)
      }
      [15]=>
      array(12) {
        ["tid"]=>
        int(6010407)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(10) "small help"
        ["threadprefix"]=>
        string(34) "[Help]"
        ["user"]=>
        int(537703)
        ["username"]=>
        string(10) "Debby Ryan"
        ["closed"]=>
        bool(true)
        ["numreplies"]=>
        int(0)
        ["dateline"]=>
        string(20) "2019-09-23T04:18:21Z"
        ["lastpost"]=>
        string(20) "2019-09-23T04:18:21Z"
        ["lastposter"]=>
        string(10) "Debby Ryan"
        ["lastposteruid"]=>
        int(537703)
      }
      [16]=>
      array(12) {
        ["tid"]=>
        int(6010301)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(54) "Uncaught Error: Call to undefined function curl_init()"
        ["threadprefix"]=>
        string(34) "[Help]"
        ["user"]=>
        int(4119121)
        ["username"]=>
        string(11) "UnknownPawn"
        ["closed"]=>
        bool(true)
        ["numreplies"]=>
        int(0)
        ["dateline"]=>
        string(20) "2019-09-22T16:47:59Z"
        ["lastpost"]=>
        string(20) "2019-09-22T16:47:59Z"
        ["lastposter"]=>
        string(11) "UnknownPawn"
        ["lastposteruid"]=>
        int(4119121)
      }
      [17]=>
      array(12) {
        ["tid"]=>
        int(6009538)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(34) "Need help with one sites php file!"
        ["threadprefix"]=>
        string(34) "[Help]"
        ["user"]=>
        int(3093677)
        ["username"]=>
        string(6) "Porroo"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(3)
        ["dateline"]=>
        string(20) "2019-09-20T01:24:10Z"
        ["lastpost"]=>
        string(20) "2019-09-22T08:04:45Z"
        ["lastposter"]=>
        string(14) "Dollar General"
        ["lastposteruid"]=>
        int(3762836)
      }
      [18]=>
      array(12) {
        ["tid"]=>
        int(6009933)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(25) "Basic Amazon scrape issue"
        ["threadprefix"]=>
        string(34) "[Help]"
        ["user"]=>
        int(1433695)
        ["username"]=>
        string(9) "graham23s"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(2)
        ["dateline"]=>
        string(20) "2019-09-21T11:53:01Z"
        ["lastpost"]=>
        string(20) "2019-09-21T14:24:43Z"
        ["lastposter"]=>
        string(9) "graham23s"
        ["lastposteruid"]=>
        int(1433695)
      }
      [19]=>
      array(12) {
        ["tid"]=>
        int(6009807)
        ["sticky"]=>
        bool(false)
        ["subject"]=>
        string(15) "AV Scanner Cost"
        ["threadprefix"]=>
        string(0) ""
        ["user"]=>
        int(875050)
        ["username"]=>
        string(11) "thmaster100"
        ["closed"]=>
        bool(false)
        ["numreplies"]=>
        int(3)
        ["dateline"]=>
        string(20) "2019-09-21T01:09:29Z"
        ["lastpost"]=>
        string(20) "2019-09-21T10:28:19Z"
        ["lastposter"]=>
        string(7) "Charger"
        ["lastposteruid"]=>
        int(400724)
      }
    }
  }
}
```

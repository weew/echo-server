# Echo Server

[![Build Status](https://travis-ci.org/weew/php-echo-server.svg?branch=master)](https://travis-ci.org/weew/php-echo-server)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/weew/php-echo-server/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/weew/php-echo-server/?branch=master)
[![Coverage Status](https://coveralls.io/repos/weew/php-echo-server/badge.svg?branch=master&service=github)](https://coveralls.io/github/weew/php-echo-server?branch=master)
[![License](https://poser.pugx.org/weew/php-echo-server/license)](https://packagist.org/packages/weew/php-echo-server)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Example](#example)

## Installation

`composer require weew/php-echo-server`

## Introduction

The echo server will always return a serialized version of the incoming request. It is meant to be used as an endpoint for your API tests.

## Example

You can see it in action at [http://echo.maxim.io](http://echo.maxim.io)

```json
{
    "protocol": "HTTP",
    "version": "1.1",
    "method": "GET",
    "url": {
        "protocol": "http",
        "tld": "io",
        "domain": "maxim",
        "subdomain": "echo",
        "host": "echo.maxim.io",
        "port": null,
        "path": "/foo",
        "query": {
            "bar": "baz"
        },
        "username": null,
        "password": null,
        "fragment": null,
        "full": "http://echo.maxim.io/foo?bar=baz"
    },
    "headers": {
        "host": ["echo.maxim.io"],
        "connection": ["keep-alive"],
        "accept": ["text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8"],
        "upgrade-insecure-requests": ["1"],
        "user-agent": ["Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.157 Safari/537.36"],
        "accept-encoding": ["gzip, deflate, sdch"],
        "accept-language": ["en-US,en;q=0.8,de;q=0.6,fr;q=0.4,ru;q=0.2,uk;q=0.2,nb;q=0.2"],
        "content-type": [""],
        "content-length": [""]
    },
    "data": [],
    "query": {
        "bar": "baz"
    },
    "cookies": [],
    "content": ""
}
```

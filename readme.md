# Echo Server

[![Build Status](https://img.shields.io/travis/weew/echo-server.svg)](https://travis-ci.org/weew/echo-server)
[![Code Quality](https://img.shields.io/scrutinizer/g/weew/echo-server.svg)](https://scrutinizer-ci.com/g/weew/echo-server)
[![Test Coverage](https://img.shields.io/coveralls/weew/echo-server.svg)](https://coveralls.io/github/weew/echo-server)
[![Dependencies](https://img.shields.io/versioneye/d/php/weew:echo-server.svg)](https://versioneye.com/php/weew:echo-server)
[![Version](https://img.shields.io/packagist/v/weew/echo-server.svg)](https://packagist.org/packages/weew/echo-server)
[![Licence](https://img.shields.io/packagist/l/weew/echo-server.svg)](https://packagist.org/packages/weew/echo-server)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Example](#example)

## Installation

`composer require weew/echo-server`

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

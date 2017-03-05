# SilverStripe Docker Example

## Overview

This shows how to create a scalable dockerized SilverStripe implementation.

PHP Sessions are using [Redis](https://redis.io)

Storage is using [AWS S3](https://aws.amazon.com/s3)

Uploaded images are proxied to your S3 Bucket using [Nginx](https://www.nginx.com) or [OpenResty](https://openresty.org/en/)

Docker image sizes
```bash
docker images | grep liyyt
liyyt/silverstripe-example-php-fpm     latest     147 MB
liyyt/silverstripe-example-openresty   latest     44.5 MB
```

Easy to implament with:
- [Swarm](https://docs.docker.com/engine/swarm)
- [Rancher](https://rancher.com)
- [AWS ECS](https://aws.amazon.com/ecs)


## Installation

```bash
docker-compose build
```

## Running Things

```bash
docker-compose up -d
```
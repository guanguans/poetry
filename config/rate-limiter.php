<?php

declare(strict_types=1);

/*
 * This file is part of the coolephp/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\RateLimiter\Storage\CacheStorage;

return [
    /*
     * You can enable rate-limiter for 1 or multiple paths.
     * Example: ['api/*']
     */
    'paths' => [
        'v1/*',
    ],

    /*
     * Unique label.
     */
    'id' => 'Coole',

    /*
     * Algorithm: [token_bucket, fixed_window, sliding_window, no_limit].
     */
    'policy' => 'token_bucket',

    /*
     * Limit the number of requests.
     */
    'limit' => 60,

    /*
     * Time interval.
     */
    'interval' => '1 minutes',

    /*
     * Time interval.
     * Only the policy is token_bucket.
     */
    'rate' => [
        'interval' => '1 minutes',
    ],

    /*
     * Storage: [InMemoryStorage, CacheStorage].
     */
    'storage' => CacheStorage::class,

    /*
     * Cache adapter.
     * ```
     * [
     *     ApcuAdapter,
     *     ArrayAdapter,
     *     ChainAdapter,
     *     CouchbaseBucketAdapter,
     *     DoctrineAdapter,
     *     FilesystemAdapter,
     *     FilesystemTagAwareAdapter,
     *     MemcachedAdapter,
     *     NullAdapter,
     *     PdoAdapter,
     *     PhpArrayAdapter,
     *     PhpFilesAdapter,
     *     ProxyAdapter,
     *     Psr16Adapter,
     *     RedisAdapter,
     *     RedisTagAwareAdapter,
     *     TagAwareAdapter,
     *     TraceableAdapter,
     *     TraceableTagAwareAdapter
     * ]
     * ```
     */
    'cache_adapter' => FilesystemAdapter::class,
];

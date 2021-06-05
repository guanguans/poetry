# poetry

> 基于 Coole 开发部署在 Vercel 上的免费诗词 API 接口。
## Documentation

[www.guanguans.cn/coole](https://www.guanguans.cn/coole/)

## 接口列表

接口名称 | 请求方法 | URI | 请求参数 | 示例
---|---|---|---|---
获取词列表 | GET | v1/ci/index | page,per_page | https://apipoetry.vercel.app/v1/ci/index?page=1&per_page=10
获取词详情 | GET | v1/ci/show/{value} | value | https://apipoetry.vercel.app/v1/ci/show/1
随机获取词 | GET | v1/ci/rand/{rand} | rand | https://apipoetry.vercel.app/v1/ci/rand/10
获取作者列表 | GET | v1/author/index | page,per_page | https://apipoetry.vercel.app/v1/author/index?page=1&per_page=10
获取作者详情 | GET | v1/author/show/{value} | value | https://apipoetry.vercel.app/v1/author/show/1
随机获取作者 | GET | v1/author/rand/{rand} | rand | https://apipoetry.vercel.app/v1/author/rand/10

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

* [guanguans](https://github.com/guanguans)
* [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

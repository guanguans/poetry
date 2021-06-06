# poetry

> 基于 [Coole](https://github.com/guanguans/coole) 开发部署在 [Vercel](https://vercel.com) 上的免费诗词 API 接口。

## 官方网站

[https://apipoetry.vercel.app](https://apipoetry.vercel.app)

## 接口列表

接口名称 | 请求方法 | URI | 请求参数 | 示例
---|---|---|---|---
获取词列表 | GET | v1/ci/index | rhythmic,author,content,page,per_page | https://apipoetry.vercel.app/v1/ci/index?rhythmic=点绛唇&author=苏轼&content=雁&page=1&per_page=10
获取词详情 | GET | v1/ci/show/{value} |  | https://apipoetry.vercel.app/v1/ci/show/1
随机获取词 | GET | v1/ci/rand/{limit} |  | https://apipoetry.vercel.app/v1/ci/rand/10
获取作者列表 | GET | v1/author/index | name,long_desc,page,per_page | https://apipoetry.vercel.app/v1/author/index?name=苏轼&long_desc=进士&page=1&per_page=10
获取作者详情 | GET | v1/author/show/{value} |  | https://apipoetry.vercel.app/v1/author/show/1
随机获取作者 | GET | v1/author/rand/{limit} |  | https://apipoetry.vercel.app/v1/author/rand/10

## 变更日志

请参阅 [CHANGELOG](CHANGELOG.md) 获取最近有关更改的更多信息。

## 贡献指南

请参阅 [CONTRIBUTING](.github/CONTRIBUTING.md) 有关详细信息。

## 安全漏洞

请查看[我们的安全政策](../../security/policy)了解如何报告安全漏洞。

## 贡献者

* [guanguans](https://github.com/guanguans)
* [所有贡献者](../../contributors)

## 协议

MIT 许可证（MIT）。有关更多信息，请参见[协议文件](LICENSE)。

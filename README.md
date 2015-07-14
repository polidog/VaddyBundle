# VaddyBundle

[![Build Status](https://travis-ci.org/polidog/VaddyBundle.svg?branch=master)](https://travis-ci.org/polidog/VaddyBundle)
[![Coverage Status](https://coveralls.io/repos/polidog/VaddyBundle/badge.svg?branch=master&service=github)](https://coveralls.io/github/polidog/VaddyBundle?branch=master)

[VAddy](http://vaddy.net/ja/)との連携をするためのBundleです。

## できること

- 認証コードのみを設定すれば、認証ファイルがいらなくなる。


## つかいかた

### compsoer install

```
$ composer.phar require polidog/vaddy-bundle
```

### AppKernel.php

```
// vim app/AppKernel.php



    public function registerBundles()
    {
        $bundles = array(
            ...
            new Polidog\VaddyBundle\VaddyBundle(),
        );
```

### config.yml

xxxxxxxxx→VAddyのVerification Codeになります。

```
// vim app/config/config.yml


vaddy:
    verification: 'xxxxxxxxx'
```

よりかっこいい感じの書き方

```
// vim app/parameters.yml

vaddy_verification_code: 'xxxxxxxxx'
```

```
// vim app/config/config.yml

vaddy:
    verification: %vaddy_verification_code%
```

### routing.yml

```
// vim app/config/routing.yml

vaddy:
    resource: "@VaddyBundle/Resources/config/routing.yml"
```

### 設定が行われているか確認

```
$ app/console debug:router vaddy_verification
Name         vaddy_verification
Path         /vaddy-xxxxxxxxx.html
Path Regex   #^/vaddy\-xxxxxxxxx\.html$#s
Host         ANY
Host Regex
Scheme       ANY
Method       ANY
Class        Symfony\Component\Routing\Route
Defaults     _controller: vaddy.controller.verification:indexAction
Requirements NO CUSTOM
Options      compiler_class: Symfony\Component\Routing\RouteCompiler
```

実際にhttpでアクセスする

```
$ curl localhost:8000/vaddy-xxxxxxxxx.html
xxxxxxxxx
```


ここまで完了したら、適当にサーバにデプロイしてから、VAddyの管理画面側で`Verify`ボタンを押してください。

## TODO

- Vaddy Clientの実装、`app/console`で使えるようにする

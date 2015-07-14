# VaddyBundle

[![Build Status](https://travis-ci.org/polidog/VaddyBundle.svg?branch=master)](https://travis-ci.org/polidog/VaddyBundle)
[![Coverage Status](https://coveralls.io/repos/polidog/VaddyBundle/badge.svg?branch=master&service=github)](https://coveralls.io/github/polidog/VaddyBundle?branch=master)

Symfony2なプロジェクトでVaddyを使うときに便利になるようなBundle

## できること

- 認証ファイルをconfg.ymlで簡単に設定できる。

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

```
// vim app/config/config.yml


vaddy:
    verification: 'Verification code'
```

よりかっこいい感じの書き方

```
// vim app/parameters.yml

vaddy_verification_code: 'Verification code'
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



## TODO

- Vaddy Clientの実装、`app/console`で使えるようにする

<h1>Yii 2 Minimal Project Template</h1>

The Yii 2 Minimal Project Template is an extensively stripped down version of the Yii 2 Advanced Project Template.

Out of the box it only implements the front end and the console tier, whilst removing the back end tier and other components such as SwiftMailer extension, Faker extension, Codeception testing framework, etc. Even the user login/logout feature has been kept out of the purview of this template to meet the objective of keeping to the essentials for starting a [Yii 2](http://www.yiiframework.com/) project totally from scratch.

FOLDER STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    models/              placeholder folder for shared model classes
console
    config/              contains console configurations
    controllers/         placeholder folder for console controllers (commands)
    migrations/          placeholder folder for database migrations
    models/              placeholder folder for console-specific model classes
    runtime/             contains files generated during runtime
frontend
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              placeholder folder for frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the web application
    web/                 contains the entry script and web resources
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```

## What's this all about?

Sometimes we require running random code in Magento with have more fine-grained control during debug and the possibility
of triggering xdebug.

## How to install

Under Magento's root folder run the following.

```shell
cd app/
git clone https://github.com/nietoga/magetools tools
```

## How to execute it

At the moment it has 2 custom commands: `app/tools/exec.php` and `app/tools/custom.php`.

### exec.php

Allows to execute a public class' method.

#### Example:

```shell
php app/tools/exec.php '\Magento\Catalog\Model\ProductRepository::get' <sku>
```

### custom.php

Allows the creation and execution of a method in the file `app/tools/_custom_tests.php`.

* In the file there's already an example method called `default`.
* These methods can also receive parameters and have access to the object manager in order to create class instances
  since they don't have access to `di`.

### Example:

```shell
php app/tools/custom.php <methodName> <parameters>...
```

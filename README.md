# Cek Nik KTP
[![GitHub issues](https://img.shields.io/github/issues/namdevel/cek-nik)](https://github.com/namdevel/cek-nik/issues)
[![GitHub forks](https://img.shields.io/github/forks/namdevel/cek-nik)](https://github.com/namdevel/cek-nik/network)
[![GitHub stars](https://img.shields.io/github/stars/namdevel/cek-nik)](https://github.com/namdevel/cek-nik/stargazers)
[![GitHub license](https://img.shields.io/github/license/namdevel/cek-nik)](https://github.com/namdevel/cek-nik/blob/master/LICENSE)
[![Twitter](https://img.shields.io/twitter/url?style=social&url=https%3A%2F%2Fgithub.com%2Fnamdevel%2Fcek-nik)](https://twitter.com/intent/tweet?text=Wow:&url=https%3A%2F%2Fgithub.com%2Fnamdevel%2Fcek-nik)

Data yang dihasilkan merupakan hasil pencarian dari website KPU.GO.ID.

Usage
---------

```php
<?php
require('nik.class.php');

use NAMDEVEL\Ktp\Nik;
$nik = new Nik('36740749069XXXXX');
echo $nik->search();

```
Output
---------

```json
[{"nik":"327104650493****","nama":"NAMA SAMARAN","jenisKelamin":"P","tps":30,"namaPropinsi":"LAMPUNG"...
```
License
------------

This open-source software is distributed under the MIT License. See LICENSE.md

Contributing
------------

All kinds of contributions are welcome - code, tests, documentation, bug reports, new features, etc...

* Send feedbacks.
* Submit bug reports.
* Write/Edit the documents.
* Fix bugs or add new features.

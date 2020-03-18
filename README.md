# Cek Nik KTP
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

## Truth Table

[![Build Status](https://travis-ci.org/programarivm/truth-table.svg?branch=master)](https://travis-ci.org/programarivm/truth-table)
[![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

<p align="center">
	<img src="https://github.com/programarivm/truth-table/blob/master/resources/logo.png" />
</p>

> A truth table is a mathematical table used in logic which sets out the functional values of logical expressions on each of their functional arguments. [Wikipedia](https://en.wikipedia.org/wiki/Truth_table).

### Install

Via composer:

    $ composer require programarivm/truth-table

### Binary Table

Create a binary table with two input variables:

```php
use TruthTable\BinaryTable;

$t = (new BinaryTable(2))->getTable();

```

Get the result of the table:

```php
use TruthTable\BinaryTable;

$r = (new BinaryTable(2))->getResult();

```

Set a specific index to true and get the result:

```php
use TruthTable\BinaryTable;

$r = (new BinaryTable(2))
		->setTrue(0)
		->getResult();

```

### Ternary Table

Create a ternary table with two input variables:

```php
use TruthTable\TernaryTable;

$t = (new TernaryTable(2))->getTable();

```

Get the result of the table:

```php
use TruthTable\TernaryTable;

$r = (new TernaryTable(2))->getResult();

```

Set a specific index to true and get the result:

```php
use TruthTable\TernaryTable;

$r = (new TernaryTable(2))
		->setTrue(0)
		->getResult();

```

For further details please look at the [unit tests](https://github.com/programarivm/truth-table/tree/master/tests).

### License

The GNU General Public License.

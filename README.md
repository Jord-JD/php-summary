# PHP Summary

[![Tests](https://github.com/Jord-JD/php-summary/actions/workflows/tests.yml/badge.svg)](https://github.com/Jord-JD/php-summary/actions/workflows/tests.yml)
![Packagist](https://img.shields.io/packagist/dt/Jord-JD/php-summary.svg)

A PHP library to automatically summarise text using a naive summarisation algorithm.

This summarisation algorithm takes the key sentence from each paragraph. It then strings these resulting sentences together to form the summary. Single-sentence paragraphs and final sentences without punctuation are supported.

For more details on this algorithm, see this [blog post by Shlomi Babluki](http://thetokenizer.com/2013/04/28/build-your-own-summary-tool/).

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
composer require jord-jd/php-summary
```

## Usage

To use PHP Summary, you should create a new `SummaryTool` object, passing it the text content of your article. You can then call its `getSummary` method to retrieve the shortened summary of the article.

Paragraphs may be separated by blank Unix, Windows, or classic Mac lines.

```php
use JordJD\PHPSummary\SummaryTool;

$summary = (new SummaryTool($content))->getSummary();
```

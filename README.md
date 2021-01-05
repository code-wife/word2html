# Word To HTML Convert Using PHP Codeigniter Framework
https://codewife.com/how-to-convert-ms-word-document-to-html-in-php-codeigniter/

PHP Codeigniter Word To HTML Convert Using PHPWord
PHPWord is a library written in pure PHP that provides a set of classes to write to and read from different document file formats. The current version of PHPWord supports Microsoft Office Open XML (OOXML or OpenXML), OASIS Open Document Format for Office Applications (OpenDocument or ODF), Rich Text Format (RTF), HTML, and PDF.

PHPWord is an open source project licensed under the terms of LGPL version 3. PHPWord is aimed to be a high quality software product by incorporating continuous integration and unit testing. You can learn more about PHPWord by reading the Developers' Documentation.

## Requirements

PHPWord requires the following:

- PHP 5.3.3+
- [XML Parser extension](http://www.php.net/manual/en/xml.installation.php)
- [Laminas Escaper component](https://docs.laminas.dev/laminas-escaper/intro/)
- [Zip extension](http://php.net/manual/en/book.zip.php) (optional, used to write OOXML and ODF)
- [GD extension](http://php.net/manual/en/book.image.php) (optional, used to add images)
- [XMLWriter extension](http://php.net/manual/en/book.xmlwriter.php) (optional, used to write OOXML and ODF)
- [XSL extension](http://php.net/manual/en/book.xsl.php) (optional, used to apply XSL style sheet to template )
- [dompdf library](https://github.com/dompdf/dompdf) (optional, used to write PDF)


## Installation

PHPWord is installed via [Composer](https://getcomposer.org/).
To [add a dependency](https://getcomposer.org/doc/04-schema.md#package-links) to PHPWord in your project, either

Run the following to use the latest stable version
```sh
    composer require phpoffice/phpword
```
or if you want the latest master version
```sh
    composer require phpoffice/phpword:dev-master
```

You can of course also manually edit your composer.json file
```json
{
    "require": {
       "phpoffice/phpword": "v0.16.*"
    }
}
```


# Search Engine

This is a search engine that can be used to search for a word in a given text.

## Installation

Php 7+ must be already installed and composer dependency management tool.
And CURL is required.

Package available from packagist.

## Get Started

if you're using composer, you can add this package 

`composer require basil-github/search-engine`

Then you need to load the dependency in your script.

`require '../vendor/autoload.php';`

## Usagee
 `require '../vendor/autoload.php';`

 `use SearchEngine\Search;`

 `$API_KEY = 'your_api_key';`

 `$DOMAIN = 'google.com';`

 `$query = ['Cofee', 'Tea'];`

  `$client = new Search($API_KEY, $DOMAIN);`

  `$results = $client->search($query);`

Need to pass 3  variables, `$API_KEY ` ,`$DOMAIN`,`$query `. we het api key from - [serpapi](https://serpapi.com)
,and u can pass `$DOMAIN` as ex. google.com,googl.ae...,
and `$query` is the words to search. it is an array.
from this we get ARRY of serach result.


## Features

- GET array of search item
- can change search engin 



## API 

 - [serpapi](https://serpapi.com)

Scrape Google and other search engines from our fast, easy, and complete API.
## Authors

- [@basil-github](https://github.com/basil-github)


# php-highlite

Customizeble syntax highligher for PHP. Define languages using regex patterns. Regex patterns must be defined per the following requirements.

1. Capture group 1 is the text preceeding the pattern you want to highlite.
2. Capture group 2 is the text text matching the pattern you want to highlite.
3. Capture group 3 is the text following the pattern you want to highlite.

Something like the following should do.

`(.*?)($search_pattern)(.*)`

Capture group 2 will be wrapped with html spans of the defined class. It is recommended that comments, strings, and preproccessor directives be defined above other patterns. Language definitions are located in the lang directory.

Usage example:

```
include_once 'include/php-highlite/highlite.php';
$text_to_highlight = '$data=$stmt->fetch(PDO::FETCH_ASSOC);';
echo(SyntaxHighlight($text_to_highlight, "php"));
```

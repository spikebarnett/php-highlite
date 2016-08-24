# php-highlite

A lightweight but very customizeble syntax highligher for PHP. Languages are defined using regex patterns. The regex patterns must be defined per the following requirements.

1. Capture group 1 is the text preceeding the pattern you want to highlight.
2. Capture group 2 is the text text matching the pattern you want to highlight.
3. Capture group 3 is the text following the pattern you want to highlight.
4. Capture group 4 should not exist. There should be exactly 3 capture groups.

Something like the following should do.

`(.*?)($search_pattern)(.*)`

Capture group 2 will be wrapped with html spans of the class associated with the pattern it matched. It is recommended that patterns which may span multiple lines, like comments and strings, be defined above other patterns. New language definitions are to be located in the lang/ directory. A few of the more popular languages are already defined there. Refer to them as examples for setting up new language definitions.

Using it is as simple as could be. Just include the highlite.php file and call the SyntaxHighlight function on some text. See below.

```
include_once 'include/php-highlite/highlite.php';
$text_to_highlight = '$data=$stmt->fetch(PDO::FETCH_ASSOC);';
echo(SyntaxHighlight($text_to_highlight, "php"));
```

There is also a SyntaxHighlight_MarkDownFreindly function which will look for the standard grave triplet. Text within a pair of graves triplets will be highlighted using the language specified immediately after the first graves triplet. For example "\`\`\`bash" would start a code block to be highlighted using the bash language definition, and "\`\`\`" would end it.

Tilde triplets have been left out intentionally to allow for pre blocks that the SyntaxHighlight_MarkDownFreindly function will not attempt to highlight.

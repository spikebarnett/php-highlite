<?php
$highlight_regex["c"] = [
['code-preproc',  '/(.*?\n)(#.*?\n)(.*)/s'],
['code-comment',  '/(.*?)(\/\/.*?\n|\/\*.*?\*\/)(.*)/s'],
['code-string',   '/(.*?)("(?:[^"\\\\]+|\\\\.)*"|\'(?:[^\\\'\\\\]+|\\\\.)*\\\')(.*)/s'],
['code-number',   '/(.*?\W)(#\d{6}|#\d{3}|-?(?:\d+?\.\d+?|\.\d+?|\d+?)%?|0x\d+?)(\W.*)/s'],
['code-keyword',  '/(.*?)(\b(a(?:nd|rray|s)|b(?:ool|oolean)|c(?:atch|har|lass|onst)|d(?:elete|ie|o|ouble)|e(?:lse|lseif|xit|xtends)|f(?:alse|inally|loat|or|oreach|unction)|g(?:lobal)|i(?:f|nt|nteger)|l(?:ong)|n(?:ew|ull)|o(?:bject|r)|p(?:rivate|rotected|ublic|ublished)|r(?:eal|esource|eturn)|s(?:elf|hort|igned|tatic|tring|truct|witch)|t(?:hen|his|hrow|rue|ry)|u(?:nsigned)|v(?:ar|oid)|w(?:hile)|x(?:or))\b)(.*)/s'],
['code-function', '/(.*?)([a-zA-Z0-9_]+)(\s*\(.*)/s'],
['code-symbol',   "/(.*?)([<>\\\\])(.*)/s"],
['code-symbol',   "/(.*?)([-$!%^*()+|~=`{}[:;?,.@#&_\/\]]+)(.*)/s"],
['code-allcaps',  '/(.*?)(\b[A-Z]+\b)(.*)/s'],
];
$highlight_regex["cpp"] = $highlight_regex["c"];
$highlight_regex["csharp"] = $highlight_regex["c"];

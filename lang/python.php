<?php
$highlight_regex["python"] = [
['code-preproc',  '/(.*?)(#!.*?\n)(.*)/s'],
['code-comment',  '/(.*?)(#.*?\n)(.*)/s'],
['code-string',   '/(.*?)("(?:[^"\\\\]+|\\\\.)*"|\'(?:[^\\\'\\\\]+|\\\\.)*\\\')(.*)/s'],
['code-number',   '/(.*?\W)(#\d{6}|#\d{3}|-?(?:\d+?\.\d+?|\.\d+?|\d+?)%?|0x\d+?)(\W.*)/s'],
['code-variable', '/(.*?)(\$\w+)(.*)/s'],
['code-symbol',   "/(.*?)([<>\\\\])(.*)/s"],
['code-symbol',   "/(.*?)([-$!%^*()+|~=`{}[:;?,.@#&_\/\]]+)(.*)/s"],
['code-keyword',  '/(.*?)\b(a(?:nd|s|ssert)|b(?:reak)|c(?:lass|ontinue)|d(?:ef|el)|e(?:lif|lse|xcept|xec)|f(?:inally|or|rom)|g(?:lobal)|i(?:f|mport|n|s)|l(?:ambda)|n(?:ot)|o(?:r)|p(?:ass|rint)|r(?:aise|eturn)|t(?:ry)|w(?:hile|ith)|y(?:ield))\b(.*)/s'],
['code-allcaps',  '/(.*?)(\b[A-Z]+\b)(.*)/s'],
];

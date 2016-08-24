<?php
$highlight_regex["java"] = [
['code-comment',  '/(.*?)(\/\/.*?\n|\/\*.*?\*\/)(.*)/s'],
['code-string',   '/(.*?)("(?:[^"\\\\]+|\\\\.)*"|\'(?:[^\\\'\\\\]+|\\\\.)*\\\')(.*)/s'],
['code-number',   '/(.*?\W)(#\d{6}|#\d{3}|-?(?:\d+?\.\d+?|\.\d+?|\d+?)%?|0x\d+?)(\W.*)/s'],
['code-variable', '/(.*?)(\$\w+)(.*)/s'],
['code-symbol',   "/(.*?)([<>\\\\])(.*)/s"],
['code-symbol',   "/(.*?)([-$!%^*()+|~=`{}[:;?,.@#&_\/\]]+)(.*)/s"],
['code-keyword',  '/(.*?)\b(a(?:bstract|ssert)|b(?:oolean|reak|yte)|c(?:ase|atch|har|lass|onst|ontinue)|d(?:efault|o|ouble)|e(?:lse|num|xtends)|f(?:inal|inally|loat|or)|g(?:oto)|i(?:f|mplements|mport|nstanceof|nt|nterface)|l(?:ong)|n(?:ative|ew)|p(?:ackage|rivate|rotected|ublic)|r(?:eturn)|s(?:hort|tatic|trictfp|uper|witch|ynchronized)|t(?:his|hrow|hrows|ransient|ry)|v(?:oid|olatile)|w(?:hile))\b(.*)/s'],
['code-allcaps',  '/(.*?)(\b[A-Z]+\b)(.*)/s'],
];

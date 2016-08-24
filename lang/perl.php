<?php
$highlight_regex["perl"] = [
['code-preproc',  '/(.*?)(^\s*?#!.*?$)(.*)/sm'],
['code-comment',  '/(.*?)(#.*?\n)(.*)/s'],
['code-string',   '/(.*?)("(?:[^"\\\\]+|\\\\.)*"|\'(?:[^\\\'\\\\]+|\\\\.)*\\\')(.*)/s'],
['code-number',   '/(.*?\W)(#\d{6}|#\d{3}|-?(?:\d+?\.\d+?|\.\d+?|\d+?)%?|0x\d+?)(\W.*)/s'],
['code-variable', '/(.*?)([$@]\w+)(.*)/s'],
['code-symbol',   "/(.*?)([<>\\\\])(.*)/s"],
['code-symbol',   "/(.*?)([-$!%^*()+|~=`{}[:;?,.@#&_\/\]]+)(.*)/s"],
['code-allcaps',  '/(.*?)(\b[A-Z]+\b)(.*)/s'],
['code-keyword',  '/(.*?)(\b(a(?:bstract|nd|s)|b(?:reak)|c(?:allable|ase|atch|lass|lone|onst|ontinue)|d(?:eclare|efault|o)|e(?:lse|lseif|nddeclare|ndfor|ndforeach|ndif|ndswitch|ndwhile|xtends)|f(?:inal|inally|or|oreach|unction)|g(?:lobal|oto)|i(?:f|mplements|nstanceof|nsteadof|nterface)|n(?:amespace|ew)|o(?:r)|p(?:rivate|rotected|ublic)|s(?:tatic|witch)|t(?:hrow|rait|ry)|u(?:se)|v(?:ar)|w(?:hile)|x(?:or)|y(?:ield))\b)(.*)/s'],
];

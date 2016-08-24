<?php
$highlight_regex["ruby"] = [
['code-preproc',  '/(.*?)(^#!.*?$)(.*)/sm'],
['code-comment',  '/(.*?)(#.*?\n)(.*)/s'],
['code-comment',  '/(.*?)(^=begin$.*?^=end$)(.*)/sm'],
['code-string',   '/(.*?)("(?:[^"\\\\]+|\\\\.)*"|\'(?:[^\\\'\\\\]+|\\\\.)*\\\')(.*)/s'],
['code-number',   '/(.*?\W)(#\d{6}|#\d{3}|-?(?:\d+?\.\d+?|\.\d+?|\d+?)%?|0x\d+?)(\W.*)/s'],
['code-variable', '/(.*?)(\$\w+)(.*)/s'],
['code-symbol',   "/(.*?)([<>\\\\])(.*)/s"],
['code-symbol',   "/(.*?)([-$!%^*()+|~=`{}[:;?,.@#&_\/\]]+)(.*)/s"],
['code-keyword',  '/(>*?)\b(BEGIN|END|__ENCODING__|__END__|__FILE__|__LINE__|a(?:lias|nd)|b(?:egin|reak)|c(?:ase|lass)|d(?:ef|efined?|o)|e(?:lse|lsif|nd|nsure)|f(?:alse|or)|i(?:f|n)|m(?:odule)|n(?:ext|il|ot)|o(?:r)|r(?:edo|escue|etry|eturn)|s(?:elf|uper)|t(?:hen|rue)|u(?:ndef|nless|ntil)|w(?:hen|hile)|y(?:ield))\b(.*)/s'],
['code-allcaps',  '/(.*?)(\b[A-Z]+\b)(.*)/s'],
];

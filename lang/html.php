<?php
$highlight_regex["html"] = [
['code-comment',  '/(.*?<)(!--.*?--)(>.*)/s'],
['code-string',   '/(.*?)("(?:[^"\\\\]+|\\\\.)*"|\'(?:[^\\\'\\\\]+|\\\\.)*\\\')(.*)/s'],
['code-number',   '/(.*?\W)(#\d{6}|#\d{3}|-?(?:\d+?\.\d+?|\.\d+?|\d+?)%?|0x\d+?)(\W.*)/s'],
['code-symbol',   "/(.*?)([<>\\\\])(.*)/s"],
['code-symbol',   "/(.*?)([-$!%^*()+|~=`{}[:;?,.@#&_\/\]]+)(.*)/s"],
['code-keyword',  '/(.*?)\b(DOCTYPE|a(?:|bbr|cronym|ddress|pplet|rea|rticle|side|udio)|b(?:|ase|asefont|di|do|ig|lockquote|ody|r|utton)|c(?:anvas|aption|enter|ite|ode|ol|olgroup)|d(?:atalist|d|el|etails|fn|ialog|ir|iv|l|t)|e(?:m|mbed)|f(?:ieldset|igcaption|igure|ont|ooter|orm|rame|rameset)|h(?:1|ead|eader|r|tml)|i(?:|frame|mg|nput|ns)|k(?:bd|eygen)|l(?:abel|egend|i|ink)|m(?:ain|ap|ark|enu|enuitem|eta|eter)|n(?:av|oframes|oscript)|o(?:bject|l|ptgroup|ption|utput)|p(?:|aram|re|rogress)|q(?:)|r(?:p|t|uby)|s(?:|amp|cript|ection|elect|mall|ource|pan|trike|trong|tyle|ub|ummary|up)|t(?:able|body|d|extarea|foot|h|head|ime|itle|r|rack|t)|u(?:|l)|v(?:ar|ideo)|w(?:br))\b(.*)/si'],
['code-allcaps',  '/(.*?)(\b[A-Z]+\b)(.*)/s'],
];

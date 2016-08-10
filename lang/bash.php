<?php
$highlight_regex["php"] = [
['code-preproc',  '/(.*?)(#!.*?\n)(.*)/s'],
['code-comment',  '/(.*?)(#.*?\n)(.*)/s'],
['code-string',   '/(.*?)("(?:[^"\\\\]+|\\\\.)*"|\'(?:[^\\\'\\\\]+|\\\\.)*\\\')(.*)/s'],
['code-number',   '/(.*?)(#\d{6}|#\d{3})(.*)/s'],
['code-variable', '/(.*?)(\$\w+)(.*)/s'],
['code-symbol',   "/(.*?)([-$!%^*<>()+|~=`{}[:;<>?,.@#&_\\\\\/\]]+)(.*)/s"],
['code-allcaps',  '/(.*?)(\b[A-Z]+\b)(.*)/s'],
['code-keyword',  '/(.*?)(\b(a(?:lias)|b(?:g|ind|reak|uiltin)|c(?:aller|d|ommand|ompgen|omplete|ompopt|ontinue)|d(?:eclare|irs|isown)|e(?:cho|nable|val|xec|xit|xport)|f(?:alse|c|g)|g(?:etopts)|h(?:ash|elp|istory)|j(?:obs)|k(?:ill)|l(?:et|ocal|ogout)|m(?:apfile)|p(?:opd|rintf|ushd|wd)|r(?:ead|eadarray|eadonly|eturn)|s(?:et|hift|hopt|ource|uspend)|t(?:est|imes|rap|rue|ype|ypeset)|u(?:limit|mask|nalias|nset)|w(?:ait))\b)(.*)/s'],
];

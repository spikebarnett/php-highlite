<?php
$highlight_regex["js"] = [
['code-preproc',  '/(.*?\n)(#include.*?\n)(.*)/s'],
['code-comment',  '/(.*?)(\/\/.*?\n|\/\*.*?\*\/)(.*)/s'],
['code-string',   '/(.*?)("(?:[^"\\\\]+|\\\\.)*"|\'(?:[^\\\'\\\\]+|\\\\.)*\\\')(.*)/s'],
['code-number',   '/(.*?\W)(#\d{6}|#\d{3}|-?(?:\d+?\.\d+?|\.\d+?|\d+?)%?|0x\d+?)(\W.*)/s'],
['code-symbol',   "/(.*?)([<>\\\\])(.*)/s"],
['code-symbol',   "/(.*?)([-$!%^*()+|~=`{}[:;?,.@#&_\/\]]+)(.*)/s"],
['code-allcaps',  '/(.*?)(\b[A-Z]+\b)(.*)/s'],
['code-keyword',  '/(.*?)\b(a(?:bstract|lert|ll|nchor|nchors|rea|rguments|rray|ssign)|b(?:lur|oolean|reak|utton|yte)|c(?:ase|atch|har|heckbox|lass|learinterval|leartimeout|lientinformation|lose|losed|onfirm|onst|onstructor|ontinue|rypto)|d(?:ate|ebugger|ecodeuri|ecodeuricomponent|efault|efaultstatus|elete|o|ocument|ouble)|e(?:lement|lements|lse|mbed|mbeds|ncodeuri|ncodeuricomponent|num|scape|val|vent|xport|xtends)|f(?:alse|ileupload|inal|inally|loat|ocus|or|orm|orms|rame|ramerate|rames|unction)|g(?:oto)|h(?:asownproperty|idden|istory)|i(?:f|mage|mages|mplements|mport|n|nfinity|nnerheight|nnerwidth|nstanceof|nt|nterface|sfinite|snan|sprototypeof)|l(?:ayer|ayers|ength|et|ink|ocation|ong)|m(?:ath|imetypes)|n(?:ame|an|ative|avigate|avigator|ew|ull|umber)|o(?:bject|ffscreenbuffering|pen|pener|ption|uterheight|uterwidth)|p(?:ackage|ackages|agexoffset|ageyoffset|arent|arsefloat|arseint|assword|kcs11|lugin|rivate|rompt|ropertyisenum|rotected|rototype|ublic)|r(?:adio|eset|eturn)|s(?:creenx|creeny|croll|ecure|elect|elf|etinterval|ettimeout|hort|tatic|tatus|tring|ubmit|uper|witch|ynchronized)|t(?:aint|ext|extarea|his|hrow|hrows|op|ostring|ransient|rue|ry|ypeof)|u(?:ndefined|nescape|ntaint)|v(?:alueof|ar|oid|olatile)|w(?:hile|indow|ith)|y(?:ield))\b(.*)/s'],
];
$highlight_regex["javascript"] = $highlight_regex["js"];

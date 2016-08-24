<?php
$highlight_regex["html-js"] = [
['code-comment',  '/(.*?<)(!--.*?--)(>.*)/s'],
['code-comment',  '/(.*?)(\/\/.*?\n|\/\*.*?\*\/)(.*)/s'],
['code-string',   '/(.*?)("(?:[^"\\\\]+|\\\\.)*"|\'(?:[^\\\'\\\\]+|\\\\.)*\\\')(.*)/s'],
['code-number',   '/(.*?\W)(#\d{6}|#\d{3}|-?(?:\d+?\.\d+?|\.\d+?|\d+?)%?|0x\d+?)(\W.*)/s'],
['code-symbol',   "/(.*?)([<>\\\\])(.*)/s"],
['code-symbol',   "/(.*?)([-$!%^*()+|~=`{}[:;?,.@#&_\/\]]+)(.*)/s"],
['code-allcaps',  '/(.*?)(\b[A-Z]+\b)(.*)/s'],
['code-keyword',  '/(.*?)\b(DOCTYPE|a(?:|bbr|cronym|ddress|pplet|rea|rticle|side|udio)|b(?:|ase|asefont|di|do|ig|lockquote|ody|r|utton)|c(?:anvas|aption|enter|ite|ode|ol|olgroup)|d(?:atalist|d|el|etails|fn|ialog|ir|iv|l|t)|e(?:m|mbed)|f(?:ieldset|igcaption|igure|ont|ooter|orm|rame|rameset)|h(?:1|ead|eader|r|tml)|i(?:|frame|mg|nput|ns)|k(?:bd|eygen)|l(?:abel|egend|i|ink)|m(?:ain|ap|ark|enu|enuitem|eta|eter)|n(?:av|oframes|oscript)|o(?:bject|l|ptgroup|ption|utput)|p(?:|aram|re|rogress)|q(?:)|r(?:p|t|uby)|s(?:|amp|cript|ection|elect|mall|ource|pan|trike|trong|tyle|ub|ummary|up)|t(?:able|body|d|extarea|foot|h|head|ime|itle|r|rack|t)|u(?:|l)|v(?:ar|ideo)|w(?:br))\b(.*)/si'],
['code-keyword',  '/(.*?)\b(a(?:bstract|lert|ll|nchor|nchors|rguments|rray|ssign)|b(?:lur|oolean|reak|yte)|c(?:ase|atch|har|heckbox|lass|learinterval|leartimeout|lientinformation|lose|losed|onfirm|onst|onstructor|ontinue|rypto)|d(?:ate|ebugger|ecodeuri|ecodeuricomponent|efault|efaultstatus|elete|o|ocument|ouble)|e(?:lement|lements|lse|mbeds|ncodeuri|ncodeuricomponent|num|scape|val|vent|xport|xtends)|f(?:alse|ileupload|inal|inally|loat|ocus|or|orms|ramerate|rames|unction)|g(?:oto)|h(?:asownproperty|idden|istory)|i(?:f|mage|mages|mplements|mport|n|nfinity|nnerheight|nnerwidth|nstanceof|nt|nterface|sfinite|snan|sprototypeof)|l(?:ayer|ayers|ength|et|ocation|ong)|m(?:ath|imetypes)|n(?:ame|an|ative|avigate|avigator|ew|ull|umber)|o(?:bject|ffscreenbuffering|pen|pener|uterheight|uterwidth)|p(?:ackage|ackages|agexoffset|ageyoffset|arent|arsefloat|arseint|assword|kcs11|lugin|rivate|rompt|ropertyisenum|rotected|rototype|ublic)|r(?:adio|eset|eturn)|s(?:creenx|creeny|croll|ecure|elf|etinterval|ettimeout|hort|tatic|tatus|tring|ubmit|uper|witch|ynchronized)|t(?:aint|ext|his|hrow|hrows|op|ostring|ransient|rue|ry|ypeof)|u(?:ndefined|nescape|ntaint)|v(?:alueof|oid|olatile)|w(?:hile|indow|ith)|y(?:ield))\b(.*)/s'],
];
$highlight_regex["js-html"] = $highlight_regex["html-js"];
$highlight_regex["html-javascript"] = $highlight_regex["html-js"];
$highlight_regex["javascript-html"] = $highlight_regex["html-js"];

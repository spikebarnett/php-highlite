<?php
$highlight_regex=array();
foreach (glob(realpath(dirname(__FILE__))."/lang/*.php") as $filename) { include $filename; }

function SyntaxHighlight($code, string $lang, int $depth=0) {
	if($code == NULL) return NULL;
	if($code == '') return NULL;
	global $highlight_regex;
	$max_depth=count($highlight_regex[$lang]);
	if($depth == $max_depth - 1) return $code;
	preg_match($highlight_regex[$lang][$depth][1],$code,$match);
	if($match==NULL) return SyntaxHighlight($code,$lang,$depth+1);
	return SyntaxHighlight($match[1],$lang,$depth+1).'<span class="'.$highlight_regex[$lang][$depth][0].'">'.$match[2].'</span>'.SyntaxHighlight($match[3],$lang,$depth);
}

function SyntaxHighlight_MarkDownFreindly($code) {
	preg_match('/(.*?```(\w+))\W*(.*?)(```.*)/s',$code,$match);
	if($match == NULL) return $code;
	return $match[1]."\n".SyntaxHighlight($match[3],$match[2])."\n".SyntaxHighlight_MarkDownFreindly($match[4]);
}

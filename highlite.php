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

function SyntaxHighlight_MarkDownFreindly($s) {
   $highlight_regex_code_match='#```(.+\n)((?:.*?\n?)+)```#';
   preg_match($highlight_regex_code_match,$s,$result);
   while(!empty($result)) {
      $replacement=$result[0];
      $replacement=str_replace($result[2],SyntaxHighlight($result[2],trim($result[1])),$replacement);
      $replacement=str_replace("```","\n~~~",$replacement);
      $replacement=$replacement."\n";
      $s=str_replace($result[0],$replacement."\n",$s);
      preg_match($highlight_regex_code_match,$s,$result);
   }
   return $s;
}

<?php
include_once realpath(dirname(__FILE__))."/doublelinkedlist.php";
$highlight_regex=array();
foreach (glob(realpath(dirname(__FILE__))."/lang/*.php") as $filename) { include $filename; }

class hl_node {
	var $ignr;
	var $text;
	
	function __construct($text, $ignr) { $this->text = $text; $this->ignr = $ignr; }
}

function SyntaxHighlight(string $code, string $lang) {
	global $highlight_regex;
	$hl_list = new DoublyLinkedList();
	$hl_list->insertTail(new hl_node($code,FALSE));
	foreach($highlight_regex[$lang] as list($class, $pattern)) {
		for($hl_list->movetoHead(); $hl_list->valid();$hl_list->next()) {
			if($hl_list->curr()->{'data'}->{'ignr'}) continue;
			preg_match($pattern,$hl_list->curr()->{'data'}->{'text'},$mtch);
			if($mtch == NULL) continue;
			$hl_list->insertAfter(new hl_node($mtch[3],FALSE));
			$hl_list->insertAfter(new hl_node('<span class="'.$class.'">'.$mtch[2]."</span>",TRUE ));
			$hl_list->insertAfter(new hl_node($mtch[1],FALSE));
			$hl_list->deleteNode();
		}
	}
	$retval = "";
	for($hl_list->movetoHead(); $hl_list->valid();$hl_list->next()) $retval=$retval.$hl_list->curr()->{'data'}->{'text'};
	return $retval;
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

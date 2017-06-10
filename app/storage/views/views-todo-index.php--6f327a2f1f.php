<?php
// source: /Users/mengfanzhen/mvcDemo/app/views/todo/index.php

use Latte\Runtime as LR;

class Template6f327a2f1f extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>

<?php
		if ($todos) {
?><ul>
<?php
			$iterations = 0;
			foreach ($items as $item) {
				?>    <li><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->id, $item)) /* line 3 */ ?>123123</li>
<?php
				$iterations++;
			}
			$iterations = 0;
			foreach ($items as $item) {
				?>    <li><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->title, $item)) /* line 4 */ ?>1223123</li>
<?php
				$iterations++;
			}
			$iterations = 0;
			foreach ($items as $item) {
				?>    <li><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->status, $item)) /* line 5 */ ?>1231231</li>
<?php
				$iterations++;
			}
			?></ul><?php
		}
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 3, 4, 5');
		
	}

}

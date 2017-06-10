<?php
// source: /Users/mengfanzhen/mvcDemo/app/views/todo/index.latte

use Latte\Runtime as LR;

class Templatedaf20e2974 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>


<?php echo LR\Filters::escapeHtmlText(var_dump($_REQUEST)) /* line 3 */ ?>

<ul>
<?php
		$iterations = 0;
		foreach ($params as $k => $v) {
			?>    <li><?php echo LR\Filters::escapeHtmlText($v->id) /* line 6 */ ?></li>
    <li><?php echo LR\Filters::escapeHtmlText($v->title) /* line 7 */ ?></li>
    <li><?php echo LR\Filters::escapeHtmlText($v->status) /* line 8 */ ?></li>
<?php
			$iterations++;
		}
?>
    123,1231,23
</ul><?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['k'])) trigger_error('Variable $k overwritten in foreach on line 5');
		if (isset($this->params['v'])) trigger_error('Variable $v overwritten in foreach on line 5');
		
	}

}

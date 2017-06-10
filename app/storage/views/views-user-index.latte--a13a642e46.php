<?php
// source: /Users/mengfanzhen/mvcDemo/app/views/user/index.latte

use Latte\Runtime as LR;

class Templatea13a642e46 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<table style="margin:0;pading:0">
    <tr>
        <th colspan="4"><form action="/user/store" method="post"><input name="title"><button type="submit">提交</button></form></th>
    </tr>
    <tr>
        <th>编号</th><th>标题</th><th>状态</th><th>操作</th>
    </tr>
<?php
		$iterations = 0;
		foreach ($todos as $k => $v) {
?>
        <tr>
            <th><?php echo LR\Filters::escapeHtmlText($v->id) /* line 10 */ ?></th><th><?php echo LR\Filters::escapeHtmlText($v->title) /* line 10 */ ?></th><th><?php
			echo LR\Filters::escapeHtmlText($v->status?:0) /* line 10 */ ?></th><th><a href="/user/edit/<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($v->id)) /* line 10 */ ?>">确认</a>|<a href="/user/destroy/<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($v->id)) /* line 10 */ ?>">删除</a></th>
        </tr>
<?php
			$iterations++;
		}
		?></table><?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['k'])) trigger_error('Variable $k overwritten in foreach on line 8');
		if (isset($this->params['v'])) trigger_error('Variable $v overwritten in foreach on line 8');
		
	}

}

<?php

/**
 * 自定义分页样式配置
 * div HTMLdiv盒结构 (<div id="pages">{content}</div>)
 * total 显示统计数量 (<a>{content}</a>)
 * nowpage 当前页 (<span>{content}</span>)
 * page 普通页 (<a href="{url}">{content}</a>)
 * pre 上一页 (<a href="{url}">{content}</a>)
 * next 下一页 (<a href="{url}">{content}</a>)
 */

return array(
    'center' => 4,
    'num' => 7,
    'per_circle' => 7,
    'config' => array(
        'div'     => '<nav class="pagination"><ul>{content}</ul></nav>',
        //'total'   => '<a>{content}</a>',
        'nowpage' => '<a  class="on">{content}</a> ',
        'page'    => '<a href="{url}">{content}</a>',
        //'pre'     => '<a href="{url}">{content}</a>',
        //'next'    => '<a href="{url}">{content}</a>',
        //'note'    => '<a>{content}</a>'
    )
);
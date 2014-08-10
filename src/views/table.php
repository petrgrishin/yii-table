<?php
/**
 * @var \PetrGrishin\View\View $this
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */
use PetrGrishin\HtmlTag\HtmlTag;
use PetrGrishin\Table\Column;
use PetrGrishin\Table\Row;

$table = HtmlTag::create('table')
    ->addClass('table')
    ->begin();
/** @var Column[] $columns */
$columns = $this->getParam('columns');
/** @var Row[] $rows */
$rows = $this->getParam('rows');
foreach ($rows as $row) {
    $tr = HtmlTag::create('tr')->begin();
    foreach ($columns as $code => $column) {
        $content = $row->getField($code)->getContent();
        HtmlTag::create('td')
            ->setContent($content)
            ->run();
    }
    $tr->end();
}

$table->end();


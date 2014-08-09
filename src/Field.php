<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Table;


class Field {
    /** @var Column */
    protected $column;

    public function __construct(Column $column) {
        $this->column = $column;
    }
}
 
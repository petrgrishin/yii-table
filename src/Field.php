<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Table;


class Field {
    /** @var Column */
    protected $column;
    /** @var string */
    protected $content;

    public function __construct(Column $column) {
        $this->column = $column;
    }

    /**
     * @return string
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * @param string $content
     * @return $this
     */
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }
}
 
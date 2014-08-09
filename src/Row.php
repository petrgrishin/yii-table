<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Table;


class Row {
    /** @var string */
    protected $id;
    /** @var Column[] */
    protected $columns = array();

    public function __construct($id) {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return Column[]
     */
    public function getColumns() {
        return $this->columns;
    }

    /**
     * @param Column[] $columns
     * @return $this
     */
    public function setColumns($columns) {
        $this->columns = $columns;
        return $this;
    }
}
 
<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Table;


class Column {
    /** @var string */
    protected $name;
    /** @var boolean */
    protected $sortable;

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isSortable() {
        return $this->sortable;
    }

    /**
     * @param boolean $sortable
     * @return $this
     */
    public function setSortable($sortable = true) {
        $this->sortable = $sortable;
        return $this;
    }
}
 
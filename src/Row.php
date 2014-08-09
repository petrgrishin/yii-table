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
    /** @var Field[] */
    protected $fields = array();

    public function __construct($id, $columns) {
        $this->id = $id;
        $this->columns = $columns;
        foreach ($columns as $code => $column) {
            $this->fields[$code] = new Field($column);
        }
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

    public function getField($code) {
        if (!array_key_exists($code, $this->fields)) {
            throw new \Exception(sprintf('Field by code `%s` is not exists', $code));
        }
        return $this->fields[$code];
    }
}
 
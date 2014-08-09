<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Table;


use PetrGrishin\Widget\BaseWidget;

class TableWidget extends BaseWidget {
    /** @var Column[] */
    protected $columns = array();
    /** @var array */
    protected $rows = array();

    /**
     * @param $code
     * @return Column
     * @throws \Exception
     */
    public function addColumn($code) {
        if (array_key_exists($code, $this->columns)) {
            throw new \Exception(sprintf('Column named `%s` already exists', $code));
        }
        $column = new Column();
        $this->columns[$code] = $column;
        return $column;
    }

    /**
     * @param $code
     * @return Column
     * @throws \Exception
     */
    public function getColumn($code) {
        if (!array_key_exists($code, $this->columns)) {
            throw new \Exception(sprintf('Column named `%s` not exists', $code));
        }
        return $this->columns[$code];
    }

    /**
     * @return Column[]
     */
    public function getColumns() {
        return $this->columns;
    }
}
 
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

    /**
     * @param string $id
     * @return Row
     * * TODO: реализовать strict mode для id строк
     */
    public function addRow($id) {
        $row = new Row($id, $this->getColumns());
        $this->rows[] = $row;
        return $row;
    }

    public function run() {
        $this->render('table', array(
            'rows' => $this->rows,
        ));
    }
}
 
<?php
namespace DataTables;
class DataTable {
    private $identifer;
    private $headers;
    private $options;
    private $linkIncludes = [];
    private $installedLinkIncludes = false;
    private $tableClasses = 'table table-striped table-hover';
    private $data;
    private $scriptIncludes = [];
    private $installedScriptIncludes = false;
    private $style;
    public function __construct($identifier) {
        $this->identifer = $identifier;
        $this->linkIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css';
        $this->scriptIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js';
        $this->style = 'dataTables';
        return $this;
    }
    public function withBootstrap3() {
        $this->linkIncludes['DataTable'] = [];
        $this->scriptIncludes['DataTable'] = [];
        $this->linkIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap.min.css';
        $this->scriptIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js';
        $this->scriptIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.min.js';
        $this->style = 'bootstrap';
        return $this;
    }
    public function withBootstrap4() {
        $this->linkIncludes['DataTable'] = [];
        $this->scriptIncludes['DataTable'] = [];
        $this->linkIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css';
        $this->scriptIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js';
        $this->scriptIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js';
        $this->style = 'bootstrap4';
        return $this;
    }
    public function withBootstrap5() {
        $this->linkIncludes['DataTable'] = [];
        $this->scriptIncludes['DataTable'] = [];
        $this->linkIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css';
        $this->scriptIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js';
        $this->scriptIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js';
        $this->style = 'bootstrap5';
        return $this;
    }
    public function withBulma() {
        $this->linkIncludes['DataTable'] = [];
        $this->scriptIncludes['DataTable'] = [];
        $this->linkIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/css/dataTables.bulma.min.css';
        $this->scriptIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js';
        $this->scriptIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/js/dataTables.bulma.min.js';
        $this->style = 'bulma';
        return $this;
    }
    public function withFoundation() {
        $this->linkIncludes['DataTable'] = [];
        $this->scriptIncludes['DataTable'] = [];
        $this->linkIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/css/dataTables.foundation.min.css';
        $this->scriptIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js';
        $this->scriptIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/js/dataTables.foundation.min.js';
        $this->style = 'foundation';
        return $this;
    }
    public function withjQueryUI() {
        $this->linkIncludes['DataTable'] = [];
        $this->scriptIncludes['DataTable'] = [];
        $this->linkIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/css/dataTables.jqueryui.min.css';
        $this->scriptIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js';
        $this->scriptIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/js/dataTables.jqueryui.min.js';
        $this->style = 'jqueryui';
        return $this;
    }
    public function withSemanticUI() {
        $this->linkIncludes['DataTable'] = [];
        $this->scriptIncludes['DataTable'] = [];
        $this->linkIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/css/dataTables.semanticui.min.css';
        $this->scriptIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js';
        $this->scriptIncludes['DataTable'][] = 'https://cdn.datatables.net/1.11.3/js/dataTables.semanticui.min.js';
        $this->style = 'semanticui';
        return $this;
    }



    public function extAutoFill() {
        $style = $this->style . ".";
        $this->linkIncludes['AutoFill'] = [];
        $this->scriptIncludes['AutoFill'] = [];
        $this->linkIncludes['AutoFill'][] = 'https://cdn.datatables.net/autofill/2.3.7/css/autoFill.' . $style . 'min.css';
        $this->scriptIncludes['AutoFill'][] = 'https://cdn.datatables.net/autofill/2.3.7/js/dataTables.autoFill.min.js';
        if ($this->style != 'dataTables')
            $this->scriptIncludes['AutoFill'][] = 'https://cdn.datatables.net/autofill/2.3.7/js/autoFill.' . $style . 'min.js';
        return $this;
    }
    public function extButtons() {
        $style = $this->style . ".";
        $this->linkIncludes['Buttons'] = [];
        $this->scriptIncludes['Buttons'] = [];
        $this->linkIncludes['Buttons'][] = 'https://cdn.datatables.net/buttons/2.0.1/css/buttons.' . $style . 'min.css';
        $this->scriptIncludes['Buttons'][] = 'https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js';
        $this->scriptIncludes['Buttons'][] = 'https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js';
        $this->scriptIncludes['Buttons'][] = 'https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js';
        $this->scriptIncludes['Buttons'][] = 'https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js';
        if ($this->style != 'dataTables')
            $this->scriptIncludes['Buttons'][] = 'https://cdn.datatables.net/buttons/2.0.1/js/buttons.' . $style . 'min.js';
        return $this;
    }
    public function extColReorder() {
        $style = $this->style . ".";
        $this->linkIncludes['ColReorder'] = [];
        $this->scriptIncludes['ColReorder'] = [];
        $this->linkIncludes['ColReorder'][] = 'https://cdn.datatables.net/colreorder/1.5.4/js/dataTables.colReorder.min.js';
        $this->scriptIncludes['ColReorder'][] = 'https://cdn.datatables.net/colreorder/1.5.4/css/colReorder.' . $style . 'min.css';
        return $this;
    }
    public function extFixedColumns() {
        $this->linkIncludes['FixedColumns'] = [];
        $this->scriptIncludes['FixedColumns'] = [];
        $this->linkIncludes['FixedColumns'][] = 'https://cdn.datatables.net/fixedcolumns/4.0.0/css/fixedColumns.dataTables.min.css';
        $this->scriptIncludes['FixedColumns'][] = 'https://cdn.datatables.net/fixedcolumns/4.0.0/js/dataTables.fixedColumns.min.js';
        return $this;
    }
    public function extFixedHeader() {
        $this->linkIncludes['FixedHeader'] = [];
        $this->scriptIncludes['FixedHeader'] = [];
        $this->linkIncludes['FixedHeader'][] = 'https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.dataTables.min.css';
        $this->scriptIncludes['FixedHeader'][] = 'https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js';
        return $this;
    }
    public function extKeyTable() {
        $this->linkIncludes['KeyTable'] = [];
        $this->scriptIncludes['KeyTable'] = [];
        $this->linkIncludes['KeyTable'][] = 'https://cdn.datatables.net/keytable/2.6.4/css/keyTable.dataTables.min.css';
        $this->scriptIncludes['KeyTable'][] = 'https://cdn.datatables.net/keytable/2.6.4/js/dataTables.keyTable.min.js';
        return $this;
    }
    public function extResponsive() {
        $this->linkIncludes['Responsive'] = [];
        $this->scriptIncludes['Responsive'] = [];
        $this->linkIncludes['Responsive'][] = 'https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css';
        $this->scriptIncludes['Responsive'][] = 'https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js';
        return $this;
    }
    public function extRowGroup() {
        $this->linkIncludes['RowGroup'] = [];
        $this->scriptIncludes['RowGroup'] = [];
        $this->linkIncludes['RowGroup'][] = 'https://cdn.datatables.net/rowgroup/1.1.3/css/rowGroup.dataTables.min.css';
        $this->scriptIncludes['RowGroup'][] = 'https://cdn.datatables.net/rowgroup/1.1.3/js/dataTables.rowGroup.min.js';
        return $this;
    }
    public function extRowReorder() {
        $this->linkIncludes['RowReorder'] = [];
        $this->scriptIncludes['RowReorder'] = [];
        $this->linkIncludes['RowReorder'][] = 'https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css';
        $this->scriptIncludes['RowReorder'][] = 'https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js';
        return $this;
    }
    public function extScroller() {
        $this->linkIncludes['Scroller'] = [];
        $this->scriptIncludes['Scroller'] = [];
        $this->linkIncludes['Scroller'][] = 'https://cdn.datatables.net/scroller/2.0.5/css/scroller.dataTables.min.css';
        $this->scriptIncludes['Scroller'][] = 'https://cdn.datatables.net/scroller/2.0.5/js/dataTables.scroller.min.js';
        return $this;
    }
    public function extSearchBuilder() {
        $this->linkIncludes['SearchBuilder'] = [];
        $this->scriptIncludes['SearchBuilder'] = [];
        $this->linkIncludes['SearchBuilder'][] = 'https://cdn.datatables.net/searchbuilder/1.2.2/css/searchBuilder.dataTables.min.css';
        $this->scriptIncludes['SearchBuilder'][] = 'https://cdn.datatables.net/datetime/1.1.0/js/dataTables.dateTime.min.js';
        $this->scriptIncludes['SearchBuilder'][] = 'https://cdn.datatables.net/searchbuilder/1.2.2/js/dataTables.searchBuilder.min.js';
        return $this;
    }
    public function extSearchPanes() {
        $this->linkIncludes['SearchPanes'] = [];
        $this->scriptIncludes['SearchPanes'] = [];
        $this->linkIncludes['SearchPanes'][] = 'https://cdn.datatables.net/searchpanes/1.4.0/css/searchPanes.dataTables.min.css';
        $this->scriptIncludes['SearchPanes'][] = 'https://cdn.datatables.net/searchpanes/1.4.0/js/dataTables.searchPanes.min.js';
        return $this;
    }
    public function extSelect() {
        $this->linkIncludes['Select'] = [];
        $this->scriptIncludes['Select'] = [];
        $this->linkIncludes['Select'][] = 'https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css';
        $this->scriptIncludes['Select'][] = 'https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js';
        return $this;
    }

    /**
     * DataTable-AltEditor
     * https://github.com/KasperOlesen/DataTable-AltEditor
     * Author: KasperOlesen
     */
    public function extAltEditor() {
        if ($this->style === 'foundation' || $this->style === 'bootstrap5') {
            // Only works on these
            $this->extButtons()->extSelect();
            $this->scriptIncludes['AltEditor'] = 'https://raw.githubusercontent.com/KasperOlesen/DataTable-AltEditor/master/src/dataTables.altEditor.free.js';
        }
        return $this;
    }

    public function addTableClass($class) {
        $this->tableClasses .= $class . " ";
    }
    public function removeTableClass($class) {
        // TODO
    }
    public function addHeader($header, $attributes=[]) {
        $this->headers[][$header] = $attributes;
    }
    public function setHeaders($headers) {
        foreach ($headers as $header => $attributes) {
            $this->headers[][$header] = $attributes;
        }
    }
    public function addRow($row) {
        $this->data[] = $row;
    }
    public function addOption($option) {
        $this->options[] = $option;
    }
    public function setOptions($options) {
        $this->options = $options;
    }
    public function installLinkIncludes() {
        foreach ($this->linkIncludes as $type => $urls) {
            echo "<!-- START $type -->";
            foreach ($urls as $index => $url) {
                echo "<link href='$url' type='text/css' rel='stylesheet' />";
            }
            echo "<!-- END $type -->";
        }
        $this->installedLinkIncludes = true;
    }
    public function create() {
        $html = "<table id='" . $this->identifer . "' class='" . $this->tableClasses . "'><thead><tr>";
        foreach ($this->headers as $index => $headers) {
            foreach ($headers as $header => $attributes) {
                $attrs = '';
                foreach ($attributes as $attributeKey => $attributeValue) {
                    $attrs .= "$attributeKey='$attributeValue' ";
                }
                $html .= "<th $attrs>$header</th>";
            }
        }
        $html .= "</tr></thead>";

        foreach ($this->data as $row) {
            $html .= $row;
        }
        $html .= "</table>";
        return $html;
    }
    public function installScriptIncludes() {
        echo "<!-- START jQuery -->";
        echo '<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>';
        echo "<!-- END jQuery -->";
        foreach ($this->scriptIncludes as $type => $urls) {
            echo "<!-- START $type -->";
            foreach ($urls as $index => $url) {
                echo "<script src='$url' rel='script'></script>";
            }
            echo "<!-- END $type -->";
        }
        ?>
<script>
    var table_<?= $this->identifer ?> = $('#<?= $this->identifer ?>').DataTable()
        <?= !empty($this->options) ? ".options({" . json_encode($this->options, JSON_PRETTY_PRINT) . "})" : ''; ?>;
</script>
        <?php
        $this->installedScriptIncludes = true;
    }
    public function destroy() {}
}
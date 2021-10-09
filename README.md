# Dashboard_Utils

## What is it?
Dashboard_Utils is a repository I made on October 8th, 2021. I wanted a repository I could use for dashboards in the future. It will include useful and functional wrappers for DataTables, Form-Control, and Charts. Feel free to give it a star if you use it for one of your projects or are planning to! Pull requests are always welcome as well. Let's benefit the open source community as a whole!
## DataTables
### Initializing a DataTable with styles
```php
use DataTables\DataTable;
include_once 'DataTables/DataTable.php';

$datatable = new DataTable('identifier'); 
// This will initialize a default DataTable (https://datatables.net/)

$datatable->withBootstrap3(); 
// This will initialize a DataTable with Bootstrap3 styling

$datatable->withBootstrap4();
// This will initialize a DataTable with Bootstrap4 styling

$datatable->withBootstrap5();
// This will initialize a DataTable with Bootstrap5 styling

$datatable->withBulma();
// This will initialize a DataTable with Bulma styling

$datatable->withFoundation();
// This will initialize a DataTable with Foundation styling

$datatable->withjQueryUI();
// This will initialize a DataTable with jQuery UI styling

$datatable->withSemanticUI();
// This will initialize a DataTable with Semantic UI styling
```
#### Adding Extensions
```php
use DataTables\DataTable;
include_once 'DataTables/DataTable.php';
$datatable = new DataTable('identifier'); 

$datatable->extAutoFill();
// This will add the AutoFill DataTables extension to the DataTable

$datatable->extAutoFill()->extFixedHeader();
// This will add both the AutoFill and FixedHeader extension to the DataTable

$datatable->extAltEditor();
// This will only work with Bootstrap5 or Foundation. It also requires the 
// following extensions be installed:
// extButtons(), extSelect()
```
## Charts

## Form-Control 
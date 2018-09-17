<?php

include 'libraries/orders.class.php';
$ordersObj = new orders();
$elementCount = $ordersObj->getOrdersListCount();
include 'utils/paging.class.php';
$paging = new paging(config::NUMBER_OF_ROWS_IN_PAGE);
$paging->process($elementCount, $pageId);
$data = $ordersObj->getOrdersList($paging->size, $paging->first);
include 'templates/order_list.tpl.php';
?>
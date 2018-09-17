<?php

class orders {

    private $orders_table = 'orders';

    public function getOrder($id) {
        $query = "  SELECT *
					FROM `{$this->orders_table}`
					WHERE `id`='{$id}'";
        $data = mysql::select($query);

        return $data[0];
    }

    public function getOrdersList($limit = null, $offset = null) {
        $limitOffsetString = "";
        if (isset($limit)) {
            $limitOffsetString .= " LIMIT {$limit}";
        }
        if (isset($offset)) {
            $limitOffsetString .= " OFFSET {$offset}";
        }

        $query = "  SELECT *
					FROM `{$this->orders_table}`" . $limitOffsetString;
        $data = mysql::select($query);

        return $data;
    }

    public function getOrdersListCount() {
        $query = "  SELECT COUNT(`id`) as `count`
					FROM `{$this->orders_table}`";
        $data = mysql::select($query);

        return $data[0]['count'];
    }

    public function insertOrder($data) {
        $query = "  INSERT INTO `{$this->orders_table}`
								(
									`firstName`,
									`lastName`,
                                                                        `email`,
									`phoneNumber`,
									`country`,
                                                                        `city`,
                                                                        `streetAndHouseNumber`,
                                                                        `postalCode`
								) 
								VALUES
								(
									'{$data['firstName']}',
									'{$data['lastName']}',
									'{$data['email']}',
									'{$data['phoneNumber']}',
                                                                        '{$data['country']}',
                                                                        '{$data['city']}',
                                                                        '{$data['streetAndHouseNumber']}',
                                                                        '{$data['postalCode']}'
								)";
        mysql::query($query);
    }

}

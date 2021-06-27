<?php



Flight::route('GET /orders', function () {
    $offset = Flight::query('offset', 0);
    $limit = Flight::query('limit', 25);
    $search = Flight::query('search');
    $order = Flight::query('orders', "-id");

    Flight::json(Flight::orderService()->get_orders($search, $offset, $limit, $order));
});


Flight::route('GET /orders/@id', function ($id) {
    Flight::json(Flight::orderService()->get_orders_by_id($id));
});


Flight::route('POST /orders', function () {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::orderService()->add_orders($data));
});


Flight::route('PUT /orders/@id', function ($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::orderService()->update_orders($id, $data));
});

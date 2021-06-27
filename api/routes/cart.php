<?php

Flight::route('GET /cart', function () {
    $offset = Flight::query('offset', 0);
    $limit = Flight::query('limit', 25);
    $search = Flight::query('search');
    $order = Flight::query('order', "-id");

    Flight::json(Flight::cartService()->get_cart($search, $offset, $limit, $order));
});


Flight::route('GET /cart/@id', function ($id) {
    Flight::json(Flight::cartService()->get_cart_by_id($id));
});


Flight::route('POST /cart', function () {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::cartService()->add_cart($data));
});



Flight::route('PUT /cart/@id', function ($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::cartService()->update_cart($id, $data));
});

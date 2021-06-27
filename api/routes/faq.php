<?php

Flight::route('GET /faqs', function () {
    $offset = Flight::query('offset', 0);
    $limit = Flight::query('limit', 25);
    $search = Flight::query('search');
    $order = Flight::query('order', "-id");

    Flight::json(Flight::faqService()->get_faqs($search, $offset, $limit, $order));
});


Flight::route('GET /faqs/@id', function ($id) {
    Flight::json(Flight::faqService()->get_faqs_by_id($id));
});


Flight::route('POST /faqs', function () {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::faqService()->add_faqs($data));
});



Flight::route('PUT /faqs/@id', function ($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::faqService()->update_faqs($id, $data));
});

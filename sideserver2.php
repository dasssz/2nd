<?php

// Retrieve the request body
$body = file_get_contents('php://input');
$data = json_decode($body, true);

// Assuming you have a budget variable
$budget = 100; // Assuming the initial budget is $100

// Check if the request method is POST and the endpoint is /addFunds
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === '/addFunds') {
    // Check if the request body contains the amount
    if (isset($data['amount'])) {
        // Update the budget
        $amount = $data['amount'];
        $budget += $amount;

        // Send a JSON response
        header('Content-Type: application/json');
        echo json_encode(array('success' => true, 'message' => 'Added $' . $amount . ' to the budget'));
        exit;
    } else {
        // Send an error response if the amount is not provided
        header('Content-Type: application/json');
        http_response_code(400);
        echo json_encode(array('success' => false, 'message' => 'Amount is required'));
        exit;
    }
} else {
    // Send a 404 response for other endpoints
    http_response_code(404);
    echo '404 Not Found';
    exit;
}

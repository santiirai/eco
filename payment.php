<?php
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://dev.khalti.com/api/v2/epayment/initiate/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode(array(
            "return_url" => "http://localhost:8080/eco/user/payment_success.php",
            "website_url" => "https://example.com/",
            "amount" => 1000,
            "purchase_order_id" => "Order01",
            "purchase_order_name" => "test",
            "customer_info" => array(
                "name" => "Test Bahadur",
                "email" => "test@khalti.com",
                "phone" => "9800000001"
            )
        )),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Key 0a71aada44d940709ce9949cca24d621',
            'Content-Type: application/json',
        ),
    ));

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        // Handle CURL errors
        echo 'Curl Error: ' . curl_error($curl);
    } else {
        // Decode the JSON response
        $response_data = json_decode($response, true);
        
        // Check if payment_url is available in the response
        if (isset($response_data['payment_url'])) {
            // Redirect to the payment URL
            header('Location: ' . $response_data['payment_url']);
            exit;
        } else {
            echo 'Error: Payment URL not found in response.';
            print_r($response_data); // Debugging purpose
        }
    }

    curl_close($curl);
?>

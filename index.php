
<?php
    $url = "https://gorest.co.in/public/v1/users";
    $token = "d7c01847de4c083cb154e9a533294301e9f05f93dbae7d589e42ece63226c0a3";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
    "Accept: application/json",
    "Authorization: Bearer ".$token,
    );

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    // JSON decode 
    $response_data = json_decode(curl_exec($curl));

    $user_data = $response_data->data;

    // Cut long data into small & select only first 10 records
    $user_data = array_slice($user_data, 0, 9);

    curl_close($curl);

    foreach ($user_data as $user) {
        echo "
        <h3 
            style='
            display:flex;
            justify-content:start;
            align-items:center;
            text-aligment:center;
            background:linear-gradient(40deg,#ff7700,#ff1100);
            color:#000;
            padding:30px 30px;
            padding-top:40px;
            border-radius:10px'
        >
        id: ".$user->id;
        echo "<br />";
        echo "name: ".$user->name;
        echo "<br />";
        echo "email: ".$user->email;
        echo "<br />";
        echo "gender: ".$user->gender;
        echo "<br />";
        echo "status: ".$user->status;
        echo "<br /> <br />
        </h3>";
    }
?>
<?php
$method = $_SERVER['request_method'];

//Script Foreach
$c = true;
if ( $method === 'POST') {

    $project_name = trim($_POST["project_name"]);
    $admin_email  = trim($_POST["admin_email"]);
    $form_subject = trim($_POST["form_subject"]);
    foreach ($_POST as $key => $value ) {
        if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject")
            $message .="
            " . ( ($c = !$c) ? )'<tr>':'<tr style="background-color: #f8f8f8;">') . "
            <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
            <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
            </tr>
            ";
    };


};


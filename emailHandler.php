<?php
session_start();
/*if(!isset($_SESSION['email'])){
    header('location:login.php');
}
*/
function valEmail(String $email): string
{
    if (empty($email)) {
        return "Email field is empty.";
    } else {
        if (filter_var(value: $email, filter: FILTER_VALIDATE_EMAIL)) {
            return "Valid email address: " . htmlspecialchars($email);
        } else {
            return "Invalid email address.";
        }
    }
}
function valEmpty(String $val, string $type): string
{
    if (empty($_POST['name'])) {
        return "$type field is empty.";
    } else {
        return "$type is " . $val;
    }
}

function valAge(String |int $age): string
{
    if (empty($age)) {
        return "Age field is empty.";
    } else {
        if (filter_var(value: $age, filter: FILTER_VALIDATE_INT)) {
            return "Age is : " . $age;
        } else {
            return "Invalid value for age";
        }
    }
}

function valPhone(String |int $age): string
{
    if (empty($age)) {
        return "Age field is empty.";
    } else {
        if (filter_var(value: $age, filter: FILTER_VALIDATE_INT)) {
            return "Age is : " . $age;
        } else {
            return "Invalid value for age";
        }
    }
}

$list = 'Ali, Nabil, Ahmed, Mohamed, Hicham, Yassine, Youssef, Hamza, Rachid, Khalid';
$arr = explode(separator: ',', string: $list);
echo '<pre>';
//var_dump(value:$arr);
//echo '<br/>';
//$content=implode('.',$arr);

/*
    if(file_put_contents(filename:'storage.txt',data:json_encode($arr,flags:JSON_PRETTY_PRINT))){
        echo 'File Saved successfully';
    }else{
        echo '<br/>';
    }
        */
echo '<br/>';
// $val=  json_decode(file_get_contents(filename:'storage.txt'));
//echo $val[0];

// $_SESSION['content']=$val;
// header('location:session.php');

/*echo '</br';
echo 'Nagd'<=>'Ali';
echo '<br/>';
echo 6<=>7;
echo '<br/>';
echo 7<=>6;
echo '<br/>';
echo 7<=>7;
echo '<br/>';*/


/*************  */
/*$result = match (200) {
    200 => 'OK',
    404 => 'Not Found',
    500 => 'Server Error',
    default => 'Unknown'
};
echo $result;*/
/***************** */
$profile = function (string $email, string $name, int|string $age, $address, $phone, $about): string | int {

    $arr = [
        'email' => $email,
        'name' => $name,
        'age' => $age,
        'address' => $address,
        'phone' => $phone,
        'about' => $about
    ];
    echo '</br';
    if (file_put_contents(filename: 'storage.txt', data: json_encode($arr, flags: JSON_PRETTY_PRINT))) {
        echo 'File Saved successfully';
    } else {
        echo '<br/>';
    }

    return valEmail($email) . '<br/> ' . valEmpty($name, 'Name') . '<br/> ' . valAge($age) . '<br/> ' . valEmpty($address, 'Address');
};



echo $profile($_POST['email'], $_POST['name'], $_POST['age'], $_POST['address'], $_POST['phone'], $_POST['about']);

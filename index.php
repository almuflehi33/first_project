<?php

echo "Hello";
$myName = 'Ahlam';
$age = '25';
echo "<br>";
echo "My name is $myName ";
echo "<br>";
echo "My age is $age ";


for ($i = 0; $i < 10; $i++) {
    echo $i . ' <br>';
}
$HR = [
    'attendances' => [
        'employee1' => [
            'id' => 1,
            'name' => 'Ali Ahmed',
            'date' => '2023-10-01',
            'time_in' => '09:00 AM',
            'time_out' => '05:00 PM',
            'status' => 'Present',

        ],
        'employee2' => [
            'id' => 2,
            'name' => 'Ahlam Fadhl',
            'date' => '2023-10-01',
            'time_in' => '09:20 AM',
            'time_out' => '04:00 PM',
            'status' => 'Late',
        ],
        'employee3' => [
            'id' => 3,
            'name' => 'Maha Ali',
            'date' => '2023-10-01',
            'time_in' => '00:00 AM',
            'time_out' => '00:00 AM',
            'status' => 'apsent',
        ],
        'leave' => [
            'employee1' => [
                'id' => 1,
                'name' => 'Ali Ahmed',
                'leave_type' => 'Sick Leave',
                'start_date' => '2023-10-01',
                'end_date' => '2023-10-03',
                'status' => 'Approved',
            ],
            'employee2' => [
                'id' => 2,
                'name' => 'Ahlam Fadhl',
                'leave_type' => 'Annual Leave',
                'start_date' => '2023-10-05',
                'end_date' => '2023-10-10',
                'status' => 'Pending',
            ],
            'employee3' => [
                'id' => 3,
                'name' => 'Maha Ali',
                'leave_type' => 'Casual Leave',
                'start_date' => '2023-10-15',
                'end_date' => '2023-10-17',
                'status' => 'Rejected',
            ],
        ],
    'bonus' => [
        'employee1' => [
            'id' => 1,
            'name' => 'Ali Ahmed',
            'bonus_type' => 'over time',
            'amount' => 500,
            'date' => '2023-10-01',
        ],
       
    ],
        'payrolls' => [
            'employee1' => [
                'id' => 1,
                'name' => 'Ali Ahmed',
                'salary' => 5000,
                'bonus' => 500,
                'deductions' => 200,
            ],
            'employee2' => [
                'id' => 2,
                'name' => 'Ahlam Fadhl',
                'salary' => 6000,
                'bonus' => 0,
                'deductions' => 300,
            ],
            'employee3' => [
                'id' => 3,
                'name' => 'Maha Ali',
                'salary' => 7000,
                'bonus' => 0,
                'deductions' => 400,
            ],
        ],
    ],
];

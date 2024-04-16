<?php



$neeraj = new App\Person("Neeraj");
$staff = new App\Staff([new App\Person("Harish")]);
$new_business = new App\Business($staff);
$new_business->hire($neeraj);

var_dump($new_business->geStaffMembers());
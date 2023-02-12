<?php
echo "Electricity Bill Assignment <br><br> ";

// Here is we create a vairable where we store values.
$units = 200;
switch (true) {

    // Bill Rates Per units under 100.
    case ($units >= 1 && $units <= 100):
        $bill = $units * 5;
        break;

    // Bill Rates Per units under 200.
    case ($units >= 101 && $units <= 200):
        $bill = 100 * 5 + ($units - 100) * 10;
        break;

    // Bill Rates Per units under 300.
    case ($units >= 201 && $units <= 300):
        $bill = 100 * 5 + 100 * 10 + ($units - 200) * 15;
        break;

    // Bill Rates Per units if units are more then 300.
    case ($units >= 301 && $units <= 99999999999999999):
        $bill = 100 * 5 + 100 * 10 + 100 * 15 + ($units - 300) * 25;
        break;
}

//Displaying the units and other charges.

echo "Per units charge: 100x5 <br/> ";
echo "Per units charge: 200x10 <br/> ";
echo "Per units charge: 300x15 <br/> ";
echo "Units are above 300x25 <br/> <br/> ";

// Display consumers per month units consumed.

echo " Consumed Units of This Month: $units  <br/> ";

// Showing the result.
echo "Your electricity bill is $bill.";

?>
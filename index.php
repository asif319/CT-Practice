<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<div>
<h2 style="color:Tomato;">Name</h2>

<table>
    <tr>
        <th>1st Name</th>
        <th>2nd Name</th>

    </tr>
    <tr>
        <td>
            <?php
            $user = "Asifur";
            $result = FirstName("Md", $user);
            echo $result; // Mib Print
            function FirstName($name, $second)
            {
                $welcome = $name . " " . $second . " ";
                return $welcome;
            }

            ?>
        </td>
        <td>
            <?php
            $user = "Rahman";
            $result = SecondName($user);
            echo $result; // Mib Print
            function SecondName($name)
            {
                $welcome = $name;
                return $welcome;
            }

            ?>
        </td>

    </tr>
</table>
<br> <br>
<h2 style="color:DodgerBlue;">Arithmetic</h2>

<h4 style="color:MediumSeaGreen;">Parameter 1 = 55</h4>
<h4 style="color:MediumSeaGreen;">Parameter 2 = 30</h4>
<table>
    <tr>
        <th>Add</th>
        <td>
            <?php
            function arithmetic()
            {
                $number_1 = 30;

                $number_2 = 55;

                $calculation = $number_1 + $number_2;

                echo $calculation;
            }
            arithmetic(); // Print Calculation
            ?>
        </td>

    </tr>

    <tr>
        <th>Multiply</th>
        <td>
            <?php
            function multiple()
            {
                $number_1 = 30;

                $number_2 = 55;

                $calculation = $number_1 * $number_2;

                echo $calculation;
            }
            multiple(); // Print Calculation
            ?>
        </td>

    </tr>

    <tr>
        <th>Division</th>
        <td>
            <?php
            function division()
            {
                $number_1 = 55;

                $number_2 = 30;

                $calculation = $number_1 / $number_2;

                echo $calculation;
            }
            division(); // Print Calculation
            ?>
        </td>

    </tr>

    <tr>
        <th>Subtract</th>
        <td>
            <?php
            function subtract()
            {
                $number_1 = 55;

                $number_2 = 30;

                $calculation = $number_1 - $number_2;

                echo $calculation;
            }
            subtract(); // Print Calculation
            ?>
        </td>

    </tr>
</table>
</div>
</body>
</html>

<div>

</div>
<br>


<div>

</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
    <style>  
        table {  
            border-collapse: collapse;  
            width: 50%;  
            margin: 20px auto;  
        }  
        table, th, td {  
            border: 1px solid black;  
        }  
        th, td {  
            padding: 10px;  
            text-align: left;  
        }  
        th {  
            background-color: #f2f2f2;  
        }  
    </style>
</head>
<body>
    <?php 
        $name = "Muhammad Aiman Firdaus bin Shahrul Nizam";
        $matric_num = "DI220009";
        $course = "BIS";
        $year_of_study = "Year 2";
        $add = "UTHM";
    ?>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matric_num"; ?></td> 
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td> 
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$year_of_study"; ?></td> 
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$add"; ?></td> 
        </tr>
    </table>
    
</body>
</html>

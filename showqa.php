<html>

<head>
    <style>
        table {
            border: 2px solid black;
        }

        th {
            border: 2px solid green;
            font-size: 20px;
            padding: 10px;
        }

        td {
            border: 2px solid black;
            margin: auto;
            padding: 5px;
        }

        button {
            background-color: rgb(6, 94, 16);
            border: none;
            color: white;
            padding: 10px;
            margin: 20px;
            border-radius: 10px;
            width: 120px;
        }
        button a{
            text-decoration: none;
            color:white;
        }
    </style>
</head>

<body>
    <?php

    include('db.php');
    $ques = "";
    $opt1 = "";
    $opt2 = "";
    $opt3 = "";
    $opt4 = "";
    $answer = "";
    ?>
    <table>
        <tr>
            <th>
                Questions >>
            </th>
            <?php

            $getq = "SELECT `question` FROM `questions`  ";
            $result = mysqli_query($conn, $getq);
            foreach ($result as $key => $value) {
                foreach ($value as $key1 => $value1) {
                    ?>

                    <th>
                        <?php echo $value1; ?>
                    </th>
                    <?php


                }
            }
            ?>
        </tr>
        <tr>
            <td>Option 1</td>

            <?php
            $getq = "SELECT `opt1` FROM `questions`  ";
            $result = mysqli_query($conn, $getq);
            foreach ($result as $key => $value) {
                foreach ($value as $key1 => $value1) {
                    ?>
                    <td class="td">
                        <?php
                        echo $value1;

                        ?>
                    </td>
                    <?php

                }
            }
            ?>

        </tr>
        <tr>
            <td>Option 2</td>

            <?php
            $getq = "SELECT `opt2` FROM `questions`  ";
            $result = mysqli_query($conn, $getq);
            foreach ($result as $key => $value) {
                foreach ($value as $key1 => $value1) {
                    ?>
                    <td class="td">
                        <?php
                        echo $value1;

                        ?>
                    </td>
                    <?php

                }
            }
            ?>

        </tr>
        <tr>
            <td>Option 3</td>

            <?php
            $getq = "SELECT `opt3` FROM `questions`  ";
            $result = mysqli_query($conn, $getq);
            foreach ($result as $key => $value) {
                foreach ($value as $key1 => $value1) {
                    ?>
                    <td class="td">
                        <?php
                        echo $value1;

                        ?>
                    </td>
                    <?php

                }
            }
            ?>

        </tr>
        <tr>
            <td>Option 4</td>

            <?php
            $getq = "SELECT `opt4` FROM `questions`  ";
            $result = mysqli_query($conn, $getq);
            foreach ($result as $key => $value) {
                foreach ($value as $key1 => $value1) {
                    ?>
                    <td class="td">
                        <?php
                        echo $value1;

                        ?>
                    </td>
                    <?php

                }
            }
            ?>

        </tr>
        <?php
        ?>


    </table>
    <button><a href="admin.html">Admin Page</a></button>
</body>

</html>
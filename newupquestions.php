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

        #btn {
            background-color: rgb(6, 94, 16);
            border: none;
            color: white;
            padding: 10px;
            margin: 20px;
            border-radius: 10px;
            width: 120px;
        }
    </style>
</head>

<body>
    <?php

    include('db.php');
    $qno = array();
    $ques = array();
    $opt1 = array();
    $opt2 = array();
    $opt3 = array();
    $opt4 = array();
    $answer = array();
    ?>
    <form action="newquestions.php" method="POST">
        <table>
            <tr>
                <th>
                    Question No
                </th>
                <?php

                $getq = "SELECT `qno` FROM `questions`  ";
                $result = mysqli_query($conn, $getq);

                foreach ($result as $key => $value) {
                    foreach ($value as $key1 => $value1) {
                        ?>
                        <!-- <?php
                        array_push($qno, $value1);

                        ?> -->

                        <th>
                            <?php
                            echo "<input type=text value=$value1  value=$value1 name=qno>"; ?>
                        </th>

                        <?php


                    }
                }

                ?>
                <th>
                    <button name="qno" .$i type="submit">Edit</button>
                </th>
            </tr>
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
                        <!-- <?php
                        array_push($ques, $value1);

                        ?> -->

                        <th>
                            <?php echo "<textarea type=text value=$value1 name=quesc>$value1</textarea>"; ?>
                        </th>
                        <?php


                    }
                }
                ?>
                <th>
                    <button name="ques" .$i  type="submit">Edit</button>
                </th>
            </tr>
            <tr>
                <td>Option 1</td>

                <?php
                $getq = "SELECT `opt1` FROM `questions`  ";
                $result = mysqli_query($conn, $getq);
                foreach ($result as $key => $value) {
                    foreach ($value as $key1 => $value1) {
                        ?>
                        <!-- <?php
                        array_push($opt1, $value1);

                        ?> -->
                        <td class="td">
                            <?php

                            echo "<input type=text value=$value1 name=opt1c >";

                            ?>
                        </td>
                        <?php

                    }
                }
                ?>
                <th>
                    <button name="opt1" .$i type="submit">Edit</button>
                </th>
            </tr>
            <tr>
                <td>Option 2</td>

                <?php
                $getq = "SELECT `opt2` FROM `questions`  ";
                $result = mysqli_query($conn, $getq);
                foreach ($result as $key => $value) {
                    foreach ($value as $key1 => $value1) {
                        ?>
                        <!-- <?php
                        array_push($opt2, $value1);

                        ?> -->
                        <td class="td">
                            <?php
                            echo "<input type=text value=$value1 name=opt2c >";

                            ?>
                        </td>
                        <?php

                    }
                }
                ?>
                <th>
                    <button name="opt2" .$i type="submit">Edit</button>
                </th>

            </tr>
            <tr>
                <td>Option 3</td>

                <?php
                $getq = "SELECT `opt3` FROM `questions`  ";
                $result = mysqli_query($conn, $getq);
                foreach ($result as $key => $value) {
                    foreach ($value as $key1 => $value1) {
                        ?>
                        <!-- <?php
                        array_push($opt3, $value1);

                        ?> -->
                        <td class="td">
                            <?php
                            echo "<input type=text value=$value1 name=opt3c>";

                            ?>
                        </td>
                        <?php

                    }
                }
                ?>
                <th>
                    <button name="opt3" .$i type="submit">Edit</button>
                </th>

            </tr>
            <tr>
                <td>Option 4</td>

                <?php
                $getq = "SELECT `opt4` FROM `questions`  ";
                $result = mysqli_query($conn, $getq);
                foreach ($result as $key => $value) {
                    foreach ($value as $key1 => $value1) {
                        ?>
                        <!-- <?php
                        array_push($opt4, $value1);

                        ?> -->
                        <td class="td">
                            <?php
                            echo "<input type=text value=$value1  name=opt4c >";

                            ?>
                        </td>
                        <?php

                    }
                }
                ?>
                <th>
                    <button name="opt4" .$i type="submit">Edit</button>
                </th>

            </tr>
            <tr>
                <td>Answers</td>

                <?php
                $getq = "SELECT `answer` FROM `questions`  ";
                $result = mysqli_query($conn, $getq);
                foreach ($result as $key => $value) {
                    foreach ($value as $key1 => $value1) {
                        ?>
                        <td class="td">
                            <?php
                            echo "<input type=text value=$value1  name=ansc >";

                            ?>
                            <!-- <?php
                            array_push($answer, $value1);

                            ?>  -->
                        </td>

                        <?php

                    }
                }
                ?>
                <th>
                    <button name="ans" .$i type="submit" value="ans">Edit</button>
                </th>

            </tr>

            <?php

            ?>


        </table>
        <input type="submit" value="SUBMIT" name="submit" id="btn">
    </form>
</body>

</html>
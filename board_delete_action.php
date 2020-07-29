<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>board_delete.php</title>
    </head>
    <body>
        <h1>board_delete_action.php</h1>
        <?php
            $board_no = $_POST["board_no"];
            echo "board_no : " . $board_no . "<br>";
            $conn = mysqli_connect("db-4jbk9.cdb.ntruss.com","c3e_pmos","wjstks@004","ncp");
	    // $conn = mysqli_connect("localhost", "root", "wjstks@004","ncp");
            if($conn) {
                echo "연결 성공<br>";
            } else {
                die("연결 실패 : " .mysqli_connect_error());
            }
            $sql = "DELETE FROM board WHERE id=".$board_no."";
            if(mysqli_query($conn,$sql)) {
                echo "삭제 성공: ".$result;
            } else {
                echo "삭제 실패: ".mysqli_error($conn);
            }
            mysqli_close($conn);
            header("Location: slb-4841842.ncloudslb.com/board_list.php");
        ?>
    </body>
</html>

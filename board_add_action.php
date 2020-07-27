<html>
    <head>
    </head>
    <body>
        <h1>boardAddAction.php</h1>
        <?php
            $board_title = $_POST["title"];
            $board_content = $_POST["content"];
            $board_user = $_POST["author"];
            echo "board_title : " . $board_title . "<br>";
            echo "board_content : " . $board_content . "<br>";
            echo "board_user : " . $board_user . "<br>";
            $conn = mysqli_connect("db-4j8qf.cdb.ntruss.com","c3e_pmos","wjstks@004","ncp");
	    // $conn = mysqli_connect("localhost", "root", "wjstks@004","ncp");
            if($conn) {
                echo "연결 성공<br>";
            } else {
                die("연결 실패 : " .mysqli_error());
            }
            //board 테이블에 입력된 값을 1행에 넣고 board_date 필드에는 현재 시간을 입력하는 쿼리
            $sql = "INSERT INTO board (title, content, author) values ('".$board_title."','".$board_content."','".$board_user."')";
            $result = mysqli_query($conn,$sql);
            // 쿼리 실행 여부 확인
            if($result) {
                echo "입력 성공: ".$result; //과제 작성시 에러메시지 출력하게 만들기
            } else {
                echo "입력 실패: ".mysqli_error($conn);
            }
            mysqli_close($conn);
            //헤더함수를 이용하여 리스트 페이지로 리다이렉션
            header("Location: http://101.101.217.68/board_list.php"); //헤더 함수를 이용해서 리다이렉션 시킬 수 있다.
        ?>
    </body>
</html>

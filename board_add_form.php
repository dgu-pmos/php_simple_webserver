<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Board Add Form</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">	
     	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    </head>
    <body>
        <h1 class="display-4">Board Add Form</h1>
        <form class="form-horizontal" action="/board_add_action.php" method="post">
            </div>
            <div class="form-group">
                <label for="exampleInputTitle1" class="col-sm-2 control-label">글 제목 : </label>
                <div class="col-sm-10">
                    <input class="form-control" name="title" id="title" type="text" placeholder="title"/>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputContent1" class="col-sm-2 control-label">글 내용 : </label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="content" id="content" rows="5" cols="50" placeholder="content"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputName1" class="col-sm-2 control-label">작성자명 : </label>
                <div class="col-sm-10">
                    <input class="form-control" name="author" id="author" type="text" placeholder="author"/>
                </div>
            </div>
            
            <div>
                &nbsp;&nbsp;&nbsp;
                <button class="btn btn-primary" type="submit" value="글 입력">글 입력</button>
                &nbsp;&nbsp;
                <button class="btn btn-primary" type="reset" value="초기화">초기화</button>
                &nbsp;&nbsp;
                <a class="btn btn-primary" href="/board_list.php">리스트로 돌아가기</a>
            </div>
        </form>
        <script type="text/javascript">
            $("#title").change(function(){
                checkTitle($('#title').val());
            });
            $("#content").change(function(){
                checkTitle($('#content').val());
            });
            $("#author").change(function(){
                checkName($('#author').val());
            });
            function checkTitle(title) {
                if(title.length < 2) {
                    alert('제목은 2자 이상 입력해야 합니다.');
                    $('#title').val('').focus();
                    return false;
                } else { 
                    return true;
                } 
            }
            function checkContent(content) {
                if(content.length < 2) {            
                    alert('내용은 2자리 이상 입력해야 합니다.');
                    $('#content').val('').focus();
                    return false;
                } else { 
                    return true;
                } 
            }
            function checkName(author) {
                if(author.length < 2) {            
                    alert('작성자명은 2자리 이상 입력해야 합니다.');
                    $('#author').val('').focus();
                    return false;
                } else { 
                    return true;
                } 
            }
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </body>
</html>

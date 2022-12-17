<?php include $_SERVER['DOCUMENT_ROOT']."/db.php"; ?>
<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>게시판</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css">	
</head>
<body>
<div>
	<h1>자유게시판</h1>
	<h4>자유롭게 글을 쓸수 있는 게시판입니다</h4>
	<table>
		<thead>
			<tr>
				<th>번호</th>
				<th>제목</th>
				<th>글쓴이</th>
				<th>작성일</th>
				<th>조회수</th>			
			</tr>
		</thead>
		<?php 
		  $sql = mq("select * from board order by idx desc limit 0,5");
		      while ($board = $sql->fetch_array())
		      {
		          $title=$board["title"];
		          if(strlen($title)>30){
		              $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8","...",$board["title"]));
		          }
		 ?>
		 <tbody>
		 	<tr>
		 		<td><?php echo $board['idx']; ?></td>
		 		<td><a href=""><?php echo $title; ?></a></td>
		 		<td><?php echo $board['name']; ?></td>
		 		<td><?php echo $board['date']; ?></td>
		 		<td><?php echo $board['hit']; ?></td>
		 	</tr>
		 </tbody>
		   <?php }?>  
	</table>
	<div>
		<a href="/page/board/write.php"><button>글쓰기</button> </a>
			</div>

</div>

</body>

    
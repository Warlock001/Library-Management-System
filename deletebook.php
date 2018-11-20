<html>
  <head>
    <title> Library Management | Admin </title>
    <meta charset="utf-8">
    <style> 
    
    #body{
        margin: -10px;
          margin-left: -10px;
        width: 82%;
        margin-left: 9%;
        box-shadow: 1px -1px 11px -1px black;
        background-color:#E7E4E4;
      }

    h2{ text-decoration:underline;
        text-align:center; }
    .mainmenu { 
         list-style-type:none;
         margin:0;
         padding: 0;
         overflow:hidden;
         background-color:#EBEFEF;
         height:50;
         border-radius: 25px;
       }

       .mainmenu a:hover{
        border-bottom: 3px solid red;
       }

        li {
         float:left;
       }

    li a {
          display: block;
          
          text-align: center;
          padding: 14px 16px;
          text-decoration:none;
        }
    .navcolor{ 
          background-color:#fbf7f8;
        }
        h3{
          
          font-size: 26px;
        }
      </style>
     <?php
      include('session.php');
    ?>
     </head>
      <body bg><div class="navcolor">
        <center><img src="bookslogo.png" height="100px" width="100px" alt="book_logo" align="middle"><h3>Library - Go / Admin </h3></center></div>
        <ul class="mainmenu">
          <li> <a class="active" href=""></a></li>
     <li> <a href='booklist.php'>Books List</a></li>
     <li> <a href='addbook.php'>Add Book</a></li>
     <li> <a href="Students">Issue Book</a></li>
     <li> <a href="Industry">Delete Book</a></li>
     <li> <a href="Resources">Update Book</a></li>
     <li> <a href="Showcase">Return Book</a></li>
     <li> <a href="Oil">Add Student</a></li>
      <li> <a href="Oil">Delete Student</a></li>
     <li> <a href="faqs">Logout</a></li>
     <!--<li> <a href="icaicc"><img src="cc.png"></a></li> -->
     </ul>


    <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Book Deletion</h3>
            </div>
            <div class="panel-body">
              <?php
              require_once("dbConnect.php");
              $result = mysqli_query($con,"SELECT * FROM bookinfo");
              echo "<table class='table table-bordered table-hover' border='2'>
              <tr>
              <th>Book No</th>
              <th>Title</th>
              <th>Action</th>
              </tr>";
              if (mysqli_num_rows($result)==0)
              echo "Books Database is empty!!! Go to boooks tab and add a new product";
              while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['bookno'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td> <form action='deletebook_confirm.php' method='POST'><input type='hidden' name='bookno' value='".$row["bookno"]."'/><input type='submit' name='submit-btn' class='btn btn-default main-color-bg' value='Delete' /></form></td></tr>";
                }
              echo "</table>";
              mysqli_close($con);
              ?>
            </div>
 </body>
 </html>
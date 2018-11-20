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
     <li> <a href="faqs">Logout</a></li>
     <!--<li> <a href="icaicc"><img src="cc.png"></a></li> -->
     </ul>


     <div class="panel-body">         
            <?php             
              require_once("dbConnect.php");
              $bookno=$_POST['bookno'];
              $title=$_POST['title'];
              $author=$_POST['author'];
              $publisher=$_POST['publisher'];
              $query="INSERT INTO bookinfo (bookno,title,author,publisher) VALUES ('$bookno','$title','$author', '$publisher');";
              $result=mysqli_query($con,$query);
              if ($result)
              {
              echo "New Book Added Successfully!";
              header( "refresh:3;url=addbook.php" );
              }
              else {
                echo "Failed:Database has encountered an error while uploading!!!";
                header( "refresh:3;url=addbook.php" );
              }
              mysqli_close($con);
              ?>
            </div>
 </body>
 </html>
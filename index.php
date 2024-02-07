<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Week 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-3 mb-5">
                    Student Catalog test
                </h1>
            </div>
        </div>
    
    <?php
    
        $connect = mysqli_connect('localhost','root','root','http5225');

        $query = 'SELECT * FROM students';

        $students = mysqli_query($connect, $query);
        
        // echo "<pre>";
        // print_r($students);
        // echo "</pre>";
        ?>
        <div class="row">
            <?php
            foreach($students as $student){
                if ($student['marks']<=50){
                    $bgclass = 'bg-danger';

                }else{
                    $bgclass = 'bg-success';
                }
             echo '<div class="card ' . $bgclass . '">
             <img src="" c'. $student['imageURL']'lass="card-img-top" alt="profile_image">
             <div class="card-body">
               <h5 class="card-title' . $student['fname']'"</h5>
               <p class="card-text' .$student['marks']'" </p>
               <a href="#" class="btn btn-primary">Go Back</a>
             </div>
           </div>';
            }
        ?>
                  
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<?
include 'config.php';
?>

<html lang="en">
    
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Job Search</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">  
    </head>
    
    
    <body>
        
        <div class="container-fluid">
            <div class="row" style="background:black">
                <div class="col-md-12">
                    <br />
                    <h2><center><font color="white">Job Search Portal</font></center></h2>
                    <br />
                </div>
            </div>
        </div>
        
        <br /><br />
        
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-12">
                    
                     
                         
                    <form class="form-inline" action="index.php" method="post" >
                    
                            
                        
                                <input style="margin-left:35%" type="text" class="form-control mr-sm-2" name="skill" placeholder="Your Skill">
                    
                              
                    
                                <input type="submit" name="submit" value="Search" class="btn btn-danger">
                      
                        
                    </form>
                
                </div>
                
                
            </div>
            
        </div>
        
        <?
        
        
             if($_POST['submit'])
            {
               include 'config.php';
                
                    $skill=$_POST['skill'];
                    if($skill != "")
                    {
                    
                    $job=mysql_query("Select * from `jobs` WHERE `skill` like '%$skill%'");
                    $totaljob=mysql_num_rows($job);
                  
        ?>
            
        <br /><br />
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-12">
                    
                    <? if($totaljob == 0)
                    {
                        ?>
                        <center><div class="alert alert-danger">Sorry no jobs found as per you skill : <?=$skill;?></div></center>
                        <?
                    }
                        
                    else
                    {
                        ?>
                        <center><div class="alert alert-success"><?=$totaljob;?> job(s) found as per you skill : <?=$skill;?></div></center>
                        <?
                            
                    }
            
                    ?>
                    
                </div>
                
            </div>
            
        </div>
        <br /><br />
        <div class="container">
            
            <div class="row">
                
                    <div class="col-md-12">
                        
                        <?
                            if($totaljob > 0)
                            {
                                ?>
                                    <table class="table">
                                        
                                        <thead>
                                            
                                            <tr>
                                                <th scope="col">Company</th>    
                                                <th scope="col">Post</th>  
                                                <th scope="col">Description</th>  
                                                <th scope="col">Skills Required</th>  
                                                
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                        
                                        <?
                                            while($data=mysql_fetch_object($job))
                                            {
                                                ?>
                                                    <tr>
                                                        
                                                        <td><?=$data->company;?></td>
                                                        <td><?=$data->position;?></td>
                                                        <td><?=$data->description;?></td>
                                                        <td><?=$data->skill;?></td>
                                                        
                                                    </tr>
                                                
                                                <?
                                            }
                                                ?>
                                        </tbody>
                                    </table>
                                <?
                            }
                            
                        ?>
                        
                    </div>
                
            </div>
            
        </div>
        
        <? 
                    }
                    else
                    {
                        ?>
                            <center><div class="alert alert-danger">Please Search Something</div></center>
                        <?
                    }
        
            }
            
        ?>
        
    </body>
    
</html>
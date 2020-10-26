<?php 
   session_start();
    if(isset($_SESSION['username'])){
      $username=$_SESSION['username'];
    }
    else{
        header('location:../../index.php');
        exit();
    }
      include('../../management/physicians_manage.php');
?>
<html>
<head>
<meta charset="utf-8">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/jqueryform.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<link rel="stylesheet" href="//cdn.materialdesignicons.com/4.1.95/css/materialdesignicons.min.css">
<title></title>
<header>
<div>
	<ul>
		<li><a href="physician.php" title="my_page">My Page</a></li>
		<li><a href="#" title="aboutme">About Me</a></li>
		<li><a href="../../connect/logout.php" title="logout">Logout</a></li>
	</ul>
</div>
</header>
</head>
	<style>
		@font-face{
			src: url("../10.Professional.Fonts.for.Web.Designers.ttf-otf-jpg_persiangfx.com/lato/Lato-BlaIta.ttf");
			font-family: 'en_font';
		}
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			outline: none;
		}
		header
		{
			width: 100%;
			height: 150px;
			background-color: #6D6D6D;
		}
		div ul{
			float: left;
			display: flex;
			width: 40%;
			direction: ltr;
			height: 100px;
		}
		div ul li{
			list-style: none;
			margin-right: 15px;
			width: 120px;
			height: 30px;
			text-align: center;
			margin-top: 20px;
			background-color: #5A5959;
			border-radius: 5px;
			transition: all 0.5s;
		}
		div ul li:hover
		{
			transform: scale(0.9);
			text-decoration: none;
		}
		div ul li a{
			font-family:'en_font';
			text-transform: capitalize;
			font-size: 22px;
			color: blue;
			font-weight: bold;
			text-decoration: none;
			font-style: italic;
		}
	</style>
</head>

<body>
    
<main>

            <div class="col-lg-9 col-md-8 col-sm-6 col-xs-10 home-section bg-gray paddingbot-60 paddingtop-20 container" id="patients">

          
                      
                      <div class="row"style="margin-top:12px;margin-bottom:-15px; font-size:16px;">
                                        <div class="col-lg-6"> 
                                           <p style="font-weight: bold;">Welcome Dear <?php echo $username;?></p>
                                        </div>
                                   
                                    </div>
                                    
                                   
                                      <hr class="bg-info" style="height:1px;opacity:0.6">
                               
                              <div class="section-heading text-center paddingbot-20">
                                <h2 class="h-bold">Patient Data</h2>
                              </div>
                              <br>
   
                        
                         <script>
                        function doctor(color_type){
                            if (color_type == 'doc1'){
                                document.getElementById('doc1').style.display = 'block';
                                document.getElementById('doc2').style.display = 'none';
                            } 
                            else{
                                document.getElementById('doc1').style.display = 'none';
                                document.getElementById('doc2').style.display = 'block';
                            }
                        }
                        </script>


                        
                        <form>
                            
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Plase Choose Doctor Name</label>
                                   <select onchange="doctor(this.value)" class="form-control" id="exampleFormControlSelect1">
                                        <option name="choice1" value="doc1" >Doctor1</option>
                                        <option name="choice2" value="doc2" >Doctor2</option>
                                    </select>   
                                </div>    
                            
                        </form>
                    

                        <div id="doc1" style="display:block;">
                            
                            
                      <div class="ibox-body">
                          <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%" style="text-align:center;vertical-align: middle;">
                              <thead>
                                  <th>No</th>
                                  <th>Patient Name</th>
                                  <th>Organization</th>
                                  <th>Therapy</th>
                                  <th>Medicine</th>
                                  <th>Dosage</th>
                                  <th>Test ID</th>
                                  <th>Date Time</th>
                                  <th>Note</th>
                                  <th>Edit Note</th>
                                  <th>Data</th>  
                                   
                                 
                              </thead>
                              <tbody>
                                <?php
                                    
                                  include('../../management/physicians_manage.php');
                                  
                                  $i = 0;
                                  foreach($patients_data as $patient_data){
                                    $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $patient_data['patient_name'];?></td>
                                    <td><?php echo $patient_data['org'];?></td>
                                    <td><?php echo $patient_data['therapy'];?></td>
                                    <td><?php echo $patient_data['medicine'];?></td>
                                    <td><?php echo $patient_data['dosage'];?></td>
                                    <td><?php echo $patient_data['testID'];?></td>
                                    <td><?php echo $patient_data['dateTime'];?></td>
                                    <td><?php echo $patient_data['note'];?></td>
                                    <td>
                                        <a style="text-align:center;" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" href="http://plustor.ir/show/physicians/edit.php/?noteid=<?php 
                                        echo $patient_data['noteID'];?>" ><span class="mdi-24px mdi mdi-tooltip-edit"></span></a></td> 
                                    <td><a style="text-align:center;" href="http://plustor.ir/show/physicians/diagrams.php/?data=<?php echo $patient_data['dataURL'];?>.csv" ><span class="mdi-24px mdi mdi-content-save"></span></a></td>  
                                    
                                </tr>
                                
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">

                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                                          </div>
                                          <div class="modal-body">
                                            <form action="http://plustor.ir/show/physicians/edit.php" method="GET">
                                                 <input type="hidden" id="noteId" name="noteId" value="<?php echo $patient_data['noteID'];?>">
                                              <div class="form-group">
                                                <label for="message-text" class="control-label">Message:</label>
                                                <textarea class="form-control" name="message-text" id="message-text"><?php echo $patient_data['note'];?></textarea>
                                              </div>
                                               
                                            
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" value="Submit">
                                          </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                    

                                <?php
                                  }
                                ?>
                              </tbody>
                          </table>
                      </div>
                      
                        </div>
                        
                        <div id="doc2" style="display:none;">
                            
                            
                            
                      <div class="ibox-body">
                          <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%" style="text-align:center;vertical-align: middle;">
                              <thead>
                                  <th>No</th>
                                  <th>Patient Name</th>
                                  <th>Organization</th>
                                  <th>Therapy</th>
                                  <th>Medicine</th>
                                  <th>Dosage</th>
                                  <th>Test ID</th>
                                  <th>Date Time</th>
                                  <th>Note</th>
                                  <th>Edit Note</th>
                                  <th>Data</th>  
                                   
                                 
                              </thead>
                              <tbody>
                                <?php
                                    
                                  include('../../management/physicians_manage.php'); 
     
                                  
   
                                  $i = 0;
                                  foreach($patients_data2 as $patient_data){
                                    $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $patient_data['patient_name'];?></td>
                                    <td><?php echo $patient_data['org'];?></td>
                                    <td><?php echo $patient_data['therapy'];?></td>
                                    <td><?php echo $patient_data['medicine'];?></td>
                                    <td><?php echo $patient_data['dosage'];?></td>
                                    <td><?php echo $patient_data['testID'];?></td>
                                    <td><?php echo $patient_data['dateTime'];?></td>
                                    <td><?php echo $patient_data['note'];?></td>
                                    
                                    <td><a style="text-align:center;" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo" href="http://plustor.ir/show/physicians/edit.php/?noteid=<?php echo $patient_data['noteID'];?>" ><span class="mdi-24px mdi mdi-tooltip-edit"></span></a></td>  
                              
                                    
                                    <td><a style="text-align:center;" href="http://plustor.ir/show/physicians/detail/?data=<?php echo $patient_data['dataURL'];?>.csv" ><span class="mdi-24px mdi mdi-content-save"></span></a></td>  
                                    
                                </tr>
                                
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">

                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                                          </div>
                                          <div class="modal-body">
                                            <form action="https://www.smlantech.info/views/physicians/edit.php" method="GET">
                                                 <input type="hidden" id="noteId" name="noteId" value="<?php echo $patient_data['noteID'];?>">
                                              <div class="form-group">
                                                <label for="message-text" class="control-label">Message:</label>
                                                <textarea class="form-control" name="message-text" id="message-text"><?php echo $patient_data['note'];?></textarea>
                                              </div>
                                               
                                            
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" value="Submit">
                                          </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                    

                                <?php
                                  }
                                ?>
                              </tbody>
                          </table>
                      </div>
                      
                      
                        </div>


                        
       
            
            </div><!-- cloes right side of pannel -->      
           

</main>

</body>
</html>


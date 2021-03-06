<div class="col-lg-12" style="padding:0;">
<div class="panel panel-default">
<!-- /.panel-heading -->
<div class="panel-body">
<a href="<?php echo $dirlocation.'teach/library';?>" class="btn btn-success" style="margin-bottom:10px">Back</a>

<div class="panel panel-default" style="">
<div class="panel-heading">
<h3 class="panel-title">Create a courseware</h3>
</div>
<div class="panel-body">

<div class="panel-body">
<div class="row">
<form role="form" method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">

<?php if(isset($data['returnmessage']['msg'])){?>

<div class="alert alert-success" role="alert">
<strong>Alert!</strong> <?php echo $data['returnmessage']['msg'];?>
</div>
<?php }?>

<div class="col-lg-6">

<label>Courseware Category</label>  
<select name="courseware_category" class="form-control">
<option value="0">--Select Classroom--</option>     
<?php while ($grab=mysql_fetch_array($data['catalogue'][1])){?>
<option value="<?php echo $grab['catalogue_id'];?>" <?php if($data['library']['library'][0]['catalogue_id']==$grab['catalogue_id']){echo "selected='selected'";}?>><?php echo $grab['catalogue_title'];?></option>
<?php }?>
</select>              

<label>Courseware Title</label>                
<input type="text" class="form-control" name="courseware_title" required="required" value="<?php if(isset($_GET['edit'])){ echo $data['library']['library'][0]['course_title'];}else{echo $_POST['courseware_title'];}?>" />
<label>Courseware Description</label>     
<textarea class="form-control" name="courseware_description" required="required"><?php if(isset($_GET['edit'])){ echo $data['library']['library'][0]['course_description'];}else{echo $_POST['courseware_description'];}?>

</textarea>              


</div>


<div class="col-lg-6">

<label>Add to classroom (optional)</label>                
<select class="form-control" name="courseware_classroom">
<option value="0">--Select Classroom--</option>     
<?php while ($grab=mysql_fetch_array($data['classroom'][1])){?>
<option value="<?php echo $grab['classroom_id'];?>" <?php if($data['library']['library'][0]['classroom_id']==$grab['classroom_id']){echo "selected='selected'";}?>><?php echo $grab['classroom_title'];?></option>
<?php }?>
</select>

<label>Level</label>                
<select class="form-control" name="courseware_level">
<option value="0">--Select Level--</option>     
<option value="100" <?php if($data['library']['library'][0]['level']=='100'){echo "selected='selected'";}?>>100</option> 
<option value="200" <?php if($data['library']['library'][0]['level']=='200'){echo "selected='selected'";}?>>200</option> 
<option value="300" <?php if($data['library']['library'][0]['level']=='300'){echo "selected='selected'";}?>>300</option>
<option value="400" <?php if($data['library']['library'][0]['level']=='400'){echo "selected='selected'";}?>>400</option>    
<option value="500" <?php if($data['library']['library'][0]['level']=='500'){echo "selected='selected'";}?>>500</option>    
<option value="600" <?php if($data['library']['library'][0]['level']=='600'){echo "selected='selected'";}?>>600</option>   
                </select>
<?php if(isset($_GET['edit'])){
$explode=end(explode('.',strtolower($data['library']['library'][0]['path'])));	
?>
<div class="panel panel-default">
<div class="panel-body">
<div class="col-lg-6">
<img class="thumbnail" src="<?php echo $dirlocation;?>c_app/views/images/<?php echo 'icon_'.$explode.'.png';?>" />
</div>
<div class="col-lg-6">
<button class="btn btn-danger btn-sm" type="button" ng-click="showme=true">Change Doc</button>
<button class="btn btn-info btn-sm" type="button">View Doc</button>
<input type="file" class="form-control" name="courseware_file" ng-show="showme" style="margin-top:7px" />
</div>
</div>
</div>
<?php }else{?>
<label>Attach Courseware</label>
<input type="file" class="form-control" name="courseware_file" />              
<?php }?>
<input type="submit" value="Save Courseware" class="btn btn-lg btn-success btn-sm pull-right" style="margin-top:10px" />

</div>

</form>
</div>
</div>


</div>
</div>
</div>
</div>
</div>



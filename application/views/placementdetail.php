<div class="container">
<div class="contact" id="contact">
    <div class="col-md-16 w3agile_contact_left con-lef-content">
        <h3>Placement Details</h3>
          <table class="table table-striped" style="font-size: 12px;">  
        <thead class="btn-primary">  
            <th>ID</th>  
            <th>PROFILE</th>  
            <th>NAME</th>  
            <th>EMAIL</th>  
            <th>QUALIFICATION</th>  
            <th>PHONE</th>  
            <th>STATUS</th>  
            <th>EXPERIENCE</th>  
            <th>DATE</th>  
              <th>VIEW</th>   
        </thead>  
        <tbody>  
            <?php  
            $i=0;
                foreach($this->Adminlogin_modal->placementdetails() as $row)  
                {  
                  $i++;
                  if($row->profile==1)
                  {
                    $profile='Position Applied For';
                  }
                  elseif($row->profile==2)
                  {
                    $profile='English Trainer';
                  }
                  elseif($row->profile==3)
                  {
                    $profile='Tele-Callers / Interns';
                  }
                  else 
                  {
                    $profile='Business Associates';
                  }
                  if($row->status==1)
                  {
                    $status='Student';
                  }elseif($row->status==2)
                  {
                    $status='Unemployed';
                  }elseif($row->status==3)
                  {
                    $status='Employed';
                  }
                  else
                  {
                    $status='Self-Employed';
                  }
                    //name has to be same as in the database.  
                    echo "<tr>  
                                <td>$i</td>  
                                <td>$profile</td>  
                                <td>$row->name</td>  
                                <td>$row->email</td>  
                                <td>$row->qualification</td>
                                <td>$row->phone</td>
                                <td>$status</td>
                                <td>$row->experience</td>
                                <td>$row->date</td>"  
                                ?><td><a href="<?php echo $row->resume;?>" target="_blank" class='btn-btn-success'>View CV</a></td><?php 
                    echo "</tr>";  
                }  
            ?>  
        </tbody>  
    </table>  
    </div>
    <div class="clearfix"> </div>
  </div>
  <br/>
</div>
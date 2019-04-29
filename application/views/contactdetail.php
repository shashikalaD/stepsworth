<div class="container">
    <div class="col-md-16">
        <h3>Contact Details</h3>
          <table class="table table-striped" style="font-size: 12px;">  
        <thead class="btn-primary">  
            <th>ID</th>    
            <th>NAME</th>  
            <th>MOBILE</th>  
            <th>MESSAGE</th>    
            <th>DATE</th>   
        </thead>  
        <tbody>  
            <?php  
            $i=0;
                foreach($this->Adminlogin_modal->contactdetails() as $row)  
                {  
                  $i++;
                    //name has to be same as in the database.  
                    echo "<tr>  
                                <td>$i</td>  
                                <td>$row->name</td>  
                                <td>$row->mobile</td>  
                                <td>$row->message</td>
                                <td>$row->date</td>  
                    </tr>";  
                }  
            ?>  
        </tbody>  
    </table>  
    </div>
    <div class="clearfix"> </div>
  
  <br/>
</div>
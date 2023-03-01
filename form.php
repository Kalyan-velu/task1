<form class="card p-3 needs-validation" method="POST" enctype="multipart/form-data" action="success.php">
   <div class="form-group mb-3">
      <label for="textinput">Enter any text</label>
      <input type="text" class="form-control" id="textinput" aria-describedby="texthelp" placeholder="Enter any Text" name="textinput" required>
   </div>
   <div class="form-group mb-3">
      <label for="numberinput">Enter any number</label>
      <input type="number" class="form-control" id="numberinput" placeholder="Enter Any Number" name="numberinput" required>
   </div>
   <div class="form-group mb-3">
      <label for="file">Select File</label>
      <input type="file" class="form-control-file" id="file" placeholder="Select File" name="file" required>
   </div>
   <div class="form-group mb-3">
      <label for="remarks">Remarks</label>
      <textarea type="text" class="form-control form-file-button-hover-bg" id="remarks" rows="3" placeholder="Remarks" name="remarks" required></textarea>
   </div>
   <div class="w-50 ">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
   </div>
</form>
@extends('adminPanel.dashbord')
@section('adminWorkingSection')
<h4>Add Photo Here :)</h4>
    <form>
        <div class="form-group">
            <label for="inputState">Choose Photo</label>
                <input type="file" class="form-control" id="inputState">
                </div>

                <div class="form-group">
                <label for="inputState">Photo Category</label>
                    <select id="inputState" class="form-control">
                      <option selected disabled>Choose...</option>
                      <option>Activities</option>
                      <option>Annual Function</option>
                      <option>Celebration Days</option>
                      <option>Camp</option>
                      <option>Festivals</option>
                      <option>Outstanding Result</option>
                      <option>Events</option>
                      <option>Competion</option>
                      <option>Achivements</option>
                      <option>Sports</option>
                      <option>debete</option>
                    </select>
                    </div>
                    
                          <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg">POST</button>
                          </div>
        
    </form>
@endsection
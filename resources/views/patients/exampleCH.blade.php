<div class="row">
                    <div class="col">
                        <form action="{{ url ('/exampleCH') }}" type="get" >
                        @csrf
                        choose your colors:
                        <br/>
                        <input type="checkbox" name="color_list[]" value="Red" <?php if(isset($_POST['color_list']) && in_array("Red",
                        $_POST['color_list'])) echo 'checked="checked"'; ?>/> Red<br/>
                        <input type="checkbox" name="color_list[]" value="Green" <?php if(isset($_POST['color_list']) && in_array("Green",
                        $_POST['color_list'])) echo 'checked="checked"';?>/> Green<br/>
                        <input type="checkbox" name="color_list[]" value="Blue" <?php if(isset($_POST['color_list']) && in_array("Blue",
                        $_POST['color_list'])) echo 'checked="checked"';?>/> Blue<br/>
                        <input type="checkbox" name="color_list[]" value="Orange" <?php if(isset($_POST['color_list']) && in_array("Orange",
                        $_POST['color_list'])) echo 'checked="checked"';?>/> Orange<br/>
                        <input type="checkbox" name="color_list[]" value="Purple" <?php if(isset($_POST['color_list']) && in_array("Purple",
                        $_POST['color_list'])) echo 'checked="checked"';?>/> Purple<br/>

                        <input type="checkbox" name="medium" class="checkbox" <?php if ($_POST['medium']) echo 'checked'; ?>/> Purple<br/>
                        
                        <input type="submit" name="btnSubmit" value="Submit"/>
                        <!-- </form> -->
                    
                    </div>
                </div>  
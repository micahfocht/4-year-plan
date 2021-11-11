<?php
include "./includes/codelookup.php";
?>
<!-- space before card -->
<br>
<hr>

<!-- adding button -->
<form id=" <?php
    echo "addcourse" . $semester;
?>">
<div class="row">
    <!-- dropdown one -->
    <div class="col-3">
        <select name="seccode" id="seccode">
            <option value="0">Select Course</option>
            <option value="CSC">CSC</option>
            <option value="MATH">MATH</option>
            <option value="CTT">CTT</option>
            <option value="PHY">PHY</option>
        </select>
    </div>
    <!-- dropdown two -->
    <div class="col-3">
        <select name="secnum" id="secnum">
            <option value="0">Course Number</option>
            <option value="100">100</option>
            <option value="111">111</option>
            <option value="222">222</option>
            <option value="343">343</option>
        </select>
    </div>
    <div class="col-1">
        <input type="hidden" id="semester" name="semester" value=
<?php
        echo ('"' . $semester . '"');
?>>

    </div>
    <!-- blank space -->
</div>
</form>
    <div class="col-5">
        <button id="<?php
        echo "submit" . $semester;
        ?>" class="btn btn-outline-primary btn-lg">Add</button>
    </div>


<script>

    // on click of the button submit form and run php on process.php
    $("#<?php
        echo "submit" . $semester;
        ?>").on("click", function() {

        // get data from the form and serialize it.
        var dataFromForm = $('#<?php
            echo "addcourse" . $semester;
            ?>').serialize();

        $.ajax({
            type: "POST",
            data: dataFromForm,
            url: "./includes/addcourse.php",
            success: function(data) {
                // -------------------------------------------
                // for your information:
                // just show what we got back from the server
                // -------------------------------------------
                $("#console").append("SUCCESS: " + data + "<br>");
                // -------------------------------------------
            },
            error: function(data) {
                // if it does not work do whatever you want.
                console.log("ERROR");
                console.log(data);
            }
        });


    });
</script>

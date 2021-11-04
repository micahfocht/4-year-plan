<!-- space before card -->
<br>
<hr>

<!-- adding button -->
<form action="./includes/addcourse.php" method="post" id="addcourse">
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
    <div class="col-5">
        <button type="submit" class="btn btn-outline-primary btn-lg">Add</button>
    </div>
</div>
</form>

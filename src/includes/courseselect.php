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
        <div class="autocomplete"
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
<script>
    function autocomplete(inp,arr) {
        var currentFocus;
        inp.addEventListener("input", function(e) {
            var j, k, i, v = this.value;
            closeAllLists();
            if(!v) {
                return false;
            }
            currentFocus = -1;
            j = document.createElement("DIV");
            j.setAttribute("id", this.id + "autocomplete-list");
            j.setAtrribute("class","autocomplete-items");
            this.parentNode.appendChild(j);
            for(i=0; i<arr.length; i++) {
                if (arr[i].substr(0, v.length).toUpperCase() == v.toUpperCase()) {
                    k = document.createElement("DIV");
                    k.innerHTML = "<strong>" + arr[i].substr(0, v.length) + "</strong>";
                    k.innerHTML += "<input type = 'hidden' value = '" + arr[i] + "'>";
                    k.addEventListener("click", function (e) {
                        inp.value = this.getElementsByClassName("input") [0].value;
                        closeAllLists();

                    });
                    j.appendChild(k);

                }
            }
        });
        inp.addEventListener("keydown",function(e){
            var x = document.getElementById(this.id + "autocomplete-list");
            <!-- removed x tag name-->
            if(e.keyCode == 40) {
                currentfocus++;
                addActive(x);
            } else if (e.keyCode == 38) {
                currentfocus--;
                addActive(x);
            } else if (e.keyCode == 13) {
                e.preventDefault();
                if (currentFocus > -1) {
                    x[currentFocus].click();
                }
            }
        });
        function addActive(x) {
            if (!x)
                return false;
            removeActive(x);
            if (currentFocus >= x.length)
                curentFocus = 0;
            if (currentFocus < 0)
                currentFocus = (x.length -1);
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            for ( var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            var x = document.getElementsByClassName("autocomplete-items");
            for( var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        document.addEventListener("click", function(e) {
            closeAllLists(e.target))
        });
    }
</script>

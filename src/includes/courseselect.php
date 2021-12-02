<?php if(!isset($semester)) return; //This checks that the page is being loaded as part of the dashboard, where the semester is already set.
?><!-- space before card -->
<br>
<hr>

<!-- Form to enter courses -->
<form id=" <?php
    echo "addcourse" . $semester; //This is so that, when this is included multiple times on the same page, each for has a distinct id.
?>" action="./includes/addcourse.php" target="hidden-form<?php echo $semester;?>" autocomplete="off" method="post">
<div class="row">
    <!-- dropdown one -->
    <div class="col-4">
        <div class="autocomplete">
            <input id="<?php
            echo "seccode" . $semester; //Again, distinct id for each seccode
            ?>" name="seccode" type="text" placeholder="Select Department" required="required" onchange="warn()">
        </div>
    </div>
    <!-- dropdown two -->
    <div class="col-4">
    <div class="autocomplete">
        <input name="secnum" id="<?php
        echo "secnum" . $semester;
        ?>" type="text" placeholder="Select Course Code" required="required" onchange="warn()">
    </div>
    </div>
    <div class="col-1">
        <input type="hidden" id="semester" name="semester" value=
<?php
        echo ('"' . $semester . '">'); #Set the current semester for this box.
?>
    </div>
<div class="col-3">
    <button id="<?php
    echo "submit" . $semester; #unique value
    ?>" class="btn btn-outline-primary btn-lg" type=submit onclick="unwarn()">Submit</button>
</div>
</form>
<!--Add some blank spaces for the auto complete.-->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<iframe style="display:none" name="hidden-form<?php echo $semester;?>"></iframe>
<script>
function warn(){
    window.onbeforeunload = function() {
        return true; //Warn if a box has data in it.
    };}
function unwarn(){
    window.onbeforeunload = null; //Remove the warning and empty the boxes.
    document.getElementById('seccode<?php echo $semester?>').value ="";
    document.getElementById('secnum<?php echo $semester?>').value = "";
}
</script>

<script>
    var depts = ["A","ACC","ACCT","ADC","AFRO","AHST","ANP","ANTH","APHY","APOL","AR","ARCH","AROT","ART","AS","ASC","ASL","ASP","B","BADM","BBL","BBST","BHS3","BIBL","BIO","BIO-","BIO2","BIOL","BL","BSS","BT","BUAD","BUS","BUSI","BUSN","C","CAPP","CGT","CH","CHEM","CHI","CHM","CHMN","CIN","CINS","CIS","CIT","CMC","COL","COMM","COUN","CP","CPSC","CRIM","CRMJ","CS","CSC","CSCI","CSP","D","DANC","DRED","DSN","E","ECED","ECN3","ECON","ED","EDAD","EDLT","EDN","EDS","EDSN","EDTR","EDUC","ELED","ENG","ENGL","ENGR","ENLT","ENTL","EXS1","F","FA","FFTH","FNAN","FREN","FYE","FYE1","G","GDN","GEO","GEO1","GEOG","GER","GERM","GRK","H","HCM","HEB","HHS","HIS","HIS1","HIST","HOS","HP","HRM","HS","HUM","HUM2","HUMA","HUMS","ICS","IFS","IFS3","INT","INTD","IPE","IS","ISP","ITSC","IVYT","J","JRNL","K","KGN","KINE","L","LA","LANG","LASP","LIT","M","MA","MAT","MAT2","MATH","MBAD","MECR","MES","MESP","MF","MFCT","MH","MHC","MIN","MIS","MLED","MLFR","MLGR","MLIT","MLSP","MLT","MNUR","MPH","MSA","MSCI","MSL","MSLP","MTHE","MUAP","MUED","MUEN","MULH","MUS","MUTH","MUWA","N","NPM","NS","NUR","OBM","ORGM","OXF","P","PHI3","PHIL","PHO","PHYS","POS2","PSY","PSY-","PSY3","PSYC","RUS","S","SCED","SCI","SCI1","SCI2","SCIN","SL","SOC","SOC2","SOC3","SOCI","SPA","SPAN","SPC","SPED","SS","T","THEA","THEO","THES","THT3","THTR","URBN","USP","VID","VIS","VISC","W","WRIT","X","Y","YMN","Z","Z 1"];
    var codes = ["-A307","-D115","-D120","-M445","000","01","010","010C","014","03","030","040","050","066","066T","070","070T","075","080","090","090T","100","100L","101","101A","101L","101R","101T","102","102R","102RT","103","104","105","106","106L","107","107T","108","109","109T","110","11000","110L","110LT","110T","111","111L","111T","112","112L","112T","113","113L","114","114L","114T","115","115L","116","117","117L","117T","118","119","120","121","121L","121T","122","122L","122T","123","124","124T","125","125L","125LT","125T","126","126L","126LT","126T","127","127T","128","128T","129","130","130T","131","131L","131T","132","132L","132LT","132T","133","134","135","135T","136","137","138","1380","139","140","141","141T","142","142T","143","144","144B","145","145A","145B","146","147","147BA","147BS","147BT","147CE","147CL","147EB","147EH","147EU","147FH","147FL","147GU","147HA","147OB","147PE","147SA","147SB","147TB","147TR","147TS","147TU","147VA","147VI","148","148B","150","150L","150LT","151","152","154","160","161","162","162T","163","163L","164","164L","164T","166","168","168T","169","170","170T","171","172","176","177","180","181","181BA","181BT","181CE","181CL","181EH","181EU","181FH","181FL","181GU","181HA","181OB","181PE","181SA","181SB","181TA","181TB","181TR","181TS","181TU","181VA","181VI","182","191","196","1XX","200","200T","201","201L","201R","201T","202","2020","202T","203","203I","203T","204","204L","204LT","204T","205","205L","205T","206","207","207L","208","208T","209","210","210T","211","211L","211T","212","212L","212T","213","213L","213T","214","214L","214LT","214T","215","215L","215LT","215T","216","216L","216T","217","217L","218","219","220","220L","220T","221","221L","221T","222","222L","222T","223","223T","224","224T","225","225T","226","226T","227","227T","228","229","229T","230","230T","231","231L","232","232L","233","233T","234","235","235T","2360","237","237T","239","239T","240","240L","240T","241","241T","242","242L","243","243T","244","244T","245","2450","245B","246","246T","247","248","248A","250","250T","251","251L","251T","252","252T","253","253L","254","255","257","258","260","2600","260T","261","261L","261LT","261T","262","262L","262T","263","263L","264","264T","265","265T","267","268","268T","269","270","270A","270AA","270BB","270DD","270E","270EE","270F","270FF","270GG","270H","270HH","270J","270JJ","270K","270KK","270LL","270LLT","270N","270NN","270P","270PP","270PPT","270Q","270QQ","270RR","270S","270SS","270T","270U","270UU","270UUT","270W","270X","271","272","272T","274","275","276","277","277T","278","279","280","280L","280T","281","282","283","284","285","285F","285T","286","287","287T","288","288T","289","290","290LL","291","291L","293","293T","294","295","296B","297","298","299","299T","300","300T","301","301L","301LT","301T","302","302L","302T","303","303T","304","304T","305","305L","305LT","305T","306","307","308","308T","309","309L","309T","310","310L","310T","311","311L","311T","312","312L","312LT","312T","313","313L","313LT","313T","314","315","315L","315T","316","316L","316T","317","317L","319","320","3200","320L","320T","321","321L","321T","322","322T","323","323T","324","324T","325","325L","325T","326","3260","327","327L","327LT","327T","328","329","329T","330","330T","331","331T","332","332L","332T","333","333T","334","334T","335","335T","336","336T","337","3370","337L","337LT","337T","338","339","340","3403","340T","341","341L","341T","342","3420","343","343T","344","3440","344T","345","345T","346","346T","347","347T","348","349","349T","350","350L","350T","351","351T","352","352T","353","353T","354","355","3550","355T","356","356T","357","358","359","360","360L","360T","361","361T","362","362T","363","363T","364","365","366","367","367T","368T","370","371","371T","372","374","375","375T","376","376T","377","378","378T","380","380A","380L","381","381BA","381BT","381CE","381CL","381EH","381EU","381FH","381FL","381GU","381HA","381OB","381PE","381SA","381SB","381TB","381TR","381TU","381VA","381VI","382","383","385","385T","386","386T","387","387T","390","391","391T","392","393","395","395T","396","397","398","399","400","401","401A","401L","401T","402","402L","402T","403","403C","404","405","406","406T","407","408","409","410","411","411L","411T","412","412T","413","413L","414","415","415T","416","416L","416T","417","417L","417T","418","418L","419","419L","419T","420","420L","420T","421","421L","421T","422","422A","422T","423","423A","423BT","424","425","425L","425T","426","427","427T","428","428T","429","429T","430","430T","431","431L","431T","432","433","433L","434","434L","435","436","436L","437","437L","439","439T","440","440T","441","441L","441T","442","442L","443","443L","444","444L","445","445L","446","446L","447","448","448L","450","450T","451","451T","452","452T","453","453T","454","455","456","457","458","459","459T","460","460L","460T","461","461L","461T","462","462T","463","463T","464","464T","465","465T","467","468","470","470T","471","473","474","476","480","480L","481","482","482T","484","485","487","487T","490","494","496","497","498","499","500","500T","501","501T","502","503","503T","504","504T","505","505T","506","506T","507","509","510","510T","511","512","513","513T","514","515","515T","516","516T","517","517B","517C","517D","517G","517GT","517H","517I","517K","517L","517M","517N","517Y","518","519","520","520T","521","521T","522","522T","523","523T","524","524T","525","526","526T","527","527T","528","529","529T","530","530A","530B","530D","530E","530F","530I","530J","530K","530L","530M","530T","531","531T","532","532T","533","533A","533CT","533D","533E","533H","533I","533IT","533J","533L","533O","533P","533Q","533R","533W","533Z","534","534A","534B","534BT","534C","535","535T","536","539","539T","53OT","540","540AT","540T","541","541T","542","545","550","550T","552","552T","553","555","560","561","562","570","573","587","590","600","601","601T","610","610B","611","612","613","614","614T","615","616","617","620","621","622","623","623T","624","625","625B","631","631T","641","641T","645","651","651T","654","654T","661","663","663T","681","683","683T","685","687","688","690","690A","690B","690T","691","691A","691B","695","695A","695AT","695B","699","699B","L100","L311","P241","P325","P425","P430","P459"]
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        let currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            let a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            let x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });
        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (let i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            let x = document.getElementsByClassName("autocomplete-items");
            for (let i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
        //Autocomplete code borrowed and modified from https://www.w3schools.com/howto/howto_js_autocomplete.asp
    }
</script>
<script>
    autocomplete(document.getElementById("<?php
        echo "seccode" . $semester; #Run the autocomplete code
        ?>"), depts);
    autocomplete(document.getElementById("<?php
        echo "secnum" . $semester;
        ?>"), codes);
</script>

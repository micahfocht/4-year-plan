<?php
    $query = oci_parse($database, "select unique C_NUM from COURSE order by C_NUM asc");
    oci_execute($query);
    oci_fetch_all($query, $code);
    (json_encode($code)); #currently unused, but ideally would pull the course data from the database based on which dept is selected
?>
<script>
    var json_data {"C_CODE":["A","A","A","A","A","A","A","A","A","ACC","ACCT","ACCT","ACCT","ACCT","ACCT","ACCT","ACCT","ACCT","ACCT","ACCT","ACCT","ACCT","ACCT","ACCT","ACCT","ACCT","ACCT","ACCT","ACCT","ADC","ADC","ADC","ADC","ADC","ADC","ADC","ADC","ADC","ADC","ADC","ADC","ADC","AFRO","AFRO","AFRO","AFRO","AFRO","AFRO","AFRO","AFRO","AFRO","AFRO","AHST","ANP","ANP","ANTH","APHY","APHY","APHY","APOL","APOL","APOL","APOL","APOL","APOL","APOL","APOL","APOL","APOL","AR","AR","AR","ARCH","AROT","AROT","AROT","AROT","AROT","AROT","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","ART","AS","AS","AS","AS","AS","AS","AS","AS","AS","AS","AS","AS","ASC","ASC","ASC","ASC","ASC","ASC","ASC","ASC","ASC","ASC","ASC","ASC","ASC","ASC","ASC","ASC","ASC","ASC","ASC","ASC","ASL","ASL","ASL","ASL","ASL","ASL","ASL","ASL","ASL","ASL","ASL","ASL","ASL","ASL","ASL","ASL","ASL","ASL","ASP","ASP","ASP","ASP","ASP","ASP","ASP","ASP","ASP","B","B","B","B","B","B","B","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BADM","BBL","BBL","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BBST","BHS3","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIBL","BIO","BIO","BIO","BIO","BIO","BIO","BIO","BIO-","BIO2","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BIOL","BL","BSS","BSS","BSS","BSS","BSS","BSS","BSS","BSS","BSS","BSS","BSS","BSS","BT","BT","BT","BT","BT","BT","BT","BT","BT","BT","BT","BT","BT","BT","BT","BT","BT","BT","BT","BUAD","BUS","BUS","BUS","BUSI","BUSN","BUSN","C","C","C","C","C","C","C","C","C","C","C","C","C","C","C","C","C","CAPP","CAPP","CAPP","CAPP","CGT","CH","CH","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHEM","CHI","CHI","CHI","CHM","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CHMN","CIN","CIN","CINS","CIS","CIS","CIT","CMC","CMC","CMC","CMC","CMC","CMC","CMC","CMC","CMC","COL","COL","COL","COL","COL","COL","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COMM","COUN","COUN","COUN","COUN","COUN","COUN","COUN","COUN","COUN","COUN","COUN","COUN","COUN","COUN","COUN","COUN","COUN","CP","CPSC","CPSC","CPSC","CPSC","CPSC","CPSC","CPSC","CRIM","CRMJ","CRMJ","CRMJ","CRMJ","CRMJ","CRMJ","CRMJ","CRMJ","CRMJ","CRMJ","CRMJ","CRMJ","CRMJ","CRMJ","CRMJ","CRMJ","CRMJ","CRMJ","CS","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSC","CSCI","CSP","CSP","D","D","DANC","DANC","DANC","DANC","DANC","DANC","DANC","DANC","DANC","DANC","DANC","DANC","DRED","DSN","DSN","DSN","E","E","E","E","E","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECED","ECN3","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ECON","ED","EDAD","EDAD","EDAD","EDAD","EDAD","EDAD","EDAD","EDAD","EDAD","EDAD","EDLT","EDLT","EDLT","EDLT","EDLT","EDLT","EDLT","EDLT","EDN","EDN","EDN","EDN","EDN","EDS","EDS","EDS","EDSN","EDSN","EDSN","EDSN","EDSN","EDSN","EDSN","EDSN","EDSN","EDSN","EDSN","EDSN","EDSN","EDSN","EDSN","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDTR","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","EDUC","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ELED","ENG","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGL","ENGR","ENGR","ENGR","ENGR","ENGR","ENGR","ENGR","ENGR","ENGR","ENGR","ENGR","ENGR","ENLT","ENTL","EXS1","F","F","F","F","F","F","F","F","F","FA","FA","FA","FA","FA","FA","FFTH","FFTH","FFTH","FFTH","FFTH","FFTH","FNAN","FNAN","FNAN","FNAN","FREN","FREN","FREN","FREN","FREN","FREN","FREN","FREN","FREN","FREN","FYE","FYE1","FYE1","G","G","G","G","G","G","G","GDN","GDN","GDN","GDN","GDN","GDN","GDN","GDN","GDN","GEO","GEO","GEO1","GEOG","GER","GER","GER","GER","GER","GER","GERM","GRK","GRK","GRK","GRK","GRK","GRK","GRK","H","H","H","H","H","H","HCM","HCM","HCM","HCM","HCM","HCM","HCM","HCM","HCM","HCM","HEB","HEB","HEB","HEB","HEB","HEB","HHS","HIS","HIS","HIS","HIS","HIS","HIS","HIS","HIS1","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HIST","HOS","HOS","HOS","HP","HRM","HRM","HRM","HRM","HRM","HRM","HRM","HRM","HRM","HS","HS","HS","HS","HS","HS","HS","HS","HS","HS","HUM","HUM","HUM2","HUM2","HUMA","HUMS","HUMS","HUMS","HUMS","ICS","IFS","IFS","IFS","IFS","IFS","IFS","IFS","IFS","IFS","IFS","IFS3","INT","INT","INT","INT","INT","INT","INT","INT","INT","INT","INT","INT","INT","INT","INT","INT","INT","INT","INT","INT","INT","INT","INT","INT","INTD","INTD","INTD","INTD","IPE","IS","IS","IS","IS","IS","IS","IS","IS","IS","IS","IS","ISP","ISP","ISP","ISP","ISP","ITSC","ITSC","ITSC","ITSC","ITSC","ITSC","ITSC","IVYT","IVYT","IVYT","J","J","J","J","J","JRNL","JRNL","JRNL","JRNL","JRNL","JRNL","JRNL","JRNL","JRNL","K","K","K","K","KGN","KGN","KGN","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","KINE","L","L","L","L","L","L","L","L","L","L","L","L","LA","LA","LANG","LANG","LANG","LANG","LANG","LANG","LANG","LANG","LANG","LANG","LANG","LANG","LANG","LANG","LANG","LASP","LASP","LASP","LASP","LASP","LASP","LASP","LIT","LIT","LIT","LIT","LIT","LIT","LIT","LIT","LIT","LIT","LIT","LIT","LIT","LIT","LIT","LIT","M","M","M","M","M","M","M","M","M","M","M","M","M","M","M","M","M","M","M","M","M","M","MA","MAT","MAT","MAT","MAT","MAT2","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MATH","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MBAD","MECR","MECR","MES","MES","MES","MES","MES","MES","MES","MES","MES","MESP","MESP","MESP","MESP","MF","MF","MFCT","MFCT","MFCT","MFCT","MFCT","MFCT","MFCT","MFCT","MFCT","MFCT","MFCT","MFCT","MH","MH","MHC","MHC","MHC","MHC","MHC","MHC","MHC","MHC","MHC","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIN","MIS","MIS","MLED","MLED","MLED","MLED","MLED","MLED","MLED","MLED","MLED","MLED","MLED","MLFR","MLFR","MLFR","MLFR","MLFR","MLFR","MLGR","MLIT","MLSP","MLSP","MLSP","MLT","MNUR","MNUR","MNUR","MNUR","MNUR","MNUR","MNUR","MNUR","MNUR","MNUR","MNUR","MNUR","MNUR","MNUR","MNUR","MNUR","MNUR","MNUR","MNUR","MNUR","MNUR","MPH","MPH","MPH","MPH","MSA","MSA","MSA","MSA","MSA","MSA","MSA","MSA","MSA","MSA","MSA","MSA","MSCI","MSL","MSL","MSL","MSL","MSL","MSL","MSL","MSL","MSL","MSL","MSL","MSL","MSL","MSLP","MTHE","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUAP","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUED","MUEN","MUEN","MUEN","MUEN","MUEN","MUEN","MUEN","MUEN","MUEN","MULH","MULH","MULH","MULH","MULH","MULH","MULH","MULH","MULH","MULH","MULH","MULH","MULH","MUS","MUS","MUTH","MUTH","MUTH","MUTH","MUTH","MUTH","MUTH","MUTH","MUTH","MUTH","MUTH","MUTH","MUTH","MUTH","MUTH","MUTH","MUTH","MUWA","MUWA","MUWA","MUWA","MUWA","MUWA","N","N","NPM","NPM","NPM","NPM","NPM","NPM","NPM","NPM","NS","NS","NS","NS","NS","NS","NS","NS","NS","NS","NS","NS","NS","NS","NS","NS","NS","NS","NS","NS","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","NUR","OBM","ORGM","ORGM","ORGM","ORGM","ORGM","ORGM","ORGM","ORGM","ORGM","ORGM","ORGM","ORGM","ORGM","ORGM","ORGM","OXF","OXF","OXF","OXF","OXF","OXF","OXF","OXF","OXF","OXF","OXF","OXF","OXF","OXF","OXF","OXF","OXF","OXF","OXF","OXF","OXF","OXF","OXF","P","P","P","P","P","P","P","P","P","P","P","P","P","P","P","P","P","P","P","P","P","P","P","P","PHI3","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHIL","PHO","PHO","PHO","PHO","PHO","PHO","PHO","PHO","PHYS","PHYS","PHYS","PHYS","PHYS","PHYS","PHYS","PHYS","PHYS","PHYS","PHYS","PHYS","PHYS","PHYS","PHYS","PHYS","PHYS","PHYS","PHYS","PHYS","POS2","PSY","PSY","PSY","PSY","PSY","PSY","PSY","PSY","PSY-","PSY-","PSY-","PSY-","PSY-","PSY3","PSY3","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","PSYC","RUS","RUS","RUS","RUS","S","S","S","S","S","S","S","S","S","S","S","S","S","S","S","S","S","S","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCED","SCI","SCI1","SCI2","SCI2","SCIN","SL","SL","SL","SL","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC","SOC2","SOC3","SOC3","SOCI","SOCI","SPA","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPAN","SPC","SPED","SPED","SPED","SPED","SPED","SPED","SPED","SPED","SPED","SPED","SPED","SPED","SPED","SPED","SPED","SPED","SPED","SPED","SPED","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","SS","T","T","T","T","T","T","T","THEA","THEO","THEO","THEO","THEO","THEO","THEO","THEO","THEO","THEO","THEO","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THES","THT3","THT3","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","THTR","URBN","URBN","URBN","URBN","USP","USP","USP","USP","USP","USP","USP","USP","USP","USP","USP","USP","USP","USP","USP","USP","VID","VID","VID","VID","VID","VID","VID","VID","VIS","VIS","VIS","VIS","VIS","VIS","VIS","VIS","VIS","VIS","VIS","VIS","VIS","VIS","VIS","VIS","VIS","VIS","VIS","VISC","VISC","VISC","W","W","W","W","W","WRIT","WRIT","WRIT","WRIT","WRIT","WRIT","WRIT","WRIT","WRIT","WRIT","WRIT","X","X","X","Y","YMN","YMN","YMN","YMN","YMN","YMN","YMN","YMN","YMN","YMN","YMN","YMN","YMN","YMN","YMN","Z","Z","Z 1"],"C_NUM":["100","101","106","312","314","328","339","347","424","109","101","120","203","203I","204","303","304","304T","310","310T","311","311T","312","312T","327","327T","412","412T","427","301","320","330","401","501","510","510T","515","520","520T","587","687","688","101","111","111L","211","211L","212L","311","311L","312","411","-A307","102","201","154","101","102","201","110","110T","250","250T","320","320T","350","350T","450","450T","101","111","202","300","202","211","211L","301","401","414","100","111","112","112T","113","114","114T","130","160","202","208","209","210","217","219","255","2600","261","262","262T","264","264T","265","265T","267","303","304","312","312T","315T","317","321L","325","331","352","352T","361","362","362T","364","365","367","367T","405","406","421L","450","451","461","461T","462","462T","464","464T","465","465T","467","481","482","484","485","487","497","498","100","101","101L","111","200","201","211","300","301","311","400","401","304","307","308","309","310","311","312","315","320","322","340","345","348","351","352","353","371","391","392","393","101","101L","111","111L","201","201L","204","208","208T","211","211L","214","260","311","312","315","316","360","302","303","304","305","310","315","320","321","322","101","101L","401","404","415","426","440","121","121T","122","125","150","220","220T","221","222","222T","223","223T","224","300","300T","320","320T","321","321T","322","326","327","334","335","335T","341","343","343T","344","344T","427","428","428T","429","430","434","435","436","437","450","450T","470","201","2020","531","532","532T","533A","533CT","533D","533E","533H","533I","533IT","533J","533L","533O","533P","533Q","533R","533W","533Z","534B","539","539T","540","540AT","540T","541","541T","550","560","270","201","201T","211","211T","212","212T","213","213T","214","214T","215","215T","216","216T","218","221","221T","222","223","224","224T","225","235","235T","250","320","320T","327","330","331","332","333","333T","341","342","343","343T","350","350T","423","450","460","470","470T","201","220","221","221L","305","332","332L","L100","210","101","101L","107","114","115","115L","125","125L","125LT","125T","126","126L","126LT","126T","205","205T","214","214L","214LT","215","215L","215LT","215T","220","220L","225","225T","230T","308","308T","309","309L","309T","312","312L","312LT","312T","313","313L","313LT","313T","321","332L","337","337L","337LT","337T","345","355","399","413","460","460L","471","480","480L","L311","422","1XX","278","279","280","281","320","371","375","380","410","420","498","210","220","220L","225","230","235","240","310","310L","320","320L","325","325L","410","420","430","431","432","433","446","202","300","440","101","101","202","120","121","201","243","251","301","303","308","341","341L","361","390","435","442","445","481","490","130","130T","210","210T","11000","101","101L","101","101L","105","150","150L","150LT","163","163L","164","164L","164T","222","222L","261","261L","261LT","261T","262","262L","280","280L","360","360L","399","460","460L","460T","461","461L","461T","465","161","162","271","101","511","512","514","515","516","516T","517B","517C","517D","517G","517GT","517H","517I","517K","517L","517M","517N","517Y","518","519","521","522","522T","527","550","560","203","251","101","201","203","114","401","402","403","404","405","406","407","408","409","010","066","066T","100","181","300","101","105","171","205","210","221","251","252","253","272","272T","275","276","285","285T","308","336","345","352","355","355T","370","371","371T","375","380","385","385T","386","387","440","440T","445","450","450T","460","460T","474","476","501","506","511","521","531","542","552","562","573","613","614","614T","615","645","663","663T","683","320","207","207L","224T","301T","328","355T","507","101","101","201","201T","202","203","301","301T","302","302T","303","303T","304","304T","401","401T","402","402T","451","101","102","105","110","112","121","121L","122","122L","150","210","220","230","230T","240","245","250","255","261","261L","262","262L","263","263L","265","310","315","320","321","330","335","340","345","350","355","397","398","415","420","425","435","440","441","445","450","463","490","101","370","375","140","300","144","144B","145A","145B","148","148B","245","2450","245B","248","248A","344","505","281","282","283","105","322","337","340","359","111","111L","111T","112","215","215T","216","216L","311","311L","312","313","315","315T","316","316L","316T","415","415T","416","416T","420","425","426","000","150","201","229","229T","230","230T","233","233T","239","239T","251","252","302","303","304","304T","329","329T","330","330T","332","332T","333","402","420","420T","431","431T","432","445","501","541","651","651T","661","681","685","690","690A","690B","501","501T","521","521T","631","631T","641","641T","105","203","209","216","280","102","103","215","101","102","103","104","105","107","108","115","200","201","203","204","209","210","215","501","502","511","512","517","518","519","520","521","522","523","523T","524","525","526","526T","527","527T","528","529","530","530L","535","561","590","-M445","101","102","105","121","204","204L","204LT","204T","205","205L","305","305L","305LT","305T","308","308T","315","406","406T","407","409","411","441","455","456","500","500T","505","505T","510","515","521","531","531T","533","534","535","535T","540","541","541T","555","690","690T","691","691A","691B","221","221T","305","305L","308","308T","311","311L","411","417","417L","417T","418","418L","419","419L","419T","421","421L","421T","425","425L","427","431","433","433L","111","075","100","101","101R","102","102R","102RT","104","111","112","150","206","220","221","301","303","304","3420","371","401","450","465","101","101L","101T","225","226","226T","260","327","327L","327LT","327T","350","411","304","050","203","204","219","260","261","301","305","306","338","115","170","170T","171","172","370","300","311","320","340","345","420","320","350","410","415","101","131","132","231","232","271","331","332","333","431","101A","610","610B","101","102","106","106L","231","370","380","110","111","112","113","115","116","231","232","233","110","311","010","207","101","141","141T","142","142T","271","142T","151","152","251","251T","255","351","351T","100","101","102","105","302","340","310","320","325","325T","335","410","420","420T","430","430T","151","152","251","255","351","351T","105","330","331","332","335","450","456","458","380","101","102","104","111","138","1380","242","243","243T","246","246T","321","330","330T","333","333T","334","334T","336","336T","341","345","345T","347","347T","353","353T","360","439","439T","440","441","444","445","101","109","204","100","310","320","320T","330","410","420","420T","430","430T","278","280","280T","320","371","374","375","410","420","471","210","499","000","100","100","101","102","109","113","365","301","302","303","304","305","426","427","453","454","490","01","106","110","115","202","211","216","223","280","282","301","301L","302","302L","304","311","401","401L","402","402L","417","418","425","450","460","104","110","201","202","545","210","304","304T","333","334","350","350T","361","450","450T","460","325","335","345","355","365","121","121T","122","210","210T","321T","333","101","102","111","101","101L","306","319","327","211","211T","218","221","301","301T","321","414","415","210","300","360","370","111","113","311L","100","105","110","111","112","113","114","115","116","117","117T","118","119","120","122","123","124","125","126","128","128T","129","130","131","131T","132","133","134","135","135T","136","137","138","139","166","168","168T","169","220","243T","250","250T","251","251T","252","252T","253","253L","262","263","268","268T","269","281","282","315","320","330","349","349T","350","350T","351","351T","355","357","358","359","360","361","361T","362","363","363T","364","365","368T","410","459","459T","460","460T","461","461T","462","463","463T","464","465","468","470","100L","101","103","112","150","201","311","312","351","390","425","473","401A","403C","101","101T","110","201","204","229T","299","299T","335","335T","336","336T","401","402","431","301","302","303","304","330","3403","401","227","227T","251","251T","321","325","326","330","330T","335","340","340T","372","421","421T","424","014","101","110","115","176","177","215","216","250","255","310","333","338","342","360","365","366","415","445","457","464","471","101","050","111","129","3200","300","014","070","070T","080","107","107T","109","109T","110","110T","111","118","122","123","124","124T","131","131L","132","132L","132LT","132T","210","221","221T","231","231L","242","242L","252","252T","281","282","286","293","293T","302","329","329T","331","341","341T","346","361","361T","395","395T","396","402","402T","481","531","540","503","504","504T","506","509","510","511","512","513","513T","515","516","519","520","523","524","524T","526","527","527T","529","529T","531","533","560","345","363","341","342","343","347","360","365","367","380","380A","201","301","302","303","301","401","541","552","552T","587","601","601T","623","623T","654","654T","687","688","301","401","541","541T","553","587","624","654","683T","687","688","101","201","201T","210","210T","215","215T","220","251","310","310T","313","313T","320","327","327T","333","333T","334","334T","335","340","341","345","351","361","361T","365","404","411","427","427T","429","429T","440","440T","441","446","447","448","455","460","461","201","322","503","503T","506","506T","527","527T","530","530T","540","550","550T","102","304","305","440","452","455","124","102","102","111","425","196","511","512","513","514","515","516","521","560","611","612","613","614","615","616","617","621","622","625","625B","699","699B","510","530","560","570","510","515","520","525","530","535","540","600","610","615","620","625","112","101","101L","102","201","202","301","302","303","401","402","404","414","415","317","510","131","132","133","141","142","143","145","146","147","147BA","147BS","147BT","147CE","147CL","147EB","147EH","147EU","147FH","147FL","147GU","147HA","147OB","147PE","147SA","147SB","147TB","147TR","147TS","147TU","147VA","147VI","151","170","171","180","181","181BA","181BT","181CE","181CL","181EH","181EU","181FH","181FL","181GU","181HA","181OB","181PE","181SA","181SB","181TA","181TB","181TR","181TS","181TU","181VA","181VI","246","246T","250","284","351","371","380","381","381BA","381BT","381CE","381CL","381EH","381EU","381FH","381FL","381GU","381HA","381OB","381PE","381SA","381SB","381TB","381TR","381TU","381VA","381VI","480","210","231","232","233","234","237","237T","239","240","241","333","334T","343","344","347T","349","349T","350","351","351T","353","354","357","191","287","289","290","295","296B","297","298","299","243","243T","244","244T","341","341T","343","344","344T","345","346","346T","448","209","411","121","122","122T","123","221","222","223","321","322","322T","323","323T","324","324T","325","425","425T","210","215","215T","220","220T","450","220","231","310","410","415","420","420T","430","430T","440","110","110L","110LT","110T","113","113L","200","200T","201","201L","210","211","220","250","251","251L","291","291L","333","333T","090","090T","111","111L","112","112L","113","113L","114","114L","115","115L","117","117L","121","121T","122","122T","124","124T","127","127T","211","211L","212","212L","213","213L","215","215L","217","217L","220","221","221L","224","227","228","229","231","231L","232","232L","240","240L","241","294","300","310","310L","313","313L","315","315L","316","316L","317","317L","322","323","350","350L","352","361","362","363","380","380L","381","382","383","385","395","410","411","411L","413","413L","416","416L","418","418L","420","420L","422A","423A","423BT","425","426","471","485","487","487T","494","300","220","300","320","333","344T","349","350","401","403","430","433","435","452","452T","454","312","313","315","320","322","323","324","325","326","327","329","334","335","336","337","342","352","355","361","362","365","370","400","100","140","150","201L","201R","204","204L","211","221","221L","222","222L","250","261","261L","262","310","313","316","324","325","354","390","459","010","101","110","150","220","230","247","250","250T","254","262","262T","301","310","311","312","312T","313","321","321T","330","330T","331","332","340","340T","341","341T","354","430","440","441","450","452","452T","460","461","104","106","107","109","201","204","208","218","100","100L","102","121","121L","122","122L","222","222L","301","301L","301LT","301T","310","317","317L","344","344T","399","421","010C","101","201","217","2360","3260","3440","3550","401","P241","P325","P425","P430","P459","260","600","101","182","201","210","279","280","280T","284","285","285T","287","287T","288","288T","325","3550","362","362T","371","374","375","376","378","378T","385","385T","386","386T","387","387T","391","391T","458","471","481","482","482T","485","151","152","170","271","110","121","141","162","163","203","204","210","215","258","268","310","313","324","331","348","363","371","329","331","331T","353","354","431","431L","434","434L","436","436L","437","437L","441","441L","441T","442L","443","443L","444","444L","445","445L","446","446L","448","448L","452","452T","453","453T","111","160","030","360","111","401","416","422","440","111","151","201","201T","202","202T","203","203T","251","251T","252","257","278","301","301T","305","305T","330","330T","3370","356","356T","401T","439","440","440T","451","140","230","360","111","245","101","101","102","161","162","162T","163","166","261","261T","265","267","271","351","351T","352","360","360T","361","362","362T","363","461","462","463","463T","471","210","210","310","310T","410","411","420","420T","505","515","515T","520","520T","530","530T","535","695","695A","695AT","695B","270","270A","270AA","270BB","270DD","270E","270EE","270F","270FF","270GG","270H","270HH","270J","270JJ","270K","270KK","270LL","270LLT","270N","270NN","270P","270PP","270PPT","270Q","270QQ","270RR","270S","270SS","270T","270U","270UU","270UUT","270W","270X","274","277","277T","280","280T","290LL","301","301T","302","302T","303","304","304T","305","305T","374","375T","376","376T","377","450","471","102","103","105","220","290","320","471","270","110","110T","212","310","310T","313","313T","340","340T","460","523","523T","529","530","530A","530B","530D","530E","530F","530I","530J","530K","530L","530M","530T","531","531T","534","534A","534B","534BT","534C","535","535T","536","53OT","560","120","130","-D115","-D120","110","125","130","140","170","211","211T","212","213","215","216","223","225","234","240","240T","241","260","260T","265","265T","270","280","290","325","325T","326","327","327T","335","335T","340","343","343T","350","370","440","440T","451","451T","465","465T","474","490","340","451","485","496","101","161","162","310","311","312","315","320","325","330","335","340","345","350","410","447","105","106","110","111","113","202","210","211","101","102","103","105","110","112","114","115","116","200","202","205","207","209","211","212","217","218","219","102","208","210","100","200","203","210","231","110","203","203T","215","231","241T","251","275","340","422","422T","040","101","220","109","222","285F","295","327","335","351","351T","395","404","411","411T","455","460","461","485","103","302","03"]};
    var as = JSON.parse(json_data);
</script>
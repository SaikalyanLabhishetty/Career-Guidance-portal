<?php
include('header.php');
include ('session.php');
$user_query = mysql_query("select * from student where student_id='$session_id'") or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
?>
<body>

    <?php include('navhead_student.php'); ?>

    <div class="container">
        <div class="row-fluid">
<?php include("menu.php"); ?>
            <div class="span9">

                <div class="hero-unit-3">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;Learning session</strong>
                        </div>





                       <h3 style="font-style: segoe script;color:black" class="prev-indent-bot">Below are  Exams books links</h3>
                <ul class="list-1">

                  <?php
$id= $_GET['id'];
?>
<?php
if ($id=="JEE") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">JEE</b></strong>

<h5 class="text-danger">  <b>Maths</b></h5>

  <li><a href="https://www.amazon.in/OBJECTIVE-MATHEMATICS-R-D-SHARMA-DHANPAT-PUBLICATION/dp/B074J9R9LK/ref=sr_1_2?keywords=objective+mathematics+by+rd+sharma&psr=PDAY&qid=1563301544&s=prime-day&sr=8-2">By R.D.sharma</a></li>
  <li><a href="https://www.amazon.in/PLANE-TRIGONOMETRY-Part-1-S-Loney/dp/9351761754/ref=sr_1_1?keywords=plane+trignometry+2+parts+sl+loney&qid=1563301693&s=gateway&sr=8-1">By S.L.Loney</a></li>
  <li><a href="https://www.amazon.in/ALGEBRA-ADVANCED-SESSIONWISE-EXERCISES-MATHEMATICS/dp/B07T3XGX6Q/ref=sr_1_1?crid=2ZYK42FWINOMO&keywords=algebra+by+dr.+sk+goyal&qid=1563301780&s=gateway&sprefix=algebra+by+dr%2Caps%2C297&sr=8-1">S.K.Goyal</a></li>
  <li><a href="https://www.amazon.in/Differential-Calculus-JEE-Main-Advanced/dp/9312146904/ref=sr_1_2?crid=3LCGFCKRQ9BB7&keywords=differential+calculus+arihant+iit+jee&qid=1563301872&s=gateway&sprefix=differe%2Caps%2C305&sr=8-2">Amit M Agarwal</a></li>
  <h5>Physics</h5>
   <li><a href="https://www.amazon.in/Concept-Physics-2018-2019-Session-Set/dp/B00BD679PO/ref=sr_1_1?crid=1DB329AZRMR4I&keywords=hc+verma+concept+of+physics+vol+1+and+2&qid=1563302019&s=gateway&sprefix=concepts+of+physics+2+vo%2Caps%2C291&sr=8-1">By H.C.Verma</a></li>
  <li><a href="https://www.amazon.in/Principles-Physics-Halliday-Robert-Resnick/dp/8126552565/ref=sr_1_1_sspa?crid=IJF2FZQ4HNU3&keywords=fundamentals+of+physics+by+halliday+resnick+walker&qid=1563302337&s=gateway&sprefix=fundamentals+of+phys%2Caps%2C327&sr=8-1-spons&psc=1">By Halliday</a></li>
  <li><a href="https://www.amazon.in/UNDERSTANDING-MECHANICS-ELECTRICITY-MAGNETISM-THERMODYNAMICS/dp/B07Q32BXDH/ref=sr_1_2?crid=33Z22D9KFZ12W&keywords=understanding+physics+dc+pandey&qid=1563302432&s=gateway&sprefix=understanding+of+physics+by+d%2Caps%2C296&sr=8-2">By DC Pandey</a></li>
  <li><a href="https://www.amazon.in/Problems-GENERAL-PHYSICS-I-Irodov/dp/9351762564/ref=sr_1_2?crid=14NW1T354HCFZ&keywords=problems+in+general+physics+ie+irodov&qid=1563302512&s=gateway&sprefix=problems%2Caps%2C381&sr=8-2">By I.E.Irodov</a></li>
   <h5>Chemistry</h5>
   <li><a href="https://www.amazon.in/Objective-Xtract-Chemistry-BITSAT-Advanced/dp/938891998X/ref=sr_1_8?crid=PXJV01HSXUPP&keywords=ncert+chemistry+11+and+12&qid=1563302672&s=gateway&sprefix=NCERT+chemistry+11%2Caps%2C339&sr=8-8">By Disha Experts</a></li>
  <li><a href="https://www.amazon.in/Modern-Approach-Chemical-Calculations-Mukerjee/dp/8177096419/ref=sr_1_3?crid=3FV2LHBG317WW&keywords=modern+approach+to+chemical+calculations+by+r.c.+mukherjee&qid=1563302774&s=gateway&sprefix=modern+app%2Caps%2C301&sr=8-3">By R.C.Mukherjee</a></li>
  <li><a href="https://www.amazon.in/Organic-Chemistry-Morrison-Boyd-Bhattacharjee/dp/8131704815/ref=sr_1_3?crid=17RHXZ7V24SH0&keywords=organic+chemistry+by+morison+%26+boyd&qid=1563302929&s=gateway&sprefix=organic+chemistry%2Caps%2C304&sr=8-3">By Morrison</a></li>
  <li><a href="https://www.amazon.in/Concise-Inorganic-Chemistry-Fifth-J-D/dp/8126515546/ref=sr_1_2?crid=SH7GJNIBKR4T&keywords=concise+inorganic+chemistry+by+j.d.+lee&qid=1563303093&s=gateway&sprefix=concise+in%2Caps%2C296&sr=8-2">By J.D.Lee</a></li>
  
</li>

<?php } ?>

<?php
if ($id=="NEET") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">Neet</b></strong>
  <h5>Botony</h5>

  <li><a href="https://www.amazon.in/Objective-Botany-RPH-Editorial-Board/dp/8178129221/ref=sr_1_14?keywords=books+for+neet+botany&qid=1563046923&s=gateway&sr=8-14">By R.gupta</a></li>
  <li><a href="https://www.amazon.in/NEET-2020-Biology-Guide-7th/dp/9389187133/ref=sr_1_17?keywords=books+for+neet+botany&qid=1563046923&s=gateway&sr=8-17">By disha experts</a></li>
  <li><a href="https://www.amazon.in/Wileys-Textbook-Medical-Entrance-Examinations/dp/8126573554/ref=sr_1_2?keywords=books+for+neet+botany&qid=1563046923&s=gateway&sr=8-2">By NA</a></li>

<h5>Zoology</h5>

  <li><a href="https://www.amazon.in/Textbook-Zoology-Medical-Entrance-Examinations/dp/8126598271/ref=sr_1_1_sspa?keywords=books+for+neet+zoology&qid=1563047553&s=gateway&sr=8-1-spons&psc=1">By wileys</a></li>
  <li><a href="https://www.amazon.in/NEET-Biology-Guide-Disha-Experts/dp/9388026179/ref=sr_1_8?keywords=books+for+neet+zoology&qid=1563047553&s=gateway&sr=8-8">By disha experts</a></li>
  <li><a href="https://www.amazon.in/Objective-Zoology-Medical-Entrance-Examinations/dp/B0756YXSPG/ref=sr_1_7?keywords=books+for+neet+zoology&qid=1563047797&s=gateway&sr=8-7">By Dr.R.K.Pilal</a></li>

  <h5>Physics</h5>

  <li><a href="https://www.amazon.in/Years-Chapterwise-Solutions-AIPMT-Physics/dp/9313162490/ref=sr_1_2?keywords=books+for+neet+physics&qid=1563048188&s=gateway&sr=8-2"> By UBD</a></li>
  <li><a href="https://www.amazon.in/Complete-Guide-Physics-Editorial-Board/dp/9387949133/ref=sr_1_3?keywords=books+for+neet+physics&qid=1563048188&s=gateway&sr=8-3">By MTG</a></li>
  <li><a href="https://www.amazon.in/Doctors-12th-Entrance-Lectures-Dushyant-Licensed/dp/8193802306/ref=sr_1_2_sspa?keywords=books+for+neet+chemistry&qid=1563048483&s=gateway&sr=8-2-spons&psc=1">By Dushyant</a></li>

  <h5>Chemistry</h5>

  <li><a href="https://www.amazon.in/Days-Crash-Course-NEET-Chemistry/dp/9313168456/ref=sr_1_6?keywords=books+for+neet+chemistry&qid=1563048483&s=gateway&sr=8-6">By arihant</a></li>
  <li><a href="https://www.amazon.in/Errorless-Chemistry-AIIMS-Latest-Examination/dp/8194117127/ref=sr_1_8?keywords=books+for+neet+chemistry&qid=1563048483&s=gateway&sr=8-8">By USS</a></li>
  <li><a href="https://www.amazon.in/Solomons-Organic-Chemistry-Entrance-Examinations/dp/8126598360/ref=sr_1_16?keywords=books+for+neet+chemistry&qid=1563048483&s=gateway&sr=8-16">By MS.chauhan</a></li>
  
</li>

<?php } ?>

<?php
if ($id=="RBI GRADE B") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">RBI GRADE B</b></strong>
<h4>For Tier I</h4>
<h5>Quantitative aptitude</h5>
  <li><a href="https://www.amazon.in/Magical-Books-Quicker-2018-2019-Session/dp/8190458922/ref=sr_1_1?crid=3I72KPV93SEUS&keywords=magical+book+on+quicker+maths+by+m.tyra&qid=1563303543&s=gateway&sprefix=magical+book+%2Caps%2C297&sr=8-1">By M.Tyra</a></li>
  <li><a href="https://www.amazon.in/Track-Objective-Arithmetic-Rajesh-Verma/dp/9312149830/ref=sr_1_3?crid=6R8RMY9K4OCF&keywords=fast+track+objective+arithmetic+by+rajesh+verma&qid=1563303637&s=gateway&sprefix=fast+trac%2Caps%2C296&sr=8-3">By Rajesh Verma</a></li>
  <li><a href="https://www.amazon.in/Quantitative-Aptitude-Quantum-Cat-2019/dp/9313195283/ref=sr_1_2?crid=X83ADODL1W4W&keywords=quantum+cat+by+sarvesh+kumar+verma&qid=1563303729&s=gateway&sprefix=quan%2Caps%2C297&sr=8-2">By Sarvesh K.Verma</a></li>
  <h5>Reasoning ability</h5>
  <li><a href="https://www.amazon.in/Modern-Approach-Verbal-Non-Verbal-Reasoning/dp/9352832167/ref=sr_1_3?crid=9X2C90ZJ426W&keywords=a+modern+approach+to+verbal+%26+non-verbal+reasoning+r.s.+aggarwal&qid=1563303816&s=gateway&sprefix=a+moder%2Caps%2C750&sr=8-3">By R.S.Aggarwal</a></li>
   <li><a href="https://www.amazon.in/Analytical-Reasoning-2018-2019-Session-Panday/dp/8190458914/ref=sr_1_2?crid=34JB5IXYQNFNJ&keywords=analytical+reasoning+by+mk+pandey&qid=1563303934&s=gateway&sprefix=analy%2Caps%2C308&sr=8-2">By M.K.Pandey</a></li>
   <h5>English</h5>
  <li><a href="https://www.amazon.in/Objective-General-English-S-P-Bakshi/dp/9351768449/ref=sr_1_2?crid=3SCSYBXHZQCAZ&keywords=objective+general+english+sp+bakshi&qid=1563304012&s=gateway&sprefix=object%2Caps%2C295&sr=8-2">By S.P.Bakshi</a></li>
  <li><a href="https://www.amazon.in/School-English-Grammar-Composition-Regular/dp/9352530144/ref=sr_1_2?crid=1XVNERNAC2PBM&keywords=high+school+english+grammar+and+composition+by+wren+and+martin&qid=1563304084&s=gateway&sprefix=high+school%2Caps%2C297&sr=8-2">By Wren & Martin</a></li>
  <h5>General Awareness</h5>
  <li><a href="https://www.amazon.in/Manorama-Yearbook-English-Philip-Mathew/dp/8193769716/ref=sr_1_3?crid=2HJAU4D77MMYD&keywords=manorama+year+books+2019+english&qid=1563304225&s=gateway&sprefix=mano%2Caps%2C305&sr=8-3">By Philip mathew</a></li>
  <li><a href="https://www.amazon.in/Kurukshetra-Monthly-Magazine-June-English/dp/B07SQ1LGS2/ref=sr_1_1?crid=3I1F4PBDEW0TL&keywords=kurukshetra+magazine&qid=1563304283&s=gateway&sprefix=kuruk%2Caps%2C302&sr=8-1">By Shamima Siddiqui</a></li>
  <h4>For Tier II</h4>
  <h5>Finance&Management</h5>
  <li><a href="https://www.amazon.in/CBSE-NCERT-Solutions-Business-Studies/dp/9351416275/ref=sr_1_4?crid=JZFMGRUGM4C1&keywords=ncert+business+studies+textbook+for+class+xi&qid=1563304563&s=gateway&sprefix=NCERT+business+st%2Caps%2C292&sr=8-4">By Sharad Bisaria </a></li>
  <li><a href="https://www.amazon.in/Indian-Economy-Civil-Services-Examinations/dp/B07SL98TPB/ref=sr_1_5?crid=H34MZ3KT7ZQ5&keywords=indian+economy+by+ramesh+singh&qid=1563304680&s=gateway&sprefix=indian+econo%2Caps%2C290&sr=8-5">By Ramesh singh</a></li>
  <li><a href="https://www.amazon.in/Indian-Financial-System-Pathak-Bharti-ebook/dp/B07BZM6KTS/ref=sr_1_3?keywords=best+book+bharti+phatak&qid=1563304756&s=gateway&sr=8-3-spell">By Bharti pathak</a></li>
  <li><a href="https://www.amazon.in/Indian-Economy-Misra-S-K-Puri/dp/B071KKWQVY/ref=sr_1_1?crid=3HR4S9RTF6DXO&keywords=indian+economy+by+mishra+and+puri+latest+edition&qid=1563304850&s=gateway&sprefix=indian+ecocomy+by+mi%2Caps%2C288&sr=8-1">By Mishra puri</a></li>
  <h5>Economic & social issues</h5>
  <li><a href="https://www.amazon.in/Indian-Economy-Performance-Policies-2018-19/dp/9332704759/ref=sr_1_1?crid=NCFEELBO03SA&keywords=indian+economy+by+uma+kapila+latest+edition&qid=1563305060&s=gateway&sprefix=indian+econonomy+by+um%2Caps%2C288&sr=8-1">By Uma kapila</a></li>
  <li><a href="https://www.amazon.in/Indian-Economy-Civil-Services-Examinations/dp/B07SL98TPB/ref=sr_1_5?crid=H34MZ3KT7ZQ5&keywords=indian+economy+by+ramesh+singh&qid=1563304680&s=gateway&sprefix=indian+econo%2Caps%2C290&sr=8-5">By Ramesh singh</a></li>
  <li><a href="https://www.amazon.in/Indian-Financial-System-Pathak-Bharti-ebook/dp/B07BZM6KTS/ref=sr_1_3?keywords=best+book+bharti+phatak&qid=1563304756&s=gateway&sr=8-3-spell">By Bharti pathak</a></li>
 
</li>

<?php } ?>


<?php
if ($id=="UPSC") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">UPSC</b></strong>
<h4>For Tier I</h4>
<h5>General studies</h5>
<li><a href="https://www.amazon.in/General-Studies-Services-Preliminary-Examination/dp/9332588406/ref=sr_1_4?crid=1COOQ2C6T80GP&keywords=general+studies+by+pearson&qid=1563307248&s=gateway&sprefix=genral+studeies+by+p%2Caps%2C294&sr=8-4">By Thorpe Edgar </a></li>
  <li><a href="https://www.amazon.in/Crack-Prelims-General-Studies-Compendiums/dp/938837374X/ref=sr_1_16?crid=3NVEUFHRESDD1&keywords=upsc+prelims+books&qid=1563123924&s=gateway&sprefix=books+for+upsc+for+pre%2Caps%2C304&sr=8-16">By Disha Experts</a></li>
  <h5>Indian history</h5>
 <li><a href="https://www.amazon.in/Indias-Ancient-Past-2019-Sharma/dp/019568785X/ref=sr_1_1?crid=3EHS7NG6NI06Q&keywords=indian+ancient+past+by+rs+sharma&qid=1563307644&s=gateway&sprefix=indian+ancient%2Caps%2C287&sr=8-1">By R.S.Sharma</a></li>
  <li><a href="https://www.amazon.in/History-Medieval-India-Chandra-Satish/dp/8125032266/ref=sr_1_1?crid=9KHGADECZ0GF&keywords=history+of+medieval+india+by+satish+chandra+in+english&qid=1563307960&s=gateway&sprefix=histo%2Caps%2C294&sr=8-1">By Satish chandra</a></li>
  <h5>Indian geography</h5>
  <li><a href="https://www.amazon.in/Oxford-Student-Atlas-India-Competitive/dp/0199485127/ref=sr_1_1?crid=DV5QR28NZX37&keywords=oxford+student+atlas+for+upsc&qid=1563308064&s=gateway&sprefix=ox%2Caps%2C296&sr=8-1">By Oxford University Press </a></li>
  <li><a href="https://www.amazon.in/Geography-India-Majid-Husain/dp/9352606221/ref=sr_1_2?crid=1IAHHM8TG7AHQ&keywords=geography+of+india+by+majid+husain&qid=1563308131&s=gateway&sprefix=geography+%2Caps%2C285&sr=8-2">By Majid husain</a></li>
  <h5>Indian polity</h5>
  <li><a href="https://www.amazon.in/Indian-Polity-5th-M-Laxmikanth/dp/935260363X/ref=sr_1_3?crid=39981K05NY220&keywords=indian+polity+by+laxmikanth&qid=1563308224&s=gateway&sprefix=lax%2Caps%2C308&sr=8-3">By Laxmikanth</a></li>
  <h5>Indian Economy</h5>
  <li><a href="https://www.amazon.in/Indian-Economy-Civil-Services-Examinations/dp/9387572862/ref=sr_1_2?crid=299KX2VBWURUP&keywords=ramesh+singh+indian+economy+in+english&qid=1563308345&s=gateway&sprefix=ram%2Caps%2C290&sr=8-2">By Ramesh singh</a></li>
  <h5>Science & Technology</h5>
  <li><a href="https://www.amazon.in/Science-Technology-Services-Prelims-Examinations/dp/9352864611/ref=sr_1_1?crid=RRX2ROQHGGSE&keywords=sheelwant+singh+science&qid=1563308444&s=gateway&sprefix=sheel%2Caps%2C290&sr=8-1">By Sheelwant singh</a></li>
  <h5>Environment</h5>
  <li><a href="https://www.amazon.in/Environment-Services-Prelims-competitive-examinations/dp/9353162556/ref=sr_1_2?crid=3LAYP1MDHOVRY&keywords=khullar+environment&qid=1563308612&s=gateway&sprefix=khuller+en%2Caps%2C288&sr=8-2">By Khullar</a></li>
  <h5>Current Affaris</h5>
  <li><a href="https://www.amazon.in/Manorama-2019-Yearbook-General-Knowledge/dp/B07L5F1JBS/ref=sr_1_4?crid=2UIKC4R2L7MHZ&keywords=manorama+year+books+2019+english&qid=1563308700&s=gateway&sprefix=mano%2Caps%2C331&sr=8-4">By  Mammen Mathew </a></li>
  <h4>For Tier II</h4>
  <h5>Essays</h5>
  <li><a href="https://www.amazon.in/121-Essays-other-Competitive-Exams/dp/9388240960/ref=sr_1_2?crid=35TXFIB2EA60O&keywords=saumitra+mohan+essay&qid=1563308899&s=gateway&sprefix=saumitr%2Caps%2C294&sr=8-2">By Saumitra mohan</a></li>
  <h5>GS1</h5>
  <li><a href="https://www.amazon.in/Heritage-Culture-History-Geography-Society/dp/931316809X/ref=sr_1_2?crid=Q4Y8982S8V2D&keywords=gs+paper+1+arihant&qid=1563309099&s=gateway&sprefix=gs+paper+1%2Caps%2C299&sr=8-2">By Arihant</a></li>
  <h5>GS2</h5>
  <li><a href="https://www.amazon.in/Governance-Constitution-Justice-International-Relations/dp/9313168103/ref=sr_1_3?crid=39WJ716TU4XBJ&keywords=ias+mains+paper+2&qid=1563309278&s=gateway&sprefix=ias+mains+paper+%2Caps%2C292&sr=8-3">By Arihant</a></li>
  <h5>GS3</h5>
  <li><a href="https://www.amazon.in/Technology-Development-Diversity-Environment-Management/dp/9313168111/ref=sr_1_2?keywords=ias+mains+paper+3&qid=1563309390&s=gateway&sr=8-2">By Arihant</a></li>
  <h5>GS4</h5>
  <li><a href="https://www.amazon.in/Mains-Paper-Ethics-Integrity-Aptitude/dp/9311129224/ref=sr_1_4?keywords=ias+mains+paper+4&qid=1563309436&s=gateway&sr=8-4">By Arihant</a></li>
  <h4>For both Tier I & II</h4>
  <li><a href="https://www.amazon.in/General-Studies-Services-Preliminary-Examination/dp/9332588406/ref=sr_1_4?crid=1COOQ2C6T80GP&keywords=general+studies+by+pearson&qid=1563307248&s=gateway&sprefix=genral+studeies+by+p%2Caps%2C294&sr=8-4">By Thorpe Edgar </a></li>
  
</li>

<?php } ?>

<?php
if ($id=="IBPS CLERK") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">IBPS CLERK</b></strong>
<h4>For Tier I</h4>
<h5>English</h5>
  <li><a href="https://www.amazon.in/Word-Power-Made-Norman-Lewis/dp/8183071007/ref=sr_1_1?crid=1L6PXCV3OC5E1&keywords=word+power+made+easy+norman+lewis+2019&qid=1563305698&s=gateway&sprefix=word+%2Caps%2C289&sr=8-1">By Norman lewis</a></li>
  <li><a href="https://www.amazon.in/School-English-Grammar-Composition-Regular/dp/9352530144/ref=sr_1_2?crid=1XVNERNAC2PBM&keywords=high+school+english+grammar+and+composition+by+wren+and+martin&qid=1563304084&s=gateway&sprefix=high+school%2Caps%2C297&sr=8-2">By Wren & Martin</a></li>
   <h5>Reasoning ability</h5>
  <li><a href="https://www.amazon.in/Modern-Approach-Verbal-Non-Verbal-Reasoning/dp/9352832167/ref=sr_1_3?crid=9X2C90ZJ426W&keywords=a+modern+approach+to+verbal+%26+non-verbal+reasoning+r.s.+aggarwal&qid=1563303816&s=gateway&sprefix=a+moder%2Caps%2C750&sr=8-3">By R.S.Aggarwal</a></li>
   <li><a href="https://www.amazon.in/Practice-IBPS-VIII-Clerk-Preliminary-Examination/dp/9313164949/ref=sr_1_3?crid=2D75T1YPCZV8C&keywords=bank+clerk+preliminary+examination+arihant&qid=1563305861&s=gateway&sprefix=bank+clerk+p%2Caps%2C294&sr=8-3">By Arihant</a></li>
   <h4>For Tier II</h4>
   <h5>General Awareness</h5>
  <li><a href="https://www.amazon.in/Pearson-General-Knowledge-Manual-Previous/dp/9353066700/ref=sr_1_1?keywords=the+general+knowledge+edgar+thorpe&qid=1563306259&s=gateway&sr=8-1">By Edgar Thorpe</a></li>
  <li><a href="https://www.amazon.in/Banking-Awareness-Arihant-Experts/dp/9311124664/ref=sr_1_1?crid=2OXEK98QOJJ5H&keywords=banking+awareness+by+javed+siddiqui&qid=1563306330&s=gateway&sprefix=banking+jav%2Caps%2C292&sr=8-1">By javed siddiqui</a></li>
  <h5>Computer Awareness</h5>
  <li><a href="https://www.amazon.in/Objective-Computer-Awareness-Arihant-Experts/dp/9311121266/ref=sr_1_2?crid=WLRNYQ1EN2QR&keywords=computer+awareness+by+arihant+publication&qid=1563306444&s=gateway&sprefix=computer+awa%2Caps%2C290&sr=8-2">BYy Arihant</a></li>
  <h5>Quantitative aptitude</h5>
 <li><a href="https://www.amazon.in/Quantitative-Aptitude-Test-Dr-Singh-ebook/dp/B01MRE7CVY/ref=sr_1_2?crid=JJ68CSE88XJ2&keywords=quantitative+aptitude+nk+singh&qid=1563305988&s=gateway&sprefix=quantitative+nk%2Caps%2C284&sr=8-2">By N.K.Singh</a></li>
  <li><a href="https://www.amazon.in/Quantitative-Aptitude-Competitive-Examinations-Aggarwal/dp/9352534026/ref=sr_1_3?crid=1WQSQG1KLBR2J&keywords=quantitative+aptitude+rs+agarwal+new+edition&qid=1563306067&s=gateway&sprefix=quantitative+aptitude+r%2Caps%2C295&sr=8-3">By R.S.Aggarwal</a></li>
  <li><a href="https://www.amazon.in/Text-Quickest-Mathematics-Kiran-Prakashan/dp/B0777TNPNL/ref=sr_1_5?crid=SFK184T3A8ZH&keywords=quickest+mathematics+by+kiran+by+2019&qid=1563306143&s=gateway&sprefix=quickest+%2Caps%2C298&sr=8-5">By Kiran Prakashan</a></li>
<h5>English</h5>
  <li><a href="https://www.amazon.in/Word-Power-Made-Norman-Lewis/dp/8183071007/ref=sr_1_1?crid=1L6PXCV3OC5E1&keywords=word+power+made+easy+norman+lewis+2019&qid=1563305698&s=gateway&sprefix=word+%2Caps%2C289&sr=8-1">By Norman lewis</a></li>
  <li><a href="https://www.amazon.in/School-English-Grammar-Composition-Regular/dp/9352530144/ref=sr_1_2?crid=1XVNERNAC2PBM&keywords=high+school+english+grammar+and+composition+by+wren+and+martin&qid=1563304084&s=gateway&sprefix=high+school%2Caps%2C297&sr=8-2">By Wren & Martin</a></li>
   <h5>Reasoning ability</h5>
  <li><a href="https://www.amazon.in/Modern-Approach-Verbal-Non-Verbal-Reasoning/dp/9352832167/ref=sr_1_3?crid=9X2C90ZJ426W&keywords=a+modern+approach+to+verbal+%26+non-verbal+reasoning+r.s.+aggarwal&qid=1563303816&s=gateway&sprefix=a+moder%2Caps%2C750&sr=8-3">By R.S.Aggarwal</a></li>
   <li><a href="https://www.amazon.in/Practice-IBPS-VIII-Clerk-Preliminary-Examination/dp/9313164949/ref=sr_1_3?crid=2D75T1YPCZV8C&keywords=bank+clerk+preliminary+examination+arihant&qid=1563305861&s=gateway&sprefix=bank+clerk+p%2Caps%2C294&sr=8-3">By Arihant</a></li>
  
</li>

<?php } ?>

<?php
if ($id=="SSC CGL") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">SSC CGL</b></strong>
  <h4>For Tier I</h4>
   <h5>English</h5>
  <li><a href="https://www.amazon.in/Prepare-Verbal-Ability-Reading-Comprehension/dp/9353160197/ref=sr_1_1?keywords=how+to+prepare+for+verbal+ability+and+reading+by+arun+sharma&qid=1563208307&s=gateway&smid=AT95IG9ONZD7S&sr=8-1">By Arun sharma</a></li>
  <li><a href="https://www.amazon.in/Objective-General-English-Arihant-Latest/dp/B072ND6Q66/ref=sr_1_3?crid=59O3U8AHB0P9&keywords=objective+general+english+sp+bakshi&qid=1563208404&s=gateway&sprefix=objective+%2Cspecialty-aps%2C277&sr=8-3">By S.P.Bakshi</a></li>
  <li><a href="https://www.amazon.in/School-English-Grammar-Composition-Multicolour/dp/935253008X/ref=sr_1_2?crid=1PB70EQ3JBHQU&keywords=wren+and+martin+high+school+english+grammar&qid=1563208499&s=gateway&smid=AT95IG9ONZD7S&sprefix=wren+%2Caps%2C296&sr=8-2">By N.D.V.Prasad rao</a></li>
  <h5>Genral intelligence</h5>
  <li><a href="https://www.amazon.in/Modern-Approach-Verbal-Non-Verbal-Reasoning/dp/9352832167/ref=sr_1_3?crid=143T00IA1JJMG&keywords=a+modern+approach+to+verbal+%26+non-verbal+reasoning+r.s.+aggarwal&qid=1563208739&s=gateway&smid=AT95IG9ONZD7S&sprefix=modren+app%2Caps%2C297&sr=8-3">By R.S.Aggarwal</a></li>
  <li><a href="https://www.amazon.in/How-Prepare-Logical-Reasoning-CAT/dp/9352606949/ref=sr_1_1?crid=3RRMJZ4U2KAY&keywords=how+to+prepare+for+logical+reasoning+for+the+cat+by+arun+sharma&qid=1563208897&s=gateway&sprefix=how+to+prep%2Caps%2C290&sr=8-1">By Arun sharma</a></li>
  <li><a href="https://www.amazon.in/Analytical-Reasoning-2018-2019-Session-Panday/dp/8190458914/ref=sr_1_1?crid=34MPJKZFY4P8T&keywords=analytical+reasoning+by+mk+pandey&qid=1563208969&s=gateway&sprefix=anal%2Caps%2C320&sr=8-1">By M.K.Pandy</a></li>
  <h5>Quantitative aptitude</h5>
  <li><a href="https://www.amazon.in/Quantitative-Aptitude-Competitive-Examinations-Aggarwal/dp/9352534026/ref=sr_1_2?crid=XUMYHBOLMCOD&keywords=quantitative+aptitude+rs+agarwal+new+edition&qid=1563209078&s=gateway&smid=AT95IG9ONZD7S&sprefix=quanti%2Caps%2C293&sr=8-2">By R.S.Aggarwal</a></li>
  <li><a href="https://www.amazon.in/Teach-Yourself-Quantitative-Aptitude-Sharma/dp/9352606353/ref=sr_1_2?crid=37T63GHP4R227&keywords=aptitude+by+arun+sharma&qid=1563215923&s=books&smid=AT95IG9ONZD7S&sprefix=apti%2Cstripbooks%2C338&sr=1-2">By Arun sharma</a></li>
  <li><a href="https://www.amazon.in/Objective-Arithmetic-General-Knowledge-Arihant/dp/B07D17S34G/ref=sr_1_3?keywords=fast+track+objective+arthemetic+by+arihant&qid=1563209253&s=gateway&sr=8-3-spell">By Rajesh verma</a></li>
  <h4>For Tier II</h4>

<h5>Maths</h5>
  <li><a href="https://www.amazon.in/Magical-Books-Quicker-2018-2019-Session/dp/8190458922/ref=sr_1_1?crid=10GNELU2YOQMC&keywords=magical+books+on+quicker+maths&qid=1563209854&s=gateway&smid=A1YW7K5MZRMS1M&sprefix=magical+books+%2Caps%2C438&sr=8-1">By Manoj tyra</a></li>
  <li><a href="https://www.amazon.in/Advance-Maths-Raakesh-Yadav/dp/B0745BHB7T/ref=sr_1_2?crid=J01A35EMCXV1&keywords=advanced+maths+by+rakesh+yadav&qid=1563209961&s=gateway&sprefix=advanced+maths+%2Caps%2C293&sr=8-2">By Rakesh yadav</a></li>
   <li><a href="https://www.amazon.in/SSC-Higher-Mathematics-Rishikesh-Kumar/dp/9384761494/ref=sr_1_1?keywords=advance+maths+by+rishikesh&qid=1563210058&s=gateway&sr=8-1">By Rishikesh kumar</a></li>
 <li><a href="https://www.amazon.in/Quantitative-Aptitude-Quantum-Cat-2018/dp/9312147587/ref=sr_1_4?crid=1W3IEB0LO8ZM9&keywords=quantum+cat+by+sarvesh+kumar+verma&qid=1563210213&s=gateway&sprefix=quantam++%2Caps%2C552&sr=8-4">By Servesh verma</a></li>

 <h5>English</h5>
 <li><a href="https://www.amazon.in/Objective-General-English-S-P-Bakshi/dp/9351768449/ref=sr_1_2?crid=2XXI6WDX97F98&keywords=objective+general+english+sp+bakshi&qid=1563210345&s=gateway&smid=AT95IG9ONZD7S&sprefix=objective%2Caps%2C372&sr=8-2">By S.P.Bakshi</a></li>
 <li><a href="https://www.amazon.in/MIRROR-COMMON-ERRORS-ASHOK-KUMAR/dp/B072P72W12/ref=sr_1_4?crid=35J96AKZ2WWSZ&keywords=a+mirror+of+common+error+by+ashok+kumar+singh&qid=1563210430&s=gateway&sprefix=a+mirror+%2Caps%2C907&sr=8-4">By A.K.Singh</a></li>
 <li><a href="https://www.amazon.in/PLINTH-PARAMOUNT-ENGLISH-VOL-2/dp/B0776CZ3W2/ref=sr_1_fkmr2_2?crid=2W6MFOIBE923Y&keywords=plinth+to+paramount+by+kd&qid=1563210526&s=gateway&sprefix=plinth+to+paramount+by+k%2Caps%2C371&sr=8-2-fkmr2">By Neetu singh</a></li>
 <li><a href="https://www.amazon.in/Objective-General-English-New-Revised/dp/9352832213/ref=sr_1_1?keywords=objective+general+english+by+rs+agarwal&psr=PDAY&qid=1563210783&s=prime-day&sr=8-1">By R.S.aggarwal</a></li>
 <li><a href="https://www.amazon.in/Word-Power-Made-Norman-Lewis/dp/0143424688/ref=sr_1_1?keywords=word+power+made+easy&psr=PDAY&qid=1563211292&s=prime-day&sr=1-1">By Norman lewis</a></li>


 <h5>Statistical investigator</h5>
<li><a href="https://www.amazon.in/SSC-Statistical-InvestigatorExam-Grade-Paper/dp/8174825568/ref=sr_1_fkmr0_1?keywords=ssc+statistical+investigators&psr=PDAY&qid=1563210974&s=prime-day&sr=8-1-fkmr0">By Upkar prakashan</a></li>

<h5>AAO</h5>
<li><a href="https://www.amazon.in/SSC-CGL-Economics-Paper-IV-Assistant-Examination/dp/9386845296/ref=sr_1_1?keywords=ssc+cgl+aao&psr=PDAY&qid=1563211151&s=prime-day&sr=8-1">By R.gupta</a></li>

</li>

<?php } ?>

<?php
if ($id=="RRB NTPC") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">RRB NTPC</b></strong>
  <h4>For both Tier I and II</h4>
   <h5>General awarness</h5>
  <li><a href="https://www.amazon.in/General-Knowledge-Dr-Binay-Karna/dp/9384761540/ref=sr_1_1?keywords=lucent+general+knowledge&psr=PDAY&qid=1563211995&s=prime-day&smid=AT95IG9ONZD7S&sr=1-1">By DR.Binay karna</a></li> 
  <li><a href="https://www.amazon.in/Manorama-Yearbook-English-Philip-Mathew/dp/8193769716/ref=sr_1_1?keywords=manorama+year+book&psr=PDAY&qid=1563212178&s=prime-day&smid=A1YW7K5MZRMS1M&sr=1-1">By Philip mathew</a></li>
   <li><a href="https://www.amazon.in/Objective-Knowledge-Chapterwise-Collection-Questions/dp/9350945770/ref=sr_1_3?keywords=arihant+general+knowledge&psr=PDAY&qid=1563212254&s=prime-day&smid=AT95IG9ONZD7S&sr=1-3">By Manohar pandey</a></li>
   <h5>Mathematics</h5>
   <li><a href="https://www.amazon.in/Quantitative-Aptitude-Competitive-Examinations-Aggarwal/dp/9352534026/ref=sr_1_2?crid=XUMYHBOLMCOD&keywords=quantitative+aptitude+rs+agarwal+new+edition&qid=1563209078&s=gateway&smid=AT95IG9ONZD7S&sprefix=quanti%2Caps%2C293&sr=8-2">By R.S.Aggarwal</a></li>
    <li><a href="https://www.amazon.in/Practice-Book-Quicker-Maths-Kundan/dp/8190458957/ref=sr_1_2?crid=1DRDC94XSKSPE&keywords=quicker+mathematics+by+m+tyra&qid=1563212446&s=books&sprefix=quic%2Cstripbooks%2C397&sr=1-2">By K Kundan</a></li>
     <li><a href="https://www.amazon.in/Arithmetic-for-general-competition/dp/9384636584/ref=sr_1_5?crid=36N8QF8RG2CM2&keywords=arithmetic+book+by+neetu+singh&qid=1563212532&s=books&sprefix=arithemetic+%2Cstripbooks%2C297&sr=1-5">By Neetu singh</a></li>
      <h5>General intelligence and reasoning</h5>
  <li><a href="https://www.amazon.in/New-Approach-REASONING-Verbal-Non-Verbal/dp/9351765105/ref=sr_1_1?crid=3KCZOMWC5N7RG&keywords=a+new+approach+to+reasoning+by+bs+sijwali&qid=1563212790&s=books&smid=AT95IG9ONZD7S&sprefix=a+new+approach+to+reasoning+by+bs+%2Cstripbooks%2C282&sr=1-1">By B.S.Sijwali</a></li> 
 <li><a href="https://www.amazon.in/Verbal-Reasoning-Bhupendra-Kumar-Singh/dp/9384761184/ref=sr_1_3?crid=326IPCWL3HLL7&keywords=lucents+reasoning&qid=1563212943&s=books&sprefix=lucents+re%2Cstripbooks%2C283&sr=1-3">By Bhupendra singh</a></li> 
  <li><a href="https://www.amazon.in/Logical-Analytical-Reasoning-Useful-Competitive/dp/9350127768/ref=sr_1_2?crid=2K1QWN2CREEXJ&keywords=logical+and+analytical+reasoning&qid=1563213007&s=books&sprefix=logical+and+a%2Cstripbooks%2C285&sr=1-2">By A.K.Gupta</a></li> 
  
   </li>

<?php } ?>

<?php
if ($id=="GATE") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">GATE</b></strong>
<h4>Genral aptitude</h4>
  <li><a href="https://www.amazon.in/Modern-Approach-Verbal-Non-Verbal-Reasoning/dp/9352832167/ref=sr_1_1?crid=1GGC990Z9H4MB&keywords=verbal+and+non+verbal+by+rs+agarwal&qid=1563215860&s=books&smid=AT95IG9ONZD7S&sprefix=ver%2Cstripbooks%2C395&sr=1-1">By R.S.Aggarwal</a></li>
 <li><a href="https://www.amazon.in/Teach-Yourself-Quantitative-Aptitude-Sharma/dp/9352606353/ref=sr_1_2?crid=37T63GHP4R227&keywords=aptitude+by+arun+sharma&qid=1563215923&s=books&smid=AT95IG9ONZD7S&sprefix=apti%2Cstripbooks%2C338&sr=1-2">By Arun sharma</a></li> 
  <li><a href="https://www.amazon.in/Reasoning-Aptitude-2015-Nem-Singh/dp/9383643226/ref=sr_1_1?keywords=reasoning+and+aptitude+nem+singh&qid=1563216119&s=books&sr=1-1">By Nem singh</a></li> 
  <h4>Engineering Mathematics</h4>
 <li><a href="https://www.amazon.in/Higher-Engineering-Mathematics-B-S-Grewal/dp/8193328493/ref=sr_1_1?crid=ZZ59S5BX2X7V&keywords=higher+engineering+mathematics+by+bs+grewal&qid=1563216499&s=books&smid=A1YW7K5MZRMS1M&sprefix=higher+eng%2Cstripbooks%2C280&sr=1-1">By B.S.Gerwal</a></li>
 <li><a href="https://www.amazon.in/Advanced-Engineering-Mathematics-10ed-ISV/dp/8126554231/ref=sr_1_3?crid=8R5T4X57HU45&keywords=advanced+engineering+mathematics&qid=1563216605&s=gateway&sprefix=advanced+%2Caps%2C313&sr=8-3">By Erwin kreyszig</a></li> 
 <li><a href="https://www.amazon.in/GATE-Engineering-Mathematics-All-Streams/dp/931112527X/ref=sr_1_3?crid=2YD2KBYN5X2NK&keywords=gate+engineering+mathematics+arihant&qid=1563216681&s=gateway&sprefix=gate+eng%2Caps%2C838&sr=8-3">By Abhinav goel</a></li>  
  <h4>Computer science engineering</h4>
  <li><a href="https://www.amazon.in/Programming-Language-Kernighan-Dennis-Ritchie/dp/9332549443/ref=sr_1_1?crid=DJ8N15OMSUSF&keywords=the+c+programming+language+by+brian+kernighan+and+dennis+ritchie&qid=1563216964&s=gateway&sprefix=the+c+%2Caps%2C306&sr=8-1">By Brian&Dennis</a></li> 
  <li><a href="https://www.amazon.in/Introduction-Algorithms-Eastern-Economy-Thomas/dp/8120340078/ref=sr_1_3?crid=FJ37BEUY3PHK&keywords=introduction+to+algorithms&qid=1563217077&s=gateway&sprefix=intro%2Caps%2C286&sr=8-3">By Thomas h.cormen</a></li> 
  <li><a href="https://www.amazon.in/Computer-Networking-Top-Down-Kurose-James/dp/9332585490/ref=sr_1_1?crid=1BONK0UAJWVH7&keywords=computer+networking+a+top-down+approach&qid=1563217194&s=gateway&smid=AT95IG9ONZD7S&sprefix=computer+net%2Caps%2C291&sr=8-1">By James F.kurose</a></li> 
  <li><a href="https://www.amazon.in/Operating-System-Principles-Silberschatz/dp/8126509627/ref=sr_1_1?crid=1XS7TJQTTON5F&keywords=operating+system&qid=1563217392&s=gateway&sprefix=opera%2Caps%2C297&sr=8-1">By Silbers chartz</a></li> 
  <li><a href="https://www.amazon.in/Introduction-Formal-Languages-Automata/dp/9384323217/ref=sr_1_1?crid=35YJCTELWVQTE&keywords=introduction+to+formal+languages+and+automata&qid=1563217461&s=gateway&sprefix=introduction+to+fo%2Caps%2C299&sr=8-1">By Peter linz</a></li> 
  <li><a href="https://www.amazon.in/Computer-Organization-HAMACHER/dp/1259005275/ref=sr_1_1?crid=39Z1VY574W45&keywords=computer+organization+hamacher&qid=1563217521&s=gateway&sprefix=computer+orga%2Caps%2C320&sr=8-1">By Hamacher</a></li> 
  <li><a href="https://www.amazon.in/Digital-Logic-Computer-Design-1/dp/933254252X/ref=sr_1_1?crid=3I6Q1GGHCIWWG&keywords=digital+logic+and+computer+design+by+morris+mano&qid=1563217584&s=gateway&sprefix=digital+logic%2Caps%2C370&sr=8-1">By M.morris mano</a></li> 
  <li><a href="https://www.amazon.in/Compilers-2e-Aho/dp/9332518661/ref=sr_1_1_sspa?crid=BIZQPHHM92VB&keywords=compiler+principles+techniques+and+tools&qid=1563217671&s=gateway&sprefix=compiler+pr%2Caps%2C901&sr=8-1-spons&psc=1&smid=A2KMDR5XHLB83B">By Aho</a></li> 

</li>

<?php } ?>

<?php
if ($id=="GRE") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">GRE</b></strong>
<h4>Quantitative reasoning</h4>
 <li><a href="https://www.amazon.in/Book-Practice-Problems-Manhattan-Prep/dp/1506247598/ref=sr_1_1_sspa?crid=3GX3F1LLFVC9N&keywords=manhattan+gre+5lb+2019&qid=1563218134&s=gateway&sprefix=manh%2Caps%2C299&sr=8-1-spons&psc=1&smid=A1YW7K5MZRMS1M">By Manhattan prep</a></li> 
 <li><a href="https://www.amazon.in/Official-Quantitative-Reasoning-Practice-Questions/dp/9352607368/ref=sr_1_2?crid=1M6L54EMX80BI&keywords=ets+quantitative+reasoning&qid=1563218328&s=gateway&sprefix=ets+%2Caps%2C321&sr=8-2">By ETS</a></li>
 <li><a href="https://www.amazon.in/GRE-Prep-Course-Novas/dp/1889057363/ref=sr_1_2?crid=CF19BZVNAWK2&keywords=novas+gre+prep+course&qid=1563218386&s=gateway&sprefix=novas+gre%2Caps%2C301&sr=8-2">By Jeff kolby</a></li> 
 <li><a href="https://www.amazon.in/Math-Workbook-Kaplan-Test-Prep/dp/1625232993/ref=sr_1_1?crid=F92UDP8XTAF&keywords=kaplan+gre+math+workbook&qid=1563218469&s=gateway&sprefix=kalpan+gre%2Caps%2C301&sr=8-1">By Kalpan</a></li>
 <h4>Verbal reasoning</h4> 
<li><a href="https://www.amazon.in/Official-Verbal-Reasoning-Practice-Questions/dp/935260735X/ref=sr_1_1?crid=MOM8FBCX908O&keywords=ets+verbal+reasoning&qid=1563218573&s=gateway&smid=AT95IG9ONZD7S&sprefix=ets+v%2Caps%2C286&sr=8-1">By ETS</a></li> 
<li><a href="https://www.amazon.in/Wiley-Aristotle-Verbal-Grail-2018/dp/8126568127/ref=sr_1_3?crid=39ZH0O6IF429&keywords=gre+verbal+grail+aristotle+prep&qid=1563218711&s=gateway&sprefix=gre+verbal+grail+ar%2Caps%2C315&sr=8-3">By Aristotle prep</a></li> 
<li><a href="https://www.amazon.in/GRE-Verbal-Workbook-Hundreds-Questions/dp/1506235298/ref=sr_1_2?crid=1YEST0NU0AAGO&keywords=kaplan+gre+verbal+workbook&qid=1563218774&s=gateway&sprefix=kalpan+gre+ver%2Caps%2C288&sr=8-2">By Kalpan</a></li> 
<h4>Analytical writing ability</h4>
<li><a href="https://www.amazon.in/GRE-Analytical-Writing-Solutions-Topics/dp/1949395014/ref=sr_1_4?keywords=vibrant+publishers+gre+analytical&qid=1563218959&s=gateway&sr=8-4">By Vibrant publishers</a></li> 
<li><a href="https://www.amazon.in/Official-Guide-Revised-General-CD-ROM/dp/1259061086/ref=sr_1_4?crid=1WOV6P0F6HXMK&keywords=ets+official+gre+guide&qid=1563219078&s=gateway&sprefix=ets+offica%2Caps%2C392&sr=8-4">By ETS</a></li> 
<h4>Vocabulary</h4>
<li><a href="https://www.amazon.in/1100-Words-Need-Know-Flashcards/dp/143807526X/ref=sr_1_2?crid=1YW36ZBVVGD1V&keywords=barrons+1100+words+you+need+to+know&qid=1563219180&s=gateway&sprefix=barrons+11%2Caps%2C291&sr=8-2">By Melvin gordon</a></li>
<li><a href="https://www.amazon.in/GRE-Vocabulary-Flash-Cards-Frequently/dp/8192845001/ref=sr_1_1_sspa?keywords=magoosh+gre+vocabulary+ebook&qid=1563219291&s=gateway&sr=8-1-spons&psc=1">By Arun jagannthan</a></li> 
<li><a href="https://www.amazon.in/Word-Power-Made-Norman-Lewis/dp/8183071007/ref=sr_1_2?crid=309V02TGJF2MJ&keywords=word+power+made+easy+norman+lewis+2019&qid=1563219394&s=gateway&sprefix=word+%2Caps%2C297&sr=8-2">By Norwan lewis</a></li> 

</li>

<?php } ?>

<?php
if ($id=="BITSAT") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">BITSAT</b></strong>
<h4>Mathematics</h4>
 <li><a href="https://www.amazon.in/Mathematics-NCERT-Textbook-class-Autofact/dp/B0758RBBYC/ref=sr_1_1?crid=2FKAWOEIX5JRJ&keywords=ncert+mathematics+class+11+and+12+text+books&qid=1563219896&s=gateway&sprefix=ncert+mathematics+class+11+%2Caps%2C285&sr=8-1">By NCRET</a></li>
 <li><a href="https://www.amazon.in/Theory-Problems-Linear-Algebra-Sharma/dp/9380578865/ref=sr_1_1?crid=35879QZMLC4UP&keywords=linear+algebra+by+rd+sharma&qid=1563219950&s=gateway&sprefix=algebra+rd+%2Caps%2C290&sr=8-1">By R.D.Sharma</a></li>
 <li><a href="https://www.amazon.in/Problems-CALCULUS-ONE-VARIABLE-Maron/dp/9351762599/ref=sr_1_1?crid=1MTKLLJ7XI9FM&keywords=i.a+maron+calculus&qid=1563220037&s=gateway&sprefix=calculus+I.A%2Caps%2C300&sr=8-1">By I.A.Maron</a></li>
 <li><a href="https://www.amazon.in/Trigonometry-Hari-Kishan/dp/8126905603/ref=sr_1_1_sspa?crid=4RZWQ22G26XY&keywords=trigonometry+by+sl+loney&qid=1563220101&s=gateway&sprefix=trigono%2Caps%2C302&sr=8-1-spons&psc=1">By Hari kishan</a></li>
 <li><a href="https://www.amazon.in/Skills-Mathematics-Integral-Calculus-Advanced/dp/9313191911/ref=sr_1_2?crid=1TB6VFVQEUG&keywords=integral+calculus+arihant+iit+jee&qid=1563220195&s=gateway&smid=AT95IG9ONZD7S&sprefix=integral+%2Caps%2C298&sr=8-2">By Arihant experts</a></li> 
<h4>Physics</h4>
<li><a href="https://www.amazon.in/Physics-Part-II-Class-NCERT/dp/B06XBNDB1G/ref=sr_1_3?crid=22ASQKOSXBK39&keywords=ncert+physics+11+and+12+text+books&qid=1563220310&s=gateway&sprefix=ncret+physics+11+%2Caps%2C358&sr=8-3">By NCERT</a></li> 
<li><a href="https://www.amazon.in/Concept-Physics-2018-2019-Session-Set/dp/B00BD679PO/ref=sr_1_3?crid=W1UL7QY2NK9C&keywords=concepts+of+physics+hc+verma&qid=1563220368&s=gateway&sprefix=conce%2Caps%2C302&sr=8-3">By H.C.Verma</a></li> 
<li><a href="https://www.amazon.in/Problems-GENERAL-PHYSICS-I-Irodov/dp/9351762564/ref=sr_1_1_sspa?crid=1YCK11URH4IMC&keywords=problems+in+general+physics+ie+irodov&qid=1563220471&s=gateway&sprefix=problems+%2Caps%2C293&sr=8-1-spons&psc=1">By I.E.Irondov</a></li> 
<li><a href="https://www.amazon.in/Principles-Physics-Class-V-K-Mehta/dp/8121917697/ref=sr_1_fkmr2_1?keywords=fundamentals+in+physics+vk+mehta&qid=1563220568&s=gateway&sr=8-1-fkmr2">By V.K.Mehta</a></li> 
<h4>Chemistry</h4>
<li><a href="https://www.amazon.in/NCERT-Chemistry-Class-11-12/dp/B07D49L8VZ/ref=sr_1_5?crid=3MBMZTKXAAW53&keywords=ncert+chemistry+11+and+12+textbook&qid=1563220721&s=gateway&sprefix=Ncert+chemistry+11+%2Caps%2C303&sr=8-5">By NCERT</a></li> 
<li><a href="https://www.amazon.in/Concepts-Organic-Chemistry-2018-2019-Tandon/dp/9382314415/ref=sr_1_3?crid=1K0P2YTE0P743&keywords=organic+chemistry+op+tandon&qid=1563220809&s=gateway&sprefix=ORGAINC+che%2Caps%2C289&sr=8-3">By O.P.Tandon</a></li> 
 <li><a href="https://www.amazon.in/Wileys-Concise-Inorganic-Chemistry-Advanced/dp/812659831X/ref=sr_1_2?crid=25LYX8JV9NY1L&keywords=concise+inorganic+chemistry+by+j.d.+lee&qid=1563220908&s=gateway&smid=AT95IG9ONZD7S&sprefix=concise+%2Caps%2C308&sr=8-2">By J.D.Lee</a></li> 
  <li><a href="https://www.amazon.in/Numerical-Chemistry-Engineering-Examination-2018-2019/dp/9382314431/ref=sr_1_1?crid=2T5SVGX3UOCLA&keywords=numerical+chemistry+p+bahadur&qid=1563220990&s=gateway&sprefix=numerical+%2Caps%2C298&sr=8-1">By P.Bahadur</a></li> 

</li>

<?php } ?>

<?php
if ($id=="SBI PO") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">SBI PO</b></strong>
<h4>For tier I</h4>
<h5>Qunatitative aptitude</h5>
 <li><a href="https://www.amazon.in/How-Prepare-Data-Interpretation-CAT/dp/9352606930/ref=sr_1_3?keywords=data+interpretation+by+arun+sharma&qid=1563221472&s=gateway&sr=8-3">By Arun sharma</a></li> 
 <li><a href="https://www.amazon.in/Magical-Books-Quicker-2018-2019-Session/dp/8190458922/ref=sr_1_2?crid=27QNHLF228UFC&keywords=magical+book+on+quicker+maths+by+m.tyra&qid=1563221603&s=gateway&smid=A1YW7K5MZRMS1M&sprefix=magical+%2Caps%2C304&sr=8-2">By M Tyra</a></li> 
 <li><a href="https://www.amazon.in/Quantitative-Aptitude-Competitive-Examinations-Aggarwal/dp/9352534026/ref=sr_1_2?crid=XUMYHBOLMCOD&keywords=quantitative+aptitude+rs+agarwal+new+edition&qid=1563209078&s=gateway&smid=AT95IG9ONZD7S&sprefix=quanti%2Caps%2C293&sr=8-2">By R.S.Aggarwal</a></li>
  <li><a href="https://www.amazon.in/Objective-Arithmetic-General-Knowledge-Arihant/dp/B07D17S34G/ref=sr_1_3?keywords=fast+track+objective+arthemetic+by+arihant&qid=1563209253&s=gateway&sr=8-3-spell">By Rajesh verma</a></li>

  <h5>Reasoning and computer aptitude</h5>
 <li><a href="https://www.amazon.in/Modern-Approach-Verbal-Non-Verbal-Reasoning/dp/9352832167/ref=sr_1_3?crid=36SA3KROZF9ER&keywords=a+modern+approach+to+verbal+%26+non-verbal+reasoning+r.s.+aggarwal&qid=1563221846&s=gateway&smid=AT95IG9ONZD7S&sprefix=a+mode%2Caps%2C294&sr=8-3">By R.S.Aggarwal</a></li> 
 <li><a href="https://www.amazon.in/Analytical-Reasoning-2018-2019-Session-Panday/dp/8190458914/ref=sr_1_3?crid=EDPN6MPVCCFV&keywords=analytical+reasoning+by+mk+pandey&qid=1563221913&s=gateway&sprefix=analy%2Caps%2C305&sr=8-3">By M.K.Pandey</a></li> 
 <li><a href="https://www.amazon.in/How-Crack-Test-Reasoning-Jaikishan/dp/9313166755/ref=sr_1_2?crid=3B5INQTHT1E2K&keywords=how+to+crack+tests+of+reasoning&qid=1563221966&s=gateway&smid=AT95IG9ONZD7S&sprefix=how+to+cr%2Caps%2C309&sr=8-2">By jaikishan</a></li> 
 <li><a href="https://www.amazon.in/New-Approach-REASONING-Verbal-Non-Verbal/dp/9351765105/ref=sr_1_1?crid=3NTSEF3DBA673&keywords=a+new+approach+to+reasoning+verbal+%26+non-verbal+by+b.s.+sijwali&qid=1563222015&s=gateway&smid=AT95IG9ONZD7S&sprefix=a+new+%2Caps%2C286&sr=8-1">By B.S.Sijwali</a></li> 

 <h5>English</h5>
 <li><a href="https://www.amazon.in/English-Grammar-Composition-Multicolour-Self-practice/dp/B07SPLWKKG/ref=sr_1_1_sspa?crid=2MMMKKV4LSZX7&keywords=wren+and+martin+high+school+english+grammar&qid=1563222118&s=gateway&sprefix=wren+%2Caps%2C284&sr=8-1-spons&psc=1">By N.D.V.Prasad rao</a></li> 
 <li><a href="https://www.amazon.in/Objective-General-English-S-P-Bakshi/dp/9351768449/ref=sr_1_1?crid=38NEI2WKOHKOE&keywords=objective+general+english&qid=1563222255&s=gateway&smid=AT95IG9ONZD7S&sprefix=ogjecti%2Caps%2C280&sr=8-1">By S.P.Bakshi</a></li> 
 <li><a href="https://www.amazon.in/MIRROR-COMMON-ERRORS-ASHOK-KUMAR/dp/B07NJRB979/ref=sr_1_3?crid=1AAL1F2SG2900&keywords=mirror+of+common+errors+in+english&qid=1563222321&s=gateway&sprefix=mirror+of+comm%2Caps%2C282&sr=8-3">By A.K.Singh</a></li> 

 <h4>For tier II</h4>
<h5>Qunatitative aptitude</h5>
 <li><a href="https://www.amazon.in/How-Prepare-Data-Interpretation-CAT/dp/9352606930/ref=sr_1_3?keywords=data+interpretation+by+arun+sharma&qid=1563221472&s=gateway&sr=8-3">By Arun sharma</a></li> 
 <li><a href="https://www.amazon.in/Magical-Books-Quicker-2018-2019-Session/dp/8190458922/ref=sr_1_2?crid=27QNHLF228UFC&keywords=magical+book+on+quicker+maths+by+m.tyra&qid=1563221603&s=gateway&smid=A1YW7K5MZRMS1M&sprefix=magical+%2Caps%2C304&sr=8-2">By M Tyra</a></li> 
 <li><a href="https://www.amazon.in/Quantitative-Aptitude-Competitive-Examinations-Aggarwal/dp/9352534026/ref=sr_1_2?crid=XUMYHBOLMCOD&keywords=quantitative+aptitude+rs+agarwal+new+edition&qid=1563209078&s=gateway&smid=AT95IG9ONZD7S&sprefix=quanti%2Caps%2C293&sr=8-2">By R.S.Aggarwal</a></li>
  <li><a href="https://www.amazon.in/Objective-Arithmetic-General-Knowledge-Arihant/dp/B07D17S34G/ref=sr_1_3?keywords=fast+track+objective+arthemetic+by+arihant&qid=1563209253&s=gateway&sr=8-3-spell">By Rajesh verma</a></li>

  <h5>Reasoning and computer aptitude</h5>
 <li><a href="https://www.amazon.in/Modern-Approach-Verbal-Non-Verbal-Reasoning/dp/9352832167/ref=sr_1_3?crid=36SA3KROZF9ER&keywords=a+modern+approach+to+verbal+%26+non-verbal+reasoning+r.s.+aggarwal&qid=1563221846&s=gateway&smid=AT95IG9ONZD7S&sprefix=a+mode%2Caps%2C294&sr=8-3">By R.S.Aggarwal</a></li> 
 <li><a href="https://www.amazon.in/Analytical-Reasoning-2018-2019-Session-Panday/dp/8190458914/ref=sr_1_3?crid=EDPN6MPVCCFV&keywords=analytical+reasoning+by+mk+pandey&qid=1563221913&s=gateway&sprefix=analy%2Caps%2C305&sr=8-3">By M.K.Pandey</a></li> 
 <li><a href="https://www.amazon.in/How-Crack-Test-Reasoning-Jaikishan/dp/9313166755/ref=sr_1_2?crid=3B5INQTHT1E2K&keywords=how+to+crack+tests+of+reasoning&qid=1563221966&s=gateway&smid=AT95IG9ONZD7S&sprefix=how+to+cr%2Caps%2C309&sr=8-2">By jaikishan</a></li> 
 <li><a href="https://www.amazon.in/New-Approach-REASONING-Verbal-Non-Verbal/dp/9351765105/ref=sr_1_1?crid=3NTSEF3DBA673&keywords=a+new+approach+to+reasoning+verbal+%26+non-verbal+by+b.s.+sijwali&qid=1563222015&s=gateway&smid=AT95IG9ONZD7S&sprefix=a+new+%2Caps%2C286&sr=8-1">By B.S.Sijwali</a></li> 

 <h5>English</h5>
 <li><a href="https://www.amazon.in/English-Grammar-Composition-Multicolour-Self-practice/dp/B07SPLWKKG/ref=sr_1_1_sspa?crid=2MMMKKV4LSZX7&keywords=wren+and+martin+high+school+english+grammar&qid=1563222118&s=gateway&sprefix=wren+%2Caps%2C284&sr=8-1-spons&psc=1">By N.D.V.Prasad rao</a></li> 
 <li><a href="https://www.amazon.in/Objective-General-English-S-P-Bakshi/dp/9351768449/ref=sr_1_1?crid=38NEI2WKOHKOE&keywords=objective+general+english&qid=1563222255&s=gateway&smid=AT95IG9ONZD7S&sprefix=ogjecti%2Caps%2C280&sr=8-1">By S.P.Bakshi</a></li> 
 <li><a href="https://www.amazon.in/MIRROR-COMMON-ERRORS-ASHOK-KUMAR/dp/B07NJRB979/ref=sr_1_3?crid=1AAL1F2SG2900&keywords=mirror+of+common+errors+in+english&qid=1563222321&s=gateway&sprefix=mirror+of+comm%2Caps%2C282&sr=8-3">By A.K.Singh</a></li> 

 <h5>Genral awareness</h5>
 <li><a href="https://www.amazon.in/General-Knowledge-Dr-Binay-Karna/dp/9384761540/ref=sr_1_3?crid=2FQIYOYR0MRQ1&keywords=lucent+general+knowledge+2019+english&qid=1563222903&s=gateway&smid=AT95IG9ONZD7S&sprefix=luce%2Caps%2C333&sr=8-3">By DR.Binay karna</a></li> 
 <li><a href="https://www.amazon.in/Manorama-Yearbook-English-Philip-Mathew/dp/8193769716/ref=sr_1_2?crid=33AE32RKYVPKF&keywords=manorama+year+books+2019+english&qid=1563222950&s=gateway&sprefix=mano%2Caps%2C307&sr=8-2">By Phililp mathew</a></li> 
 <li><a href="https://www.amazon.in/Banking-Awareness-Arihant-Experts/dp/9311124664/ref=sr_1_3?crid=WVGU5WZREBZM&keywords=banking+awareness+arihant+2019&qid=1563223074&s=gateway&sprefix=banking+%2Caps%2C293&sr=8-3">By Arihent experts</a></li> 
 
</li>

<?php } ?>

<?php
if ($id=="CAT") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">CAT</b></strong>
<h4>Verbal ability and reading comprehension</h4>

 <li><a href="https://www.amazon.in/Prepare-Verbal-Ability-Reading-Comprehension/dp/9353160197/ref=sr_1_3?crid=2CJKVKO9LQ60S&keywords=verbal+ability+and+reading+comprehension+by+arun+sharma&qid=1563223736&s=gateway&smid=AT95IG9ONZD7S&sprefix=verbal+%2Caps%2C279&sr=8-3">By Arun sharma</a></li>
 <li><a href="https://www.amazon.in/PSC-VA-CAT-Nishit-Sinha/dp/9332570027/ref=sr_1_6?crid=2CJKVKO9LQ60S&keywords=verbal+ability+and+reading+comprehension+by+arun+sharma&qid=1563223736&s=gateway&sprefix=verbal+%2Caps%2C279&sr=8-6">By Nishit k sinha</a></li> 
 <li><a href="https://www.amazon.in/Wileys-ExamXpert-Ability-Reading-Comprehension/dp/8126579668/ref=sr_1_9?crid=2CJKVKO9LQ60S&keywords=verbal+ability+and+reading+comprehension+by+arun+sharma&qid=1563223736&s=gateway&sprefix=verbal+%2Caps%2C279&sr=8-9">By Captain A.K.Kalia</a></li> 

 <h4>Logical reasoning and data interpretation</h4>
<li><a href="https://www.amazon.in/How-Prepare-Logical-Reasoning-CAT/dp/9353167132/ref=sr_1_3?crid=20Y0CGZ8KJGNX&keywords=logical+reasoning+arun+sharma&qid=1563224009&s=gateway&smid=AT95IG9ONZD7S&sprefix=logica%2Caps%2C297&sr=8-3">By Arun sharma</a></li> 
<li><a href="https://www.amazon.in/How-Prepare-Data-Interpretation-CAT/dp/9352606930/ref=sr_1_3?crid=18C4190MPC6IS&keywords=data+interpretation+arun+sharma&qid=1563224067&s=gateway&sprefix=data+in%2Caps%2C282&sr=8-3">By Arun sharma</a></li> 
 <li><a href="https://www.amazon.in/Logical-Reasoning-Interpretation-other-Pearson/dp/9386873516/ref=sr_1_2_sspa?crid=18C4190MPC6IS&keywords=data+interpretation+arun+sharma&qid=1563224067&s=gateway&sprefix=data+in%2Caps%2C282&sr=8-2-spons&psc=1">By Nishit k sinha</a></li> 

 <h4>Quantitative aptitude</h4>
<li><a href="https://www.amazon.in/Quantitative-Aptitude-Competitive-Examinations-Aggarwal/dp/9352534026/ref=sr_1_2?keywords=quantitative+aptitude+for+cat+rs+agarwal+new+edition&qid=1563224294&s=gateway&smid=AT95IG9ONZD7S&sr=8-2">By R.S.Aggarwal</a></li> 
<li><a href="https://www.amazon.in/How-Prepare-Quantitative-Aptitude-CAT/dp/9353160189/ref=sr_1_3?crid=SRNE15A6ON5F&keywords=quantitative+aptitude+arun+sharma&qid=1563224405&s=gateway&smid=AT95IG9ONZD7S&sprefix=quantitative+aptitu%2Caps%2C298&sr=8-3">By Arun sharma</a></li> 
 <li><a href="https://www.amazon.in/Quantitative-Aptitude-Quantum-Cat-2018/dp/9312147587/ref=sr_1_2?crid=VC8Y1GMV7JH7&keywords=quantitative+aptitude+sarvesh+k+verma&qid=1563224454&s=gateway&sprefix=quantitative+aptitude+sa%2Caps%2C792&sr=8-2">By Sarvesh k verma</a></li> 

</li>

<?php } ?>

<?php
if ($id=="SSC CHSL") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">SSC CHSL</b></strong>
<h4>For Tier I</h4>
<h5>English</h5>
 <li><a href="https://www.amazon.in/Objective-General-English-S-P-Bakshi/dp/9351768449/ref=sr_1_3?crid=25E6VPZC3SZ4C&keywords=objective+general+english+sp+bakshi&qid=1563226006&s=gateway&smid=AT95IG9ONZD7S&sprefix=objective%2Caps%2C302&sr=8-3">By S.P Bakshi</a></li> 
 <li><a href="https://www.amazon.in/Common-Errors-English-English-1446/dp/B0154WL1CY/ref=sr_1_1_sspa?crid=3GMJSV9C2IU5B&keywords=common+errors+in+english+by+kiran+prakashan&qid=1563226066&s=gateway&sprefix=common+errors+%2Caps%2C286&sr=8-1-spons&psc=1">By Kiran prakashan</a></li> 
<li><a href="https://www.amazon.in/PLINTH-PARAMOUNT-ENGLISH-VOL-2/dp/B0776CZ3W2/ref=sr_1_6?crid=3OGUS0AZ2VMDU&keywords=plinth+to+paramount+by+neetu+singh&qid=1563226208&s=gateway&sprefix=plin%2Caps%2C327&sr=8-6">By Neetu singh</a></li> 
<h5>Quantitative aptitude</h5>
<li><a href="https://www.amazon.in/Quantitative-Aptitude-Competitive-Examinations-Aggarwal/dp/9352534026/ref=sr_1_2?crid=2EKOI8WP9C5FD&keywords=quantitative+aptitude+rs+agarwal+new+edition&qid=1563226332&s=gateway&smid=AT95IG9ONZD7S&sprefix=qua%2Caps%2C289&sr=8-2">By R.S.Aggarwal</a></li> 
 <li><a href="https://www.amazon.in/ARITHMETIC-NUMERICAL-SELF-STUDY-GUIDE-CUM-BOOK-HINDI/dp/B07B9TRM6G/ref=sr_1_fkmr0_1?keywords=quantitative+abilities+arithmetic+by+kiran+prakashan&qid=1563226441&s=gateway&sr=8-1-fkmr0">By Kiran prakashan</a></li> 
<li><a href="https://www.amazon.in/Track-Objective-Arithmetic-Rajesh-Verma/dp/9312149830/ref=sr_1_3?crid=2BQ3QQE9NBZNJ&keywords=fast+track+objective+arithmetic+by+rajesh+verma&qid=1563226525&s=gateway&smid=AT95IG9ONZD7S&sprefix=fast+tra%2Caps%2C309&sr=8-3">By Rajesh verma</a></li> 
<h5>Genral intelligence and reasoning</h5>
<li><a href="https://www.amazon.in/Analytical-Reasoning-2018-2019-Session-Panday/dp/8190458914/ref=sr_1_3?crid=11KBTSQLN6VZL&keywords=analytical+reasoning+by+mk+pandey&qid=1563226643&s=gateway&sprefix=analy%2Caps%2C313&sr=8-3">By M.K.Pandey</a></li> 
<li><a href="https://www.amazon.in/Reasoning-anaytical-non-verbal-reasoning-arihant/dp/B0711W3JX8/ref=sr_1_8?crid=1FLZ3NLAO0K5H&keywords=a+new+approach+to+reasoning+by+arihant&qid=1563226697&s=gateway&sprefix=a+new+ap%2Caps%2C292&sr=8-8">By Arihent</a></li> 
<li><a href="https://www.amazon.in/Modern-Approach-Verbal-Non-Verbal-Reasoning/dp/9352832167/ref=sr_1_3?crid=XZFI4MDXYDPT&keywords=reasoning+book+by+rs+agarwal+new+edition&qid=1563226779&s=gateway&smid=AT95IG9ONZD7S&sprefix=reas%2Caps%2C518&sr=8-3">By R.S.Aggarwal</a></li> 
<h5>General awareness</h5> 
<li><a href="https://www.amazon.in/General-Knowledge-Dr-Binay-Karna/dp/9384761540/ref=sr_1_2?crid=2FEQLX0QZHOQW&keywords=lucent+general+knowledge+2019+english&qid=1563226867&s=gateway&smid=AT95IG9ONZD7S&sprefix=genral%2Caps%2C305&sr=8-2">By DR.Binay karna</a></li> 
<li><a href="https://www.amazon.in/Manorama-Yearbook-English-Philipa-Mathew/dp/8193769716/ref=sr_1_2?crid=3MA0QQ75VSP25&keywords=manorama+year+books+2019+english&qid=1563226958&s=gateway&sprefix=mano%2Caps%2C301&sr=8-2">By Philip mathew</a></li> 
<h4>For Tier II</h4>
 <li><a href="https://www.amazon.in/Combined-Higher-Secondary-Level-Descriptive/dp/9384905720/ref=sr_1_5?keywords=guide+for+ssc+chsl+stage+2&qid=1563227736&s=gateway&sr=8-5">By Disha experts</a></li> 
 <li><a href="https://www.amazon.in/Tier-II-Descriptive-Essay-Letter-Writing/dp/B0794MCJMD/ref=sr_1_fkmr3_1?keywords=guide+for+ssc+chsl+tier+2+kiran+prakashan&qid=1563227883&s=gateway&sr=8-1-fkmr3">By Kiran prakashan</a></li> 
 
</li>

<?php } ?>

<?php
if ($id=="INCOME TAX") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">INCOME TAX</b></strong>

<h4>For Tier I</h4>
<h5>English</h5>
 <li><a href="https://www.amazon.in/Objective-General-English-S-P-Bakshi/dp/9351768449/ref=sr_1_3?crid=25E6VPZC3SZ4C&keywords=objective+general+english+sp+bakshi&qid=1563226006&s=gateway&smid=AT95IG9ONZD7S&sprefix=objective%2Caps%2C302&sr=8-3">By S.P Bakshi</a></li> 
 <li><a href="https://www.amazon.in/Common-Errors-English-English-1446/dp/B0154WL1CY/ref=sr_1_1_sspa?crid=3GMJSV9C2IU5B&keywords=common+errors+in+english+by+kiran+prakashan&qid=1563226066&s=gateway&sprefix=common+errors+%2Caps%2C286&sr=8-1-spons&psc=1">By Kiran prakashan</a></li> 
<li><a href="https://www.amazon.in/PLINTH-PARAMOUNT-ENGLISH-VOL-2/dp/B0776CZ3W2/ref=sr_1_6?crid=3OGUS0AZ2VMDU&keywords=plinth+to+paramount+by+neetu+singh&qid=1563226208&s=gateway&sprefix=plin%2Caps%2C327&sr=8-6">By Neetu singh</a></li> 
<h5>Quantitative aptitude</h5>
 <li><a href="https://www.amazon.in/ARITHMETIC-NUMERICAL-SELF-STUDY-GUIDE-CUM-BOOK-HINDI/dp/B07B9TRM6G/ref=sr_1_fkmr0_1?keywords=quantitative+abilities+arithmetic+by+kiran+prakashan&qid=1563226441&s=gateway&sr=8-1-fkmr0">By Kiran prakashan</a></li> 
<li><a href="https://www.amazon.in/Track-Objective-Arithmetic-Rajesh-Verma/dp/9312149830/ref=sr_1_3?crid=2BQ3QQE9NBZNJ&keywords=fast+track+objective+arithmetic+by+rajesh+verma&qid=1563226525&s=gateway&smid=AT95IG9ONZD7S&sprefix=fast+tra%2Caps%2C309&sr=8-3">By Rajesh verma</a></li> 
<h5>Genral intelligence and reasoning</h5>
<li><a href="https://www.amazon.in/Analytical-Reasoning-2018-2019-Session-Panday/dp/8190458914/ref=sr_1_3?crid=11KBTSQLN6VZL&keywords=analytical+reasoning+by+mk+pandey&qid=1563226643&s=gateway&sprefix=analy%2Caps%2C313&sr=8-3">By M.K.Pandey</a></li> 
<li><a href="https://www.amazon.in/Modern-Approach-Verbal-Non-Verbal-Reasoning/dp/9352832167/ref=sr_1_3?crid=XZFI4MDXYDPT&keywords=reasoning+book+by+rs+agarwal+new+edition&qid=1563226779&s=gateway&smid=AT95IG9ONZD7S&sprefix=reas%2Caps%2C518&sr=8-3">By R.S.Aggarwal</a></li> 
<h5>General awareness</h5> 
<li><a href="https://www.amazon.in/General-Knowledge-Dr-Binay-Karna/dp/9384761540/ref=sr_1_2?crid=2FEQLX0QZHOQW&keywords=lucent+general+knowledge+2019+english&qid=1563226867&s=gateway&smid=AT95IG9ONZD7S&sprefix=genral%2Caps%2C305&sr=8-2">By DR.Binay karna</a></li> 
<li><a href="https://www.amazon.in/Manorama-Yearbook-English-Philipa-Mathew/dp/8193769716/ref=sr_1_2?crid=3MA0QQ75VSP25&keywords=manorama+year+books+2019+english&qid=1563226958&s=gateway&sprefix=mano%2Caps%2C301&sr=8-2">By Philip mathew</a></li> 
<h4>For Tier II</h4>
 <li><a href="https://www.amazon.in/Combined-Higher-Secondary-Level-Descriptive/dp/9384905720/ref=sr_1_5?keywords=guide+for+ssc+chsl+stage+2&qid=1563227736&s=gateway&sr=8-5">By Disha experts</a></li> 
 <li><a href="https://www.amazon.in/Tier-II-Descriptive-Essay-Letter-Writing/dp/B0794MCJMD/ref=sr_1_fkmr3_1?keywords=guide+for+ssc+chsl+tier+2+kiran+prakashan&qid=1563227883&s=gateway&sr=8-1-fkmr3">By Kiran prakashan</a></li> 
 
</li>

<?php } ?>

<?php
if ($id=="IELTS") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">IELTS</b></strong>

 <li><a href="https://www.amazon.in/Barron%60s-IELTS-Free-2-CDs/dp/9387477002/ref=sr_1_3?crid=SVGHN8GR9AHV&keywords=barrons+ielts&qid=1563228509&s=gateway&sprefix=barron%2Caps%2C302&sr=8-3">By Lin Lougheed</a></li> 
 <li><a href="https://www.amazon.in/Cambridge-Ielts-Students-Book-Answers/dp/0521693071/ref=sr_1_1_sspa?crid=R2JPY33GLT86&keywords=the+official+cambridge+guide+to+ielts+2019&qid=1563228597&s=gateway&sprefix=the+off%2Caps%2C296&sr=8-1-spons&psc=1">By  Cambridge ESOL</a></li> 
<li><a href="https://www.amazon.in/Cambridge-Academic-Students-Answers-Oriental/dp/1316612252/ref=sr_1_2_sspa?crid=R2JPY33GLT86&keywords=the+official+cambridge+guide+to+ielts+2019&qid=1563228597&s=gateway&sprefix=the+off%2Caps%2C296&sr=8-2-spons&psc=1">By Cambridge ESOL</a></li> 
<li><a href="https://www.amazon.in/Official-Cambridge-Guide-Students-Answers/dp/110744277X/ref=sr_1_1?crid=2ADTD7GIL83WE&keywords=road+to+ielts&qid=1563228742&s=gateway&smid=AT95IG9ONZD7S&sprefix=road+to+i%2Caps%2C296&sr=8-1">By  Pauline Cullen</a></li> 
<li><a href="https://www.amazon.in/Official-IELTS-Practice-Materials-Audio/dp/1906438463/ref=sr_1_1?crid=1FOQKSF0W4IYU&keywords=official+ielts+practice+materials+1+with+audio+cd&qid=1563228809&s=gateway&sprefix=offical+iel%2Caps%2C293&sr=8-1">By Cambridge ESOL </a></li> 

</li>

<?php } ?>


                </ul>


                    </table>
                    <!-- end slider -->
                </div>
            </div>

        </div>
<?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>

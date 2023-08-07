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





                         <h3 style="font-style: segoe script;color:black" class="prev-indent-bot">About Exam</h3>
                <ul class="list-1">

                  <?php
                  $id= $_GET['id'];
                  if ($id=="JEE") {
                   // code...
                  ?>
                	<li>

                            <strong><b style="color:darkgoldenrod;font-size:15px">JEE</b></strong>
                          <p>
Joint Entrance Examination (JEE) MAIN will be conducted by the NTA from 2019 onwards. This Examination was being conducted by the Central Board of Secondary Education (CBSE) till 2018.
JEE Main is applicable for admission to NITs, IIITs and CFTIs participating though Central Seat Allocation Board subject to the condition that the candidate should have secured at least 75% marks in the 12th class examination, or be in the top 20 percentile in the 12th class examination conducted by the respective Boards. For SC/ST candidates the qualifying marks would be 65% in the 12th class examination.</br>
<p><h4>Exam Pattern:</h4></p>
Dates of Examination Between: 07.04.2019 (Sunday) to 20.04.2019 (Saturday)</br>
Allocation of Date and shift: Random</br>
Medium of Question Paper: Candidates have to opt language of QP in the OnlineApplicationForm.</br>
English & Hindi All Centre Cities</br>
English, Hindi and Gujarati. CentreCitiesinGujarat,Daman &Diuand
Dadra & Nagar Haveli</br>
Type of Questions: Objective Type- MCQs</br>
No. of questions:</br>
Mathematics: 30</br>
Physics :30 </br>
Chemistry:30 </br>
Total :90</br>
Marks for each subject:</br>
Mathematics:120</br>
Physics : 120</br>
Chemistry: 120</br>
Total :360</br>
Marking Scheme for MCQs Correct Answer :Four mark (+4)</br>
Incorrect Answer: Minus one mark (-1)</br>
Unanswered / Marked for Review: No mark (0)</br>
<p><h4>Cutoff marks:</h4></p>
Unreserved  - 74 </br>
OBC - 45</br>
SC -29</br>
ST  - 24 </br>
pwd- -35</br>
<p><h4>Fees:</h4></p>
General/OBC – Boys :₹500</br>
General/OBC – Girls :₹250</br>
SC/ST/PWD – All: ₹250</br>
Transgender-₹250</br>

                          </p>
                    </li>

                  <?php } ?>



                  <?php
                  if ($id=="NEET") {
                   // code...
                  ?>
                  <li>

                            <a href="booklink.php"><strong><b style="color:darkgoldenrod;font-size:15px">NEET</b></strong></a>
                          <p>


The National Eligibility cum Entrance Test (NEET), formerly the All India Pre-Medical Test (AIPMT) is an entrance examination in India for students who wish to study graduate and postgraduate medical courses (MBBS, MD, MS) and dental courses (BDS, MDS) in government or private medical colleges and dental colleges.</br>
<p><h4>Important points to know about Neet:</h4></p>
Candidates are required to go through the Information Bulletin carefully and acquaint
themselves with the following:-</br>
i. Candidates can apply for NEET (UG) - 2019 “Online” only. No offline application will
be entertained.</br>
ii. Information Bulletin can be downloaded from the website www.nta.ac.in/
www.ntaneet.nic.in</br>
iii. Candidates must retain the following documents with them as reference for future
correspondence:</br>
a) At least four printouts of the Confirmation Page of online Application.</br>
b) Proof of fee paid (i.e. Bank transaction details supported by confirmation page).</br>
c) At least 5 copies of identical passport size Photograph that was scanned and
uploaded on the Online Application.</br>
d) Copy of the system generated Self Declaration in respect of candidates from
State of J&K who have opted for seats under 15% All India Quota .</br>
iv. Candidates must ensure that mobile numbers, e-mail id filled in online Application form
are their own or their parents’. The NTA will communicate by SMS and/or e-mail on
given mobile number and e-mail ID respectively only.</br>
v. The NTA will not be responsible for non-receipt of latest information due to incorrect
mobile number, e-mail id and correspondence address filled in the Online Application
Form.</br>
vi. The fee can only be remitted in the following ways:</br>
(a) Online Mode i.e. Debit/ Credit card and Net Banking:</br>
Ï Check the validity of the Debit/ Credit Card and keep it ready with you while
logging on to website for submitting application form. Candidate should enter
the information asked for and make payment through Debit/ Credit Card.
Ï For using Net Banking, check the balance in your account and keep all
credentials ready with you while logging on to website for submitting
application form. Candidate should Login with his/her credentials of net
banking and make payment through Net Banking.</br>
(b) Cash Deposit through e-challan at State Bank of India Branches only:
Ï Print e-slip on A4 size paper-Landscape format from NTA website and follow
instructions given on e-slip and make payment through e-challan at State
Bank of India branches only.</br>
vii. Final Submission of Online Application will remain incomplete and unsuccessful in case
of failure to complete Step-3 of Online Application, i.e., non-payment of fee. Generation
of confirmation page confirms that application has been submitted successfully.
Non generation of confirmation page indicates that the process of payment of fee has
not been completed and thus application has not been submitted successfully.</br>
viii. Candidates must preserve the Admit Cards till their admission in MBBS/BDS Courses.</br>
ix. Ensure that correct data is submitted in online application. Any correction pertaining to</br>
the photograph and signature of the candidate will be intimated through e-mail/SMS and
the same will be available in the candidate’s login account. Other permissible
corrections can also be carried through log-in account only during schedule fixed for the 
same. Candidates may ensure clear photograph and signatures are uploaded.
Thereafter, no request for correction(s) will be entertained except when the window for
correction in all fields open.</br>
x. Eligibility of the candidate will be determined on the last date of submission of online
Application Form.</br>
xi. NEET (UG) - 2019 will be held on 5th May, 2019 (Sunday).</br>
xii. NEET (UG) - 2019 will be held in single stage and would be an objective type test.</br>
xiii. Indian Nationals, Non Resident Indians (NRIs), Overseas Citizen of India (OCI),
Persons with Indian Origin (PIO) & Foreign Nationals are eligible to appear in NEET
(UG) - 2019.</br>
xiv. Only one application should be submitted by a candidate.</br>
xv. Particulars filled in Application Form need to be chosen carefully as options once
exercised cannot be changed later including Examination Centre city and Medium of
Question Paper except when the window for correction in all fields open.</br>
xvi. Allotment of Centre is made by computer and there is no human intervention. Under no
circumstances, the allotted Centre shall be changed by the NTA.</br>
xvii. The candidates can download Admit Card for the Examination from website
www.ntaneet.nic.in.</br>
xviii. The candidates can download the Result, Marks cum Rank Sheet/Rank Letter from the
website www.ntaneet.nic.in. These documents will also be made available in DigiLocker
www.digilocker.gov.in .</br>
xix. For the latest updates, candidates must regularly visit the website www.ntaneet.nic.in,
www.mohfw.gov.in&www.mcc.nic.in and the websites of concerned States/Institutions
till the completion of final round of counseling.</br>
xx. Candidates should fill-up online form and pay fee well in advance to avoid last minute
rush on the server. No request regarding non-submission of application/fee (due to any
reason) will be entertained.</br>
xxi. Candidates must note that mere deduction of fee from the bank account is not a proof of
fee payment. The payment should be supported by updated fee in the account of the
candidate. Generation of confirmation page is the proof of successful submission of
Application Form.</br>
xxii. The result of the NEET (UG) - 2019 may be utilized by other entities of Central/State
Governments for admission purpose in accordance with their rules.</br>
xxiii. Indian Citizens/ Overseas Citizen of India intending to pursue MBBS/ BDS from a foreign Medical / Dental Institute need to qualify NEET (UG) - 2019.</br>
<p><h4>Exam pattern:</h4></p>
 Total questions: 180 | Total marks:720 Marks</br>
No. of questions in each section:  Physics- 45, Chemistry- 45, Botany- 45, Zoology- 45</br>
Marking Scheme : + 4 for correct answer, -1 for incorrect answer</br>
Type of Questions Multiple Choice Questions: (MCQs)</br>
Exam Mode Offline: (Pen- paper based Test)</br>
Duration : 3 hours</br>
NEET 2019 Exam Date: May 5, 2019</br>
Aggregate Score Calculation :
Total number of correct answers X 4 – Total number of incorrect answers X 1</br>

(Note: There are no marks for not attempting questions)</br>
<p><h4>Cutoff marks:</h4></p>
Unreserved (UR) :50th Percentile 701-134
Unreserved PH (UR-PH): 45th Percentile 133-120
Scheduled Caste (SC) : 40th Percentile 133-107
Scheduled Tribe (ST):  40th Percentile 133-107
Other Backward Classes (OBC) : 40th Percentile 133-107
SC-PH :40th Percentile 119-107
ST-PH :40th Percentile 119-107
OBC-PH :40th Percentile 119-107

<p><h4>Fees:</h4></p>
General/OBC :₹1400</br>
SC/ST/PWD/Transgender :₹750</br>

  </p>
                    </li>

                  <?php } ?>


                  <?php
                  if ($id=="RBI GRADE B") {
                   // code...
                  ?>
                  <li>

                            <a href="booklink.php"><strong><b style="color:darkgoldenrod;font-size:15px">RBI GRADE B</b></strong></a>
                          <p>
                            RBI is all set to conduct examination for Grade B officer at 150 Test center in almost all states of India. This exam is one of the important examinations amongst all banking examinations conducted every year. Grade B comprises 3 different grades of employees alternating General, DEPR & DSM's. Reserve Bank of India almost every year holds common recruitment examination for the post of Grade B officers. RBI Grade- is not same as the other bank exams. RBI exam conserves a virtuous level of difficulty and has a different procedure in phase-11 while comparing to other banking examinations. It is deliberated as one of the most respected jobs in India.</br>
                          <p> <h4>RBI Grade B Vacancy:</h4></p> 
This year RBI is going to employee Grade B officers for 161 Posts. RBI has three different Cadres for group B officers named as General, DEPR & DSIM. Given are the details of vacancies.</br>

1.Officers in Grade ‘B’(DR)- General:120 to 130 Expected</br>

2.Officers in Grade ‘B’(DR)- DEPR:20 to 25 Expected</br>

3.Officers in Grade ‘B’(DR)- DSIM:15 to 30 ExpectedRBI Grade B- Eligibility Criteria</br>

<p><h4>EducationalQualification:</h4></p>                    

Officers in
Grade 'B' (DR) -(General):

A minimum of 60% marks (50% in case of SC/ST/PWD) or an equivalent grade in Bachelor’s degree as well as in 12th (or Diploma or equivalent) and 10th Standard examinations.</br>

Officers in
Grade 'B' (DR) -
DEPR   :                                                    

A Master's Degree in Economics / Econometrics / Quantitative Economics / Mathematical Economics / Integrated Economics Course/ Finance, with a minimum of 55% marks or an equivalent grade in aggregate of all semesters /years from a recognized Indian or Foreign University /Institute.</br>

Officers in
Grade 'B' (DR) -
DSIM:
A Master's Degree in Statistics/ Mathematical Statistics/ Mathematical Economics/ Econometrics/ Statistics & Informatics from IIT-Kharagpur/ Applied Statistics & Informatics from IIT-Bombay with a minimum of 55% marks or equivalent grade in aggregate of all semesters/years; OR

Master's Degree in Mathematics with a minimum of 55% marks or an equivalent grade in aggregate of all semesters/years and one-year postgraduate diploma in Statistics or related subjects from an institute of repute; OR

M. Stat. The degree of Indian Statistical Institute with a minimum of 55% marks in aggregate of all semesters/years OR

Post Graduate Diploma in Business Analytics (PGDBA) jointly offered by ISI Kolkata, IIT Kharagpur and IIM Calcutta with a minimum of 55% marks or equivalent grade in aggregate of all semesters/years</br>

<p><h4>RBI Grade B - Examination Pattern:</h4></p>
<p><h5>RBI Grade B Prelims Exam Pattern (Phase I):</h5></p>
No. of questions:200</br>
Time Duration:120 minutes for all sections</br>
Maximum Marks:200 for all subjects</br>
Subjects:</br>
General Awareness:80</br>
English Language:30</br>
Quantitative Aptitude:30</br>
Reasoning Ability:60</br>
<p><h5>RBI Grade B Mains Exam Pattern (Phase II):</h5></p>
Time Duration:90 minutes for all sections</br>
Max. Marks:100 for all sections</br>
subjects:</br>
Economic and social issue:100 questions Objective</br>

English (Writing skill):100 descrptive</br>

Finance and Management:100 questions Objective</br>

<p><h5>Interview Phase III:</h5></p>
Candidates will be shortlisted for the interview, centered on the aggregate of marks obtained in  Phase-II (Paper-I  +Paper-II  +Paper-III).   The interview will be of 50  marks. The candidate may opt for interview either in Hindi or English.  Final Selection will be through merit list which will be prepared by adding marks secured by candidates in Phase-II examination and interview.</br>

<p><h4>Fees:</h4></p>
1.GEN/OBCRs:850/- (Application fee including Intimation charges)</br>
2.SC/ST/PWDRs:100/- (Intimation charges only)</br>
3.Staff:Nil</br>
 </p>
                    </li>

                  <?php } ?>


<?php
                  if ($id=="UPSC") {
                   // code...
                  ?>
                  <li>

                            <a href="booklink.php"><strong><b style="color:darkgoldenrod;font-size:15px">UPSC</b></strong></a>
                          <p>
                            The Union Public Service Commission conducts the civil services (preliminary) examinations which is common for candidates applying for Civil Service Examination and Indian Forest Service Examination, and acts as a screening mechanism for selection of candidates for the Civil Service (main) Examination and Indian Forest Service (main) Examination. </br>
                            The competitive examination comprises two successive stages, having different syllabi viz:</br>

Stage 1: IAS Preliminary Exam – 2 papers of 200 marks each</br>
Stage 2: IAS Mains Exam – Written exam (7 papers) and an Interview.</br>


                         </p>
                    </li>

                  <?php } ?>

                  <?php
                  if ($id=="IBPS CLERK") {
                   // code...
                  ?>
                  <li>

                            <a href="booklink.php"><strong><b style="color:darkgoldenrod;font-size:15px">IBPS CLERK</b></strong></a>
                          <p>IBPS Stands for - Institute of Banking Personnel Selection. IBPS is a autonomous body, constituted by government of India, which has been given the task of conducting recruitment exams of various Public Sector Banks, State Bank Of India, Reserve Bank of India , Life Insurance Corporation & General Insurance Companies. IBPS came into existence in 1984, when Personnel Staff Selection Unit of NIBM was converted into autonomous Institute of Banking Personnel Selection.</br>
                          IBPS (Institute of Banking Personnel Selection) conducts a common written exam or CWE every year for the clerical cadre in multiple banks all over the country. All public sector banks use CWE as a base to fill the vacancies for this post.</br>

IBPS is conducting Clerk exam for the eighth year now and hence named IBPS Clerk CWE IX. The IBPS Clerk CWE exam is conducted on two levels- preliminary exam and mains. Students qualifying in both these exams are thus selected for the post.</br>

<p><h4>IBPS Clerk Vacancy:</h4></p>
The total number vacancies for IBPS Clerk 2019 will be released with its official notification. IBPS introduced 7275 vacancies for IBPS Clerk 2018-19 Recruitment. We expect the vacancy to be of the same order for IBPS Clerk 2019 as well.

<p><h4>IBPS Clerk Recruitment:</h4></p>
The recruitment process of IBPS Clerk CWE occurs in two phases:</br>

1. Preliminary Examination</br>

2. Mains Examination</br>

Students are required to qualify both these exams to get selected for the post of clerical cadre in most of the premier Public Sector Banks. The main thing to note here is that there is no interview process required for the selection of candidate after the mains exam. 100% weightage is given to the result of mains exam result.</br>
<p><h4> IBPS Clerk Exam Pattern:</h4></p>
The IBPS Clerk exam occurs in two stages: Prelims and Mains. Both these papers follow online method of conducting written examination. The structure of the exam is as follow:</br>

Phase-1: IBPS Clerk Preliminary Examination:</br>
 <pre>

S.No.  Name of Tests(Objective)    No. of Questions  Maximum Marks      Duration
1         English Language                30             30            20 minutes
2         Numerical Ability               35             35            20 minutes
3         Reasoning Ability               35             35            20 minutes
                Total                    100             100      Composite time of 1 Hour
</pre>
Phase-1: IBPS Clerk Mains Examination:</br>
<pre>
S.No. Name of Tests(Objective)               No. of Questions        Maximum Marks          Duration
1     Reasoning Ability & Computer Aptitude       50                      60               45 minutes
2            English Language                     40                      40               35 minutes
3          Quantitative Aptitude                  50                      50               45 minutes
4       General/ Financial Awareness              50                      50               35 minutes
                    Total                        190                     200              160 minutes
                  </pre>

            <p><h4>IBPS Clerk 2019 Eligibility Criteria:</h4></p>
The candidate must fulfill the following two criteria to be eligible for the IBPS Clerk Exam 2019:</br>

• Age Limit (As on 01.09.2019): The candidate must be 20 Years to 28 Years. The final criteria for IBPS Clerk Exam 2019 will be released along with the official notification.</br>

• Educational Qualification: A candidate must possess the minimum qualification of Graduation in any discipline from a recognized University or any equivalent qualification recognized as such by the Central Government. The candidate should have passed in English as one of the subjects at SSC/ HSC/Intermediate/ Graduation level. Candidate should possess certificate in proof of passing the qualifying examination.</br>

<p><h4>IBPS Clerk Application Fee</h4></p>
The category wise fee structure for IBPS Clerk online application is given below. Fee/Intimation charges once paid will NOT be refunded on any account nor can it be held in reserve for any other examination or selection. The application fee must be paid online itself. To know more check the complete guide for IBPS Clerk Application</br>

<pre>
Sr. No.             Category             Application Fee
1                  SC/ST/PWD           Rs.100/- (Intimation Charges only)
2               General and Others     Rs. 600/- (App. Fee including intimation charges)
</pre>
                         </p>
                    </li>

                  <?php } ?>


                  <?php
                  if ($id=="SSC CGL") {
                   // code...
                  ?>
                  <li>

                            <a href="booklink.php"><strong><b style="color:darkgoldenrod;font-size:15px">SSC CGL</b></strong></a>
                          <p>
                            Staff Selection Commission - Combined Graduate Level Examination, often referred to as SSC CGL is an examination conducted to recruit staff to various posts in ministries, departments and organisations of the Government of India. It is conducted by the Staff Selection Commission for selecting staff for various Group B and Group C posts. The Staff Selection Commission was established in 1975.</br>

<p><h4>Prerequisites:</p></h4>
Candidates applying for the various posts need to have a bachelor's degree from a recognised university at the time of applying. The age requirements are between 20 to 30 years.The age limits may vary depending on the position applied. For instance, the position for Inspector of Central Bureau of Narcotics which had an age range from 18 to 27 years, was extended to 30 years in September 2018. The application fee for 2017 is Rs. 100. All women candidates and candidates belonging to Scheduled Caste, Scheduled Tribe, Physically Handicapped, and Ex-Servicemen eligible for reservation are exempted from paying application fee.</br>

<p><h4>Structure:</h4></p>
The examination has several Tiers which are conducted over different days with results posted after each Tier. Previous exams also included an interview tier, but following a government order, interviews have been dispensed off for all non-gazetted posts in the central government as of 1 January 2016. A computer proficiency test or a skill test was also added as a Tier for some posts.There are four major tiers for the 2018 exam.</br>

<p><h4>Tier I: Preliminary:</h4></p>
The Tier I exam consists of a written objective multiple-choice exam with four sections, covering the subjects of:</br>

General Intelligence and Reasoning</br>
General Awareness</br>
Quantitative Aptitude</br>
English Comprehension</br>
The exam was typically scored with maximum 50 Marks per section for a total of 200 Marks.The latest versions of this exam such as with 2018 have been conducted online.</br>

Based on results from Tier I, qualified candidates can then take the Tier II and Tier III exams.</br>
<p><h4>Tier II: Mains Exam:</h4></p>
Also known as the Mains Exam, the Tier II exam consists of written objective multiple-choice exam, in four sections (also called "Papers"), covering the subjects of:</br>

Quantitative Aptitude</br>
English Language and Comprehension</br>
Statistics</br>
General Studies, which is subdivided into:</br>
Finance & Accounting</br>
Economics & Governance.</br>
The exam was typically scored with maximum 200 Marks per section. Most positions required the candidate to take only the first two sections (Paper-I: Quantitative Aptitude, Paper-II: English Language and Comprehension), but certain positions require the third or fourth section.The latest versions of this exam such as the 2018 edition have been conducted online.</br>

<p><h4>Tier III exam: Descriptive Paper:</h4></p>
A pen-and-paper "offline" exam in which candidates are to do writing in the form of essay writing and letter writing, and sometimes précis and application writing. The exam can be done in English or Hindi.</br>
<p><h4>Tier IV exam: Data Entry Skill Test / Computer Proficiency Test [edit]</h4></p>
In 2016, a fourth tier was added with two possible exams depending on the positions applied:</br>

Data Entry Speed Test (DEST): candidates enter data at the rate of 2000 key presses in 15 minutes. This is mainly for positions such as Tax Assistant. (Central Excise & Income Tax)</br>
Computer Proficiency Test (CPT): covering the topics of word processing, spreadsheets, and making slides.</br>
<p><h4>Other exams:</h4></p>
Other exams are required for certain positions. The types included:</br>

Personality Test / Interview (discontinued starting 2016)</br>
Physical Endurance Test / Medical Examination for Central Police Organization (CPO)</br>
<p><h4>Eligibility:</h4></p>
Indian National with a bachelor’s degree in relevant discipline</br>
Mode of Application: Online </br>
Exam Mode Online</br>
<p><h4>Duration :</h4></p> 
Tier 1 – 60 minutes</br>

Tier 2 – 120 minutes</br>

Tier 3 – 60 minutes</br>

Tier 4 – 45 minutes</br>
<p><h4>fees:</h4></p>
General: INR 100</br>
Female all Category: NIL</br>
SC : NIL</br>
ST:  NIL</br>
PH : NIL</br>



                         </p>
                    </li>

                  <?php } ?>


                  <?php
                  if ($id=="RRB NTPC") {
                   // code...
                  ?>
                  <li>

                            <a href="booklink.php"><strong><b style="color:darkgoldenrod;font-size:15px">RRB NTPC</b></strong></a>
                          <p>
                             Railway NTPC Recruitment 2019 will be held to recruit 35,208 vacancies for the posts of Non-Technical Popular Categories (NTPC) i.e. Junior Clerk cum Typist, Accounts Clerk cum Typist, Junior Time Keeper, Trains Clerk, Commercial cum Ticket Clerk, Traffic Assistant, Goods Guard, Senior Commercial cum Ticket Clerk, Senior Clerk cum Typist, Junior Account Assistant cum Typist, Senior Time Keeper, Commercial Apprentice and Station Master in various Zonal Railways and Production Units of Indian Railways. Railway Recruitment Board conducts Railway NTPC and other railway examinations giving candidates a golden opportunity to fulfill their dream of joining the prestigious Government Sector (Indian Railways) in India. RRB NTPC 2019 Recruitment is specially for the candidates who are having Graduate Degree from any recognised unversity.  </br>
                             <p><h4> Eligibility:</h4></p>
Qualification for RRB NTPC  12th (+2 Stage) / Any Graduates</br>
Age Limit for RRB NTPC Recruitment 2019 Exam</br>
RRB Vacancy 2019 Age Limit : 18 to 30 Years / 18 to 33 Years</br>
RRB NTPC 2019 Recruitment: Selection Process</br>
<p><h4>Selection for RRB NTPC :</h4></p>
Preliminary Test </br>
Main Test </br>
<p><h4>The recruitment process will involve the following stages of examination:</h4></p>

1st Stage Computer Based Test (CBT)</br>
2nd Stage Computer Based Test (CBT)</br>
Typing Skill Test/Computer Based Aptitude Test (as applicable)</br>
<p><h4>RRB NTPC Exam Pattern 2019 CBT I:</h4></p>
 Total Marks: 100</br>
 Duration:90minutes</br>
Sections:</br>
Mathematics</br>
General Intelligence and Reasoning </br> 
General Awareness</br>
No. of Questions:</br>
Mathematics: 30</br>
General Intelligence and Reasoning : 30</br>
General Awareness :40</br>
<p><h4>RRB NTPC Exam Pattern 2019 CBT II:</h4></p>
 Total Marks: 120</br>
 Duration:90minutes</br>
Sections:</br>
Mathematics</br>
General Intelligence and Reasoning </br> 
General Awareness</br>
No. of Questions:</br>
Mathematics: 35</br>
General Intelligence and Reasoning : 35</br>
General Awareness :50</br>
<p><h4>Typing Skill Test (TST):</h4></p>
Qualifying in nature.
Eight times the number of vacancies will be called for typing test.
The candidates should be able to type 30 words per minute (WPM) in English or 25 WPM in Hindi on Personal Computer only without editing tools and spell check facility.</br>
<p><h4>Document Verification (DV):</h4></p>
Based on the performance of candidates in 2nd Stage CBT and based on the performance of candidates in both 2nd Stage CBT and CBAT/TST (as applicable), candidates equal to the number of vacancies will be called for Document Verification as per their merit and options.</br>
                             <p><h4>Fees:</h4></h4></p>
                              GEN/OBC: Rs. 500/- </br>
                             SC/ST/PWD/Women/Ex-Sm/Transgender/Minorities/Economically Backward : Rs. 250/- </br>




                         </p>
                    </li>

                  <?php } ?>


                  <?php
                  if ($id=="GATE") {
                   // code...
                  ?>
                  <li>

                            <a href="booklink.php"><strong><b style="color:darkgoldenrod;font-size:15px">GATE</b></strong></a>
                          <p>
                            
The Indian Institute of Science (IISc) and seven Indian Institutes of Technology
 (IITs at Bombay, Delhi, Guwahati, Kanpur, Kharagpur, Madras and Roorkee) jointly
 administer the conduct of GATE Exam. The operations related to GATE in 8 zones all
 over India are managed by a Zonal GATE Office at IISc. or IITs. The Organizing Institute (OI)
 is responsible for the end-to-end process and coordination amongst the administering Institutes.
 The Organizing Institute for GATE 2016 was IISc Bangalore, for GATE 2018 was IIT Guwahati & for
 GATE 2019 is IIT Madras.

<p><h4>Highlights of GATE 2019 are:</h4></p>

1.Examinations for all papers would be conducted by an ONLINE Computer Based Test (CBT).
 The online exam will have Multiple Choice Questions (MCQ) and Numerical Questions where 
 answers are to be keyed in by the candidates using virtual keypad</br>
2.GATE 2019 examinations are to be held on February 2-3, 2019 & February 9-10, 2019 
(Saturdays and Sundays only)</br>
3.For GATE 2019 the entire process of filling up application form, uploading of
 certificates/documents etc. is online and the candidates need not send any hard </br>
4.The payment of application fees is online through different modes like net banking or e-challan
 copy of their application form/documents, etc. to any of the IIT/IISc zonal GATE office</br>
5.Candidates have to download their admit cards from GATE 2019 website</br>
6.GATE 2019 score is valid for 3 yrs from the date of Result Announcement</br>
7.A new paper Statistics (ST) is added in GATE 2019</br>
8.Concession on application fees if the candidates apply On or Before ept. 2018</br>
The GATE examination consists of a single online paper of 3-hour duration, in which there will be a total of 65 questions carrying 100 marks.</br>

<p><h4>Section Weightage & Marks:</h4></p>
70% of the total marks is given to the technical section while 15% weightage is given to General Aptitude and Engineering Maths</br>.
<pre>
Total Questions (Total 65)  
Respective Engineering Branch 70 Marks             25 - 1 mark questions 30 - 2 mark questions
Engineering Maths             15 Marks
General Aptitude              15 Marks             Five 1 mark questions Five 2 mark questions
Particulars:
For 1-mark multiple-choice questions, 1/3 marks will be deducted for a wrong answer. Likewise, for 2-mark multiple-choice questions, 2/3 marks will be deducted for a wrong answer. There is no negative marking for numerical answer type questions.</br>
</pre>

<p><h4>Question Types:</h4></p>
(i) Multiple Choice Questions (MCQ) carrying 1 or 2 marks each in all papers and sections. These questions are objective in nature, and each will have a choice of four answers, out of which the candidate has to mark the correct answer(s)</br>

(ii) Numerical Answer/Fill in the blank Questions of 1 or 2 marks each in all papers and sections. For numerical answer questions, choices will not be given. Candidates have to enter the answer (which will be a real number, signed or unsigned, e.g. 25.06, -25.06, 25, -25 etc.) using a virtual keypad. An appropriate range will be considered while evaluating the numerical answer type questions so that the candidate is not penalized due to the usual round-off errors. Design of Questions</br>
The Fill in the Blank Questions usually consist of 35% - 40% of the total weightage.</br>

<p><h4>The questions in a paper may be designed to test the following abilities:</h4></p>

(i) Recall:</br>
These are based on facts, principles, formulae or laws of the discipline of the paper. The candidate is expected to be able to obtain the answer either from his/her memory of the subject or at most from a one-line computation.</br>

(ii) Comprehension:</br>
These questions will test the candidate's understanding of the basics of his/her field, by requiring him/her to draw simple conclusions from fundamental ideas.</br>

(iii) Application:</br>

In these questions, the candidate is expected to apply his/her knowledge either through computation or by logical reasoning.</br>

(iv) Analysis and Synthesis:</br>
In these questions, the candidate is presented with data, diagrams, images etc. that require analysis before a question can be answered. A Synthesisquestion might require the candidate to compare two or more pieces of information. Questions in this category could, for example, involve candidates in recognising unstated assumptions, or separating useful information from irrelevant information.</br>
<p><h4>Fees:</h4></p>
The fees for payment of the GATE exam form is as follows: For males, in General, or OBC, the form is available for Rs. 1500. For females and SC, ST and PWD the form is available at Rs. 750. For international students residing in Dubai and Singapore, the fee is $100.

                         </p>
                    </li>

                  <?php } ?>


                  <?php
                  if ($id=="GRE") {
                   // code...
                  ?>
                  <li>

                            <a href="booklink.php"><strong><b style="color:darkgoldenrod;font-size:15px">GRE</b></strong></a>
                          <p> The GRE General Test is the world’s largest assessment program for graduate admissions. The full form of GRE is Graduate Record Examination. Over a half million individuals take the GRE General Test in over 1,000 test centers in 160 countries every year, and scores are accepted at thousands of graduate programs around the world, for masters and doctoral degrees. More than 1,200 business schools around the world accept the GRE, including top-ranked MBA programs according to The Financial Times, U.S. News & World Report and Bloomberg Businessweek. And a handful of law schools in the US accept GRE scores, including a few of the very best schools: Harvard, Columbia, Georgetown, and Northwestern.</br>
 <p><h4> GRE Exam Eligibility 2019:</h4></p>
The Graduate Record Examination or more commonly referred to as GRE is one of the largest assessment programs for admission to graduate courses worldwide. Students planning to pursue admission to graduate programs abroad are required to undertake the Graduate Record Examination (GRE). There is no prescribed age limit or qualification required for candidates to appear for GRE 2019, however, since GRE is an assessment test for admission to graduate courses, candidates are expected to have successfully completed their undergraduate program. Candidates should note that not all programmes and universities require candidates to have a GRE score for admission to graduate programs. Whether a candidate requires to appear for his GRE is entirely on the discretion of the university and the course he is pursuing.</br>
<p><h4>GRE Scholarships:</h4></p>
The GRE aspirants must note that ETS, the body that conducts GRE does not provide any scholarship even to the top scorers. There is no such thing as GRE scholarship. Scholarships are provided by the graduate schools and GRE score is not the sole criteria for granting financial aid. Your academic background, work or research experience or any other achievements are also considered for awarding a scholarship. So, it doesn’t mean that GRE scores are not important, they are given equal importance with other factors while applying for a scholarship.</br>
<p><h4>GRE Exam Fee:</p></h4>
The application fee for the GRE General Test is $205 worldwide, which would roughly translate to Rs. 14,322 approximately.</br>
GRE Subject Test costs $150 worldwide, which would cost Indian students Rs. 10,480 approximately.</br>
Also, candidates have to pay for special handling requests like:</br>
Late registration fee: $25 Standby testing: $25 Changing the test center: $50</br>
Apart from this, candidates are charged $50 if they want to change a subject in the subject test.</br>
GRE Rescheduling Fees:</br>
Rescheduling fee for China: $53.90</br>
Rescheduling fee for rest of the world: $50</br>
<p><h4> Exam pattern:</p></h4>
The GRE Score can be understood with a section-wise distribution system:</br>
Verbal Reasoning score:  On a 130–170 score scale, in 1-point increments</br>
Quantitative Reasoning score:  On a 130–170 score scale, in 1-point increments</br>
Analytical Writing score: On a 0–6 score scale, in half-point increments</br>
GRE Total Score: On a 260–340 score scale</br>

                         </p>
                    </li>

                  <?php } ?>


                  <?php
                  if ($id=="BITSAT") {
                   // code...
                  ?>
                  <li>

                            <a href="booklink.php"><strong><b style="color:darkgoldenrod;font-size:15px">BITSAT</b></strong></a>
                          <p>BITSAT (short for BITS Admission test) is an online (computer based) entrance examination for admission to integrated first degree programmes of BITS Pilani (Pilani, Goa, Hyderabad campuses). BITSAT is being conducted since 2005 and is one of the most competitive engineering entrance exams in India.</br>

                          <p><h4>Duration of Exam:</h4></p>
                          The exam will be of about 3 hours. Slot: Exam will be conducted in two slots, i.e. 9:00 AM – 12:00 noon and 2:00 PM – 5:00 PM. Type of Question: The questions will be of Multiple Choice Questions (MCQ). Sections: The question paper will be divided into four sections.</br>

                    <p><h4> BITSAT Part I Exam Pattern:</h4></p>
The Part I of the exam will have questions from Physics.</br>
Number of Questions – 40 questions</br>
Nature of Questions – Objective type (MCQs). Each question will have four choices out of which only one choice will be a correct one</br>
Exam Mode – Online (CBT)</br>
Exam Medium – The question papers at all exam centers will be in English only.</br> 
Marking Scheme – Each correct answer fetches 3 marks, while each incorrect answer has a penalty of 1 mark.</br>
                   <p><h4> BITSAT Part II Exam Pattern:</h4></p>
The Part II of the exam will have questions from Chemistry.</br> 
Number of Questions – 40 questions</br> 
Nature of Questions – Objective type (MCQs). Each question will have four choices out of which only one choice will be a correct one</br> 
Exam Mode – Online (CBT)</br> 
Exam Medium – The question papers at all exam centers will be in English only.</br> 
Marking Scheme – Each correct answer fetches 3 marks, while each incorrect answer has a penalty of 1 mark (-1mark).</br> 
                    <p><h4> BITSAT Part III Exam Pattern:</h4></p>
The Part III of the exam will have questions from English and Logical reasoning.</br> 
Number of Questions – English Proficiency: 15 | Logical Reasoning: 10</br> 
Nature of Questions – Objective type (MCQs). Each question will have four choices out of which only one choice will be a correct one</br> 
Exam Mode – Online (CBT)</br> 
Exam Medium – The question papers at all exam centers will be in English only.</br> 
Marking Scheme – Each correct answer fetches 3 marks, while each incorrect answer has a penalty of 1 mark.</br> 
                   <p><h4>  BITSAT Part IV Exam Pattern:</h4></p>
The Part IV of the exam will have questions from Mathematics/ Biology (for B.Pharm).</br> 
Number of Questions – 45 questions</br> 
Nature of Questions – Objective type (MCQs). Each question will have four choices out of which only one choice will be a correct one</br> 
Exam Mode – Online (CBT)</br> 
Exam Medium – The question papers at all exam centers will be in English only.</br>  
Marking Scheme – Each correct answer fetches 3 marks, while each incorrect answer has a penalty of 1 mark.</br> 
<p><h4>BITSAT 2019 Fee:</h4></p>
The BITSAT Application 2019 Fee is divided as the Category wise as the Following:</br>
BITSAT 2019 Application Fee is Rs. 2750 for male candidates and Rs. 2250 for female candidates.</br>
The candidates who have chosen the exam center as Dubai, they will be required to pay the US $60 as Indian Rs. 4000 application fee for both Male and Female.</br>
The fee payment can be done through credit or debit card, net banking and cash payment at ICICI Bank.</br>

                         </p>
                    </li>

                  <?php } ?>


                  <?php
                  if ($id=="SBI PO") {
                   // code...
                  ?>
                  <li>

                            <a href="booklink.php"><strong><b style="color:darkgoldenrod;font-size:15px">SBI PO</b></strong></a>
                          <p>
                            SBI PO exam will be conducted by State Bnak of India (SBI) to select eligible candidates to the post of Probationary Officer. SBI PO is one of the most coveted jobs in Banking industry and a dream job for millions of aspirants across India.
                            SBI PO 2019 Vacancy has been announced along with SBI PO 2019 Notification. The State Bank of India declared a total vacancy of 2000 posts for SBI PO 2019 Exam.</br>
<p><h4>Vacancy (PwD Category):</h4></p>

LD   :  20</br>   
VI    : 20</br> 
HI   :  73</br>  
d & e : 20</br>   
*VI: Vision Impairment</br>

*HI: Hearing Impairment</br>

*LD: Learning Disabilities</br>

<p><h4>Vacancy (All Other Categories):</h4></p>
C &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  V </br>
SC    &nbsp&nbsp&nbsp   300 </br> 
ST    &nbsp&nbsp&nbsp     150 </br>     
OBC   &nbsp&nbsp  540 </br>    
GEN   &nbsp&nbsp   810 </br>  
Total  &nbsp&nbsp  2000 </br>  
*C:Category    
*V:Vacancy </br>
<p><h4>SBI PO Recruitment: </h4></p>
The SBI PO recruitment exam is the most premier among the public-sector bank exams in India. It is considered a little difficult compared to the bank entrance exams conducted by IBPS. The recruitment process for Probationary Officers at SBI consists of 3 stages:</br>

1. Preliminary Examination</br>

2. Main Examination</br>

3. GD/Interview</br>

<p><h4>SBI PO Eligibility Criteria 2019:</h4></p>
The candidate must fulfill the following two criteria to be eligible for the SBI PO Exam 2019:</br>

• Age Limit: The candidate must be 21 Years to 30 Years as on 01.04.2019 i.e. candidates must have been born between 02.04.1989 and 01.04.1998 (both dates inclusive)</br>

• Educational Qualification: The candidate must be a graduate in any discipline from a recognized University or any equivalent qualification recognized as such by the Central Government. Those who are in the Final year/Semester of their Graduation may also apply provisionally subject to the condition that, if called for interview, they must produce proof of having passed the graduation examination on or before 01.07.2019. Candidates with Integrated Dual Degree (IDD) certificate must ensure that the date of passing the IDD is on or before 31.08.2019. Candidates with Chartered Accountant certification may also apply.</br>

 <p><h4>Number of Attempts:</h4></p>
  The maximum number of chances are fixed for each category. Candidates who have used up all the chances are not eligible to apply. Appearing in Preliminary Exam is not counted as an attempt but appearing in Mains Exam is counted.</br>

Category   &nbsp&nbsp&nbsp&nbsp  Number of Chances</br>
General           &nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp &nbsp       4</br>
General (PWD)    &nbsp&nbsp  &nbsp&nbsp              7</br>
OBC/ OBC(PWD)    &nbsp&nbsp               7</br>
SC/SC(PWD) &nbsp&nbsp  &nbsp&nbsp   No restriction</br>
ST/ST(PWD) &nbsp&nbsp  &nbsp&nbsp   No restriction</br>
<p><h4>Exam pattern for prelims:</h4></p>
Duration of Examination :1 hour</br>
Types of questions : Multiple Choice Questions</br>
Maximum Marks: 100 marks</br>
Total number of questions :100 questions</br>
Marking scheme : 1 mark each for every correct answer</br>
Negative Marking:  1/3 marks will be deducted for every wrong answer</br>
Mode of examination :English/ Hindi Language</br>
Subjects:</br>
<pre>
Section Name      No. of Questions  Total Marks
English Language        30             30
Quantitative Ability    35             35
Reasoning Ability       35             35
</pre>
<p><h4>Exam pattern for mains:</h4></p>
Objective test:</br>
Exam-duration :3 hours or 180 minutes</br>
Total Questions :155 questions</br> 
Maximum marks: 200 marks 2</br>
Negative Marking : 1/3 marks will be deducted for every wrong answer</br> 
Exam-mode: Hindi and English (Hindi will not be applicable for English language section)</br> 
Descriptive test:</br>
Exam-duration: 30 minutes</br>
Total Questions :Letter Writing/ Essay Writing</br>
Maximum marks: 25 marks</br>
Negative Marking : NA</br>
Exam-mode:English</br>
subjects:</br>
<pre>
Section                  Total Questions Maximum Marks Duration (minutes)
Reasoning & Computer Aptitude   45           60         60
Data Analysis & Interpretation  35           60         45
General Awareness 
(Economy & Banking)             40           40         35
English Language                35           40         40
</pre>


<p><h4>SBI PO Application Fee:</h4></p>
The category wise fee structure for SBI PO online application is given below. Fee/Intimation charges once paid will NOT be refunded on any account nor can it be held in reserve for any other examination or selection. The application fee must be paid online itself. To know more check the complete guide for SBI PO Application</br>

Sr.    Category     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    Application Fee</br>
1         SC/ST/PWD &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp         Rs.125/- (Intimation Charges only)</br>
2        General and Others &nbsp&nbsp&nbsp&nbsp   Rs. 750/- (App. Fee including intimation charges)</br>


                         </p>
                    </li>

                  <?php } ?>


                  <?php
                  if ($id=="CAT") {
                   // code...
                  ?>
                  <li>

                            <a href="booklink.php"><strong><b style="color:darkgoldenrod;font-size:15px">RBI</b></strong></a>
                          <p>CAT or Common Admission Test, the most popular national level management entrance exam will be conducted by Indian Institute of Management Kozhikode for admission to 20 IIMs and more than 100 B-schools across India. The notification for the same will be released on July 28, which is the last Sunday of July. Around 2.5 lakh MBA aspirants appear for the test every year. CAT 2019 will be a 3-hour computer-based test consisting of 100 Multiple Choice Question (MCQ) and Non-MCQ type questions. There are likely to be three sections, namely Quantitative Ability (QA), Verbal Ability and Reading Comprehension (VARC) and Data Interpretation & Logical Reasoning (DILR). CAT 2019 will tentatively be held in last week of November in two slots - Forenoon (9 AM to 12 PM) and Afternoon (2:30 PM to 5:30 PM).</br>

The result of CAT 2019 will be announced in first week of January, and the selection procedure initiates with the release of CAT cutoff. Each of the participating institutes of CAT 2019 will execute their individual admission process, however, the shortlisting would be done based on CAT 2019 cutoff. Next, the shortlisted candidates will be called for further selection rounds, namely, Group Discussion (GD) or Writing Ability Test (WAT) or both and Personal Interview (PI) rounds for the final admission. Additionally, the newly formed IIMs will administer the Common Admission Process (CAP) where the shortlisted aspirants from all participating IIMs need to appear for WAT and PI rounds.</br>

<p><h4>CAT 2019 Eligibility Criteria:</h4></p>
IIM Calcutta has formulated the CAT 2019 eligibility criteria. As per the official eligibility criteria of CAT 2019, a candidate should meet the following parameters-</br>

Obtain a Bachelor’s degree in any discipline with minimum 50 per cent marks or equivalent CGPA from a recognised university or educational institute.</br>
The reserved category candidates, such as Scheduled Caste (SC), Scheduled Tribe (ST) and Persons with Disability (PWD), should secure minimum 45 percentage in Bachelor’s Degree in any discipline from a recognised university or educational institute.</br>
The final year students of Bachelor’s degree/equivalent qualification exam and those who have completed degree course and are awaiting results can apply for CAT 2018 as well.</br>
Aspirants with any professional degree with requisite percentage of marks will be eligible to appear for the exam.
Age Limit: There is no limit pertaining to age for appearing in CAT.</br>
<p><h4>Exam pattern:</h4></p>
<pre>
S. No                        Particulars                                Details 

1                       Duration of the CAT 2019 entrance exam         3 hours 

2                            Mode of CAT 2019                        Computer-based exam 

3                          Total Number of questions                    100

4                        Duration of each section of CAT 2019          1hour
 
5                        Negative marks for every wrong answer          -1

6                           Marks for each question                      3                                        
</pre>
 <pre>
 S.No 

Section                          Total number of questions asked in each section    Total marks     Duration 

1.Quantitative Ability (QA)                           34                                 102          60min                

2.Verbal Ability & 
Reading Comprehension (VARC)                          34                                 102          60min                

3.Data Interpretation & Logical Reasoning (DILR)      32                                 96           60min
</pre>
<p><h4>Fees:</h4></p>
Image result for cat exam fees
Last year, the application fee of CAT had been revised to Rs. 1900 for General/ NC-OBC candidates and Rs. 950 for SC, ST & PWD candidates. Earlier the CAT registration fee was Rs. 1800 and Rs. 900 respectively.       



                         </p>
                    </li>

                  <?php } ?>


                  <?php
                  if ($id=="SSC CHSL") {
                   // code...
                  ?>
                  <li>

                            <a href="booklink.php"><strong><b style="color:darkgoldenrod;font-size:15px">SSC CHSL</b></strong></a>
                          <p>Staff Selection Commission conducts SSC CHSL to recruit candidates for the posts of Postal Assistants/Sorting Assistants (PA/SA), Data Entry Operator (DEO), Lower Divisional Clerk (LDC) and Court Clerk in various departments and ministries of government of India.</br>
The exam is conducted in three tiers- Tier 1, Tier 2 and Tier 3. </br>
The Tier 1 of the exam is scheduled from July 1– 26, 2019 in online mode across 9 regions in India.</br>
SSC CHSL Syllabus is based on the topics covered in 10+2 standard.</br>
Tier 1 is an objective type computer-based exam.SSC CHSL 2019 Vacancies</br>
 Tier 2 is a descriptive exam held in pen and paper mode while Tier 3 of the exam is a skill test/typing test.
Candidates quaifying in Tier 1 of the exam will have to appear in Tier 2.</br> 
<p><h4>Vacancies:</h4></p>
The tentative vacancies in SSC CHSL 2019 for the posts namely, LDC, PA/SA and DEO counts upto 3259.</br> 
Lower Divisional Clerk: 898 vacancies</br> 
Postal Assistant: 2359 vacancies</br> 
Data Entry Operator: 2 vacancies</br> 
<p><h4>Pay Scale of the Posts:</h4></p>
Lower Division Clerk (LDC)/ Junior Secretariat Assistant (JSA): Pay Band -1 (Rs. 5200-20200), Grade Pay: Rs. 1900 (pre-revised)</br> 
Postal Assistant (PA)/ Sorting Assistant (SA): Pay Band -1 (Rs. 5200-20200), Grade Pay: Rs. 2400 (pre-revised)</br> 
Data Entry Operator(DEO): Pay Band-1 (Rs. 5200-20200), Grade Pay: Rs. 2400 (pre-revised) and</br> 
Data Entry Operator Grade ‘A’: Pay Band-1 (Rs. 5200-20200), Grade Pay: Rs. 2400 (pre-revised).</br> 
<p>><h4>SSC CHSL 2019 Eligibility</h4></p>
Before applying for the recuitment exam candidates must make sure that they fulfill eligibility criteria laid down by SSC as only eligible candidates will be allowed to appear for the exam. The eligibility criteria is as follows:</br> 

Nationality: Candidate must be an Indian Citizen or should belong to Nepal/ Bhutan or Tibetan refugee who came to India before January 1, 1962 to settle in India permanently. </br> 

Educational Criteria: must have cleared or appearing class 12 or its equivalent from a recognized educational board or University.</br> 

Age Criteria: Age must be between 18 – 27 years as on August 1, 2019, however, certain reserved category candidates can claim for reservation according to the Indian government norms.</br>
<p><h4>SSC CHSL Exam Pattern:</h4></p> 
Aspirants can start making preparation strategy in accordance to the examination pattern for a better performance. Below is the brief of SSC CHSL 2019 Exam Pattern:</br>

The exam will be conducted in three stages- Tier 1(Computer Based Test), Tier 2 (Written Test) and Tier 3 (Skill Based Test)</br>
Tier 1 will comprise 100 MCQs to be completed in 60 minutes. </br>
Tier 2 will have questions on essay or letter writing to be completed in 60 minutes’ time.</br>
The next stage i.e. Tier 3 will be a skill based test for selected candidates.</br>
1/4th marks of the total marks allotted to the question will be deducted as penalty for every wrong answer in Tier 1 exam.</br>

<pre>
Tier              Type                              Mode
Tier 1  Objective Multiple Choice           Computer Based (online)
Tier 2  Descriptive Paper in English/Hindi  Pen and Paper mode
Tier 3  Skill Test/ Typing Test             Wherever Applicable
</pre>

<p><h4>Detailed SSC CHSL Exam Pattern is as follows:</h4></p>
<pre>
Components              Tier 1                      Tier 2
Exam Mode               Online                      Offline
Question type           Objective                  Descriptive
Exam duration           60 Minutes                  60 Minutes
Marks                     200                         100
Language Mode         English and Hindi           English and Hindi
Negative marking    0.50 for each wrong attempt        NO
subjects             English,General awareness,  letter and essay writing 
                       Quantitative aptitude
                     and general intelligence
</pre>
Tier 3 exam will be skill based test where typing and data entry speed is analyzed of the prospective candidates:
Typing Test: For English, typing speed of 35 words per minute is required, For Hindi, typing speed of 30 words per minute is mandatory. Typing test will be applicable for Postal Assistant/Sorting Assistant, LDC, and Court Clerk posts.
Skill Test: Data Entry Speed of 8,000 key depressions per hour on the computer. Skill test is conducted for Data Entry Operator post.</br>
<p><h4>Application fee and mode of fee payment :</h4></p>
Fee payable: Rs. 100/-(Rupees One Hundred only).
Fee can be paid through SBI Challan/ SBI Net Banking or by using Visa/ Mastercard/ Maestro Credit/ Debit card.
Women candidates of all categories and candidates belonging to Scheduled Caste, Scheduled Tribe, Persons with Disability (PwD) and Ex-servicemen (ExS) eligible for reservation are exempted from payment of fee. Applications received without the prescribed fee shall not be considered and summarily rejected. No representation against such rejection will be entertained. Fee once paid shall not be refunded under any circumstances nor will it be adjusted against any other examination or selection.
Candidates who are not exempted from fee payment must ensure that their fee has been deposited with SSC. If the fee is not received by SSC, status of Application Form is shown ‘Incomplete’ and this information is printed on the top of the Application Form. Further, such status can be verified at ‘Check your Application Status Here” tab provided at http://www.ssconline.nic.in. Such applications which remain incomplete due to non-receipt of fee will be SUMMARILY REJECTED and no request for consideration of such applications and fee payment after the period specified in the Notice of Examination shall be entertained.

                         </p>
                    </li>

                  <?php } ?>


                  <?php
                  if ($id=="INCOME TAX") {
                   // code...
                  ?>
                  <li>

                            <a href="booklink.php"><strong><b style="color:darkgoldenrod;font-size:15px">INCOME TAX</b></strong></a>
                          <p><h4>Description  Details:</h4></p>
Job Designation :Inspector of Income Tax, Income Tax Officer, MTS & Others</br>
No. of Vacancies: 20,750</br>
<p><h4>Selection process:</h4></p>
The Selection process for the applicants who have applied for the posts of Inspector of Income Tax, Income Tax Officer, Tax Assistant, MTS & Others will be based on the following steps:</br>
1.Written Examination</br>
2.Interview</br>
<p><h4>Exam Pattern 2019:</h4></p>
<pre>
Part                 Exam Type                 Subjects                  Marks               Time Duration
I                  Objective Type       Income Tax Law & Computation      150                    3 Hrs
                                            Book-Keeping                  100                    2 Hrs
                                             Allied Laws                  100                    2 Hrs
                                           Office Procedure               100                    2 Hrs
II                Subjective Type             Hindi                        50                    1 Hrs
</pre>
For the Income Tax Officer Posts, there will be two parts-</br>
Part-I Will be having four Sections.</br>
Each Section having Respective Time Duration.</br>
The Above Mentioned details are only for Reference.</br>
The details are Tentative and will be updated if the Board makes any changes.</br>
<p><h4>Income Tax Assistant and MTS Syllabus & Exam Pattern 2019:</h4></p>
<pre>
Paper Exam    Type              Topics                     TimeDuration
Paper-I     Objective   General Intelligence & Reasoning   2 Hrs
                          Numerical Aptitude
                           General English
                          General Awareness
Paper-II   Descriptive     Short Essay/Letter              30 Mins
                               Total                         200
</pre>
For the posts of Income-tax assistant and MTS Examination, there will two papers-</br>
For Paper I there will be 4 sections and it will be of Objective Type</br>
Paper II will be a Descriptive Type that will comprise of Short Essay or Letter Writing.</br>


                         </p>
                    </li>

                  <?php } ?>


                  <?php
                  if ($id=="IELTS") {
                   // code...
                  ?>
                  <li>

                            <a href="booklink.php"><strong><b style="color:darkgoldenrod;font-size:15px">IELTS</b></strong></a>
                          <p>
                            IELTS, the International English Language Testing System, is designed to assess the language ability of candidates who need to study or work where English is used as the language of communication. IELTS is required for entry to university in the UK and other countries.
IELTS is recognised by universities and employers in many countries, including Australia, Canada, Ireland, New Zealand, the UK and the USA. It is also recognised by professional bodies, immigration authorities and other government agencies. 
More than 2 million people a year take the test.</br>
                                   
<p><h4>IELTS Test Pattern:</h4></p>
IELTS Syllabus includes different sections, Listening, Reading, Writing and Speaking. The complete test duration is 2 hours and 45 minutes.</br>

Listening: The total length of this section is 30 minutes and it is divided into four parts candidates have to answer different types of 40 questions.</br>
Reading: The reading section comprises of three texts of general interest that deals with issues which are suitable for candidates going to pursue post-graduate or undergraduate program. Total time for this section is 30 minutes and it comprises of almost 40 questions.</br>
Writing: The duration of this section is 60 minutes and comprises of two questions where candidates are expected to write a short essay of a minimum of 250 words. In addition to this, students are given a data, table, or diagram which the candidates have to explain in their own words.</br>
Speaking: The total time of this section varies from 11 to 14 minutes and candidates also have to give a face-to-face interview. With the help of this section, the candidates are checked whether they can communicate effectively in the country where they have applied.</br>
<p><h4>Fee:</h4></p>
The IELTS test fee in India differs as per the test type. Please refer below table for detailed information on IELTS test:</br> 
<pre>
Test Type                    Cost (INR)
Computer-delivered IELTS      13250
IELTS for UKVI                18500
Life Skills                   13850
Pen and paper based IELTS     13250
</pre>



                         </p>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Survey Form</title>
</head>
<body>
    <br>
    
    <div class="grid-container full fluid">

        <div class="head">Survey Form</div>

        <br>

        <img src="includes/icon.png" alt="Form Icon">

        <br><br>
        
        <div class="intro">
            <div class="grid-x grid-padding-x">
                <div class="cell">
                    <p>
                        We are students from PLMun CITCS CS-4C, conducting a study about <b>PLMUN CITCS STUDENT'S PERCEPTION
                        IN FACE TO FACE AND ONLINE LEARNING FOR QUALITY EDUCATION.</b> The information given by the 
                        respondents is confidential. <b>PUTTING YOUR NAME ON THIS QUESTIONNAIRE IS OPTIONAL.</b> <br><br>

                        This survey is also voluntary. Declining to participate will in no way affect your status
                        in your respective class or the university. <br><br>

                        Should you have any questions regarding this survey, please contact Mr. William N. Navarro II,
                        CS4C, wnavarro37@gmail.com (+63) 931-7188601 <br><br>

                        Your personal opinions are very helpful and appreciated. Thank you for your time! <br>
                    </p>
                </div>
            </div>
        </div>
        
        <hr class="hra">

        <br>

        <form action="process/insert.php" method="POST">
            <div class="grid-x grid-padding-x">
                <div class="cell medium-6 large-8">
                    <label for="rname">Name:</label>
                    <input type="text" name="rname" placeholder="Name (Optional)">
                </div>

                <div class="cell medium-6 large-4">
                    <label>Age:</label>
                    <input type="number" name="age" placeholder="Age" required="required">
                </div>
            </div>

            <div class="grid-x grid-padding-x">
                <div class="cell medium-6 large-8">
                    <label>Course:</label>
                    <select name="course">
                    <option value="ACT">ACT</option>
                    <option value="BSCS">BSCS</option>
                    <option value="BSIT">BSIT</option>
                    </select>
                </div>
            </div>

            <div class="grid-x grid-padding-x">
                <div class="cell medium-6 large-8">
                    <label>Year Level:</label>
                    <select name="lvl">
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                    </select>
                </div>
            </div>

            <br><br><br><br>

            <div class="grid-x grid-padding-x">
                <div class="cell">
                <h5>Traditional/ Face-To-Face Learning Environment:</h5>
                </div>
            </div> 

            <br>

            <div class="table-scroll">
                <div class="grid-x grid-padding-x">
                    <div class="cell">
                        <table class="hover">
                            <thead>
                                <tr>
                                    <th width="75%"></th>
                                    <th width="5%">Strongly Disagree</th>
                                    <th width="5%">Disagree</th>
                                    <th width="5%">Neutral (N/A)</th>
                                    <th width="5%">Agree</th>
                                    <th width="5%">Strongly Agree</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                <tr>
                                    <td>The learning environment helps me comprehend the course materials.</td>
                                    <td><input type="radio" name="question1" id="question1" value="SD" required="required"></td>
                                    <td><input type="radio" name="question1" id="question1" value="D"></td>
                                    <td><input type="radio" name="question1" id="question1" value="N"></td>
                                    <td><input type="radio" name="question1" id="question1" value="A"></td>
                                    <td><input type="radio" name="question1" id="question1" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>The learning environment contributes to my overall satisfaction with the course.</td>
                                    <td><input type="radio" name="question2" id="question2" value="SD" required="required"></td>
                                    <td><input type="radio" name="question2" id="question2" value="D"></td>
                                    <td><input type="radio" name="question2" id="question2" value="N"></td>
                                    <td><input type="radio" name="question2" id="question2" value="A"></td>
                                    <td><input type="radio" name="question2" id="question2" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>The learning environment helps me to learn course materials better.</td>
                                    <td><input type="radio" name="question3" id="question3" value="SD" required="required"></td>
                                    <td><input type="radio" name="question3" id="question3" value="D"></td>
                                    <td><input type="radio" name="question3" id="question3" value="N"></td>
                                    <td><input type="radio" name="question3" id="question3" value="A"></td>
                                    <td><input type="radio" name="question3" id="question3" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>A classroom environment makes it easier for me to communicate with my instructor and classmates.</td>
                                    <td><input type="radio" name="question4" id="question4" value="SD" required="required"></td>
                                    <td><input type="radio" name="question4" id="question4" value="D"></td>
                                    <td><input type="radio" name="question4" id="question4" value="N"></td>
                                    <td><input type="radio" name="question4" id="question4" value="A"></td>
                                    <td><input type="radio" name="question4" id="question4" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>Face-to-face instruction would help me learn more.</td>
                                    <td><input type="radio" name="question5" id="question5" value="SD" required="required"></td>
                                    <td><input type="radio" name="question5" id="question5" value="D"></td>
                                    <td><input type="radio" name="question5" id="question5" value="N"></td>
                                    <td><input type="radio" name="question5" id="question5" value="A"></td>
                                    <td><input type="radio" name="question5" id="question5" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>Face-to-face instruction would help me understand the course concepts better.</td>
                                    <td><input type="radio" name="question6" id="question6" value="SD" required="required"></td>
                                    <td><input type="radio" name="question6" id="question6" value="D"></td>
                                    <td><input type="radio" name="question6" id="question6" value="N"></td>
                                    <td><input type="radio" name="question6" id="question6" value="A"></td>
                                    <td><input type="radio" name="question6" id="question6" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>Face-to-face instruction would be a better way for me to learn the content/course materials.</td>
                                    <td><input type="radio" name="question7" id="question7" value="SD" required="required"></td>
                                    <td><input type="radio" name="question7" id="question7" value="D"></td>
                                    <td><input type="radio" name="question7" id="question7" value="N"></td>
                                    <td><input type="radio" name="question7" id="question7" value="A"></td>
                                    <td><input type="radio" name="question7" id="question7" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>The face-to-face learning environment would contribute to my overall satisfaction of the course.</td>
                                    <td><input type="radio" name="question8" id="question8" value="SD" required="required"></td>
                                    <td><input type="radio" name="question8" id="question8" value="D"></td>
                                    <td><input type="radio" name="question8" id="question8" value="N"></td>
                                    <td><input type="radio" name="question8" id="question8" value="A"></td>
                                    <td><input type="radio" name="question8" id="question8" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>Being in a class with face-to-face communication would improve my ability to learn.</td>
                                    <td><input type="radio" name="question9" id="question9" value="SD" required="required"></td>
                                    <td><input type="radio" name="question9" id="question9" value="D"></td>
                                    <td><input type="radio" name="question9" id="question9" value="N"></td>
                                    <td><input type="radio" name="question9" id="question9" value="A"></td>
                                    <td><input type="radio" name="question9" id="question9" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>I would prefer face-to-face instruction.</td>
                                    <td><input type="radio" name="question10" id="question10" value="SD" required="required"></td>
                                    <td><input type="radio" name="question10" id="question10" value="D"></td>
                                    <td><input type="radio" name="question10" id="question10" value="N"></td>
                                    <td><input type="radio" name="question10" id="question10" value="A"></td>
                                    <td><input type="radio" name="question10" id="question10" value="SA"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <br><br><br><br>

            <div class="grid-x grid-padding-x">
                <div class="cell">
                <h5>Online Learning Environment:</h5>
                </div>
            </div> 

            <br>

            <div class="table-scroll">
                <div class="grid-x grid-padding-x">
                    <div class="cell">
                        <table class="hover">
                            <thead>
                                <tr>
                                    <th width="75%"></th>
                                    <th width="5%">Strongly Disagree</th>
                                    <th width="5%">Disagree</th>
                                    <th width="5%">Neutral (N/A)</th>
                                    <th width="5%">Agree</th>
                                    <th width="5%">Strongly Agree</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                <tr>
                                    <td>The learning environment helps me comprehend the course materials.</td>
                                    <td><input type="radio" name="question11" id="question11" value="SD" required="required"></td>
                                    <td><input type="radio" name="question11" id="question11" value="D"></td>
                                    <td><input type="radio" name="question11" id="question11" value="N"></td>
                                    <td><input type="radio" name="question11" id="question11" value="A"></td>
                                    <td><input type="radio" name="question11" id="question11" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>The learning environment contributes to my overall satisfaction with the course.</td>
                                    <td><input type="radio" name="question12" id="question12" value="SD" required="required"></td>
                                    <td><input type="radio" name="question12" id="question12" value="D"></td>
                                    <td><input type="radio" name="question12" id="question12" value="N"></td>
                                    <td><input type="radio" name="question12" id="question12" value="A"></td>
                                    <td><input type="radio" name="question12" id="question12" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>The learning environment helps me to learn course materials better.</td>
                                    <td><input type="radio" name="question13" id="question13" value="SD" required="required"></td>
                                    <td><input type="radio" name="question13" id="question13" value="D"></td>
                                    <td><input type="radio" name="question13" id="question13" value="N"></td>
                                    <td><input type="radio" name="question13" id="question13" value="A"></td>
                                    <td><input type="radio" name="question13" id="question13" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>I am more comfortable responding to questions by email than orally.</td>
                                    <td><input type="radio" name="question14" id="question14" value="SD" required="required"></td>
                                    <td><input type="radio" name="question14" id="question14" value="D"></td>
                                    <td><input type="radio" name="question14" id="question14" value="N"></td>
                                    <td><input type="radio" name="question14" id="question14" value="A"></td>
                                    <td><input type="radio" name="question14" id="question14" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>An online environment makes it easier for me to communicate with my instructor and classmates.</td>
                                    <td><input type="radio" name="question15" id="question15" value="SD" required="required"></td>
                                    <td><input type="radio" name="question15" id="question15" value="D"></td>
                                    <td><input type="radio" name="question15" id="question15" value="N"></td>
                                    <td><input type="radio" name="question15" id="question15" value="A"></td>
                                    <td><input type="radio" name="question15" id="question15" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>My technical skills (email, internet) have improved since taking this course.</td>
                                    <td><input type="radio" name="question16" id="question16" value="SD" required="required"></td>
                                    <td><input type="radio" name="question16" id="question16" value="D"></td>
                                    <td><input type="radio" name="question16" id="question16" value="N"></td>
                                    <td><input type="radio" name="question16" id="question16" value="A"></td>
                                    <td><input type="radio" name="question16" id="question16" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>Access to the internet/email makes it easier to communicate with my classmates.</td>
                                    <td><input type="radio" name="question17" id="question17" value="SD" required="required"></td>
                                    <td><input type="radio" name="question17" id="question17" value="D"></td>
                                    <td><input type="radio" name="question17" id="question17" value="N"></td>
                                    <td><input type="radio" name="question17" id="question17" value="A"></td>
                                    <td><input type="radio" name="question17" id="question17" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>The use of technology interferes with my ability to accomplish the required coursework.</td>
                                    <td><input type="radio" name="question18" id="question18" value="SD" required="required"></td>
                                    <td><input type="radio" name="question18" id="question18" value="D"></td>
                                    <td><input type="radio" name="question18" id="question18" value="N"></td>
                                    <td><input type="radio" name="question18" id="question18" value="A"></td>
                                    <td><input type="radio" name="question18" id="question18" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>Access to the internet/email makes it easier to communicate with my instructor.</td>
                                    <td><input type="radio" name="question19" id="question19" value="SD" required="required"></td>
                                    <td><input type="radio" name="question19" id="question19" value="D"></td>
                                    <td><input type="radio" name="question19" id="question19" value="N"></td>
                                    <td><input type="radio" name="question19" id="question19" value="A"></td>
                                    <td><input type="radio" name="question19" id="question19" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>I value the use of technology for this course.</td>
                                    <td><input type="radio" name="question20" id="question20" value="SD" required="required"></td>
                                    <td><input type="radio" name="question20" id="question20" value="D"></td>
                                    <td><input type="radio" name="question20" id="question20" value="N"></td>
                                    <td><input type="radio" name="question20" id="question20" value="A"></td>
                                    <td><input type="radio" name="question20" id="question20" value="SA"></td>
                                </tr>

                                <tr>
                                    <td>I value the online learning environment more than a face to face format.</td>
                                    <td><input type="radio" name="question21" id="question21" value="SD" required="required"></td>
                                    <td><input type="radio" name="question21" id="question21" value="D"></td>
                                    <td><input type="radio" name="question21" id="question21" value="N"></td>
                                    <td><input type="radio" name="question21" id="question21" value="A"></td>
                                    <td><input type="radio" name="question21" id="question21" value="SA"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <br><br><br><br>

            <div class="grid-x grid-padding-x">
                <div class="cell">
                    <h5>Comments and Recomendation:</h5>
                    <textarea name="comments" id="comments" rows="8" placeholder="(Optional)"></textarea>
                </div>
            </div>

            <hr class="hrb">

            <div class="grid-x grid-padding-x">
                <div class="cell">
                    <input type="submit" class="button" value="submit">
                </div>
            </div>
        </form>
    </div>
    
    <br>
    
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/js/foundation.min.js" crossorigin="anonymous"></script>
</body>
</html>